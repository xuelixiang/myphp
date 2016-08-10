<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
    protected $_validate = array(     
        array('user','require','user必须填写！'), 
        array('email','require','email必须填写！'),
    );
    
    public function index(){}
     
    public function register($data){   
        if (!$this->create($data)){
            // 指定新增数据     // 如果创建失败 表示验证没有通过 输出错误提示信息    
            exit($this->getError());
        }elseif (count($this->where('user="'.$data['user'].'"')->find())) {
            return '您的用户名已经被注册，请修改后再试试！';
        }else{
            // 验证通过 可以进行其他数据操作
            $data['date_zhuce'] = date('Y-m-d H:i:s');
            if($this->add($data)){
                return "你已经注册成功！";
            }else{
                return "你已经注册失败！";
            };
        }            
    }
    
    public function log($data){
        if (!$this->create($data)){
            exit($this->getError());
        }
       // $checked = $this->where('user="'.$data['user'].'" AND email="'.$data['email'].'"')->find();
        if (!$this->checklogin($data)){
            return '用户名或者密码有误，请修改后再试试！';
        }else{
            $data['date_denglu'] = date('Y-m-d H:i:s');
            if($this->where('user="'.$data['user'].'"')->save($data)){
                return "你已经成功登陆！";
            }else{
                return "你已经登陆失败！";
            };
        }
    }
    
    
    public function checklogin($data){
        $checked = $this->where('user="'.$data['user'].'" AND email="'.$data['email'].'"')->find();
        return $checked;
    }
    
    
    
    
    
}