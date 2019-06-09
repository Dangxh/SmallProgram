<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/17
 * Time: 22:24
 */

namespace app\api\model;


class User extends BaseModel
{
    public function address(){
        return $this->hasOne('UserAddress', 'user_id', 'id');
    }

    public static function getByOpenId($openid){
        $user = self::where('openid', '=', $openid)
            ->find();
        return $user;
    }
}