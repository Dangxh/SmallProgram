<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/1/26
 * Time: 12:37
 */

namespace app\api\model;


class Banner extends BaseModel
{
    protected $hidden = ['update_time', 'delete_time'];

    public function items(){
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    public static function getBannerById($id){
        //TODO:根据Banner ID号获取Banner信息
        //get find all select
//        $result = Db::query('select * from banner_item where banner_id=?', [$id]);
//        $result = Db::table('banner_item')->where('banner_id', '=', $id)->select();
//        $result = Db::table('banner_item')
//            ->where(function($query) use ($id){
//                $query->where('banner_id', '=', $id);
//            })
//            ->select();
//        return $result;
        $banner = self::with(['items', 'items.img'])->find($id);
        return $banner;
    }
}