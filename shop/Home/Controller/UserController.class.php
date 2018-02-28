<?php
namespace Home\Controller;
use Think\Controller;
//前台用户控制器
//父类Tontroller：ThinkPHP/Library/Think/Controller.class.php
class UserController extends Controller{
    //登录功能
    public function login() {
        //echo 'i am loginning';
        
        //调用view视图
        $this->display();  //展示视图（视图文件名称与当前操作方法名称一致）
        //$this->display('resgister');  //访问其他名称的模板文件
        //$this->display('Goods/detail');  //访问其他控制器下的模板文件
        
    }
    //注册功能
    public function register() {
        $user= new \Model\UserModel();
        //两个逻辑：收集、展示
        if(!empty($_POST)){
            
            //收集表单[$_POST]信息并返回，同时出发表单自动验证，过滤非法字段
            $shuju=$user->create();
            if($shuju){
                $shuju['user_hobby']= implode(',', $shuju['user_hobby']);
                if($user->add($shuju)){
                    $this->redirect('Index/index');
                }
            } else {
                //dump($user->getError());
                $this->assign('errorInfo',$user->getError());
            }
        } 
        $this->display(); 
        
        
        
    }
}








