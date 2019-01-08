<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\File;

class image extends Controller
{

    public function upload()
    {
        $config = config('aliyun_oss');
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
//        dump($file);
        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move('./uploads');
        if ($info) {
            $path = $info->getSaveName();
            $fileName = 'uploads/' . $info->getSaveName();
            $fil = $this->uploadFile($config['Bucket'], $fileName, $info->getPathname());
            if ($fil) {
                unlink($fileName);
            }
            return json(array('state' => 1, 'path' => $config['url'] . $fileName));
        } else {
            // 上传失败获取错误信息
            echo $file->getError();
        }
        return json($file);
    }

    /**
     * 实例化阿里云OSS
     * @return object 实例化得到的对象
     * @return 此步作为共用对象，可提供给多个模块统一调用
     */
    function new_oss()
    {
        //获取配置项，并赋值给对象$config
        $config = config('aliyun_oss');
        //实例化OSS
        $oss = new \OSS\OssClient($config['KeyId'], $config['KeySecret'], $config['Endpoint']);
        return $oss;
    }

    /**
     * 上传指定的本地文件内容
     *
     * @param OssClient $ossClient OSSClient实例
     * @param string $bucket 存储空间名称
     * @param string $object 上传的文件名称
     * @param string $Path 本地文件路径
     * @return null
     */
    function uploadFile($bucket, $object, $Path)
    {
        //try 要执行的代码,如果代码执行过程中某一条语句发生异常,则程序直接跳转到CATCH块中,由$e收集错误信息和显示
        try {
            //没忘吧，new_oss()是我们上一步所写的自定义函数
            $ossClient = $this->new_oss();
            //uploadFile的上传方法
            $res = $ossClient->uploadFile($bucket, $object, $Path);
            return json($res);
        } catch (OssException $e) {
            //如果出错这里返回报错信息
            return $e->getMessage();
        }
    }

    public function getopenid()
    {
        $data = input('param.');
        $url = "https://api.weixin.qq.com/sns/jscode2session?appid=" . $data['appid'] . "&secret=" . $data['secret'] . "&js_code=" . $data['js_code'] . "&grant_type=authorization_code";
        $data = $this->curlSend($url);
        return json_encode($data);
    }

    //调用获取路径
    public function curlSend($url, $data = '')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不进行证书验证
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //不进行主机头验证
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //结果不直接输出在屏幕上
        $data && curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $data ? curl_setopt($ch, CURLOPT_POST, true) : curl_setopt($ch, CURLOPT_POST, false);  //发送的方式
        curl_setopt($ch, CURLOPT_URL, $url);   //发送的地址
        $result = curl_exec($ch);
        curl_close($ch);
        $info = json_decode($result, true);
        return $info;
    }

}