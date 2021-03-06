<?php /*a:3:{s:86:"/Users/jon/Documents/项目汇总/车自主/application/index/view/servicer/index.html";i:1543903613;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
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
</head>
<body>

<div class="content" id="app" v-clock>
    <div>
    </div>
    <div class="block"><!--each288432801377:start-->
        <div data-include-loaded="loaded" data-include-rendered="rendered"><!--ms-include-->
            <script src="/resources/js/sl.location.1.0.js?v=1.2.25.51"></script>
            <div class="block-content" sign="page_servicer_list" avalonctrl="page_servicer_list">

                <div class="row">
                    <div class="block-header">
                        <div class="top">

                            <div class="top-c">
                                门店导航
                            </div>
                            <div class="top-r" style="width:auto;">
                                <a class="top-r-btn">
                                    <span class="mr_20 pr_5 text-l line-h32" id="cs"><!--html783049085201-->
                                        <!--html783049085201:end--></span>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="block-content address">
                        <div class="block-title o-title-box ">
                            <div class="o-title-box-top_left relative " style="margin-right:0;">
                                <figure class="icon-left"><img src="/static/index/images/icon-add-se.png"
                                                               class="w100"></figure>
                                <span class="ml_20">&nbsp;门店列表</span>

                            </div>
                        </div>
                        <div class="addressbox">
                            <!-- 加载服务商 -->
                            <!--repeat013450470016:start-->
                            <div class="item over relative" v-for="(items,index) in list" @click="handelnext(items)">
                                <div class="rowsbox-door-mm">
                                    <div class="block-title no-padding">{{items.name}} <!--ms-if--> <!--ms-if-->
                                    </div>
                                    <div class="rowsbox-door-address">{{items.api_address}}</div>
                                </div>
                                <!--ms-if-->
                                <a class="addr-map" style="top:12px;"><img
                                        src="/static/index/images/icon-addr.png" class="top-icon">去这里</a>
                            </div><!--repeat013450470016--><!--repeat013450470016:end-->
                            <!--ms-if-->
                        </div>
                    </div>
                </div>
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
        data: {
            orderinfo: {},
            radio: '1',
            check: 0,
            list: [],
            todos: [],
            city: {}
        },
        created() {

            this.GetCityByList();
        },
        methods: {
            selectSort(item) {
                item.show = !item.show;
            },
            GetCityByList() {
                var acity = getCookie('city');
                this.city = JSON.parse(acity)
                axios.get('/index/maintenance/cityCity?city_id=' + this.city.id,).then(res => {
                    this.list = res.data
                    console.log(res.data)
                })
            },
            HandeCheck(item, index) {

                for (var i = 0; i < this.todos.length; i++) {
                    if (this.todos[i].id == item.id) {
                        this.todos.splice(i, 1);
                    }
                }
                if (item.status == 0) {
                    item.status = true
                    this.check += 1;
                    this.todos.push(item)
                } else {
                    this.check -= 1;
                    item.status = false
                }
                console.log(this.todos)
            },
            handelnext(items) {
                window.location.href = "https://apis.map.qq.com/uri/v1/marker?marker=coord:" + items.ypoint + "," + items.xpoint + ";title:车之界 " + items.name + ";addr" + items.api_address + "&referer=czj"
            }
        },
    })
</script>
</body>
</html>