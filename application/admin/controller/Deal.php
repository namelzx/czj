<?php

namespace app\admin\controller;

use think\Controller;

class  deal extends Controller
{

    /*
     * 审车预约
     */
    public function index()
    {
        $data = input('param.');
        $res = db('Whosecar')->where('status', $data['status'])->paginate();

        $this->assign('res', $res);
        return view();
    }

    /*
     * 审车预约车辆状况
     */
    public function infolist()
    {
        $data = input('param.');
        $res = db('Whosecar_child')->where('whosecar_id', $data['id'])->select();
        $this->assign('res', $res);
        return view();
    }

    /*
     * 审车预约状态修改
     */
    public function wstatus()
    {
        $data = input('param.');
        // print_r($data);
        $res = db('Whosecar')->where('id', $data['id'])->data(['status' => $data['status']])->update();

        if ($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }

    /*
     * 二手车估价
     */
    public function usedcar()
    {
        $data = input('param.');
        $res = db('usedcar')->where('status', $data['status'])->paginate();

        $this->assign('res', $res);
        return view();
    }

    /*
   * 审车预约状态修改
   */
    public function ustatus()
    {
        $data = input('param.');
        $res = db('usedcar')->where('id', $data['id'])->data(['status' => $data['status']])->update();
        if ($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }

    /*
     * 保险询价
     */
    public function insurance()
    {
        $data = input('param.');
        $res = db('insurance')->where('status', $data['status'])->paginate();
        $this->assign('res', $res);
        return view();
    }

    /*
     * 保险询价详情
     */
    public function insurancelist()
    {
        $data = input('param.');
        $res = db('insurance_child')->where('insurance_id', $data['id'])->select();
        $this->assign('res', $res);
        return view();
    }
    /*
     * 保险询价
     */
    public function istatus()
    {
        $data = input('param.');
        $res = db('insurance')->where('id', $data['id'])->data(['status' => $data['status']])->update();
        if ($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }
}