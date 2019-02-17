<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/1/25
 * Time: 1:34
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];
}