<?php

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    //
    public function login() {
        //测试数据库连接
        //$data = db('admin')->find(1);
        //dump($data);
        if(request()->isPost()){
            //halt($_POST);
            $res = (new Admin())->login(input('post.'));

        }
        //加载登陆页面
        return $this->fetch('index');
    }
}
