<?php
/**
 * Created by PhpStorm.
 * User: DXH
 * Date: 2019/1/22
 * Time: 12:31
 */

namespace app\api\controller\v2;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     */
    public function getBanner($id){
       return 'this is v2 Version';
    }
}