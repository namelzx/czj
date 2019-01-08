<?php

namespace app\index\controller;


use app\common\model\City;
use app\common\model\Featured;
use app\common\model\MainYear;

class Index extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return view();
    }


    public function indexdata()
    {
        $City = City::all();
        $Banner = Featured::where('status',1)->select();
        return json(['city' => $City, 'banner' => $Banner]);
    }

    public function maintenance()
    {
        return view();
    }

    public function mainyear()
    {
        $res = MainYear::GetDataByList();
        return json($res);
    }
}
