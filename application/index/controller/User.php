<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/21
 * Time: 9:19 PM
 */

namespace app\index\controller;


use app\common\model\Insurance;
use app\common\model\Order;
use app\common\model\Usedcar;
use app\common\model\Whosecar;
use think\Controller;

class User extends Controller
{
    public function index()
    {
        $this->assign('user', session('czj_user'));
        return view();
    }

    /*
     * 保养订单
     */
    public function maintenance()
    {
        $data = input('param.');
        $user_info = session('czj_user');
        if (!empty($data)) {
            $data['user_id'] = $user_info['id'];
            $res = Order::GetMainOrderByList($data);
            return json($res);
        }
        return view();
    }

    /*
     * 审车订单
     */
    public function whosecar()
    {

        $data = input('param.');
        $user_info = session('czj_user');
        if (!empty($data)) {
//            dump($data);
            $data['user_id'] = $user_info['id'];
            $res = Whosecar::GetWhOrderByList($data);
            return json($res);
            return json('有数据');
        }
        return view();
    }

    public function usedcar()
    {
        $data = input('param.');
        $user_info = session('czj_user');
        if (!empty($data)) {
//            dump($data);
            $data['user_id'] = $user_info['id'];
            $res = Usedcar::GetUseOrderByList($data);
            return json($res);
        }
        return view();
    }

    public function insurance()
    {
        $data = input('param.');

        $user_info = session('czj_user');
        if (!empty($data)) {
            $data['user_id'] = $user_info['id'];
            $res = Insurance::GetInOrderByList($data);
            return json($res);
        }
        return view();
    }

    /*
     * 登录
     */
    public function login()
    {
        $data = input('param.');
        if (!empty($data)) {
            $res = db('user')->where(['mobile' => $data['mobile']])->find();
            // 如果账户不存在账户不等于1 那么也不通过。 1代表着账户审核通过
            if (!$res) {
                return json(msg(204, '', '该用户不存在'));
            }
            if ($res['password'] != md5($data['password'] . $res['code'])) {
                return json(msg(203, '', '密码不正确'));
            }
            // 保存登录用户信息
            // bis是作用域只可以在bis模块下使用
            session('czj_user', $res);
//            return $this->success("登录成功", url('index/index'));
            return json(msg(200, '', '登录成功'));


        }
        return view();
    }

    /*
     *注册
     */
    public function registered()
    {
        $data = input('param.');
        if (!empty($data)) {
            $u = db('user')->where('mobile', $data['mobile'])->count();
            if ($u > 0) {
                return json(msg(201, '', '该号码已注册'));
            }
            $data['username'] = '车之界' . mt_rand(100, 1000000);
            $data['code'] = mt_rand(100, 1000000);
            $data['password'] = md5($data['password'] . $data['code']);
            try {
                $res = db('user')->insert($data);
            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
            if ($res) {
                return json(msg(200, '', '注册成功'));
            } else {
                return json(msg(204, '', '注册失败'));
            }
        }

        return view();
    }


}