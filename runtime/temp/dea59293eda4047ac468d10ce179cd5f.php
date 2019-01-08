<?php /*a:3:{s:78:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/deal/add.html";i:1542945328;s:83:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/public/header.html";i:1542114329;s:83:"/Users/jon/Documents/项目汇总/车自主/application/bis/view/public/footer.html";i:1516080436;}*/ ?>
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
<div class="cl pd-5 bg-1 bk-gray mt-20"> 添加商品信息</div>
<article class="page-container">
    <form class="form form-horizontal" id="app">
        基本信息：
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>车型名称：</label>
            <div class="formControls col-xs-8 col-sm-3">
                <input type="text" v-model="temp.models_name" class="input-text" value="" placeholder="" id="" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-9 col-sm-2">支持门店：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="check-box" v-for="items in bis">
                    <input type="checkbox" :id="items.name" :value="items.id" v-model="temp.location_ids">
                    <label :for="items.name">{{items.name}}</label>
                </div>
                {{temp.location
                }}
            </div>
        </div>
        内容添加：
        <div class="row cl">
            <div class="row cl">
                <div class="text-c">
                    <div class=" ">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所属车型：</label>
                        <div class="formControls col-xs-8 col-sm-2">
                            <div class="select-box">
                                <select name="car_id" class="select" v-model="bindex" @change="handecurrent">
                                    <option v-for="(items,index) in carbrand" :value="index">{{items.brand}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产地：</label>
                        <div class="formControls col-xs-8 col-sm-2">
                            <div class="select-box">
                                <select name="car_id" class="select" v-model="mid" @change="chooseMedicine">
                                    <option value="0">一级分类</option>
                                    <option :value="items.id" v-for="(items,index) in manufactor">{{items.manufactor}}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>型号：</label>
                        <div class="formControls col-xs-8 col-sm-2">
                            <div class="select-box">
                                <select name="car_id" class="select" v-model="c_id" @change="handelmodel">
                                    <option value="0">一级分类</option>
                                    <option :value="models.id" v-for="models in carmodels">{{models.model}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>年份：</label>
                        <div class="formControls col-xs-8 col-sm-2">
                            <div class="select-box">
                                <select v-model="car_id" class="select" @change="handelyear">
                                    <option value="0">一级分类</option>
                                    <option :value="models.id" v-for="models in carinfo">
                                        {{models.year}}-{{models.name}}
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <a @click="handeladd">添加服务</a>


                <div class="row cl" v-for="(items,index) in categorytow">

                    <div class=" row cl">
                        <label class="form-label  col-xs-4 col-sm-2">
                            <span class="c-red">*</span>保养项目：</label>
                        <div class="formControls col-xs-3 col-sm-2">
                            <div class="select-box">
                                <select v-model="items.category_id" @change="handelcategory(items,index)"
                                        class="select">
                                    <option value="0">一级分类</option>
                                    <?php if(is_array($server) || $server instanceof \think\Collection || $server instanceof \think\Paginator): $i = 0; $__LIST__ = $server;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['name']); ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=" row cl">
                        <label class="form-label  col-xs-4 col-sm-2">
                            <span class="c-red">*</span>服务费用：</label>
                        <div class="formControls col-xs-3 col-sm-2">
                            <div class="select-box">
                                <input type="text" class="input-text" v-model="items.server" placeholder="" name="name">

                            </div>
                        </div>
                    </div>

                    <div v-for="(tow,intow) in items.data">
                        <div class="row cl">
                            <label class="form-label col-xs-9 col-sm-2">子级服务：</label>
                            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                                <div class="check-box">
                                    {{tow.name}}
                                </div>
                            </div>
                            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                                <div class="check-box" v-for="(three,inthree) in tow.items">
                                    <input name="category_three[]"
                                           v-model="three.checkbox"
                                           @change="changeAllthree(index,intow,inthree,three.id)" type="checkbox"
                                           id="categorythree"
                                           :value="three.id"/>
                                    {{three.name}}
                                    <div>
                                        商品价格 <input type="text" class="input-text" style="width: 40%"
                                                    v-model="three.price" placeholder="inthree.price" name="name">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
            <a class="btn btn-primary radius"  @click="handePostDeal" ><i class="Hui-iconfont">&#xe632;</i>
                提交
            </a>
        </div>
    </form>

</article>
<script>
    /**定义页面全局变量**/
    var SCOPE = {
        "city_url": "<?php echo url('api/city/getCitysByParentId'); ?>",
        "category_url": "<?php echo url('api/category/getcategorysByparentId'); ?>",
        "uploadify_swf": "/static//admin/uploadify/uploadify.swf",
        "image_upload": "<?php echo url('api/image/upload'); ?>",
    };

</script>
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
	 
<script type="text/javascript" src="/static//admin/hui/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/ueditor/1.4.3/ueditor.all.min.js"></script>
<script type="text/javascript" src="/static//admin/hui/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script src="/static//admin/hui/lib/My97DatePicker/WdatePicker.js"></script>

<script type="text/javascript" src="/static//admin/layui/layui.js"></script>
<script type="text/javascript" src="/static//admin/js/image.js"></script>

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
    // @import url("");
    var app = new Vue({
        el: "#app",
        data: {
            temp: {
                location_ids: [],
                models_name: undefined,
                models_id:undefined
            },

            bis: [],
            checked: true,
            // checkedNames: [],
            car_id: undefined,
            category_id: undefined,
            categorytow: [],
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
            rolesMenuList: [],
            menusId: [],
            checkAll: false,
            selected: [],
        },
        created() {
            this.GetBrandByList();

        },
        methods: {
            changeAllChecked(index, tow) {
                console.log(this.selected)

                // this.categorytow[index].checkedNames = this.categorytow[index].data[tow]
            },
            changeAllthree(index, intow, inthree, id) {
                console.log(this.categorytow)
            },

            handeladd() {
                let cope = {
                    category_id: "",
                    data: {},

                };
                this.categorytow.push(cope);
            }
            ,
            //
            GetBrandByList() {
                axios.get('/index/maintenance/choosedata').then(res => {
                    this.carbrand = res.data;
                    this.Manufactor = this.carbrand[this.current].course

                }),
                    axios.get('/bis/deal/GetLocationByData').then(res => {

                        this.bis = res.data
                    })


            }
            ,

            //获取保养信息
            handelcategory(row, index) {
                axios.get('/bis/deal/getCategoryByData', {
                    params: {
                        car_id: this.car_id,
                        category_id: this.categorytow[index].category_id,
                    }
                }).then(res => {
                    this.categorytow[index].data = res.data;
                })
            }
            ,

            handelyear() {

            }
            ,


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
                    })
                }
            }
            ,
            chooseMedicine(v) {
                axios.get('/index/maintenance/carmodels', {
                    params: {
                        id: this.mid
                    }
                }).then(res => {
                    console.log(res)
                    this.carmodels = res.data
                })
            }
            ,
            handecurrent() {
                console.log(this.bindex);
                this.manufactorin = null
                this.current = this.bindex
                this.manufactor = this.carbrand[this.bindex].course
            }
            ,
            handelmodel() {
                axios.get('/index/maintenance/carinfo', {params: {id: this.c_id}}).then(res => {
                    this.carinfo = res.data
                    this.show = true
                    console.log(res)
                })
            }
            ,
            //提交数据
            handePostDeal() {
                console.log(this.temp)
                this.temp.models_id=this.car_id;
                console.log(this.categorytow)
                axios.post('/bis/deal/add', {info: this.temp, serverinfo: this.categorytow}).then(res => {
                    // window.location.href="/bis/deal/index"
                })
            },
        }
    })

</script>
</body>
</html>