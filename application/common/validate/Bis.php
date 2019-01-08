<?php
  namespace app\common\validate;
  use 		think\Validate;
  /**
  * 
  */
  class Bis extends Validate 
  {
  	protected $rule	=	[
  		'name'	=>	'require|max:25',
  		'email'	=>	'email',
  		'logo'	=>	'require',
  		'city_id'	=>	'require',
  		'bank_info'	=>	'require',
  		'bank_name'	=>	'require',
  		'bank_user'	=>	'require',
  		'faren'	=>	'require',
  		'faren_tel'	=>	'require',
  	];
  	protected $scene	=	[

  		'add'	=>	['name','email','city_id','bank_user','bank_name','bank_info','city_id','faren','faren_tel']
  	];
  
  }