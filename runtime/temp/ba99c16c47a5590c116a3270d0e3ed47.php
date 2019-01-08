<?php /*a:3:{s:84:"/Users/jon/Documents/项目汇总/车自主/application/index/view/user/usedcar.html";i:1543289045;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
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

    <style>

        .content {
            margin: 10px;
        }

        .van-cell {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .list-items {
            background: #fff;
        }

        .content-text {
            font-size: 13px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body class="" avalonctrl="czz">
<div>
    <div class="header"></div>
    <div class="content" id="app" v-clock>
        <div>
        </div>
        <div class="block">
            <div data-include-loaded="loaded" data-include-rendered="rendered">

                <div class="" sign="bp_order_orderlist" avalonctrl="bp_order_orderlist">
                    <div class=" font-s15 examcarlist">
                        <header>
                            <div class="top">
                                <a href="/">
                                    <div class="top-l"><span><i class="iconfont icon-arrow-left"></i>&nbsp;返回</span>
                                    </div>
                                </a>
                                <div class="top-c">评估订单订单</div>
                            </div>
                        </header>
                        <div style="height:51px;">


                        </div>
                        <!--repeat69053984852:start--><!--repeat69053984852:end-->
                        <div class="mn-nolist" v-show="show">还没有提交保养订单</div>
                        <!--ms-if-->
                        <div class="ht60">


                            <van-list
                                    v-model="loading"
                                    :finished="finished"
                                    @load="onLoad">

                                <div class="list-items" v-for="items in list">
                                    <van-cell title="评估订单" is-link>
                                        <span>{{items.status|statusFilter}}</span>
                                    </van-cell>
                                    <div class="content">
                                        <div class="content-text">
                                            <span>估价车型:</span><span>
                                            {{items.car_name}}
                                        </span>
                                        </div>
                                        <div class="content-text">
                                            <span>行驶里程:</span><span>{{items.mileage}}公里</span>
                                        </div>
                                        <div class="content-text">
                                            <span>评估机构:</span><span>{{items.institutions}}</span>
                                        </div>
                                        <div class="content-text">
                                            <span>提交时间:</span><span>{{items.create_time}}</span>
                                        </div>
                                    </div>


                                </div>
                            </van-list>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var app = new Vue({
        el: "#app",
        data() {
            return {
                show: false,
                list: [],
                finished: false,
                id: 1,
                loading: false,
                to: 0,
                listQuery: {
                    page: 1,
                    limit: 1,
                },
            }
        },
        created() {
            // this.GetOrderByList();
            this.onLoad();
        },
        filters: {
            statusFilter(status) {
                const statusMap = {
                    0: "待审核",
                    1: "已审核",
                    2: "已完成",
                };
                return statusMap[status];
            },
        },
        methods: {

            onLoad() {
                setTimeout(() => {
                    _this = this
                    axios.get('/index/user/usedcar', {
                        params: {
                            //请求参数
                            page: _this.listQuery.page,
                            limit: _this.listQuery.limit,

                        }
                    }).then(function (response) {


                        _this.to = response.data.total

                        if (_this.to == 0) {
                            _this.loading = false;
                            _this.$toast('还没有提交订单');
                            _this.finished = true;
                            _this.show = true
                        }
                        for (var i = 0; i < response.data.data.length; i++) {
                            _this.list.push(response.data.data[i])
                        }
                    })
                    console.log(_this.list)
                    _this.listQuery.page++
                    _this.loading = false;
                    setTimeout(() => {
                        if (_this.list.length >= _this.to) {
                            _this.finished = true;
                        }
                    }, 500)
                    // if(_this.list.length = _this.to){
                    //     _this.$toast('没有更多了');
                    // }
                }, 500);
            },
        }
    })
</script>
</body>
</html>