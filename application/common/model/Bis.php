<?php

namespace app\common\model;

class Bis extends BaseModel
{

    // 获取入驻商家列表
    public static function getbisbylist($status = 0)
    {

        $data = [
            'status' => $status,

        ];
        // 排序
        $order = [
            'id' => 'desc',
        ];
        $result = self::where($data)
            ->order($order)
            ->paginate(15);


        return $result;

    }


}
