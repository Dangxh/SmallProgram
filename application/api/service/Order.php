<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/25
 * Time: 0:16
 */

namespace app\api\service;


use app\api\model\Product;
use app\lib\exception\OrderException;

class Order
{
    //订单的商品列表，从客户端传递过来的products参数
    protected $oProducts;

    //真实的商品信息(包括库存量)
    protected $products;

    protected $uid;
    public function place($uid, $oProducts){
        //oProducts和products作对比
        //products从数据库中查询出来
        $this->oProducts = $oProducts;
        $this->products = $this->getProductsByOrder($oProducts);
        $this->uid = $uid;
        $status = $this->getOrderStatus();
        if(!$status['pass']){
            $status['order_id'] = -1;
            return $status;
        }

        //开始创建订单

    }

    //循环订单内的商品，确定是否符合下单要求
    private function getOrderStatus(){
        $status = [
            'pass' => true,
            'orderPrice' => 0,
            'pStatusArray' => []
        ];
        foreach ($this->oProducts as $oProduct){
            $pStatus = $this->getProductStatus(
                $oProduct['product_id'], $oProduct['count'], $this->products
            );
            if(!$pStatus['haveStock']){
                $status['pass'] = false;
            }
            $status['orderPrice'] += $pStatus['totalPrice'];
            array_push($status['pStatusArray'], $pStatus);
        }
        return $status;
    }

    private function getProductStatus($oPID, $oCount, $products){

        $pIndex = -1;

        $pStatus = [
            'id' => null,
            'haveStock' => false,
            'count' => 0,
            'name' => '',
            'totalPrice' => 0
        ];

        for($i = 0; $i <= count($products); $i ++){
            if($oPID == $products[$i]['id']){
                $pIndex = $i;
            }
        }

        if($oPID == -1){
            //客户端传递的product_id有可能不存在
            throw new OrderException([
                'msg' => 'id为'.$oPID.'商品不存在，创建订单失败'
            ]);
        }else{
            $product = $products[$pIndex];
            $pStatus['id'] = $products['id'];
            $pStatus['count'] = $oCount;
            $pStatus['totalPrice'] = $product['price'] * $oCount;
            if($product['stock'] - $oCount >= 0){
                $pStatus['haveStock'] = true;
            }
        }
        return $pStatus;
    }

    //根据订单信息查找真实的商品信息
    private function getProductsByOrder($oProducts){
//        $oPIDs = [];
//        foreach ($oProducts as $item){
//            array_push($oPIDs, $item['product_id']);
//        }
        $oPIDs = array_column($oProducts, 'product_id');
        $products = Product::all($oPIDs)
            ->visible(['id', 'price', 'stock', 'name', 'main_img_url'])
            ->toArray();
        return $products;
    }
}