<?php

namespace app\admin\controller;

use app\common\model\Bis as BisModel;
use app\common\model\Bisaccount;

class Bis extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    private $obj;

    // 初始化模型
    public function _initialize()
    {
//        $this->obj = ;
    }

    // 审核通过的用户
    public function index()
    {
        $res = model('bis')->getbisbylist(1);

        $this->assign('res', $res);

        return view();
    }

    // 已经删除的用户
    public function dellist()
    {

        $res = BisModel::getbisbylist(-1);

        $this->assign('res', $res);

        return view();


    }

    /**
     * 入驻申请的用户
     *
     * @return \think\Response
     */
    public function apply()
    {
        $res = BisModel::getbisbylist();

        $this->assign('res', $res);
        return view();
    }

    /**
     * 入驻申请详情
     *
     * @return \think\Response
     */
    public function detail($id)
    {
        if (empty($id)) {
            $this->error("传入参数错误");
        }


        $bisdata = model('bis')->get($id);
        $citys = model('city')->where('id', $bisdata['city_id'])->find();
        $locationdata = model('bislocation')->get(['bis_id' => $id, 'is_main' => 1]);
        $accountdata = model('bisaccount')->get(['bis_id' => $id, 'is_main' => 1]);
        $this->assign('citys', $citys);

        $this->assign('bisdata', $bisdata);
        $this->assign('locationdata', $locationdata);
        $this->assign('accountdata', $accountdata);
//        dump($bisdata);

        return view();
    }

    public function status()
    {
        $data = input('get.');
        //
        $res = $this->obj->save(['status' => $data['status']], ['id' => $data['id']]);
        $locationdata = model('bislocation')->save(['status' => $data['status']], ['bis_id' => $data['id']], ['is_main' => 1]);
        $accountdata = model('bisaccount')->save(['status' => $data['status']], ['bis_id' => $data['id']], ['is_main' => 1]);

        if ($res && $locationdata && $accountdata) {
            // status 1 通过 status 2 不通过 －1软删除   有需要的话可以参照商户入申请一样申请结果发送邮件给用户

            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }

    public function pas()
    {

        $id = input('param.');

        $data['password'] = 123456;
        $data['code'] = mt_rand(100, 1000000);
        $data['password'] = md5($data['password'] . $data['code']);
        $res = db('bisaccount')->where(['bis_id' => $id['id']])->data($data)->update();
        if ($res) {
            return "成功";
        } else {
            return "失败";
        }

    }

    /*
     *修改用户信息
     */
    public function Bisstatus()
    {

        $data = input('param.');
        $res = BisModel::update(['status' => $data['status']], ['id' => $data['id']]);
        db('bisaccount')->where('bis_id',$data['id'])->data(['status' => $data['status']])->update();
        if ($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }

}
 