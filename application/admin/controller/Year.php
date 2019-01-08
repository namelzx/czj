<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/27
 * Time: 9:44 AM
 */

namespace app\admin\controller;


class Year extends Base
{
    public function index()
    {
        $res = db('main_year')->paginate();
        $this->assign('res', $res);
        return view();
    }

    /*
     * 添加养护年份
     */
    public function yearadd()
    {
        $data = input('param.');
        if (!empty($data)) {
            $data['create_time'] = time();
            $res = db('main_year')->insert($data);
            if ($res) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        }
        return view();
    }

    public function delete()
    {
        $data = input('param.');
        if (!empty($data)) {
            $data['create_time'] = time();
            $res = db('main_year')->where('id', $data['id'])->delete();
            if ($res) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        }
    }

    /*
     *养护列表
     */
    public function indexchlid()
    {
        $data = input('param.');
        $res = db('main_child')->where('year_id', $data['id'])->paginate();
        $this->assign('res', $res);
        $this->assign('year_id', $data['id']);
        return view();
    }

    public function chlidadd()
    {
        $data = input('param.');
        if (!empty($data['name'])) {

            $res = db('main_child')->insert($data);
            if ($res) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        }
        $assign = [
            'year_id' => $data['year_id']
        ];
        $this->assign($assign);
        return view();
    }
    public function chliddelete(){
        $data = input('param.');
        if (!empty($data)) {
            $res = db('main_child')->where('id', $data['id'])->delete();
            if ($res) {
                $this->success('添加成功');
            } else {
                $this->error('添加失败');
            }
        }
    }
}