<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/2
 * Time: 12:49 AM
 */

namespace app\common\model;


class Manufactor extends BaseModel
{

    /**
     * 循环添加品牌
     */
    public static function postBrandByAdd($data){
        $res=self::insertGetId($data);
        return $res;
    }

}