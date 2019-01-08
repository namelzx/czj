<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/24
 * Time: 7:19 PM
 */

namespace app\common\model;


class Insurance extends BisModels
{

    public function items()
    {
        return $this->hasMany('InsuranceChild', 'insurance_id');
    }

    /*
     * 添加保险订单表主表信息
     */
    public static function PostDataByAdd($data)
    {
        $data['create_time'] = time();
        $res = self::insertGetId($data);
        return $res;

    }

    /*
     * 获取获取保险订单
     */
    public static function GetInOrderByList($data)
    {
        $res = self::with('items')->where('user_id', $data['user_id'])->paginate($data['limit'], false, ['query' => $data['page'],]);;
        return $res;
    }


}