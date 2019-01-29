<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/1/27
 * Time: 17:37
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}