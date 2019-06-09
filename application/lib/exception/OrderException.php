<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/25
 * Time: 1:18
 */

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = '订单不存在，请检查ID';
    public $errorCode = 80000;
}