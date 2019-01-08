<?php

namespace app\admin\controller;

use app\common\model\CategoryThree;
use app\common\model\CategoryTow;
use think\Controller;
use think\Request;

class Maintenance extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = input('param.');
        if (!empty($data['category_id'])) {

            $category = \app\common\model\Category::all();
            $assign = [
                'category' => $category
            ];
            $res = CategoryTow::GetByList($data);
            $assign = [
                'res' => $res,
                'category' => $category
            ];
            $this->assign($assign);
            return view();
        } else {
            $category = \app\common\model\Category::all();
            $assign = [
                'category' => $category
            ];
            $res = CategoryTow::GetByList();
            $assign = [
                'res' => $res,
                'category' => $category
            ];
            $this->assign($assign);
            return view();
        }
    }


    public function add()
    {
        $res = \app\common\model\Category::all();
        $assign = [
            'res' => $res
        ];
        $this->assign($assign);
        return view();
    }

    public function threeindex()
    {
        $data = input('param.');
        $res = CategoryThree::GetByList($data);
        $assign = [
            't_id' => $data['t_id'],
            'res' => $res
        ];
        $this->assign($assign);
        return view();
    }

    public function threeadd()
    {
        $data = input('param.');
        if ($this->request->isPost()) {
            $data['create_time'] = time();
            $res = CategoryThree::insert($data);
            if ($res) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        } else {

            $assign = [
                't_id' => $data['t_id']
            ];
            $this->assign($assign);
            return view();
        }

    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $res = CategoryTow::PostByData($request->post());
        if ($res) {
            $this->success('添加成功');
        } else {

            $this->error('添加失败');
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit($id)
    {

    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
        $model = new CategoryTow();
        $res = $model->where('id', $id)->delete();
        if ($res) {
            $this->success('删除成功');
        } else {
            $this->error("删除失败");
        }
    }

    public function threedelete($id)
    {

        $res = db('category_three')->where('id', $id)->delete();
        if ($res) {
            $this->success('删除成功');
        } else {
            $this->error("删除失败");
        }
    }
}
