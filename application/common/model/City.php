<?php

namespace app\common\model;

use think\Model;

class City extends Model
{


    // 添加
    protected $autoWriteTimestamp = true; //默认设置当前时间 给time字段

    public static function add($data)
    {
        $data['status'] = 1;
        // $data['create_time'] = time();
        return self::insert($data);
    }

    //获取数据
    public static function getNormalCitysByParentId($parentId = 0)
    {
        $data = [
            'status' => 1,
            'parent_id' => $parentId,
        ];
        $order = [
            'id' => 'desc',
        ];
        return self::where($data)
            ->order($order)
            ->select();
    }

    // 获取城市
    public static function getNormalCitys()
    {
        $data = [
//            'status' => 1,
            'parent_id' => ['gt', 0],
        ];
        $order = ['id' => 'desc'];

        return self::where($data)
            ->order($order)
            ->select();

    }

}
