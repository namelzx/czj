<?php

namespace app\common\model;

use think\Model;

class Category extends Model
{
    // 添加
    protected $autoWriteTimestamp = true; //默认设置当前时间 给time字段

    public static function add($data)
    {
        $data['status'] = 1;
        // $data['create_time'] = time();
        return self::insert($data);
    }

    // 获取一级栏目
    public static function getNormalFirstCategory()
    {

        // 条件
        $data = [
            'status' => 1,
            'parent_id' => 0,
        ];
        // 排序
        $order = [
            'listoreder' => 'desc',
            'id' => 'desc',
        ];
        return self::where($data)
            ->order($order)
            ->select();
    }

    // 获取一级栏目
    public static function getFirstCategorys($parent_id = 0)
    {
        // 条件
        $data = [
            'status' => ['neq', -1], //－1代表删除所以不获取
            'parent_id' => $parent_id,
        ];
        // 排序
        $order = [
            'listoreder' => 'desc',
            'id' => 'desc',
        ];
        // echo $this->getLastSql();

        return self::where($data)
            ->order($order)
            ->paginate(5);
    }

    // public function status()
    // {
    // 	print_r(input('get.'));
    // }
    // 首页获取分类列表
    // $id 是判断是多少级的分类。limit 是显示多少条这个方法很多地方用到
    public function getNormalCategory($id = 0, $limit = 5)
    {
        // $data就是条件
        $data = [
            'parent_id' => $id,
            'status' => 1,
        ];
        // order是排序
        $order = [
            'listoreder' => 'desc',
            'id' => 'desc',

        ];
        $result = self::here($data)
            ->order($order);
        if ($limit) {
            $result = $result->limit($limit);
        }

        return $result->select();

    }

    public function getNormalCategoryId($ids)
    {

        $data = [
            'parent_id' => ['in', implode(',', $ids)],
            'status' => 1,
        ];
        $order = [
            'listoreder' => 'desc',
            'id' => 'desc',

        ];

        $result = self::where($data)
            ->order($order)
            ->select();
        return $result;
    }


}