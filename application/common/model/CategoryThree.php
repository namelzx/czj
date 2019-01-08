<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/6
 * Time: 6:05 PM
 */

namespace app\common\model;


class CategoryThree extends BaseModel
{
    public static function GetByList($data)
    {

        $res = self::where('t_id',$data['t_id'])->paginate();
        return $res;
    }

}