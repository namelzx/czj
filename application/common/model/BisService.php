<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/20
 * Time: 1:38 PM
 */

namespace app\common\model;


class BisService extends BaseModel
{
    public function serviceinfo()
    {
        return $this->hasOne('category', 'id', 'category_id');
    }

    public static function GetServiceinfoBy($models_id, $todos, $bis_id)
    {
        $res = self::with('serviceinfo')->where('models_id', $models_id)
            ->where('bis_id', $bis_id)
            ->whereIn('category_id', $todos)//服务项
            ->select();
        return $res;
    }

    /**
     * 循环添加服务
     */
    public static function postBrandByAdd($data)
    {
        $res = self::insertGetId($data);
        return $res;
    }

}