<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/22
 * Time: 1:07
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden = ['id', 'delete_time', 'user_id'];
}