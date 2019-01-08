<?php /*a:3:{s:86:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/deal/insurance.html";i:1544428129;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/header.html";i:1543127366;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/footer.html";i:1541487880;}*/ ?>
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
<style>
    img {
        width: 70px;
        height: 70px;
    }

    #myModal img {
        width: 100%;
        height: 80%;
    }

</style>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 审核保险预约</nav>
<div class="page-container">

    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">
                <th width="50">ID</th>
                <th>预约用户</th>
                <th>联系电话</th>
                <th>保险公司</th>
                <th>驾驶证正面</th>
                <th>驾驶证反面</th>
                <th>身份证正面</th>
                <th>身份证反面</th>
                <th>提交时间</th>
                <th>状态</th>
                <th>查看详情</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="text-c">
                <td><?php echo htmlentities($vo['id']); ?></td>
                <td><?php echo htmlentities($vo['name']); ?></td>
                <td><?php echo htmlentities($vo['phone']); ?></td>
                <td><?php echo htmlentities($vo['companyname']); ?></td>
                <td><a data-toggle="modal" data-target="#myModal" onclick="showimg('<?php echo htmlentities($vo['JiaShiBenZ']); ?>')"><img
                        src="<?php echo htmlentities($vo['JiaShiBenZ']); ?>"></a></td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" onclick="showimg('<?php echo htmlentities($vo['JiaShiBenF']); ?>')">
                        <img src="<?php echo htmlentities($vo['JiaShiBenF']); ?>">
                    </a></td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" onclick="showimg('<?php echo htmlentities($vo['ShenFenzhengZ']); ?>')">
                        <img src="<?php echo htmlentities($vo['ShenFenzhengZ']); ?>">
                    </a></td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" onclick="showimg('<?php echo htmlentities($vo['ShenFenzhengF']); ?>')">
                        <img src="<?php echo htmlentities($vo['ShenFenzhengF']); ?>">
                    </a>
                </td>
                <td><?php echo htmlentities(date("Y-m-d H:s",!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></td>
                <td><?php echo Tstatus($vo['status']); ?></td>
                <td><a onclick="o2o_s_edit('已选保险项','<?php echo url('deal/insurancelist',['id'=>$vo['id']]); ?>','','300')">查看</a></td>

                <td class="td-manage"><a style="text-decoration:none" class="ml-5"
                                         onclick="o2o_del('/admin/deal/istatus?id=<?php echo htmlentities($vo['id']); ?>&status=1','审核通过?')"
                                         href="javascript:;" title="审核">审核</a></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <?php echo $res; ?>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" style="width: 64%;left: 38%;top: 25%;height: 60%" role="dialog"
         aria-labelledby="myModalLabel">
        <a onclick="showhi">
            <img src="" id="img_pre">
        </a>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        </div>
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
<script type="text/javascript" src="/static//admin/uploadify/jquery.uploadify.min.js"></script>
<!--<script type="text/javascript" src="/static//admin/js/image.js"></script>-->
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="/static//admin/hui/lib/My97DatePicker/WdatePicker.js"></script>
<script>

    function modaldemo() {
        $("#modal-demo").modal("show")
    }

    function showimg(dd) {
        $("#img_pre").attr("src", dd);

        console.log();
    }

</script>
