<?php /*a:3:{s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/user/index.html";i:1543312987;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:85:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/footer.html";i:1543326325;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title></title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
    <!--style-->
<link href="/static/index/css/font_138813_d8pljrpjjz6.css?v=1.2.25.51" rel="stylesheet" type="text/css"/>
<link href="/static/index/css/jfshop.css?v=1.2.25.51" rel="stylesheet" type="text/css"/>
<link href="/static/index/css/yy.base.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/wap_reset.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/wap_common.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/wap_main.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/popup.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/select_car.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/yy.ui.css?v=1.2.25.51" rel="stylesheet" type="text/css">
<link href="/static/index/css/bp.css?v=3" rel="stylesheet" type="text/css"/>
<link href="/static/index/css/banpen.css?v=2" rel="stylesheet" type="text/css"/>

<link href="/static/index/vant/index.css" rel="stylesheet" type="text/css"/>
<style>
    [v-clock] {
        display: none;
    }

    .ms-controller {
        visibility: visible;
    }

    .us-nav-item {
        width: 33% !important;
    }
    [v-clock] {
        display: none;
    }
</style>
</head>
<body>
<div class="content">
    <div>
    </div>
    <div class="block"><!--each983663618886:start-->
        <div data-include-loaded="loaded" data-include-rendered="rendered"><!--ms-include-->
            <div class="" sign="usercenter_center" avalonctrl="usercenter_center">
                <div class=" font-s16 user_center">
                    <div class="us-hd relative">
                        <figure class="us-hd-bg">
                            <img src="http://static.chezizhu.com/m/images/user/bg_banner.jpg" class="w100 ht100">
                        </figure>
                        <div class="us-hd-info">
                            <div class="us-hd-icon" onclick="location.reload(true)">
                                <img src="http://thirdwx.qlogo.cn/mmopen/rsLDt1Tn0d9yoVB0lukbVcepZc61iaBtzz5KmJ3ia4iaw9rSHGYxfKATAvrD4icgibxfTEgiblBHtL79nUPccye0OvQmJIOe9nRgOS/132"
                                     alt="" width="100%">
                            </div>
                            <div class="us-user-info mt_10">
                                <?php echo htmlentities($user['username']); ?><br><span><?php echo htmlentities($user['mobile']); ?></span><br>
                            </div>

                        </div>
                    </div>
                    <div class="main">
                        <a href="<?php echo url('index/user/maintenance'); ?>">
                            <div class="row relative bg_white border-b mt_5">
                                <i class="iconfont icon-baoyang ml_15 font-s20  absolute-l"></i> <span
                                    class="ml_45">保养订单</span>
                                <i class="iconfont icon-rightArrow-copy mr_15 font-s15 pt_2 absolute-r"></i>
                            </div>
                        </a>
                        <a href="<?php echo url('index/user/whosecar'); ?>">
                            <div class="row relative bg_white border-b">
                                <i class="iconfont icon-xinxifuwuyewuyujingcheliangniandushenyan ml_15 font-s20  absolute-l mt_2"></i>
                                <span class="ml_45">审车订单</span>
                                <i class="iconfont icon-rightArrow-copy fr mr_15 font-s15 pt_2 absolute-r"></i>
                            </div>
                        </a>

                        <a href="<?php echo url('index/user/insurance'); ?>">
                            <div class="row relative bg_white border-b">
                                <i class="iconfont icon-chexianguanli ml_15 font-s20  absolute-l"></i> <span
                                    class="ml_45">保险订单</span>
                                <i class="iconfont icon-rightArrow-copy fr mr_15 font-s15 pt_2 absolute-r"></i>
                            </div>
                        </a>
                        <a href="<?php echo url('index/user/usedcar'); ?>">
                            <div class="row relative bg_white border-b">
                                <i class="iconfont icon-12 ml_15 font-s20  absolute-l mt_2"></i> <span
                                    class="ml_45">二手车估价订单</span>
                                <i class="iconfont icon-rightArrow-copy fr mr_15 font-s15 pt_2 absolute-r"></i>
                            </div>
                        </a>
                        <!--<div class="row relative bg_white border-b mt_5">-->
                        <!--<i class="iconfont icon-huodong ml_15 font-s20  absolute-l mt_2"></i> <span class="ml_45">我的优惠券</span>-->
                        <!--<i class="iconfont icon-rightArrow-copy fr mr_15 font-s15 pt_2 absolute-r"></i>-->
                        <!--</div>-->
                        <!---->
                        <a href="<?php echo url('index/user/login'); ?>">
                            <div class="row relative bg_white border-b">
                                <i class="iconfont icon-zhuxiao ml_15 font-s20 absolute-l mt_2"></i> <span
                                    class="ml_45">安全退出</span>
                            </div>
                        </a>
                    </div>
                    <div class="ht60"></div>
                    <div class="us-nav">
    <a href="/" class="us-nav-item" style="text-align:center;">
        <figure class="mt_3">
            <i class="iconfont icon-shouye font-s22"></i>
        </figure>
        <span>首页</span>
    </a>
    <a href="<?php echo url('index/servicer/index'); ?>" class="us-nav-item ">
        <figure class="mt_3">
            <i class="iconfont icon-dianpu font-s22"></i>
        </figure>
        <span>门店导航</span>
    </a>


    <!--<a href="/main.htm#/model/evaluation_list.htm" class="us-nav-item ">-->
        <!--<figure class="mt_3">-->
            <!--<i class="iconfont icon-pingjia font-s22"></i>-->
        <!--</figure>-->
        <!--<span>服务评价</span>-->
        <!--&lt;!&ndash;http://static.chezizhu.com/m/gywm.html?v=1.2.25.51&ndash;&gt;-->
    <!--</a>-->
    <a href="<?php echo url('index/user/index'); ?>" class="us-nav-item ">
        <figure class="mt_3">
            <i class="iconfont icon-30 font-s22"></i>
        </figure>
        <span>个人中心</span>
    </a>

</div>

                </div>
            </div>
            <style type="text/css">
                .us-nav-item {
                    width: 25%;
                }
            </style>
        </div>
    </div>
</div>
</body>
</html>