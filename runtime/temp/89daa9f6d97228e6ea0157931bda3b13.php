<?php /*a:1:{s:89:"/Users/jon/Documents/项目汇总/车自主/application/index/view/index/maintenance.html";i:1544536655;}*/ ?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://unpkg.com/vue"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta content="telephone=no" name="format-detection">
    <!--style-->
    <link href="/static/index/css/font_138813_d8pljrpjjz6.css?v=1.2.25.51" rel="stylesheet" type="text/css">
    <link href="/static/index/css/jfshop.css?v=1.2.25.51" rel="stylesheet" type="text/css">
    <link href="/static/index/css/yy.base.css?v=1.2.25.51" rel="stylesheet" type="text/css">
    <link href="/static/index/css/wap_reset.css?v=1.2.25.51" rel="stylesheet" type="text/css">
    <link href="/static/index/css/wap_common.css?v=1.2.25.51" rel="stylesheet" type="text/css">
    <link href="/static/index/css/wap_main.css?v=1.2.25.51" rel="stylesheet" type="text/css">
    <link href="/static/index/css/popup.css?v=1.2.25.51" rel="stylesheet" type="text/css">
    <link href="/static/index/css/select_car.css?v=1.2.25.51" rel="stylesheet" type="text/css">
    <link href="/static/index/css/yy.ui.css?v=1.2.25.51" rel="stylesheet" type="text/css">
    <link href="/static/index/css/bp.css?v=3" rel="stylesheet" type="text/css">
    <link href="/static/index/css/banpen.css?v=2" rel="stylesheet" type="text/css">

    <link href="/static/index/vant/index.css" rel="stylesheet" type="text/css">
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
    <link href="/static/index/css/bysc.css" rel="stylesheet" type="text/css">


    <style>
        .van-tabs__wrap--scrollable .van-tab {
            flex: 0 0 35%;
        }

        body {
            background: #fff;

        }

        .van-tab__pane {
            border-bottom: 1px solid #eee;
        }

        .van-tab--active {
            font-weight: bold;
            font-size: 17px;
        }

        .dtitle {
            height: 50px;
            line-height: 50px;
            text-align: center;
            text-indent: 35px;
            font-size: 13px;
            white-space: nowrap;
            overflow: hidden;
            background-color: #eee;
            color: black;
        }

        .left-btn, .right-btn {
            z-index: 999999999999;
            position: absolute;
            top: 70px;
        }

        img {
            width: 15px;
            height: auto;
        }

        .left-btn {
            left: 10px;
        }

        .right-btn {
            right: 5px;
        }

        .attention-line {
            z-index: 999999999999;
            position: absolute;
            top: 155px;
        }

        .attention-line img {
            width: 100%;
        }

        .kilo-img {
            /*z-index: 999999999999;*/
            position: absolute;
            top: 15px;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .kilo-img img {
            width: 30%;
        }

        .kilo-img div {
            position: relative;
            display: inline-block;
            width: 32%;
            /*top: 0px;*/
            /*left: 10%;*/
        }

        .van-tabs__content {
            margin-top: 130px;
        }

        .banner-intro {
            text-align: center;
        }

        .van-tabs--line .van-tabs__wrap {
            margin-top: 50px;
        }
    </style>
</head>

<body>
<header>
    <div class="topbar">
        <div class="btn-back" >

        </div>
        <div class="title">
            <span>保养手册</span>
        </div>
    </div>
</header>
<main>

    <div id="app">
        <van-tabs v-model="active" @click="onClick">
            <van-tab v-for="(items,index) in list" :title="items.name" >

            </van-tab>

        </van-tabs>
        <div class="banner-intro"><span>点击调整公里数</span></div>
        <div class="dtitle">你的爱车有以下几项服务需要保养</div>

        <van-panel v-for="(items,index) in data" :title="items.name" >

        </van-panel>
        <div class="kilo-img">
            <div class="car-left"><img src="/static/index/images/icon_car_right.png" alt=""></div>
            <div class="car-center"><img src="/static/index/images/icon_car_center.png" alt=""></div>
            <div class="car-right"><img src="/static/index/images/icon_car_right.png" alt=""></div>
        </div>
        <div class="left-btn blink">
            <img src="/static/index/images//banner_left.png" alt="">
        </div>
        <div class="attention-line"><img src="/static/index/images/bg_border.png" alt=""></div>
        <div class="right-btn blink"><img src="/static/index/images/banner_right.png" alt=""></div>
    </div>


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
                    active: 1,
                    list: [],
                    data: [],
                }
            },
            created() {
                this.GetDataByList()
            },
            methods: {
                onClick(index, title) {
                    console.log(1)
                    this.data = this.list[index].items
                    if (this.data.length < 1) {
                        this.$toast('该里程尚未有数据');

                    }
                },
                GetDataByList() {
                    axios.get('/index/index/mainyear/').then(res => {
                        this.list = res.data
                        this.data = res.data[0].items
                        console.log(res
                        )
                    })
                }

            }

        })
    </script>


</main>
<div class="van-toast van-toast--text van-toast--middle" style="z-index: 2002; display: none;">
    <div>该里程尚未有数据</div><!----><!----></div>
</body>
</html>