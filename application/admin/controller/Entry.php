<?php

namespace app\admin\controller;

use app\common\model\Admin;

class Entry extends Common
{
    //后台首页
    public function index() {
        //echo '有奖之家';
        //加载模板文件
        return $this->fetch();
    }
    //修改密码
    public function pass(){
        if(request()->isPost()){
            $res = (new Admin())->pass(input('post.'));
            if($res['valid']){
                //清除session中的登录信息
                session(null);
                //执行成功
                $this->success($res['msg'],'admin/entry/index');
                exit;
            }else{
                //执行失败
                $this->error($res['msg']);
                exit;
            }
        }
        
        return $this->fetch();
    }
}
