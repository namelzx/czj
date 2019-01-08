<?php
/**
 * Created by PhpStorm.
 * User: jon
 * Date: 2018/11/1
 * Time: 9:44 PM
 */

namespace app\index\controller;

use app\common\model\BisService;
use app\common\model\Carbrand;
use app\common\model\Carinfo;
use app\common\model\Carmodels;
use app\common\model\Category;
use app\common\model\Order;
use think\Controller;
use think\Exception;

/**
 * 汽配保养
 * @package app\index\controller
 */
class Maintenance extends Controller
{
    public function index()
    {
        return view();
    }

    /*
     * 门店选择
     */
    public function shop()
    {

        return view();
    }

    /*
     * 选择当前城市门店列表
     */
    public function cityCity()
    {
        $data = input('param.');
        $res = db('bislocation')->where($data)->select();
        return json($res);

    }


    public function indexdata()
    {
        $data = Category::all();
        return json($data);
    }

    public function choose()
    {
        return view();
    }

    public function choosedata()
    {
        $res = Carbrand::GetDataBylist();
        return json($res);
    }

    //获取车型
    public function carmodels()
    {
        $data = input('param.');
        $res = Carmodels::where('mid', $data['id'])->select();
        return json($res);
    }

    //获取年份
    public function carinfo()
    {
        $data = input('param.');
        $res = Carinfo::where('ModelsID', $data['id'])->select();
        return json($res);
    }

    /*
     * 下单
     */
    public function order()
    {
        $data = input('param.');
        $this->assign('res', $data);
//        dump($res);
        return view();
    }

    //获取订单数据
    public function orderData()
    {
        $data = input('param.');
        //根据前端传过来的bis_id获得总点id
        $mainshop = db('bislocation')->where('id', $data['data']['bis_id'])->find();
        $data = BisService::GetServiceinfoBy($data['data']['models_id'], $data['todos'], $mainshop['bis_id']);
        return $this->groupVisit($data); //groupVisit重新并接处理方法
    }

    /*
     * 提交订单
     */
    public function PostOrder()
    {
        $user_info = session('czj_user');
        $data = input('param.');
        $che = 0;

        list($t1, $t2) = explode(' ', microtime());    //设置订单
        $t3 = explode('.', $t1 * 10000);
        /*
         * 订单主表信息
         */
        $OrderSn = $t2 . $t3[0] . (rand(10000, 99999));//结合起来得到订单号。
        $ordertable['out_trade_no'] = $OrderSn;
        $ordertable['name'] = $data['userinfo']['name'];
        $ordertable['car_name'] = $data['userinfo']['car_name'];
        $ordertable['phone'] = $data['userinfo']['phone'];
        $ordertable['bis_id'] = $data['userinfo']['bis_id'];
        $ordertable['total_price'] = $data['userinfo']['sum_price'];
        $ordertable['user_id'] = $user_info['id'];
        $ordertable['create_time'] = time();
        $oser_id = Order::PostOrderByData($ordertable);

        /*
         * 添加订单所选服务
         */

        foreach ($data['data'] as $v => $item) {
            if ($data['data'][$v]['count'] > 0) {
                $che++;
                $oderserver['category_id'] = $data['data'][$v]['category_id'];//所在分类
                $oderserver['create_time'] = time();//创建时间
                $oderserver['models_id'] = $data['data'][$v]['models_id'];//所属车型
                $oderserver['service_price'] = $data['data'][$v]['service_price'];//服务费用
                $oderserver['name'] = $data['data'][$v]['serviceinfo']['name'];//服务费用
                $oderserver['order_id'] = $oser_id;//服务费用
                $server_id = db('order_server')->insertGetId($oderserver);
                foreach ($data['data'][$v]['chlid'] as $c => $ctem) {
                    if (!empty($data['data'][$v]['chlid'][$c]['checkbox']) && $data['data'][$v]['chlid'][$c]['checkbox'] == true) {
                        $order_shop['server_id'] = $server_id;
                        $order_shop['child_name'] = $data['data'][$v]['chlid'][$c]['child_name'];
                        $order_shop['brand_name'] = $data['data'][$v]['chlid'][$c]['user'][0]['name'];
                        $order_shop['price'] = $data['data'][$v]['chlid'][$c]['user'][0]['price'];
                        db('order_shop')->insertGetId($order_shop);

                    }
                }
            }
        }
        if ($che == 0) {
            return json(msg('204', '', '没有选择任何一项服务'));
        }


        return json(msg('200', '', '下单成功,等待工作人员与您联系'));
//        return json($che);
    }

    /* 数据重装 */
    function groupVisit($data)
    {
        $visit_list = [];
        try {
            $dd = [];
            foreach ($data as $v => $items) {
                $visit_list[$v] = $data[$v];
                $visit_list[$v]['chlid'] = [];
                $child = db('bis_child')->where('service_id', $data[$v]['id'])->select();
                for ($i = 0; $i < count($child); $i++) {
                    $dd[$v][$i] = $child[$i];
                    $dd[$v][$i]['show'] = false;
                    $ser = db('bis_child_service')->where('child_id', $child[$i]['id'])
                        ->select();
                    for ($c = 0; $c < count($ser); $c++) {
                        $dd[$v][$i]['service'][$c] = $ser[$c];
                        $dd[$v][$i]['user'][0] = $ser[$c];
                    }
                }
                $visit_list[$v]['chlid'] = $dd[$v];
                $visit_list[$v]['count'] = 0;
            }
            return json(['status' => 200, 'data' => $data, 'msg' => '加载']);
        } catch (Exception $e) {
            return json(['status' => 204, 'data' => $data, 'msg' => '该店配件信息不齐全，建议换一家']);
        }
    }
}