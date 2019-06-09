<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/19
 * Time: 1:16
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = '微信服务器接口调用失败';
    public $errorCode = 999;
}