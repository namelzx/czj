<?php

namespace app\bis\controller;

use think\Controller;

class login extends Controller
{
    public function index()
    {
        if (request()->isPost()) {
            $data = input('post.');
            // 获取用户相关信息
            $res = model('Bisaccount')->get(['username' => $data['username']]);
            // 如果账户不存在账户不等于1 那么也不通过。 1代表着账户审核通过
            if (!$res || $res->status != 1) {
                $this->error('该用户不存在，或者用户尚未审核通过');
            }
            if ($res->password != md5($data['password'] . $res->code)) {
                $this->error('密码不正确');
            }
            model('bisaccount')->updatebyId(['last_login_ip' => time()], $res->id);
            // 保存登录用户信息
            // bis是作用域只可以在bis模块下使用
            session('bis_id', $res->bis_id);
//            dump(md5($data['password'] . $res->code));
            return $this->success("登录成功", url('index/index'));
        } else {
            // 获取session
            $bis = session('bis_id');
            print_r($bis);
            if ($bis) {
                return $this->redirect(url('index/index'));
            }
            return view();

        }
        # code...
    }

    public function logout()
    {
        // 清楚session
        session('bis_id',null);
        return $this->redirect(url('login/index'));
    }

}