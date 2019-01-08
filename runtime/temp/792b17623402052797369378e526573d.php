<?php /*a:3:{s:81:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/order/index.html";i:1543326245;s:83:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/public/header.html";i:1542114329;s:83:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/public/footer.html";i:1516080436;}*/ ?>
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
<nav class="breadcrumb"></nav>
<div class="page-container">
    <!--<form id="form-o2o-add" method="post" action="<?php echo url('order/index'); ?>">-->
        <!--<div class="cl pd-5 bg-1 bk-gray mt-20">-->
            <!--<div class="text-c">-->


                <!--&lt;!&ndash;<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索&ndash;&gt;-->
                <!--&lt;!&ndash;</button>&ndash;&gt;-->
            <!--</div>-->
        <!--</div>-->
    <!--</form>-->
</div>

<div class="mt-20">
    <table class="table table-border table-bordered table-bg table-hover table-sort">
        <thead>
        <tr class="text-c">
            <th width="40">ID</th>
            <th width="150">保养车型</th>
            <th width="100">订单编号</th>
            <th width="150">联系电话</th>
            <th width="30">用户名</th>
            <th width="30">状态</th>
            <th width="30">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr class="text-c">
            <td><?php echo htmlentities($vo['id']); ?></td>
            <td><a href="" target="_blank"><?php echo htmlentities($vo['car_name']); ?></a></td>
            <td class="text-c"><?php echo htmlentities($vo['out_trade_no']); ?></td>
            <td><?php echo htmlentities($vo['phone']); ?></td>
            <td><?php echo htmlentities($vo['name']); ?></td>
            <td><a  href="<?php echo url('order/status',['id'=>$vo['id'],'status'=>1]); ?>"> <?php echo Hstatus($vo['status']); ?></a></td>
            <td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick=""
                                    title="使用消费码"><i
                    class="Hui-iconfont">通知</i></a></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <?php echo htmlentities($order->appends($params)->render()); ?>

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
	 
