<?php /*a:3:{s:84:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/location/index.html";i:1542112573;s:83:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/public/header.html";i:1542114329;s:83:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/public/footer.html";i:1516080436;}*/ ?>
<!--包含头部文件-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static//admin/hui/static/h-ui/css/H-ui.min.css" />
   <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <link rel="stylesheet" type="text/css" href="/static//admin/hui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static//admin/hui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static//admin/hui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/static//admin/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static//admin/hui/static/h-ui.admin/css/style.css" />
  <!-- <link rel="stylesheet" type="text/css" href="/static//admin/uploadify/uploadify.css" />。 -->

   <link rel="stylesheet" type="text/css" href="/static//admin/css/common.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>门店后台</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<style>
   .layui-upload-img{
      width: 80px;
      height: 80px;
   }
</style>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 商户入驻申请</nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"> <a class="btn btn-primary radius"
                                                                href="<?php echo url('location/add'); ?>"><i class="Hui-iconfont">&#xe600;</i> 添加分店</a></span>
        <span class="r"></span></div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">
                <th width="80">ID</th>
                <th width="100">名称</th>
                <th width="60">申请时间</th>
                <th width="60">是否为总店</th>
                <th width="60">状态</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($Bislocation) || $Bislocation instanceof \think\Collection || $Bislocation instanceof \think\Paginator): $i = 0; $__LIST__ = $Bislocation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="text-c">
                <td><?php echo htmlentities($vo['id']); ?></td>
                <td><?php echo htmlentities($vo['name']); ?></td>
                <td><?php echo htmlentities($vo['create_time']); ?></td>
                <td><?php echo htmlentities($vo['is_main']); ?></td>
                <td class="td-status"><a href="javascript:void(0)"
                                         onClick="o2o_edit('','<?php echo url('location/status',['status'=>1,'id'=>$vo['id']]); ?>','',300)"><?php echo status($vo['status']); ?></a>
                </td>
                <td class="td-manage"><a
                        style="text-decoration:none" class="ml-5"
                        onClick="o2o_edit('	','<?php echo url('location/status',['status'=>2,'id'=>$vo['id']]); ?>','',300)"
                        href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>
<!--包含头部文件-->
<script type="text/javascript" src="/static//admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/static//admin/hui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>  
<script type="text/javascript" src="/static//admin/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/static//admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/static//admin/js/common.js"></script>
	 
