<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/16
 * Time: 23:44
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = ['delete_time', 'main_img_id', 'pivot', 'from', 'category_id', 'create_time', 'update_time'];

    public function getMainImgUrlAttr($value,$data){
        return $this->prefixImgUrl($value,$data);
    }

    public static function getMostRecent($count){
        $products = self::limit($count)
            ->order('create_time desc')
            ->select();
        return $products;
    }

    public static function getProductByCategoryID($categoryID){
        $products = self::where('category_id', '=', $categoryID)
            ->select();
        return $products;
    }
}