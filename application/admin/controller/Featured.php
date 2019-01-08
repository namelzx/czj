<?php

namespace app\admin\controller;

use app\common\model\Featured as featuredModel;

class Featured extends Base
{

    private $obj;

    // 初始化模型
    public function _initialize()
    {
        $this->obj = new featuredModel();
    }

    public function index()
    {
        $stype = input('get.type', '0', 'intval'); //搜索的type
        $sstype = '';
        if (!empty($stype)) {
            $sstype = $stype;
        }
        $list = featuredModel::getfeaturedlist();
        $type = config('featured.featured_type');
        $assign = [
            'list' => $list,//推荐位列表页
            'featured_type' => $type,//推荐位配置
            'sstype' => $sstype,
        ];
        $this->assign($assign);
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');

            // 如果有必要就效验。tp5的校验器现在不做
            $res = model('featured')->add($data); //这个add方法在公共的模型里面返回的是id
            if ($res) {
                $this->success('添加成功');
            } else {
                $this->error("添加失败");
            }

        } else {

            // 获取推荐位配置
            $type = config('featured.featured_type');

            $assign = [
                'featured_type' => $type,//推荐位配置
            ];
            $this->assign($assign);

            return view();

        }
    }
}
