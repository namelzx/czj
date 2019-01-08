<?php

namespace app\common\model;

use think\Model;

class Deal extends BaseModel
{

 	public function getdeallist(){

 		return $this->paginate(10);
 	}
 	// 获取默认数据 $data 是查询条件   status 是默认的查询状态。我们的查询状态是未审核的
 	public function getNormaldeall($data=[],$status=0){

 		$data['status']	=	$status;
 		$oreder	=	['id'=>'desc'];
 		$res	=	$this->where($data)->order($oreder)->paginate(5);

 		return $res;
 	}
 	// category_id 分类id
 	// city_id 城市id
 	// limit //默认十条
 	public function getNormalDealcategorycityid($category_id,$city_id,$limit=10)
 	{
 		$data	=	[
 			'end_time'	=>	['gt',time()],// 这里是条件。 我们获取的数据结束时间必须要大于开始时间
 			'category_id'	=> $category_id,
 			'city_id'	=>	$city_id,
 			'status'	=>	1,
 		];
 		$order = [
				'listorder' => 'desc',
				'id' => 'desc',
			];

			$res = $this->where($data)->order($order);
			if($limit)
			{
			$res = $res->limit($limit);
			}
			return $res->select();
 	}

 	public  function getDealbylist( $data = [], $order){
 		if(!empty($order['order_sales']))
 		{
 			$orders['buy_count']	=	'desc';
 		}
 			if(!empty($order['order_price']))
 		{
 			$orders['current_price']	=	'desc';
 		}
 			if(!empty($order['order_time']))
 		{
 			$orders['create_time']	=	'desc';
 		}
 		$orders['id']	=	'desc';
 		$datas[]	="end_time >".time();
 		if (!empty($data['se_category_id'])) {
 			$datas[]	=	"find_in_set(".$data['se_category_id'].",se_category_id)";
 			# code...
 		}if (!empty($data['category_id'])) {
 			$datas[]	=	'category_id	='.$data['category_id'];
 			# code ...
 		}
 		if (!empty($data['city_id'])) {
 			$datas[]	=	'city_id	='.$data['city_id'];
 			# code...
 		}
 		$datas[]	='status=1';
 		$res 	=	$this->where(implode(' AND ', $datas))
 		->order($orders)
 		->paginate(20);

 		return $res;
 	}

 	public  function  order(){
        return $this->hasOne('order','deal_id');//hasOne是一对一


    }
    
    
    
}
