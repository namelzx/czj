<?php

namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{

    public function __construct()
    {
        parent::__construct();
        /*
         * 判断用户是否登录
         */
        if (!session('aid'))
        {
            return $this->error('请先登录',url('admin/login'));
        }
    }

    public function status()
    {
        $data = input('param.');
        if (empty($data['id'])) {
            $this->error('id不合法');
        }
        if (!is_numeric($data['status'])) {

            $this->error('status不合法');
        }
        // 获取控制器
        $model = request()->controller();
        $res = model($model)->save(['status' => $data['status']], ['id' => $data['id']]);

        if ($res) {
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }
}