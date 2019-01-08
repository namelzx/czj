<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 18/2/2
 * Time: 下午6:23
 */

namespace app\bis\controller;


class Order extends Base
{
    public function index()
    {
        $bisid = session('bis_id');
        $sdata = [
            'bis_id' => $bisid,
        ];
        $bislocation = db('bislocation')->where($sdata)->field('id as bis_id')->select();
        $whereorder = [];
        foreach ($bislocation as $v => $item) {
            $whereorder[$v] = $bislocation[$v]['bis_id'];
        }
        $order = db('order')->whereIn('bis_id', $whereorder)->paginate();
        $params = request()->param();//这个是获取地址栏参数。。主要作用是分页的时候带参数
        $assign = [
            'order' => $order,
            'params' => $params,
        ];
        $this->assign($assign);
        return view();
    }

}