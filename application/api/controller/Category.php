<?php

namespace app\api\controller;

use think\Controller;

class category extends Controller
{
    private $obj;

    // 初始化模型
    public function _initialize()
    {
        $this->obj = model("category");
    }

    public function getcategorysByparentId()
    {
        $id = input('post.id', 0, 'intval');
        if (!$id) {
            $this->error('ID不合法');
        }
        $categorys = $this->obj->getFirstCategorys($id);
        if (!$categorys) {
            return show(0, '失败', $categorys);
        } else {
            return show(1, '成功', $categorys);
        }
    }
}
