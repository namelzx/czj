<?php /*a:3:{s:87:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/maintenance/add.html";i:1542115830;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/header.html";i:1543127366;s:85:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/public/footer.html";i:1541487880;}*/ ?>
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
<body >
<div class="page-container" id="app">
    <form class="form form-horizontal form-o2o-add" id="form-o2o-add" method="post" action="<?php echo url('Maintenance/save'); ?>">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>服务项目：</label>
            <div class="formControls col-xs-8 col-sm-9">

                <input type="text" class="input-text" value="" placeholder="" id="name" name="name">
            </div>
        </div>
        <div class="row cl">
        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>保养项目：</label>
        <div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="category_id" class="select">
					<option value="0">一级分类</option>
					<?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['name']); ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span>
        </div>
    </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所属车型：</label>
            <div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select  name="car_id" class="select" v-model="bindex" @change="handecurrent" >
					<option  v-for="(items,index) in carbrand" :value="index">{{items.brand}}</option>
				</select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产地：</label>
            <div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="car_id" class="select" v-model="mid" @change="chooseMedicine">
                    <option value="0">一级分类</option>
					<option  :value="items.id" v-for="(items,index) in manufactor" >{{items.manufactor}} </option>
				</select>
				</span>
            </div>

        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>型号：</label>
            <div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select  name="car_id" class="select" v-model="c_id" @change="handelmodel">
					<option value="0">一级分类</option>
					<option :value="models.id" v-for="models in carmodels">{{models.model}}</option>
				</select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>年份：</label>
            <div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="car_id" class="select" >
					<option value="0">一级分类</option>
					<option :value="models.id" v-for="models in carinfo">{{models.year}}-{{models.name}}</option>
				</select>
				</span>
            </div>

        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button type="submit" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                <button onClick="layer_close();" class="btn btn-default radius" type="button">
                    &nbsp;&nbsp;取消&nbsp;&nbsp;
                </button>
            </div>
        </div>
    </form>
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

<script src="/static/index/vant/vue.min.js"></script>
<script src="/static/index/vant/axios.min.js"></script>

<script>
    var app = new Vue({
        el: "#app",
        data: {
            c_id:undefined,
            mid:undefined,
            couponSelected:undefined,
            bindex:1,
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
            chooseMedicine(v){

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
            handeinfo(id){
                setCookie('carinfo',id)
                this.show=false
                // console.log(getCookie('carinfo'))
            }
        }
    })
</script>
