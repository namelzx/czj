<?php /*a:3:{s:86:"/Users/jon/Documents/项目汇总/车自主/application/index/view/examcar/insure.html";i:1544444643;s:82:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/css.html";i:1543286450;s:81:"/Users/jon/Documents/项目汇总/车自主/application/index/view/public/js.html";i:1541081189;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>保险询价</title>
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
    [class*="icheck-"] > label {
        width: 50px;
    }

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
        background-color: #fc471c;
        border-color: #fc471c;
    }

    [class*="icheck-"] {
        height: 30px;
    }

    .insurein .mains .item .itemname {
        margin-left: 0px;
    }

    .icheck-success > input:first-child:checked + label::before, .icheck-success > input:first-child:checked + input[type="hidden"] + label::before {
        border-radius: 100%;
    }

    .icheck-success > input:first-child:not(:checked):not(:disabled):hover + label::before, .icheck-success > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before {
        border-color: #fc471c;
        border-radius: 100%;
    }

    [class*="icheck-"] > input:first-child + label::before, [class*="icheck-"] > input:first-child + input[type="hidden"] + label::before {
        border-radius: 100%;
    }

</style>

<div id="app"  v-clock>
    <div class="header"></div>
    <div class="content">
        <div>
        </div>
        <div class="block"><!--each581094173992:start-->
            <div data-include-loaded="loaded" data-include-rendered="rendered"><!--ms-include-->
                <div class="block-content" sign="bd_insure_index" avalonctrl="bd_insure_index">
                    <div class="insurein">
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
                                <div class=" ml_10">
                                    <div class="absolute-l ml_10"><i class="iconfont icon-qiye-copy co6b"></i> 保险公司：
                                    </div>
                                    <div class="right">
                                        <select class="co333" v-model="companyname">
                                            <option v-for="items in company " :value="items.name">
                                                {{items.name}}
                                            </option>

                                        </select>
                                    </div>

                                </div>

                            </div>

                            <!--repeat41334591343:start-->
                            <div v-for="(items,index) in list ">
                                <div class="item ml_25">{{items.name}}</div>

                                <div class="bg_white pl_20" v-for=" (dd,dindex)  in items.list ">
                                    <div class="item relative pr_20 border-b">
                                        <div class="radio icheck-success">
                                            <input type="checkbox" :id="dd.name" :checked="dd.che"
                                                   @click="handelche(index,dindex,dd.name)"
                                                   :name="dd.name"
                                                   :value="dd.name">
                                            <label :for="dd.name">  </label>
                                        </div>
                                        <span class="itemname">{{dd.name}}</span>
                                        <div class="itemcontent ml_35 relative" v-for="des in dd.desc">
                                            <!--repeat813951521046:start-->
                                            <div class="absolute-l line-h32 co6b"><span>{{des.name}}：</span></div>
                                            <div class="ml_80 line-h32 jiap">
                                                <!--repeat613773294933:start-->
                                                <div class="jia co6b" v-for="(itemli,tindex) in des.list ">
                                                    <div class="radio icheck-success">
                                                        <input type="radio" :checked="itemli.che"
                                                               @click="handelrad(index,dindex,dd.name,itemli.name)"
                                                               :id=" itemli.name"

                                                               :value="itemli.name">
                                                        <label :for="itemli.name"> {{itemli.name}} </label>
                                                    </div>

                                                </div><!--repeat613773294933-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <a @click="handelpost">
                                <div class="footerbtn">
                                    下一步
                                </div>
                            </a>
                        </div>
                        <div style="height:20px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
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
                countries: [],
                companyname: "",
                datapost: [{name: '交通事故责任强制保险'},{name: '车船税'},],
                temp: {
                    companyname: "",
                    data: "",
                },
                company: [{id: 1, name: "太平洋车辆保险"},
                    {id: 2, name: "人保车辆保险"},
                    {id: 3, name: "平安车辆保险"},
                    {id: 4, name: "中国人寿财险"},
                    {id: 5, name: "中煤车辆保险"},
                    {id: 6, name: "阳光车辆保险"}],
                list: [
                    {
                        name: '强制保险', list: [
                            {id: 1, name: "交通事故责任强制保险", che: true},
                            {id: 2, name: "车船税", che: true}
                        ]
                    }, {
                        name: '商业保险', list: [
                            {id: 1, name: "机动车损失险", che: false},
                            {id: 2, name: "无法找到第三方", che: false},
                            {
                                id: 3, name: "第三方责任险", che: false, desc: [{
                                    name: "赔付额度",
                                    list: [
                                        {
                                            id: 1,
                                            name: '50万',
                                            che: false
                                        },
                                        {
                                            id: 2,
                                            name: '100万',
                                            che: false
                                        },
                                        {
                                            id: 3,
                                            name: '150万',
                                            che: false
                                        },
                                        {
                                            id: 4,
                                            name: '200万',
                                            che: false
                                        },
                                        {
                                            id: 5,
                                            name: '250万',
                                            che: false
                                        },
                                        {
                                            id: 6,
                                            name: '300万',
                                            che: false
                                        }
                                    ]
                                }],

                            },
                            {id: 4, name: "车上人员责任险", che: false},
                            {id: 5, name: "全车盗抢险", che: false},
                            {
                                id: 6, name: "玻璃单独破碎险", che: false, desc: [{
                                    name: "赔付额度",
                                    list: [{
                                        id: 1,
                                        name: '进口',
                                    },
                                        {
                                            id: 2,
                                            name: '国产',
                                        }
                                    ]
                                }],
                            },
                            {id: 7, name: "自燃损失险", che: false},
                            {
                                id: 8, name: "车身划痕险", che: false, desc: [{
                                    name: "赔付额度",
                                    list: [{
                                        id: 1,
                                        name: '2千',
                                    },
                                        {
                                            id: 2,
                                            name: '5千',
                                        },
                                        {
                                            id: 3,
                                            name: '1万',
                                        },
                                        {
                                            id: 4,
                                            name: '2万',
                                        }
                                    ]
                                }],
                            },
                            {id: 9, name: "不计免赔特约线", che: false},
                            {id: 10, name: "发动机涉水险", che: false},
                            {id: 11, name: "新增设备损失险", che: false},
                            {id: 12, name: "车上货物责任险", che: false},
                            {id: 13, name: "修理期间费用补偿险", che: false},
                        ]
                    },

                ],
            }
        },
        created() {
            console.log( getCookie('insurance'))
        },
        methods: {
            handelche(index, dindex, name) {
                var _this=this;
              if(name==="交通事故责任强制保险"){

                  return false
              }
                for (var i = 0; i < this.datapost.length; i++) {
                    if (this.datapost[i].name == name) {
                        this.datapost.splice(i, 1)
                        return false
                    }
                }
                if (this.list[index].list[dindex].desc) {
                    for (var i = 0; i < this.list[index].list[dindex].desc.length; i++) {
                        this.datapost.push({name: name, tname: this.list[index].list[dindex].desc[0].list[0].name})
                        return false
                    }
                }
                this.datapost.push({name: name})
                console.log(this.datapost)
            },
            handelrad(index, dindex, name, tname) {

                var _this = this;
                for (var i = 0; i < this.datapost.length; i++) {
                    if (this.datapost[i].name == name) {
                        this.datapost[i].tname = tname
                    }
                }
            },
            handelpost() {
                var count = this.datapost.length;
                var _this = this;
                if (this.companyname.length < 1) {
                    _this.$toast('请选择保险公司');
                    return false;
                }
                if (count < 1) {
                    _this.$toast('请选择保险项');
                    return false;
                }
                _this.temp.companyname = this.companyname
                _this.temp.data = this.datapost


                var str = JSON.stringify(_this.temp);//独享转字符串
                setCookie('insurance', str)

                console.log(_this.datapost)
                if( getCookie('insurance')!=null){

                    window.location.href = "/index/examcar/infor"

                }

            }

        }
    })
</script>
</html>