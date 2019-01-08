<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/5/30
 * Time: 下午1:29
 */

namespace app\common\model;


use app\bis\controller\Base;
use think\Request;

class Skills extends  Base
{
    public  function  index(){
        Request::instance()->param();
    }

}