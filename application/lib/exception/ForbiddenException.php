<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/22
 * Time: 14:17
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;
}