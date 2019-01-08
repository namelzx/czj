<?php

namespace app\common\model;

use think\Db;

class Order extends BaseModel
{
    protected $autoWriteTimestamp = true; //默认设置当前时间 给time字段

    public function member()
    {
        return $this->belongsTo('Deal');
    }

    public function bis()
    {
        return $this->hasOne('Bislocation', 'id', 'bis_id');
    }

    public static function GetMainOrderByList($data)
    {
        $res = self::with('bis')->where('user_id', $data['user_id'])->paginate($data['limit'], false, ['query' => $data['page'],]);;
        return $res;
    }

    public static function PostOrderByData($data)
    {
        $data['status'] = 1;
        $id = self::insertGetId($data);
        return $id;
    }


    public function getorderlist($user_id)
    {
        $res = Db::table('o2o_order')->alias('a')
            ->join('o2o_deal d', 'd.id=a.deal_id')
            ->where('a.user_id=' . $user_id)->paginate();

        return $res;
    }

    public function getlocalhostorderlist($data = [])
    {

        $res = Db::table('o2o_order')->alias('a')
            ->join('o2o_deal d', 'd.id=a.deal_id')
            ->where($data)->field('a.id,d.name,d.image,d.current_price,a.create_time,a.out_trade_no,a.deal_count,a.code,a.status')->paginate();

        return $res;
    }
}