<?php /*a:3:{s:82:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/location/add.html";i:1543807825;s:83:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/public/header.html";i:1542114329;s:83:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/public/footer.html";i:1516080436;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/static//admin/layui/css/layui.css" />
<div class="cl pd-5 bg-1 bk-gray mt-20"> 添加分店信息</div>
<article class="page-container" id="app">
    <form class="form form-horizontal">
        基本信息：
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分店名称：</label>
            <div class="formControls col-xs-8 col-sm-3">
                <input type="text" class="input-text" value="" placeholder="" v-model="temp.name">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所属城市：</label>
            <div class="formControls col-xs-8 col-sm-2">
				<span class="select-box">
                    <select class="select" v-model="barea" @change="handecurrent">
                        <option value="0">--请选择--</option>
					<option v-for="(items,index) in area" :value="items.id"
                            v-if="items.parent_id==0">{{items.name}}</option>
				    </select>
				</span>
            </div>
            <div class="formControls col-xs-8 col-sm-2">
				<span class="select-box">
				  <select name="" v-model="temp.city_id" class="select" @change="handecurrent">
                        <option value="0">--请选择--</option>
					<option v-for="(items,index) in city" :value="items.id"
                    >{{items.name}}</option>
				    </select>
				</span>
            </div>
        </div>


        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">缩略图：</label>
            <div class="formControls col-xs-8 col-sm-9">

                <div class="layui-upload">
                    <button type="button" class="layui-btn" id="file_upload">上传logo</button>
                    <div class="layui-upload-list">
                        <img class="layui-upload-img" id="file_upload1">
                        <input type="text" class="form-control" name="logo" style="display: none;" id="logo">
                        <p id="demoText"></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">地址：</label>
            <div class="formControls col-xs-8 col-sm-3">
                <input type="text" class="input-text" value="" placeholder="" v-model="temp.address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">电话:</label>
            <div class="formControls col-xs-8 col-sm-3">
                <input type="text" class="input-text" value="" placeholder="" v-model="temp.tel">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">联系人:</label>
            <div class="formControls col-xs-8 col-sm-3">
                <input type="text" class="input-text" value="" placeholder="" v-model="temp.contact">
            </div>
        </div>


    </form>
    <div class="row cl">
        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
            <button class="btn btn-primary radius" @click="handeladd" type="submit"><i class="Hui-iconfont">&#xe632;</i>
                申请
            </button>
        </div>
    </div>
</article>


<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/ueditor/1.4.3/ueditor.all.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>


</body>

<script type="text/javascript" src="/static//admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/static//admin/hui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>  
<script type="text/javascript" src="/static//admin/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/static//admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/static//admin/js/common.js"></script>
	 

<script type="text/javascript" src="/static//admin/layui/layui.js"></script>
<script type="text/javascript" src="/static//admin/js/image.js"></script>

<!--分配编辑器-->
<script>
    var SCOPE = {
        'city_url': "<?php echo url('api/city/getCitysByparentId'); ?>",
        'category_url': "<?php echo url('api/category/getcategorysByparentId'); ?>",
        // 'uploadify_swf'	: '/static//admin/uploadify/uploadify.swf',
        'image_uploadify': "<?php echo url('api/image/upload'); ?>",
        // 'uploadlayui_url'	: "<?php echo url('api/image/upload'); ?>"
    }
</script>
<script src="/static/index/vant/vue.min.js"></script>
<script src="/static/index/vant/axios.min.js"></script>

<script>
    var app = new Vue({
        el: "#app",
        data: {
            temp: {
                password: undefined,

            },
            barea: 0,
            bcity: 0,
            c_id: undefined,
            mid: undefined,
            couponSelected: undefined,
            bindex: 1,
            show: false,
            area: [],//所省份
            city: [],//所在城市
        },
        created() {

            this.GetBrandByList();

        },
        methods: {
            GetBrandByList() {
                console.log(11)
                axios.get('/bis/index/indexdata/').then(res => {
                    console.log(11)
                    this.area = res.data.city
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
                this.city = [];
                for (var i = 0; i < this.area.length; i++) {

                    if (this.area[i].parent_id == this.barea) {
                        this.city.push(this.area[i]);
                    }


                }

                // this.manufactorin = null
                // this.current = this.bindex
                // this.manufactor = this.carbrand[this.bindex].course
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
            },
            handeladd() {
                var logo = $('#logo').val();

                this.temp.logo = logo;
                console.log(this.temp)
                axios.post('/bis/location/add', this.temp).then(res => {
                    alert('申请成功');
                    window.location.href = "/bis/location/index"
                })
            }
        }
    })
</script>