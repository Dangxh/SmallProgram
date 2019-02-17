<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/17
 * Time: 0:58
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '请求的主题不存在，请检查主题ID';
    public $errorCode = 30000;
}