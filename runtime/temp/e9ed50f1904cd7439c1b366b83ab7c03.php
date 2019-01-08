<?php /*a:3:{s:85:"/Users/jon/Documents/项目汇总/车自主/application/index/view/examcar/infor.html";i:1544444689;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>保险询价下单</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="/static/index/css/icheck-bootstrap.css">

</head>
<body>
<style>
    .van-icon {
        font-size: 25px;
        margin-top: 16px;
    }

    .borders img {
        width: 58px;
        height: 58px;
    }
</style>
<div class="content" id="app" v-clock>
    <div>
    </div>
    <div class="block"><!--each170229716974:start-->
        <!--ms-if-->
        <!--each170229716974-->
        <div data-include-loaded="loaded" data-include-rendered="rendered"><!--ms-include-->
            <div class="block-content" sign="bd_insure_infor" avalonctrl="bd_insure_infor">
                <!--
                    作者：894468157@qq.com
                    时间：2016-10-11
                    描述：保险用户信息
                -->
                <div class="insureinfor">
                    <!--header-->
                    <div class="row">
                        <div class="block-header">
                            <div class="top">
                                <div class="top-l">
                                    <a class="top-l-btn"><span><i
                                            class="iconfont icon-arrow-left"></i>&nbsp;返回</span></a>
                                </div>
                                <div class="top-c">
                                    保险询价
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header end-->
                    <div class="mains">
                        <div class="title relative">
                            <div class="absolute-l"><i class="iconfont icon-yonghu"></i> 预约用户：</div>
                            <div class="right relative">
                                <input type="text" placeholder="请输入联系人姓名" v-model="temp.name" maxlength="5"
                                       id="username">
                                <div class="absolute-r mr_10">
                                    先生/女士
                                </div>
                            </div>
                        </div>
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-contact"></i> 联系电话：</div>
                            <!--ms-if-->
                            <div class="right relative">
                                <input type="tel" placeholder="请输入联系方式" v-model="temp.phone" maxlength="11" id="mobile">

                            </div>
                        </div>
                        <!--ms-if-->
                        <div class="title relative border-t">
                            <div class="absolute-l"><i class="iconfont icon-chengshi">
                            </i> 行<span
                                    style="margin-left:7px;"></span>驶<span style="margin-left:7px;"></span>证：
                            </div>
                            <div class="right">
                                <div>请上传行驶证及身份证照片</div>
                                <!--<div class="font-s12 mr_10">-->
                                <!--<input type="file" id="choose" class="hide" accept="image/*">-->
                                <!--<div class="fl text-c mr_20" v-for="(items,index) in list ">-->
                                <!--<div class="borders relative " data-role="1">-->
                                <!--<van-uploader :after-read="add_img" >-->
                                <!--<van-icon name="photograph"></van-icon>-->
                                <!--</van-uploader>-->
                                <!--</div>-->
                                <!--<div>{{items.name}}</div>-->
                                <!--</div>-->
                                <!--<div style="clear:both;"></div>-->
                                <!--</div>-->
                                <div class="font-s12 mr_10">
                                    <input type="file" id="choose" class="hide" accept="image/*">
                                    <div class="fl text-c mr_20">

                                        <div class="borders relative " data-role="1">
                                            <img :src="temp.JiaShiBenZ" v-show="!JiaShiBenshow">
                                            <van-uploader :after-read="add_img" v-show="JiaShiBenshow">
                                                <van-icon name="photograph"></van-icon>
                                            </van-uploader>
                                        </div>
                                        <div>行驶证正本</div>
                                    </div>
                                    <div class="fl text-c mr_20">
                                        <div class="borders relative" data-role="2">
                                            <img :src="temp.JiaShiBenF" v-show="!JiaShiBenfshow">
                                            <van-uploader :after-read="add_JSF" v-show="JiaShiBenfshow">
                                                <van-icon name="photograph"></van-icon>
                                            </van-uploader>
                                        </div>
                                        <div>行驶证副本</div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="font-s12 mr_10">
                                    <div class="fl text-c mr_20">
                                        <div class="borders relative " data-role="1">
                                            <img :src="temp.ShenFenzhengZ" v-show="!ShenFenzhengshow">
                                            <van-uploader :after-read="add_SFZ" v-show="ShenFenzhengshow">
                                                <van-icon name="photograph"></van-icon>
                                            </van-uploader>
                                        </div>
                                        <div>身份证正面</div>
                                    </div>
                                    <div class="fl text-c">
                                        <div class="borders relative" data-role="2">
                                            <img :src="temp.ShenFenzhengF" v-show="!ShenFenzhengfshow">
                                            <van-uploader :after-read="add_SFF" v-show="ShenFenzhengfshow">
                                                <van-icon name="photograph"></van-icon>
                                            </van-uploader>
                                        </div>
                                        <div>身份证反面</div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>

                            </div>
                        </div>

                        <div class=" border-t">
                            <div class="pt_10 pb_10 pr_10">
                                <div class=" relative line-h24"><i
                                        class="iconfont icon-fa-file-text-1 ff4500 absolute-l pt_1"></i>
                                    <div class="ml_20">所有信息仅作为询价必要条件,车之界承诺对用户数据有保密义务</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="footerbtn" @click="PostDataAdd">
                        询价
                    </div>
                </div>
                <div style="height:20px;"></div>
            </div>
        </div>
    </div>

</body>

<script src="/static/index/js/jquery.min.js"></script>

<script src="/static/index/vant/vue.min.js"></script>
<script src="/static/index/vant/axios.min.js"></script>
<script src="/static/index/vant/vant.min.js"></script>

<script src="/static/index/common.js"></script>

<script>
    var app = new Vue({
        el: "#app",
        data() {
            return {
                JiaShiBenshow: true,
                JiaShiBenfshow: true,

                ShenFenzhengshow: true,
                ShenFenzhengfshow: true,
                temp: {
                    JiaShiBenZ: "",//驾驶本正面
                    JiaShiBenF: "",//驾驶本反面
                    companyname: "",//保险公司
                    ShenFenzhengZ: "",//身份证正面
                    ShenFenzhengF: "",//身份证反面
                    name: "",//用户名
                    phone: ""
                },
                postdata: {
                    temp: {},
                    data: [],
                },
                list: [
                    {id: 1, name: "行驶本正本", show: false, images_url: ""},
                    {id: 2, name: "行驶本正本", show: false, images_url: ""},
                    {id: 3, name: "身份正正面", show: false, images_url: ""},
                    {id: 4, name: "身份正反面", show: false, images_url: ""},
                ]
            }
        },
        created() {
            // console.log()
        },
        methods: {
            handy() {
                console.log(getCookie('insurance'))
            },

            add_img(event) {
                var _this = this;
                _this.$toast.loading({
                    duration: 0,
                    mask: true,
                    message: '上传中...'
                });
                let param = new FormData(); //创建form对象
                param.append("file", event.file, event.file.name); //通过append向form对象添加数据
                axios.post('/index/Examcar/upload', param).then(res => {
                    _this.$toast.clear();
                    _this.temp.JiaShiBenZ = res.data.path
                    _this.JiaShiBenshow = false

                    // console.log(res)
                })

            },
            add_JSF(event) {
                var _this = this;
                _this.$toast.loading({
                    duration: 0,
                    mask: true,
                    message: '上传中...'
                });
                let param = new FormData(); //创建form对象
                param.append("file", event.file, event.file.name); //通过append向form对象添加数据
                axios.post('/index/Examcar/upload', param).then(res => {
                    _this.$toast.clear();
                    _this.temp.JiaShiBenF = res.data.path
                    _this.JiaShiBenfshow = false

                    // console.log(res)
                })

            },
            add_SFZ(event) {
                var _this = this;
                _this.$toast.loading({
                    duration: 0,
                    mask: true,
                    message: '上传中...'
                });
                let param = new FormData(); //创建form对象
                param.append("file", event.file, event.file.name); //通过append向form对象添加数据
                axios.post('/index/Examcar/upload', param).then(res => {
                    _this.$toast.clear();
                    _this.temp.ShenFenzhengZ = res.data.path
                    _this.ShenFenzhengshow = false
                    // console.log(res)
                })

            },
            add_SFF(event) {
                var _this = this;
                _this.$toast.loading({
                    duration: 0,
                    mask: true,
                    message: '上传中...'
                });
                let param = new FormData(); //创建form对象
                param.append("file", event.file, event.file.name); //通过append向form对象添加数据
                axios.post('/index/Examcar/upload', param).then(res => {
                    _this.$toast.clear();
                    _this.temp.ShenFenzhengF = res.data.path
                    _this.ShenFenzhengfshow = false
                    // console.log(res)
                })

            },
            PostDataAdd() {
                var Gc = JSON.parse(getCookie('insurance'));
                var _this = this;
                this.temp.companyname = Gc.companyname

                if (this.temp.ShenFenzhengF == "" || this.temp.ShenFenzhengZ == "" || this.temp.JiaShiBenZ == "" || this.temp.JiaShiBenF == "") {
                    _this.$toast('请检查证件是否提交');
                    return false
                }
                if (this.temp.name == "" || this.temp.phone == "") {
                    _this.$toast('请检查联系人或手机号码是否填写');
                    return false
                }
                for (var i = 0; i < Gc.data.length; i++) {
                    this.postdata.data.push(Gc.data[i])
                }
                // this.postData.data=Gc.data
                this.postdata.temp = this.temp
                axios.post('/index/examcar/InsuranceAdd', this.postdata).then(res => {
                    _this.$toast(res.data.msg);
                    setTimeout(window.location.href = '/index/user/Insurance', 500)

                })
            }
        }

    })

</script>
</html>