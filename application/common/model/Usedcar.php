<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/24
 * Time: 11:59 PM
 */

namespace app\common\model;


class Usedcar extends BisModels
{
    /*
   * 添加保险订单表主表信息
   */
    public static function PostDataByAdd($data)
    {
        $data['create_time'] = time();
        $res = self::insertGetId($data);
        return $res;

    }

    public static function GetUseOrderByList($data)
    {
        $res = self::where('user_id', $data['user_id'])->paginate($data['limit'], false, ['query' => $data['page'],]);;
        return $res;
    }

}