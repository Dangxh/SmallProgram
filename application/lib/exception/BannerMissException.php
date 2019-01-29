<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/1/27
 * Time: 2:28
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}