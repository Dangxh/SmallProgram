<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/17
 * Time: 13:06
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected  $hidden = ['delete_time', 'update_time', 'create_time'];

    public function img(){
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }
}