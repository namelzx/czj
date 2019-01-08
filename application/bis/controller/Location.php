<?php

namespace app\bis\controller;


class Location extends Base
{


    public function index()
    {
        // 获取一级城市
        $bis=session('bis_id');
        $bisid = $bis;
        $Bislocation = model('Bislocation')->getlocationlist($bisid);
        $this->assign('Bislocation', $Bislocation);
        return view();

    }
    public function add()
    {
        $bisid = session('bis_id')  ;
        if (request()->isPost()) {

            $data = input('post.');



            $langlat = \Map::getLngLat($data['address']);
            $locationData = [
                'bis_id' => $bisid,
                'name' => $data['name'],
                'logo' => $data['logo'],
                'tel' => $data['tel'],
                'contact' => $data['contact'],
                'category_path' => empty($data['se_category_id']) ? '' : implode(',', $data['cat']),
                'city_id' => $data['city_id'],
                'api_address' => $data['address'],
                'is_main' => 0,// 代表的是总店信息
                'xpoint' => $langlat['result']['location']['lng'],
                'ypoint' => $langlat['result']['location']['lat'],

            ];
            $locationda = model('Bislocation')->add($locationData);
            if ($locationda) {

                return $this->success("门店申请成功");
            } else {
                return $this->error("门店申请失败");
            }


        } else {

            // 获取一级城市
            $citys = model('city')->getNormalCitysByParentId();
            $this->assign('citys', $citys);
            $category = model('category')->getNormalFirstCategory();
            $bislocation = model('Bislocation')->getNormallocationbyid($bisid);
            $this->assign('citys', $citys);
            $this->assign('categorys', $category);

            return view();
        }
    }




    public function status()
    {
        $data = input('param.');


        //
        $locationdata = model('bislocation')->save(['status' => $data['status']], ['id' => $data['id']]);
        if ($locationdata) {
            // status 1 通过 status 2 不通过 －1软删除   有需要的话可以参照商户入申请一样申请结果发送邮件给用户

            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }
    }


    public function waiting($id)
    {
        if (empty($id)) {
            $this->error('错误链接');
        }
        $detail = model('bis')->get($id);
        $this->assign('detail', $detail);
        return view();


    }


}