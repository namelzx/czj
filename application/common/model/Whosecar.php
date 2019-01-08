<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/24
 * Time: 8:43 PM
 */

namespace app\common\model;


class Whosecar extends BisModels
{

    public function items()
    {
        return $this->hasMany('WhosecarChild', 'whosecar_id');
    }

    public static function PostDataByAdd($data)
    {
        $data['create_time'] = time();
        $res = self::insertGetId($data);
        return $res;
    }

    public static function GetWhOrderByList($data)
    {
        $res = self::with('items')->where('user_id', $data['user_id'])->order('id desc')->paginate($data['limit'], false, ['query' => $data['page'],]);;
        return $res;
    }

}