<?php

namespace app\common\model;

use think\Model;

class Bisaccount extends BaseModel
{

    public function updatebyId($data,$id){

    	
  			// 过滤数组中非数据库表的字段
    		return $this->allowfield(true)->save($data,['id'=>$id]);

    }
  
    
}
