<?php

namespace app\common\model;

use think\Model;

class Admin extends Model
{
    //
    protected $pk = 'admin_id';
    //这里需要书写完整的表名称
    protected $table = 'blog_admin';
    /**
     * 登录
     */
    public function login($data){
        //halt($data);
        //1.执行验证
        
        //2.比对用户名和密码是否正确
        //3.将用户信息存入到session中

    }
}
