<?php /*a:3:{s:89:"/Users/jon/Documents/项目汇总/车自主/application/index/view/maintenance/order.html";i:1543288095;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="/static/index/css/icheck-bootstrap.css">
</head>
<style>
    .o-title-box {
        font-size: 1.6rem;
        background-color: #FFF;
        overflow: hidden;
    }

    .btn-noselect {
        background-image: url(/static/index/images/btn-circle.png);
    }

    [class*="icheck-"] {
        min-height: 22px;
        margin-top: 12px !important;
        margin-bottom: 6px !important;
        padding-left: 12px;
        width: 9%;
        float: left;
    }

    .o-footer-l {
        font-size: 20px;
        overflow: hidden;
        position: relative;
        padding: 0 10px;
        margin-right: 120px;
        height: 52px;
        line-height: 52px;
    }

    .icheck-success > input:first-child:checked + label::before, .icheck-success > input:first-child:checked + input[type="hidden"] + label::before {
        border-radius: 100%;
    }

    [class*="icheck-"] > input:first-child + label::before, [class*="icheck-"] > input:first-child + input[type="hidden"] + label::before {
        border-radius: 100%;

    }
</style>
<body class="" avalonctrl="czz">
<div id="app" v-clock>
    <div class="row">
        <div class="block-header">
            <div class="top">
                <div class="top-l" style="visibility: ;">
                    <a class="top-l-btn" href="/"><span><i class="iconfont icon-arrow-left"></i>&nbsp;返回</span></a>
                </div>
                <div class="top-c">
                    {{car_name}}<!--html048522133806:end-->
                </div>
                <div class="top-r">
                    <a class="top-r-btn" href="<?php echo url('/index/maintenance/index'); ?>">
                        <figure class="icon-left" style="margin-top:2px"><img src="/static/index/images/icon_genghuan.png"
                                                                              class="w100"></figure>
                        更换
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row" id="big">
            <!--title-->
            <div class="block-title o-title-box ">
                <div class="o-title-box-top_left relative">
                    <figure class="icon-left"><img src="/static/index/images/icon-che.png" class="w100"></figure>
                    <span class="ml_22" id="fw">&nbsp;&nbsp;已选{{listsum}}项服务</span>
                </div>
                <!--<div class="o-title-box-top_right relative" style="width:50px;">-->
                <!--<a class="">-->
                <!--<figure class="icon-left"><img src="/static/index/images/icon-plus.png" class="w100"></figure>-->
                <!--添加-->
                <!--</a>-->
                <!--</div>-->
            </div>
            <!--title end-->

            <!--content-->
            <div class="block-content">

                <div v-for="(itmes,sindex) in list">
                    <div class="block-content">
                        <div class="rowsbox">
                            <div class="item-title-box">
                                <div class="title">
                                    <div class="otheritem">
                                        <div class="icon"><img
                                                :src="itmes.serviceinfo.image">
                                        </div>
                                        <span class="ml_30">{{itmes.serviceinfo.name}}</span></div>
                                </div>
                                <div class="delete" @click="handeldele(sindex)"><a> <img
                                        src="/static/index/images/icon-trash.png" class="top-icon"></a>
                                </div>
                            </div>
                            <div>
                                <div class="item" isprod="true" v-for="(chlid,cindex) in itmes.chlid">
                                    <div class="radio icheck-success">
                                        <input type="checkbox" :id="chlid.id" name="success"
                                               @click=" handelcheck(sindex,cindex,itmes.service_price)"
                                               v-model="selectArr"
                                               :value="chlid.id">
                                        <label :for="chlid.id"></label>
                                        <!--{{selectArr}}-->
                                    </div>
                                    <div class="middle maintitem">
                                        <div class="mainttype" @click="handelshow(sindex,cindex)">
                                            {{chlid.child_name}}
                                        </div>
                                        <div class="prod_name"> {{chlid.user[0].name}}</div>
                                    </div>
                                    <div class="price relative">¥&nbsp;{{chlid.user[0].price}}
                                        <i class="iconfont co333 absolute-r font-s10 pt_1 icon-rightArrow-copy"></i>
                                    </div>
                                    <div class="child" v-show="chlid.show">
                                        <!--repeat161961843055:start-->
                                        <div class="child_item" v-for="(service,seindex) in chlid.service"
                                             @click="handeclick(sindex,cindex,seindex)">
                                            <div class="middle"> {{service.name}}</div>
                                            <div class="price">¥&nbsp;{{service.price}}</div>
                                        </div><!--repeat161961843055-->

                                    </div>
                                </div>
                            </div>

                            <div class="item" isprod="false">
                                <div class="middle">
                                    <div class="otheritem">服务费</div>
                                </div>
                                <!--ms-if-->
                                <div class="price">¥&nbsp;{{itmes.service_price}}</div>
                            </div>

                            <!--ms-if-->
                        </div>
                    </div>
                </div><!--repeat435858309286-->


                <!--ms-if-->
            </div>

            <div class="row">
                <div class="block-title o-title-box ">
                    <div class="o-title-box-top_left  relative">
                        <figure class="icon-left"><img src="/static/index/images/red_youhui.png" class="w100"></figure>
                        <span class="ml_30">优惠券</span>
                    </div>
                    <div class="o-title-box-top_right ">
                        <a class=" relative ">
                            <span class="mr_20">选择</span>
                            <figure class="icon-right" style="top:2px;">
                                <i class="iconfont icon-rightArrow-copy"></i>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="o-footer-box ">
                    <div class="o-footer-l2 ">
                        <div>总额：<span>{{sum}}</span>元 <!--ms-if--></div>
                    </div>
                    <div class="o-footer-r mr_10 ">
                        <button class="mb_10" @click="PlaceOrder">下一步</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ms-if-->
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
                listsum: 0,
                selectArr: [],
                list: [],
                show: false,
                co: 0,
                sum: 0,
                car_name: "",
                temp: {
                    data: {},
                    todos: []
                },
                postData: {
                    userinfo: {},
                    data: {},

                }
            }
        },
        created() {
            this.GetServerBylist();
            // setCookie('car_name',carname)
            this.car_name = getCookie('car_name');

        },
        methods: {
            GetServerBylist() {
                this.temp.data.models_id = "<?php echo htmlentities($res['models_id']); ?>";
                this.temp.data.bis_id = "<?php echo htmlentities($res['bis_id']); ?>";
                this.temp.todos = getCookie('by_service');
                axios.post('/index/maintenance/orderData', this.temp).then(res => {
                    this.list = res.data.data
                    this.listsum = res.data.data.length
                    for (var i = 0; i < res.data.data.length; i++) {
                        this.sum = this.sum + res.data.data[i].service_price
                    }
                })
            },
            handelshow(sindex, cindex) {
                this.list[sindex]['chlid'][cindex].show = !this.list[sindex]['chlid'][cindex].show
            },
            handeclick(sindex, cindex, seindex) {

                this.list[sindex]['chlid'][cindex]['user'][0].name = this.list[sindex]['chlid'][cindex]['service'][seindex].name
                this.list[sindex]['chlid'][cindex]['user'][0].price = this.list[sindex]['chlid'][cindex]['service'][seindex].price
                this.list[sindex]['chlid'][cindex]['user'][0].id = this.list[sindex]['chlid'][cindex]['service'][seindex].id
            },
            handelcheck(index, cindex, service_price) {
                var chlid_count = this.list[index]['chlid'].length
                if (this.list[index]['chlid'][cindex].checkbox) {
                    Vue.set(this.list[index]['chlid'][cindex], 'checkbox', false)
                    this.sum = this.sum - this.list[index]['chlid'][cindex].user[0].price
                    this.list[index].count = this.list[index].count - 1

                } else {
                    Vue.set(this.list[index]['chlid'][cindex], 'checkbox', true)
                    this.sum = this.sum + this.list[index]['chlid'][cindex].user[0].price
                    this.list[index].count = this.list[index].count + 1

                    console.log(this.list[index]['chlid'][cindex])
                }
            },
            //删除数据
            handeldele(index) {
                this.sum = this.sum - this.list[index].service_price
                for (var i = 0; i < this.list[index]['chlid'].length; i++) {
                    if (this.list[index]['chlid'][i].checkbox) {
                        this.sum = this.sum - this.list[index]['chlid'][i].user[0].price
                    }
                }
                this.list.splice(index, 1)
            },
            PlaceOrder() {
                var _this = this;
                var che = 0;
                var userinfo = JSON.parse(getCookie('shop_info'));
                this.postData.userinfo = userinfo
                this.postData.userinfo.car_name = this.car_name
                this.postData.userinfo.sum_price = this.sum
                this.postData.data = this.list
                for (var i = 0; i < this.list.length; i++) {
                    if (this.list[i]['count'] > 0) {
                        che++;
                    }
                }
                if (che == 0) {
                    _this.$toast('你没有选择任何一项服务');
                    return false
                }
                axios.post('/index/maintenance/PostOrder', this.postData).then(res => {
                    if (res.data.status == 204) {
                        _this.$toast(res.data.msg);
                    } else if (res.data.status == 200) {
                        _this.$toast(res.data.msg);
                        setTimeout(window.location.href = '/index/user/maintenance', 500)
                    }
                })
            }

        }
    })
</script>

</html>