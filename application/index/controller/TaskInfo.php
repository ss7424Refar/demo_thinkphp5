<?php
/**
 * Created by PhpStorm.
 * User: refar
 * Date: 18-8-20
 * Time: 上午11:42
 */

namespace app\index\controller;

use think\Request;
use think\Db;
use app\index\model\AtsTesttaskInfo;

class TaskInfo
{
    public function task(){
        // 获得url参数
//        return input('id');

        //获得请求参数
        return Request::instance()->get('id');

    }

    //select
    public function getTaskInfo(){
        $info = Db::name('ats_testtask_info')->select();

        echo '<pre>';
        var_dump($info);
        echo '</pre>';
    }


    public function getTaskInfoByModel(){
        $info = AtsTesttaskInfo::get(1);
        var_dump($info);
    }

}