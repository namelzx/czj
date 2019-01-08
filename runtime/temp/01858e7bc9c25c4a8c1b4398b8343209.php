<?php /*a:4:{s:83:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/index/index.html";i:1545549737;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/header.html";i:1543127366;s:83:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/menu.html";i:1544429135;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/footer.html";i:1541487880;}*/ ?>
﻿<!--包含头部文件-->
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
  <link rel="stylesheet" type="text/css" href="/static//admin/css/common.css" />
  <link rel="stylesheet" type="text/css" href="/static//admin/uploadify/uploadify.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>汽车主后台</title>
<meta name="keywords" content="车之界主后台">
<meta name="description" content="车之界">
</head>
<style>
  .layui-upload-img{
    width: 80px;
    height: 80px;
  }
</style>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="">汽车之界-主后台</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href=""></a> <span class="logo navbar-slogan f-l mr-10 hidden-xs"></span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>

			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="<?php echo url('admin/logout'); ?>">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!--包含菜单文件-->
<aside class="Hui-aside">
    <input runat="server" id="divScrollValue" type="hidden" value=""/>
    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 保养管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo url('category/index'); ?>" data-title="保养管理" href="javascript:void(0)">保养管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 服务项添加<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo url('Maintenance/index'); ?>" data-title="服务项列表" href="javascript:void(0)">服务项列表</a>
                    </li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 城市管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo url('city/index'); ?>" data-title="城市分类" href="javascript:void(0)">城市分类</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe613;</i> 商家管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo url('bis/index'); ?>" data-title="商家列表" href="javascript:void(0)">商户列表</a></li>
                    <li><a _href="<?php echo url('bis/apply'); ?>" data-title="商家入驻申请" href="javascript:void(0)">商家入驻申请</a></li>
                    <!--<li><a _href="<?php echo url('bis/dellist'); ?>" data-title="删除的商户" href="javascript:void(0)">已拒绝商户</a></li>-->
                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> 审车订单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo url('deal/index',['status'=>0]); ?>" data-title="待审核审车订单" href="javascript:void(0)">待审核审车订单</a>
                    </li>
                    <li><a _href="<?php echo url('deal/index',['status'=>1]); ?>" data-title="已审核审车订单" href="javascript:void(0)">已审核审车订单</a>
                    </li>

                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> 估价预约管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo url('deal/usedcar',['status'=>0]); ?>" data-title="未审核二手机估价" href="javascript:void(0)">未审核二手车估价</a>
                    </li>
                    <li><a _href="<?php echo url('deal/usedcar',['status'=>1]); ?>" data-title="审核二手机估价" href="javascript:void(0)">已审核二手车估价</a>
                    </li>

                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> 保险询价管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo url('deal/insurance',['status'=>0]); ?>" data-title="未审核保险预约"
                           href="javascript:void(0)">未审核保险预约</a>
                    </li>
                    <li><a _href="<?php echo url('deal/insurance',['status'=>1]); ?>" data-title="已审核保险预约"
                           href="javascript:void(0)">已审核保险预约</a>
                    </li>

                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> 保养手册<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo url('year/index'); ?>" data-title="保养手册"
                           href="javascript:void(0)">保养手册</a>
                    </li>

                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> 推荐位管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="<?php echo url('featured/add'); ?>" data-title="添加推荐位内容" href="javascript:void(0)">添加推荐位内容</a>
                    </li>
                    <li><a _href="<?php echo url('featured/index'); ?>" data-title="推荐位列表" href="javascript:void(0)">推荐位列表</a></li>

                </ul>
            </dd>
        </dl>

        <!--<dl id="menu-member">-->
            <!--<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
            <!--<dd>-->
                <!--<ul>-->
                    <!--<li><a _href="<?php echo url('user/index'); ?>" data-title="会员列表" href="javascript:;">会员列表</a></li>-->
                    <!--<li><a _href="<?php echo url('user/deleindex'); ?>" data-title="删除的会员" href="javascript:;">删除的会员</a></li>-->

                <!--</ul>-->
            <!--</dd>-->
        <!--</dl>-->
        <!--<dl id="menu-product">-->
        <!--<dt><i class="Hui-iconfont">&#xe620;</i> 订单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
        <!--<dd>-->
        <!--<ul>-->
        <!--<li><a _href="" data-title="订单列表" href="javascript:void(0)">订单列表</a></li>-->
        <!--<li><a _href="" data-title="删除的订单" href="javascript:void(0)">删除的订单</a></li>-->
        <!---->
        <!--</ul>-->
        <!--</dd>-->
        <!--</dl>-->

    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo url('index/excel'); ?>"></iframe>
		</div>
	</div>
</section>
<!--包含footer文件-->
<script type="text/javascript" src="/static//admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static//admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/static//admin/js/common.js"></script>
<script type="text/javascript" src="/static//admin/uploadify/jquery.uploadify.min.js"></script>
<!--<script type="text/javascript" src="/static//admin/js/image.js"></script>-->
