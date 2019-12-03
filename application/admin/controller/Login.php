<?php

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    //
    public function login() {
        //加载登陆页面
        return $this->fetch('index');
    }
}
