<?php
namespace Model;
use Think\Model;

class UserModel extends Model{
    
    //是否批处理验证
    protected $patchValidate  = true;
    
    //自动验证定义
    protected $_validate  = array(
        //array(字段，验证规则，错误提示[，验证条件，附加规则，验证时间])，
        //①用户名验证，不能为空（唯一）
        array('username','require','用户名不能为空'),
        array('username','','用户名不能为空',0,'unique'),
        //②密码验证，不能为空
        array('password','require','密码不能为空'),
        //③确认密码验证，不能为空并且和密码一致
        array('password2','require','密码不能为空'),
        array('password2','password','密码不能为空',0,'confirm'),
        //④邮箱验证
        array('user_email','email','邮箱格式不正确'),
        //⑤qq号码验证，纯数字、位数5-12
        array('user_qq','number','qq必须是纯数字',2),
        array('user_qq','5,12','qq号码必须是5-12位',2,'length'),
        //⑥学历，必须选择一项
        array('user_xueli','2,5','学历必须选择一项',0,'between'),
        //⑦爱好，必须选择两项或以上
        array('user_hobby','check_hobby','爱好必须选择两项或以上',1,'callback'),
        
    );
    //验证爱好
    //参数$arg代表被验证项目的value值
    function check_hobby($arg) {
        if (count($arg)<2) {
            return false;
        }
        return true;
    }
    
    
    
    
    
    
    
    
    
    
    
}