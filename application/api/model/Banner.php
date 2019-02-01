<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/1/26
 * Time: 12:37
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    public static function getBannerById($id){
        //TODO:根据Banner ID号获取Banner信息
//        $result = Db::query('select * from banner_item where banner_id=?', [$id]);
//        $result = Db::table('banner_item')->where('banner_id', '=', $id)->select();
        $result = Db::table('banner_item')
            ->where(function($query) use ($id){
                $query->where('banner_id', '=', $id);
            })
            ->select();
        return $result;
    }
}