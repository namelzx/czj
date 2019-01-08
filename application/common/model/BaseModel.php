<?php

namespace app\common\model;

use think\Model;

/**
* basemodel 公用的模型
*/
class BaseModel extends Model
{
	
	  protected $autoWriteTimestamp = true; //默认设置当前时间 给time字段
	  // 公共的添加模块
        public function add($data){
            $data['status'] =   0;
            // $data['create_time'] = time();
             $this->allowfield(true)->save($data);
             return $this->id;
        }
    
}