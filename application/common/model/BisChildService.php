<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/12/25
 * Time: 10:30 PM
 */

namespace app\common\model;


class BisChildService extends BaseModel
{
    /**
     * 循环添加服务
     */
    public static function postBrandByAdd($data)
    {
        $res = self::insert($data);
        return $res;
    }

}