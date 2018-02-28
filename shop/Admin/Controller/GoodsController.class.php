<?php

namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller{
    //商品列表
    public function showlist1() {
        
        //1）实例化普通model类
        //$goods=new \Model\GoodsModel(); //命名空间方式实例化对象
        //var_dump($goods);
        
        //2）D()函数实例化model对象
        //1.实例化父类model对象
        //$model=D(); //new Model();
        //var_dump($model);//可以用于执行原生sql语句（普通model对象也可以执行原生sql语句）
        //2.实例化父类model对象，同时操作指定的数据表
        //$goods=D('Goods'); //new Model();
        //var_dump($goods);//可以用于执行原生sql语句（普通model对象也可以执行原生sql语句）
        //该方式使得一个数据表即使没有对应的model模型类，也不影响我们直接操作数据表
        $user=D('User'); //new Model();
        var_dump($user);
        
        $this->display();
    }
    public function showlist2() {
        //数据查询操作
        $goods=new \Model\GoodsModel();//或者D(Goods');
        //1.查询全部记录、全部字段
        $info=$goods->select();
        //var_dump($info);
        //
        //2.根据主键id查询记录
        $info=$goods->select(9);
        
        //3.根据主键id在某个范围查询记录
        $info=$goods->select('21,11,22,25,26');
        
        $this->assign('info',$info);
        $this->display();
    }
    public function showlist3() {
        $goods=D('Goods');
        
        //数据操作常用方法
        //1.where（） 限制操作（查询）条件
        //$goods->where('goods_price>100 and goods_name like "诺%"');
        //$info=$goods->select();
        
        //2.field（） 限制操作（查询）字段
        //$goods->field('goods_id,goods_name');
        //$info=$goods->select();
        
        //3.limit（） 限制操作（查询）条数
        //limit(偏移量，长度)
        //偏移量=(页码-1)*长度
        //$goods->limit(5,5);
        //$info=$goods->select();
        
        //4.order() 排序查询 order by 
        //$goods->order('goods_price desc');//desc不写则默认升序
        //$info=$goods->select();
        
        //5.group() 排序查询 order by 
        //$goods->group('goods_brand_id');
        //$goods->field("goods_brand_id,max(goods_price)");
        //$info=$goods->select();
        //dump($info);
        
        //6.having()设置查询条件 
        //$goods->having('goods_price>1000');
        //$info=$goods->select();
        
        
        $this->assign('info',$info);
        $this->display();
    }
    public function showlist() {
        $goods=D('Goods');
        
//        $goods->field('goods_name');
//        $goods->where('goods_price>1000');
//        $goods->limit(10);
//        $goods->order('goods_price desc');//desc不写则默认升序
//        $info=$goods->select();
        //以上许多方法可以做连贯操作,如下：
        //各个方法没有顺序
        //$info=$goods->order('goods_price desc')->limit(10)->field('goods_name')->where('goods_price>1000')->select();

        $info=$goods->order('goods_id desc')->select();
        $this->assign('info',$info);
        $this->display();
    }
    
    //添加商品
    public function tianjia1() {
        $goods=new \Model\GoodsModel();
        //数据添加
        //1.数组方式
        

        $arr['goods_name']='sun2';
        $arr['goods_price']=1236;
        $arr['goods_weight']=130;
        $arr['goods_number']=10;
       
        
        $z=$goods->add($arr);
        //dump($z);
        $this->display();
       
         //2.AR方式
//        $goods->goods_name='sun';
//        $goods-> goods_price=1236;
//        $goods->goods_weight=130;
//        $goods->goods_number=10;
//        
//        $z=$goods->add();
//        var_dump($z);
//        $this->display();
    }
    
    public function tianjia() {
        $goods=new \Model\GoodsModel();
        //两个逻辑：展示表单、收集表单
        if(!empty($_POST)){
            
            //附件上传
            //1.图片上传
            if($_FILES['goods_pic']['error']<4){
                $cfg=array(
                    'rootPath'=>'./Public/uploadss/',//保存根路径
                );
                $up=new \Think\Upload($cfg);
                //uploadOne()方法执行成功后会把附件（在服务器上）的名字和路径等相关信息返回
                $z=$up->uploadOne($_FILES['goods_pic']);
                $bigimg=$up-> rootPath.$z['savepath'].$z['savename'];//大图路径
                $smallimg=$up-> rootPath.$z['savepath'].'small_'.$z['savename'];//小图路径
                //2.对上传的图片制作缩略图
                $im=new \Think\Image();
                $im->open($bigimg);
                $im->thumb(100, 100,6);
                $im->save($smallimg);
                
                //把上传好的附件存储到数据库里边
                $_POST['goods_big_img']= ltrim($bigimg,'./');
                $_POST['goods_small_img']= ltrim($smallimg,'./');
            }
            
            
            //收集表单
            //dump($_POST);
            $z=$goods->add($_POST);
            if($z){
               // $this->redirect([分组/控制器/操作方法]地址$url, 参数$params, 延迟时间$delay, 提示信息$msg)
                $this->redirect('showlist',array() , 3, '添加成功') ;       
            } else {
                $this->redirect('tianjia',array(), 3, '添加失败') ;
                
            }
        } else {
            //展示表单
            $this->display();
        }
    }
    //修改商品
    public function xiugai1() {
        $goods=new \Model\GoodsModel();
        //AR方式数据修改
        //主键修改必须二选一设置条件：主键id或在where()方法
        //$goods->goods_id=137;
        $goods->goods_name='sun22';
        $goods->goods_price=1700;
        $goods->goods_number=17;
        //$z=$goods->save();
        $z=$goods->where('goods_id>136')->save();
        dump($z);
        
        $this->display();
    }   
    
    public function xiugai($goods_id) {
        $goods=D('Goods');
        //两个逻辑：修改、展示
        if(!empty($_POST)){
            $z=$goods->save($_POST);
            if($z){
               // $this->redirect([分组/控制器/操作方法]地址$url, 参数$params, 延迟时间$delay, 提示信息$msg)
                $this->redirect('showlist',array() , 3, '修改成功') ;       
            } else {
                $this->redirect('xiugai',array('goods_id'=>$goods_id), 3, '修改失败') ;
                
            }
        } else {
            //echo $goods_id;
        //根据$goods_id获得被修改的商品信息，并给模板展示
        //find()方法只负责返回一条记录结果，并且是【一维】数组返回
        $info=$goods->find($goods_id);
        
        $this->assign('info',$info);
        $this->display();
        }
        
    }
    
    //数据删除
    public function del($goods_id) {
        $goods=D('Goods');
        
        //两个逻辑：修改、展示
          
            $z=$goods->delete($goods_id);
            if($z){
               // $this->redirect([分组/控制器/操作方法]地址$url, 参数$params, 延迟时间$delay, 提示信息$msg)
                $this->redirect('showlist',array() , 3, '修改成功') ;       
            } else {
                $this->redirect('showlist',array('goods_id'=>$goods_id), 3, '修改失败') ;
                
            }
    }
}













