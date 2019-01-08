<?php

namespace app\common\model;

use think\Model;

class User extends BaseModel
{

    public function add($data = [])
    {
        if (!is_array($data)) {
            execption("传递进来的不是数组");
        }
        $data['status'] = 1;
        return $this->data($data)->allowField(true)->save();

    }

    public function updatebyId($data, $id)
    {

        // 过滤数组中非数据库表的字段
        return $this->allowfield(true)->save($data, ['id' => $id]);

    }
    // 获取数据列表
    public function getNormalUserlist($data = [],$status=1)
    {
        $oreder = ['id' => 'desc'];
        $data = [
                'status'=>$status,
        ];
 		$res = $this->where($data)->order($oreder)->paginate(10);
 		
 		return $res;
 		// return "12312";
    }


}
