<?php /*a:3:{s:82:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/year/index.html";i:1543284585;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/header.html";i:1543127366;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/footer.html";i:1541487880;}*/ ?>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 分类管理 <span
        class="c-gray en">&gt;</span> 分类列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
                                              href="javascript:location.replace(location.href);" title="刷新"><i
        class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">

    <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"> <a class="btn btn-primary radius"
                                                                onclick="o2o_s_edit('添加里程','<?php echo url('year/yearadd'); ?>','','300')"
                                                                href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加里程</a></span>
        <span class="r"></span></div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">
                <th width="40"><input name="" type="checkbox" value=""></th>
                <th width="80">ID</th>
                <th width="100">名称</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="text-c">
                <td><input name="" type="checkbox" value=""></td>
                <td><?php echo htmlentities($vo['id']); ?></td>
                <td><?php echo htmlentities($vo['name']); ?></td>

                <td class="td-manage"><a href="<?php echo url('year/indexchlid',['id'=>$vo['id']]); ?>">获取子分类</a> <a
                        style="text-decoration:none" class="ml-5"
                        onClick="o2o_del('<?php echo url('year/delete',['id'=>$vo['id']]); ?>','删除里程')"
                        href="javascript:;" title="删除"><i
                        class="Hui-iconfont">&#xe6e2;</i></a></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <?php echo $res; ?>
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
<script>

    var SCOPE = {
        'listoreder_URL': "<?php echo url('category/listoreder'); ?>",

    };


</script>


<script src="/static/index/vant/vue.min.js"></script>
<script src="/static/index/vant/axios.min.js"></script>

<script>
    var app = new Vue({
        el: "#app",
        data: {
            c_id: undefined,
            mid: undefined,
            couponSelected: undefined,
            bindex: 1,
            show: false,
            activeNames: ['1'],
            manufactorin: 0,
            current: 0,
            carbrand: [],//品牌
            manufactor: [],
            carmodels: [],
            carinfo: [],
        },
        created() {

            this.GetBrandByList();

        },
        methods: {
            GetBrandByList() {
                axios.get('/index/maintenance/choosedata').then(res => {

                    this.carbrand = res.data;
                    this.Manufactor = this.carbrand[this.current].course

                })
            },
            handemanu(index, mid) {
                if (this.manufactorin == index) {
                    this.manufactorin = -1;
                } else {
                    this.manufactorin = index
                    axios.get('/index/maintenance/carmodels', {
                        params: {
                            id: mid
                        }
                    }).then(res => {
                        this.carmodels = res.data
                        // this.carbrand = res.data;
                        // this.Manufactor = this.carbrand[this.current].course
                    })
                }
            },
            chooseMedicine(v) {
                axios.get('/index/maintenance/carmodels', {
                    params: {
                        id: this.mid
                    }
                }).then(res => {
                    console.log(res)
                    this.carmodels = res.data
                })
            },
            handecurrent() {
                console.log(this.bindex);
                this.manufactorin = null
                this.current = this.bindex
                this.manufactor = this.carbrand[this.bindex].course
            },
            handelmodel() {
                axios.get('/index/maintenance/carinfo', {params: {id: this.c_id}}).then(res => {
                    this.carinfo = res.data
                    this.show = true
                    console.log(res)
                })
            },
            handeinfo(id) {
                setCookie('carinfo', id)
                this.show = false
                // console.log(getCookie('carinfo'))
            }
        }
    })
</script>
