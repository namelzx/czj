<?php /*a:3:{s:90:"/Users/jon/Documents/项目汇总/车自主/application/index/view/maintenance/choose.html";i:1543286585;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="chezizhu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title></title>
</head>
<body>
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
<div class="content">
    <div>
    </div>
    <div class="block"><!--each141044148862:start-->
        <div data-include-loaded="loaded" data-include-rendered="rendered"><!--ms-include-->
            <style>
                body, .content, .block, .block > div, .car-index, body > div {
                    height: 100%;
                }

                .block-l {
                    width: 35%;
                    float: left;
                    height: 100%;
                    overflow-y: scroll;
                    -webkit-overflow-scrolling: touch;
                }

                .block-l .car-list {
                    margin-right: 0;
                }

                .block-r {
                    height: 100%;
                    overflow-y: scroll;
                    -webkit-overflow-scrolling: touch;
                }
            </style>
            <div class="" sign="page_car" style="height: 100%;" avalonctrl="page_car" id="app" v-clock>

                <div class="car-index">
                    <div class="block-l">

                        <div class="car-list car-list-all">
                            <div class="car-title">全部车型</div>
                            <div class="car-item " v-for="(items,index) in carbrand" @click="handecurrent(index)"
                                 :class="{'car-selected':index===current}">
                                {{items.brand}}
                            </div>
                        </div>
                    </div>
                    <div class="block-r">
                        <!--ms-if-->
                        <div id="firstpane" class="menu_list">
                            <div v-for="(items,index) in manufactor">
                                <!--<template v-for="(inde in manufactor">-->
                                <h3 class="menu_head current" @click="handemanu(index,items.id)">
                                    {{items.manufactor}} </h3>
                                <div :class="{'manufactorin':index===manufactorin}" class="menu_body">
                                    <template v-for="models in carmodels">
                                        <a @click="handelmodel(models.id)">{{models.model}}</a>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                    <van-popup v-model="show">

                        <van-cell-group>
                            <template v-for="info in carinfo">
                                <van-cell @click="handeinfo(info.id,info)" :title="info.name" :value="info.year" :label="info.displacement"/>
                            </template>
                        </van-cell-group>
                    </van-popup>
                </div>
            </div>
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

    $(document).ready(function () {
        $("#firstpane .menu_body:eq(0)").show();
        $("#firstpane h3.menu_head").click(function () {

            $(this).addClass("current").next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
            $(this).siblings().removeClass("current");
        });
        $("#secondpane .menu_body:eq(0)").show();
        $("#secondpane h3.menu_head").mouseover(function () {
            $(this).addClass("current").next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
            $(this).siblings().removeClass("current");
        });
    });

    var app = new Vue({
        el: "#app",
        data: {
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
                    })
                }
            },
            handecurrent(index) {
                this.manufactorin = null
                this.current = index
                this.manufactor = this.carbrand[index].course
            },
            handelmodel(c_id) {
                axios.get('/index/maintenance/carinfo', {params: {id: c_id}}).then(res => {
                    this.carinfo = res.data
                    this.show = true
                    console.log(res)
                })
            },
            handeinfo(id,info){
                // setCookie('carinfo',id)
                var carname=info.name+'-'+info.year+'-'+info.displacement;
                setCookie('car_name',carname)
                this.show=false
                var str=JSON.parse(getCookie('shop_info'))
                window.location.href='/index/maintenance/order?models_id='+id+'&bis_id='+str.bis_id

            }
        }
    })
</script>
<style>
    .van-popup {
        width: 300px;
    }

    .manufactorin {
        display: contents !important;
    }

    .menu_body {
        display: none;
    }
    .menu_list {
        width: 268px;
        margin: 0 auto;
    }
    .menu_head {
        height: 47px;
        line-height: 47px;
        padding-left: 38px;
        font-size: 14px;
        color: #525252;
        cursor: pointer;
        border-left: 1px solid #e1e1e1;
        border-right: 1px solid #e1e1e1;
        border-bottom: 1px solid #e1e1e1;
        border-top: 1px solid #F1F1F1;
        position: relative;
        margin: 0px;
        font-weight: bold;
        background: #f1f1f1 url(images/pro_left.png) center right no-repeat;
    }
    .menu_list .current {
        background: #f1f1f1 url(images/pro_down.png) center right no-repeat;
    }
    .menu_body {
        line-height: 38px;
        border-left: 1px solid #e1e1e1;
        backguound: #fff;
        border-right: 1px solid #e1e1e1;
    }
    .menu_body a {
        display: block;
        height: 38px;
        line-height: 38px;
        padding-left: 38px;
        color: #777777;
        background: #fff;
        text-decoration: none;
        border-bottom: 1px solid #e1e1e1;
    }

    .menu_body a:hover {
        text-decoration: none;
    }
</style>
</html>