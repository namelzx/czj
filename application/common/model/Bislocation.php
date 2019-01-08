<?php

namespace app\common\model;

class Bislocation extends BaseModel
{
    // 获取当前用户门店列表


    public function getlocationlist($bis_id)
    {
        $data = [
            'bis_id' => $bis_id,

        ];
        // 排序
        $order = [
            'id' => 'desc',
        ];
        $result = $this->where($data)
            ->order($order)
            ->paginate(15);

        return $result;

    }

    public static function getNormallocationbyid($bisid)
    {
        $data = [
            'bis_id' => $bisid,
            'status' => 1,
        ];
        $order = [
            'id' => 'desc',
        ];
        $res = self::where($data)->order($order)->select();
        return $res;
    }

    public static function getNoramlLocationId($ids)
    {
        $data = [
            'id' => ['in', $ids],
            'status' => 1,
        ];
        return self::where($data)->select();
    }

}
