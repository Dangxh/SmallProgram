<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/17
 * Time: 22:11
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{
    public function getToken($code = ''){
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get($code);
        return [
            'token'=>$token
        ];
    }
}