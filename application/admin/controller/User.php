<?php

namespace app\admin\controller;


use think\Controller;
use think\Request;
use app\common\model\User as us;


class User extends Base
{
    private $obj;

    // 初始化模型
    public function _initialize()
    {
        $this->obj = model("user");
    }

    public function index()
    {
        $us = new us();
        $sdata = [];
        $data = input();
        if (!empty($data['start_time']) && !empty($data['end_time']) && strtotime($data['end_time']) > strtotime($data['start_time'])) {
            $sdata['create_time'] = [
                ['gt', strtotime($data['start_time'])],
                ['lt', strtotime($data['end_time'])],
            ];
        }
        if (!empty($data['username'])) {
            $sdata['username'] = ['like', '%' . $data['username'] . '%'];
        }
        $users = $us->getNormalUserlist($sdata);

        $gl = [
            'start_time' => empty($data['start_time']) ? '' : $data['start_time'],
            'end_time' => empty($data['end_time']) ? '' : $data['end_time'],
            'username' => empty($data['username']) ? '' : $data['username'],
            'users' => $users

        ];
        $this->assign($gl);
        return view();
    }
    public  function  deleindex(){
        $us = new us();
        $sdata = [];
        $data = input();
        if (!empty($data['start_time']) && !empty($data['end_time']) && strtotime($data['end_time']) > strtotime($data['start_time'])) {
            $sdata['create_time'] = [
                ['gt', strtotime($data['start_time'])],

                ['lt', strtotime($data['end_time'])],

            ];
        }
        if (!empty($data['username'])) {
            $sdata['username'] = ['like', '%' . $data['username'] . '%'];
        }
        $users = $us->getNormalUserlist($sdata,-1);

        $gl = [
            'start_time' => empty($data['start_time']) ? '' : $data['start_time'],
            'end_time' => empty($data['end_time']) ? '' : $data['end_time'],
            'username' => empty($data['username']) ? '' : $data['username'],
            'users' => $users

        ];
        $this->assign($gl);
        return view();
    }
    public function save(Request $request)
    {

        // 严格校验
        if (!request()->isPost()) {
            # code...
            $this->error('请求失败');
        }
        $data = input('post.');

        // 如果是传送进来是id那么直接做更新操作
        if (!empty($data['id'])) {
            return $this->update($data);
            # code...
        }
        // $data['cname'] = $data['name'];
        $res = $this->obj->add($data);
        if ($res) {
            $this->success('新增成功');
        } else {
            $this->error('添加失败');
        }
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
        if (intval($id) < 1) {
            $this->error('参数不合法');
        }
        // 主要是主键就可以获取
        $user = $this->obj->get($id);
        $this->assign('user',$user);

        return view();
    }
    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update($data)
    {
        $data['code'] = mt_rand(100, 1000000);


        $data['password'] = md5($data['password'] . $data['code']);
        $res = $this->obj->save($data, ['id' => intval($data['id'])]);
        if ($res) {
            $this->success('更新成功');
        } else {

            $this->error('更新失败');
        }

    }
}