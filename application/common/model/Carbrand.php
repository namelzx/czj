<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/2
 * Time: 12:49 AM
 */

namespace app\common\model;


class Carbrand extends BaseModel
{
    public function Course()
    {
        return $this->hasMany('Manufactor','brindid');
    }
    public static function GetDataBylist()
    {
        $data = self::with('Course')->select();
        return $data;
    }
    /**
     * 循环添加品牌
     */
    public static function postBrandByAdd($data){
        $res=self::insertGetId($data);
        return $res;
    }

}