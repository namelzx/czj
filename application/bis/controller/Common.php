<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2019/1/7
 * Time: 11:56 PM
 */

namespace app\bis\controller;


class Common
{

    public function indexdata()
    {
        $City = db('city')->select();
        return json(['city' => $City]);
    }
}