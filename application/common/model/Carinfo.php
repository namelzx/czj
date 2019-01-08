<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/2
 * Time: 2:25 PM
 */

namespace app\common\model;


class Carinfo extends BaseModel
{

    /**
     * 循环添加品牌
     */
    public static function postBrandByAdd($data){
        $res=self::insertGetId($data);
        return $res;
    }
}