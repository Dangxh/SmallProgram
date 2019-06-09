<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/2/22
 * Time: 16:13
 */

namespace app\api\controller\v1;


use think\Controller;
use app\api\service\Token as TokenService;

class BaseController extends Controller
{
    protected function checkPrimaryScope(){
        TokenService::needPrimaryScope();
    }
    protected function checkExclusiveScope(){
        TokenService::needExclusiveScope();
    }
}