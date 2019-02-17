<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/16
 * Time: 23:45
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden = ['delete_time', 'topic_img_id', 'update_time', 'head_img_id'];

    public function topicImg(){
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function headImg(){
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }

    public function products(){
        return $this->belongsToMany('Product', 'theme_product', 'product_id', 'theme_id');
    }

    public static function getThemeWithProducts($id){
        $theme = self::with('products,topicImg,headImg')
            ->find($id);
        return $theme;
    }
}