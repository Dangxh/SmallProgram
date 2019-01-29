<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/1/26
 * Time: 12:37
 */

namespace app\api\model;


use think\Db;

class Banner
{
    public static function getBannerById($id){
        //TODO:根据Banner ID号获取Banner信息
//        $result = Db::query('select * from banner_item where banner_id=?', [$id]);
        $result = Db::table('banner_item')->where('banner_id', '=', $id)->select();
        return $result;
    }
}