<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/1/24
 * Time: 18:37
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}