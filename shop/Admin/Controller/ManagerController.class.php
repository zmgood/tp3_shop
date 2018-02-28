<?php

namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
class ManagerController extends Controller{
    //管理员登录系统
    public function login() {
        //获得系统里边全部的常量信息
        //var_dump(get_defined_constants(true));
        //两个逻辑：收集、展示
        if(!empty($_POST)){
            $very=new \Think\Verify();
            if($very->check($_POST['captcha'])){
                echo 'good';
            } else {
                echo 'no';
            }
            
        }
        $this->display();
    }
    //输出验证码
    public function verifyImg() {
        //配置验证码
        $cfg=array(
            'fontSize'  =>  15,              // 验证码字体大小(px)
            'imageH'    =>  45,               // 验证码图片高度
            'imageW'    =>  100,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        );
        
        $very=new Verify($cfg);
        $very->entry();
    }
    


    
}
