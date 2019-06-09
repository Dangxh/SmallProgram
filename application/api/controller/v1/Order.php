<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/22
 * Time: 15:12
 */

namespace app\api\controller\v1;


use app\api\service\Token as TokenService;
use app\api\validate\OrderPlace;

class Order extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'placeOrder']
    ];

    public function placeOrder(){
        (new OrderPlace())->goCheck();
        $products = input('post.products/a');
        $uid = TokenService::getCurrentUid();
    }
}