<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/27
 * Time: 9:49 AM
 */

namespace app\common\model;


class MainYear extends BisModels
{
    public function items()
    {
        return $this->hasMany('MainChild', 'year_id');
    }

    public static function GetDataByList()
    {
        $res = self::with('items')->select();
        return $res;
    }
}