<?php

namespace app\api\controller;

use think\Controller;

class city extends Controller
{
    private $obj;

    // 初始化模型
    public function _initialize()
    {
        $this->obj = model("city");
    }

    public function getCitysByparentId()
    {
        $id = input('post.id', 0, 'intval');
        if (!$id) {
            $this->error('ID不合法');
        }
        $citys = $this->obj->getNormalCitysByParentId($id);
        if (!$citys) {
            return show(0, '失败', $citys);
        } else {
            return show(1, '成功', $citys);
        }
    }
}
