<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/6
 * Time: 2:50 PM
 */

namespace app\common\model;


class CategoryTow extends BaseModel
{

    protected $autoWriteTimestamp = true; //默认设置当前时间 给time字段


    public function items()
    {
        return $this->hasMany('CategoryThree', 't_id', 'id');
    }

    public static function GetThreeByData($data)
    {

        $res = self::with('items')->where($data)->select();
//        echo self::getlastSql();
        return $res;
    }

    public static function PostByData($data)
    {
        $data['status'] = 1;
        $data['create_time'] = time();
        return self::insert($data);
    }


    public static function GetByList($data = [])
    {
        if (!empty($data)) {
            $res = self::where('category_id', $data['category_id'])->where('car_id', $data['car_id'])->paginate(50);
            return $res;
        } else {
            $res = self::paginate(10);
            return $res;
        }
    }
}