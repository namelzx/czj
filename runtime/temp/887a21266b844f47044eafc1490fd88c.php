<?php /*a:3:{s:85:"/Users/jon/Documents/项目汇总/车自主/application/index/view/examcar/index.html";i:1544433221;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
    <meta charset="UTF-8">
    <!--<title>审车服务</title>-->
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
<style>
    /*.examcarin .mains .cond{*/
        /*font-size: 1.4rem;*/
        /*margin-right: 20px;*/
        /*display: -webkit-box;*/
    /*}*/
</style>
<div class="content" id="app" v-clock>
    <div>
    </div>
    <div class="block"><!--each582889476975:start-->
        <div data-include-loaded="loaded" data-include-rendered="rendered"><!--ms-include-->
            <div class="block-content" sign="bd_examcar_index" avalonctrl="bd_examcar_index">

                <div class="examcarin">
                    <!--header-->
                    <div class="row">
                        <div class="block-header">
                            <div class="top">
                                <div class="top-l">
                                    <a class="top-l-btn"><span><i
                                            class="iconfont icon-arrow-left"></i>&nbsp;返回</span></a>
                                </div>
                                <div class="top-c">
                                    代办审车
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mains">

                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-yonghu"></i> 预约用户：</div>
                            <div class="right relative">
                                <input type="text" placeholder="请输入联系人姓名" maxlength="5" id="username"
                                       v-model="data.temp.name">
                                <div class="absolute-r mr_10">
                                    先生/女士
                                </div>
                            </div>
                        </div>
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-contact"></i> 联系电话：</div>
                            <!--ms-if-->
                            <div class="right relative">
                                <input type="tel" placeholder="请输入手机号" maxlength="11" id="mobile"
                                       v-model="data.temp.phone">
                                <!--<div class=" mr_10 verif absolute-r">-->
                                <!--更换账号-->
                                <!--</div>-->
                            </div>
                        </div>
                        <!--ms-if-->
                        <div class="title relative border-t">
                            <div class="title relative"><i class="iconfont icon-che pt_2 absolute-l"></i>
                                <div class="ml_20">请确认车辆情况：</div>
                            </div>
                            <div class="jiap">
                                <div class="ml_35 line-h32 pb_10">
                                    <!--repeat873335798026:start-->

                                    <li v-for="country in countries">{{country}}</li>


                                    <div class="cond co666" v-for="(items,index) in list">
                                        <input type='checkbox' :id='items.id' :value='items.name'  v-model='countries'/>
                                        <label :for='items.id' >{{items.name}}</label>

                                        <!--<input :id="items.id" class="chat-button-location-radio-input" type="checkbox"-->
                                              <!--value="cl"/>-->
                                        <!--<label :for="items.id" @click="handeClick(index)">{{items.name}}</label>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-shijian"></i> 上户日期：</div>
                            <div class="right relative">
                                <div class="showdate w100 co333"><span class="word">{{data.temp.doortime}}</span> <span
                                        class="absolute-r"><i class="iconfont icon-xialajiantou mr_10"></i></span></div>
                                <input type="date" class="date mt_10" v-model="data.temp.doortime">
                            </div>

                        </div>
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-feiyong"></i>预计费用：</div>
                            <div class="right">
                                <div class="ff4500"><span>¥ </span>{{data.temp.price}}.00</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="footerbtn" @click="handelPost">
                        预约审车
                    </div>
                </div>
                <div style="height:20px;"></div>

            </div>

        </div>
    </div>
</div>

<script src="/static/index/js/jquery.min.js"></script>

<script src="/static/index/vant/vue.min.js"></script>
<script src="/static/index/vant/axios.min.js"></script>
<script src="/static/index/vant/vant.min.js"></script>

<script src="/static/index/common.js"></script>

<script type="text/javascript">
    var app = new Vue({
        el: "#app",
        data() {
            return {
                countries: [],
                data: {
                    temp: {
                        name: "",//用户名
                        phone: "",//手机号码
                        doortime: "2018-1-1",//上户时间
                        price: 300,//预计费用
                    },
                    data: []
                },
                list: [{
                    id: 1,
                    name: "违章已处理",
                    che: false
                }, {
                    id: 2,
                    name: "非营运",
                    che: false
                },  {
                    id: 3,
                    name: "车辆无改装",
                    che: false
                }, {
                    id: 4,
                    name: "七座及七座以上",
                    che: false
                },{
                    id: 5,
                    name: "保险未过期",
                    che: false
                },]
            }
        },
        created() {


        },
        methods: {
            handeClick(index) {
                if (this.list[index].che===true) {
                    this.list[index].che = false
                } else {
                    this.list[index].che = true
                }
                console.log(     this.list[index].che)
                // this.list[index].che = !this.list[index].che


            },
            handelPost() {
                var _this = this;
                if (this.data.temp.name.length < 1 || this.data.temp.phone.length < 1) {
                    _this.$toast('请检查用户名或者联系方式是否填写')
                    return false
                }
                var checou = 0;
                for (var i = 0; i < _this.countries.length; i++) {
                        checou++;
                }
                if (checou < 1) {
                    _this.$toast('最少选择一个车辆情况选项')
                    return false
                }
                // return false
                _this.data.data = _this.countries;
                axios.post('/index/examcar/WhosecarAdd', _this.data).then(res => {
                    console.log(res)
                    _this.$toast(res.data.msg);
                    setTimeout(window.location.href = '/index/user/whosecar', 500)
                })
            }
        }
    })
</script>
</body>
</html>