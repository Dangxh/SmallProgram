<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/21
 * Time: 12:37
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = ['img_id', 'delete_time', 'product_id'];

    public function imgUrl(){
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}