<?php

namespace app\admin\controller;

class Entry extends Common
{
    //后台首页
    public function index() {
        //echo '有奖之家';
        //加载模板文件
        return $this->fetch();
    }
}
