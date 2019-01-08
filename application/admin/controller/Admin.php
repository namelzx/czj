<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 18/2/1
 * Time: 下午2:56
 */

namespace app\admin\controller;


use think\Controller;

class Admin extends Controller
{
    /**
     * @return \think\response\View|void
     * @throws \think\Exception\DbException
     */
    public function login()
    {
        if (request()->isPost()) {
            $data = input('param.');
            $res = db('admin')->get(['username' => $data['username']]);
            if ($res) {
                if ($res['password'] == $data['password']) {
                    session('aid', $res['id']);
                    return $this->success("登录成功", url('index/index'));
                } else {
                    return $this->error("密码错误");
                }
            } else {
                return $this->error("没有这个管理员");
            }
        }
        return view();
    }

    public function logout()
    {
        // 清楚session
        session('aid', null);
        return $this->redirect(url('admin/admin/login'));
    }
}