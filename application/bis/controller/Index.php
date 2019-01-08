<?php

namespace app\bis\controller;

class Index extends Base
{
    public function index()
    {
        return view();
    }

    public function indexdata()
    {
        $City = db('city')->select();
        return json(['city' => $City]);
    }

    public function welcome()
    {
        return '车之界';
    }
}
