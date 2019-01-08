<?php /*a:3:{s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/user/login.html";i:1543243956;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>车之界</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
    <!--style-->
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
    
<script src="/static/index/js/jquery.min.js"></script>

<script src="/static/index/vant/vue.min.js"></script>
<script src="/static/index/vant/axios.min.js"></script>
<script src="/static/index/vant/vant.min.js"></script>

<script src="/static/index/common.js"></script>

</head>
<body>
<div class="content" id="app">
    <div>
    </div>
    <div class="block"><!--each2633044379587:start-->
        <div data-include-loaded="loaded" data-include-rendered="rendered"><!--ms-include-->
            <div class="block-content" sign="page_login" avalonctrl="page_login">
                <!--登录-->
                <div class="row">
                    <div class="block-header">
                        <div class="top">
                            <div class="top-l">
                            </div>
                            <div class="top-c">
                                登录
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="contact_content">
                        <div class="row pb_10">
                            <div class=" text border">
                                <figure class="icon-name-info "><img src="/static/index/images/icon_ml.png"
                                                                     class="" style="width:60%; padding-top:5px">
                                </figure>
                                <input type="tel" class="ml_25 font-s14" v-model="temp.mobile" placeholder="点击输入手机号"
                                       maxlength="11">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" border text">
                                <figure class="icon-name-info "><img src="/static/index/images/icon-yanz.png"
                                                                     class="" style="width:60%; padding-top:5px">
                                </figure>
                                <input type="password" v-model="temp.password" class="ml_25 font-s14" placeholder="密码">
                            </div>
                            <!--<div class="btn-yanz">-->
                            <!--<input type="button" class="btn  font-s14" name="input" id="input" value="获取验证码">-->
                            <!--</div>-->
                        </div>
                        <div class="row mt_10 ">
                            <input type="button" @click="login" class="text-b determine no-border-l" value="登录">
                        </div>
                        <div style="text-align: center;margin-top: 20px">
                            <a href="<?php echo url('index/user/registered'); ?>">还没有账号？去注册一个?</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    var app = new Vue({
        el: "#app",
        data() {
            return {
                temp: {
                    mobile: "",
                    password: "",
                }
            }
        },
        created() {

        },
        methods: {
            login() {
                var _this = this;
                if (_this.temp.mobile.length < 11) {
                    _this.$toast('请输入正确注册号码');
                    return false

                }
                if (_this.temp.password.length < 6) {
                    _this.$toast('密码不能少于6位');
                    return false
                }
                axios.post('/index/user/login', _this.temp).then(res => {
                    if (res.data.status == 200) {
                        _this.$toast(res.data.msg);
                        setTimeout(
                            window.location.href = "/"
                            , 500)
                    } else {
                        _this.$toast(res.data.msg);

                    }
                })
            }
        }
    })
</script>
</html>