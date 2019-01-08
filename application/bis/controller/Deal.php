<?php

namespace app\bis\controller;

use app\common\model\Bislocation;
use app\common\model\BisModels;
use app\common\model\CategoryTow;

class Deal extends Base
{
    public function index()
    {
//        $data = model('deal')->getdeallist();
        $bisid = session('bis_id');
        $data = BisModels::GetModelsByList($bisid);
        $this->assign('data', $data);
        return view();
    }

    public function add()
    {
        $server = \app\common\model\Category::all();
        $bisid = session('bis_id');
        if (request()->isPost()) {
            $data = input('param.');
            //商户添加 商家车型表
            $models['models_name'] = $data['info']['models_name'];
            if (empty($data['info']['location_ids'])) {
                return json(msg('204', '', '请选择门店'));
            }
            $models['location_ids'] = implode(",", $data['info']['location_ids']);
            $models['bis_id'] = $bisid;
            $models['create_time'] = time();
            $models['status'] = 1;
            if (empty($data['info']['models_id'])) {
                return json(msg('204', '', '请先选择车型'));
            }
            $models['models_id'] = $data['info']['models_id'];
            $models_res = db('bis_models')->insertGetId($models);
            //添加服务列表

//            return json($models_res);
            if (count($data['serverinfo']) == 0) { //先判断是否添加服务项目
                return json(msg(204, '', '请添加服务项目'));
            }

            $arr = [];
            for ($i = 0; $i < count($data['serverinfo']); $i++) {
                //如果添加了服务项目。没有输入服务费用那么也略过
                if (empty($data['serverinfo'][$i]['category_id']) || empty($data['serverinfo'][$i]['server'])) {

                    return json('请选择服务项目');
                } else {
                    $service_model['models_id'] = $models_res;
                    $service_model['category_id'] = $data['serverinfo'][$i]['category_id'];
                    $service_model['service_price'] = $data['serverinfo'][$i]['server'];
                    $service_model['create_time'] = time();
                    $service_id = db('bis_service')->insertGetId($service_model);
                    for ($k = 0; $k < count($data['serverinfo'][$i]['data']); $k++) {
                        $data_model['service_id'] = $service_id;
                        $data_model['child_name'] = $data['serverinfo'][$i]['data'][$k]['name'];
                        $data_id = db('bis_child')->insertGetId($data_model);
                        for ($j = 0; $j < count($data['serverinfo'][$i]['data'][$k]['items']); $j++) {
                            if (!empty($data['serverinfo'][$i]['data'][$k]['items'][$j]['checkbox'])) {
                                $chliddata['name'] = $data['serverinfo'][$i]['data'][$k]['items'][$j]['name'];
                                $chliddata['price'] = $data['serverinfo'][$i]['data'][$k]['items'][$j]['price'];
                                $chliddata['child_id'] = $data_id;
                                db('bis_chlid_service')->insertGetId($chliddata);

                            }

                        }
                    }
                }
            }
            return json($arr);
        } else {
            $citys = model('city')->getNormalCitysByParentId();
            $this->assign('citys', $citys);
            $category = model('category')->getNormalFirstCategory();
            $bislocation = Bislocation::getNormallocationbyid($bisid);
            $this->assign('categorys', $category);
            $this->assign('bislocation', $bislocation);
            $this->assign('server', $server);
            return view();
        }
    }

    /*
     * 获取当前用户的门店
     */
    public function GetLocationByData()
    {
        $bisid = session('bis_id');
        $bislocation = model('Bislocation')->getNormallocationbyid($bisid);
        return json($bislocation);
    }
    /*
     * 获取子级服务
     */
    public function getCategoryByData()
    {
        $data = input('param.');
        $res = CategoryTow::GetThreeByData($data);
        return json($res);


    }

    public function edit()
    {
        $bisid = $this->getlogoinuser()->bis_id;
        $getid = input('get.id');

        if (request()->isPost()) {
            $data = input('post.');
            // print_r($data);
            $location = model('Bislocation')->get($data['location_ids'][0]);
            $deals = [
                'bis_id' => $bisid,
                'name' => $data['name'],
                'image' => $data['image'],
                'category_id' => $data['category_id'],
                'se_category_id' => empty($data['se_category_id']) ? '' : implode(',', $data['se_category_id']),
                'city_id' => $data['city_id'],
                'location_ids' => empty($data['location_ids']) ? '' : implode(',', $data['location_ids']),
                'start_time' => strtotime($data['start_time']),
                'end_time' => strtotime($data['end_time']),
                'total_count' => $data['total_count'],
                'origin_price' => $data['origin_price'],
                'current_price' => $data['current_price'],
                'coupons_begin_time' => strtotime($data['coupons_begin_time']),
                'coupons_end_time' => strtotime($data['coupons_end_time']),
                'description' => $data['description'],
                'notes' => strtotime($data['notes']),
                'bis_account_id' => $this->getlogoinuser()->id,
                'xpoint' => $location->xpoint,
                'ypoint' => $location->ypoint,
            ];
            $id = model('deal')->save($deals, ['id' => intval($data['id'])]);
            if ($id) {
                $this->success('更新成功', url('deal/index'));
            } else {
                $this->error('更新失败');
            }
        } else {
            $deal = model('deal')->get($getid);

            $citys = model('city')->getNormalCitysByParentId();
            $this->assign('citys', $citys);
            $category = model('category')->getNormalFirstCategory();
            $bislocation = model('Bislocation')->getNormallocationbyid($bisid);
            $assign = [
                'categorys' => $category,
                'bislocation' => $bislocation,
                'deal' => $deal
            ];
            $this->assign($assign);

            return view();
        }
    }

    public function del($id)
    {
        $data = new BisModels();
        $data->where('id', $id)->delete();
        return $this->success("删除成功");
    }

    public function all(){
        $bisid = session('bis_id');
        return view();
    }
}
