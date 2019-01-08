<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/23
 * Time: 12:09 PM
 */

namespace app\index\controller;


use app\common\model\Insurance;
use app\common\model\Usedcar;
use app\common\model\Whosecar;

class Examcar extends Base
{
    public function index()
    {
        return view();
    }

    /*
     * 预约审车提交
     */
    public function WhosecarAdd()
    {
        $data = input('param.');
        $user_info = session('czj_user');
        $user_id = $user_info['id'];
        $data['temp']['user_id'] = $user_id;
        $whosecar_id = Whosecar::PostDataByAdd($data['temp']);
        $arr = [];
        foreach ($data['data'] as $v => $item) {

                $arr[$v]['name'] = $data['data'][$v];
                $arr[$v]['whosecar_id'] = $whosecar_id;
        }

        $res = db('whosecar_child')->insertAll($arr);
        return json(msg(200, $res, '预约成功'));
    }

    public function insure()
    {
        return view();
    }

    public function infor()
    {
        return view();
    }

    /*
     * 添加保险订单主表信息
     */
    public function InsuranceAdd()
    {

        $data = input('param.');
        $user_info = session('czj_user');
        $data['temp']['user_id'] = $user_info['id'];
        $insurance_id = Insurance::PostDataByAdd($data['temp']);
        $arr = [];
        for ($i = 0; $i < count($data['data']); $i++) {
            if (empty($data['data'][$i]['tname'])) {
                $arr[$i]['insurance_id'] = $insurance_id;
                $arr[$i]['name'] = $data['data'][$i]['name'];
            } else {
                $arr[$i]['insurance_id'] = $insurance_id;
                $arr[$i]['name'] = $data['data'][$i]['name'] . '-' . $data['data'][$i]['tname'];
            }
        }
        $res = db('insurance_child')->insertAll($arr);
        return json(msg(200, $res, '询价已提交，等待后台人员联系'));
    }

    /*
     * 估价
     */
    public function usedcar()
    {
        return view();

    }

    /*
     * 提交估价
     */
    public function PostUsedcarByData()
    {
        $data = input('param.');
        $user_info = session('czj_user');
        $data['user_id'] = $user_info['id'];
        $res = Usedcar::PostDataByAdd($data);
        return json(msg(200, $res, '估价已提交，等待后台人员联系'));
    }

    /*
     * 选择车型
     */
    public function choose()
    {
        return view();
    }
}