<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
//
//// 应用公共文件
//function status($status)
//{
//    if ($status == 1) {
//        $str = "<span class='label label-success radius'>正常</span>";
//    } elseif ($status == 0) {
//        $str = "<span class='label label-succees radius'>待审</span>";
//        # code...
//    } elseif ($status == -1) {
//        $str = "<span class='label label-succees radius'>未通过</span>";
//    } elseif ($status == 2) {
//        $str = "<span class='label label-succees radius'>下架</span>";
//    }
//
//    return $str;
//}
//
//
//function Hstatus($status)
//{
//    if ($status == 1) {
//        $str = "<span class='label label-success radius'>已使用</span>";
//    } elseif ($status == 0) {
//        $str = "<span class='label label-succees radius'>未使用</span>";
//        # code...
//    }
//
//    return $str;
//}
//
////  百度地图api方法
//// $url
//// int $type - get 1 post
//// array $data
//function doCurl($url, $type = 0, $data = [])
//{
//    $ch = curl_init();//初始化
//    curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLOPT_HEADER, 0);
//    if ($type = 1) {
//        // post
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//
//    }
//    // 执行并获取内容
//    $output = curl_exec($ch);
//    // 释放curl
//    curl_close($ch);
//    return $output;
//}
//
//// 商户入驻申请文案
//function bisregister($status)
//{
//    if ($status == 1) {
//        $str = "入驻申请成功";
//        # code...
//    } else if ($status == 0) {
//        $str = "待审核中请耐心等待";
//    } else {
//        $str = "你申请的未通过，请重新提交";
//    }
//    return $str;
//
//}
//
//// 分类截取
//function getSeCityName($path)
//{
//    if (empty($path)) {
//        return '';
//    }
//    if (preg_match('/./', $path)) {
//        $citypath = explode(',', $path);
//        $cityid = $citypath[1];
//    } else {
//        $cityid = $path;
//    }
//    $city = model('city')->get($cityid);
//
//    return $city->name;
//}
//
//function countlocation($ids)
//{
//
//    if (!$ids) {
//
//        return 1;
//    }
//    if (preg_match('/,/', $ids)) {
//        $array = explode(',', $ids);
//
//        return count($array);
//    }
//
//}


/**
 * 统一返回信息
 * @param $status
 * @param $data
 * @param $msg
 * @return array
 */
function msg($status, $data = '', $msg = '')
{
    return compact('status', 'data', 'msg');
}