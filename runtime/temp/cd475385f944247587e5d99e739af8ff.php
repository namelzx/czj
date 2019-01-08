<?php /*a:3:{s:89:"/Users/jon/Documents/项目汇总/车自主/application/index/view/maintenance/index.html";i:1543288589;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0050)https://m.chezizhu.com/main.htm#/apot/services.htm -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="renderer" content="webkit">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="chezizhu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>保养下单</title>

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

<body class="" avalonctrl="czz">
<div>
    <div class="header"></div>
    <div class="content" id="app" v-clock>
        <div>
        </div>
        <div class="block"><!--each377921076914:start-->
            <div data-include-loaded="loaded" data-include-rendered="rendered"><!--ms-include-->
                <div class="block-content" sign="page_apot_services" avalonctrl="page_apot_services">
                    <div class="row">
                        <div class="block-header">
                            <div class="top">
                                <div class="top-l">
                                    <a class="top-l-btn" href="index"><span><i
                                            class="iconfont icon-arrow-left"></i>&nbsp;返回</span></a>
                                </div>
                                <div class="top-c">
                                    请选择服务项目
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--服务列表-->
                    <div class="row">
                        <nav class="block-content s-list">
                            <!--repeat485303849591:start-->
                            <div class="s-list_btn serviceitem relative " :class="{'check':item.status===true}"
                                 v-for="(item,index) in list">
                                <a target="_blank" @click="HandeCheck(item,index)">
                                    <span class="iconfont  icon_03"></span>
                                    <!--ms-if-->
                                    <div><img :src="item.image"></div>
                                    <div class="title">{{item.name}}</div>
                                </a>
                            </div>
                            <!--repeat485303849591-->
                        </nav>
                    </div>
                    <div class="row">
                        <div class="o-footer-box ">
                            <div class="o-footer-l">
                                已选 <span class="ff4500">{{check}}</span> 项
                                <!--ms-if-->
                                <!--ms-if-->
                            </div>
                            <div class="o-footer-r mt_18 mr_10 ">
                                <button class="mb_10" @click="handeToch">确定</button>
                            </div>
                        </div>
                    </div>
                    <div style="height:75px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
</div>
<!--ms-if-->
</body>
<script>
    var app = new Vue({
        el: "#app",
        data: {
            check: 0,
            list: [],
            todos: [],
        },
        created() {
            console.log(this.GetServerByList())
        },
        methods: {
            selectSort(item) {
                item.show = !item.show;
            },
            GetServerByList() {
                axios.get('/index/maintenance/indexdata').then(res => {
                    console.log(res)
                    this.list = res.data
                })
            },
            HandeCheck(item, index) {

                for (var i = 0; i < this.todos.length; i++) {
                    if (this.todos[i] == item.id) {
                        this.todos.splice(i, 1);
                    }
                }
                if (item.status == 0) {
                    item.status = true
                    this.check += 1;
                    this.todos.push(item.id)
                } else {
                    this.check -= 1;
                    item.status = false
                }
                setCookie('by_service',this.todos)
            },
            handeToch() {
                if(  this.todos.length<1){
                    this.$toast('最少选择一项');
                    return false;
                }
                // console.log(  getCookie('shop_info'))
                window.location.href = "/index/maintenance/choose"
            }
        },
    })
</script>
</html>