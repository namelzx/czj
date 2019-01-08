<?php

namespace app\admin\controller;

use app\common\model\BisChild;
use app\common\model\BisChildService;
use app\common\model\BisService;
use app\common\model\Carbrand;
use app\common\model\Carinfo;
use app\common\model\Carmodels;
use app\common\model\Manufactor;

class Index extends Base
{
    public function index()
    {
        return view();
    }

    public function welcome()
    {
        if (request()->isPost()) {

        }
        return view();
    }

    public function map()
    {
        return \Map::staticimage("北京昌平");
    }

    public function excel()
    {
        $bis_id = 31;
        if (request()->isPost()) {
            $excel = request()->file('excel')->getInfo();
            $objPHPExcel = \PHPExcel_IOFactory::load($excel['tmp_name']);
            $arrExcel = $objPHPExcel->getSheet(0)->toArray();//获取其中的数据
            for ($k = 0; $k < 3; $k++) {
                for ($i = 1; $i < count($arrExcel); $i++) {
                    if (empty($arrExcel[$i][1])) {//如果是空的。不操作

                    } else {
                        //第一步查询品牌是否存在
                        $carbrandM = new Carbrand(); //品牌表
                        $manufactorM = new Manufactor(); //厂商表
                        $carmodelsM = new Carmodels();//型号表
                        $carinfoM = new Carinfo();//年份表
                        $carbrand = $carbrandM->where('brand', $arrExcel[$i][1])->find();
                        $BisserverM = new BisService();//商家保养类型表
                        $BischildM = new BisChild();//商家保养栏目
                        $BisChildServiceM = new BisChildService();//商家保养品牌
                        $manufactow = [];
                        $brand_id = "";//品牌id
                        if ($carbrand) { //品牌存在
                            //第二步查询厂商是否存在
                            $manufactow = [
                                'brindid' => $carbrand['id'], //品牌id
                                'manufactor' => $arrExcel[$i][2]
                            ];
                            $brand_id = $carbrand['id'];
                        } else { //品牌不存在
                            $carbranddata = [
                                'brand' => $arrExcel[$i][1]
                            ];
                            $brand_id = Carbrand::postBrandByAdd($carbranddata);
                        }
                        $manufactor = $manufactorM
                            ->where($manufactow)
                            ->find();//查看厂商是否存在

                        $carmodelsw = [];
                        $manufactor_id = "";//厂商id
                        if ($manufactor) { //厂商存在
                            //查询车系是否存在
                            $carmodelsw = [
                                'model' => $arrExcel[$i][3],
                                'mid' => $manufactor['id']
                            ];
                            $manufactor_id = $manufactor['id'];

                        } else { //查看厂商不存在
                            $carbranddata = [
                                'manufactor' => $arrExcel[$i][2],
                                'brindid' => $brand_id //品牌id
                            ];
                            $manufactor_id = Manufactor::postBrandByAdd($carbranddata);


                        }
                        $carmodels = $carmodelsM
                            ->where($carmodelsw)
                            ->find(); // 查看车型是否存在

                        $carmodelsw = [];
                        $carmodels_id = "";//车型id
                        if ($carmodels) { //车型是否存在
                            $carmodelsw = [
                                'year' => $arrExcel[$i][4],
                                'name' => $arrExcel[$i][5],
                                'ModelsID' => $carmodels['id'],
                            ];
                            $carmodels_id = $carmodels['id'];
                        } else {//车系不存在
                            $carmodelsdata = [
                                'model' => $arrExcel[$i][3],
                                'mid' => $manufactor_id
                            ];
                            $carmodels['id'] = Carmodels::postBrandByAdd($carmodelsdata);
                        }
                        $carinfo = $carinfoM->where($carmodelsw)->find();
                        $Bisserverwhere = [];
                        $carinfo_id = "";//车型年份id;
                        if ($carinfo) { //车型年份信息存在
                            //进行商家服务查询
                            $Bisserverwhere = [
                                'models_id' => $carinfo['id'],
                                'category_id' => $arrExcel[$i][12],
                                'bis_id' => $bis_id,
                            ];
                            $carinfo_id = $carinfo['id'];

                        } else {//车型年份信息不存在
                            $carinfodata = [
                                'year' => $arrExcel[$i][4],
                                'name' => $arrExcel[$i][5],
                                'ModelsID' => $carmodels_id
                            ];
                            $carinfo_id = Carinfo::postBrandByAdd($carinfodata);

                        }
                        $Bisserver = $BisserverM
                            ->where($Bisserverwhere)
                            ->find();
                        $Bischildd = [];
                        $Bisserver_id = "";//商家服务类型id
                        if ($Bisserver) {//查看该商家服务类型是否存在
                            $Bischildd = [
                                'child_name' => $arrExcel[$i][7] . $arrExcel[$i][6],
                                'service_id' => $Bisserver['id'],
                                'ModelsID' => $carinfo_id,
                                'bis_id' => $bis_id,
                            ];
                            $Bisserver_id = $Bisserver['id'];


                        } else {//商家服务不存在
                            $carinfodata = [
                                'models_id' => $carinfo_id,
                                'category_id' => $arrExcel[$i][12], //所属服务
                                'bis_id' => $bis_id, //所属商家
                                'service_price' => $arrExcel[$i][11],
                            ];
                            $Bisserver_id = BisService::postBrandByAdd($carinfodata);
                        }

                        $Bischild = $BischildM
                            ->where($Bischildd)
                            ->find();//查看商家类型是否存在 如机油 滤芯
                        $ChildServicew = [];
                        $Bischild_id = "";//商家类型id
                        if ($Bischild) { //商家类型存在
                            $ChildServicew = [
                                'name' =>
                                    $arrExcel[$i][8] . '-'
                                    . $arrExcel[$i][9],
                                'child_id' => $Bischild['id'],
                                'bis_id' => $bis_id
                            ];
                            $Bischild_id = $Bischild['id'];
                        } else {
                            $Bischilda = [
                                'child_name' => $arrExcel[$i][7] . $arrExcel[$i][6],
                                'service_id' => $Bisserver['id'],
                                'bis_id' => $bis_id,
                                'ModelsID' => $carinfo_id
                            ];
                            $Bischild_id = BisChild::postBrandByAdd($Bischilda);
                        }

                        $BisChildServic = $BisChildServiceM->where($ChildServicew)->find();//查看配件品牌是否存在
                        if ($BisChildServic) {
                            //品牌已经存在
                        } else {
                            $ChildServicea = [
                                'name' =>
                                    $arrExcel[$i][8] . '-'
                                    . $arrExcel[$i][9],
                                'child_id' => $Bischild_id,
                                'price' => $arrExcel[$i][10],
                                'bis_id' => $bis_id
                            ];
                            BisChildService::postBrandByAdd($ChildServicea);
                        }
                    }
                }
            }
            return json('添加成功');
        }
        return view();

    }
}
