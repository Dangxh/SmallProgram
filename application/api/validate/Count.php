<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/17
 * Time: 11:44
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15',
    ];
}