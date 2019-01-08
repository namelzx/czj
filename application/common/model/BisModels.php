<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/23
 * Time: 11:35 AM
 */

namespace app\common\model;


class BisModels extends BaseModel
{
    /*
     * 获取商家已添加商品列表
     */
    public static function GetModelsByList($bis_id)
    {

        $res = self::where('bis_id', $bis_id)->paginate();
        return $res;
    }

}