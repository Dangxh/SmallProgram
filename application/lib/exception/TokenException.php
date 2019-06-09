<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/19
 * Time: 23:59
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或者无效';
    public $errorCode = 10001;
}