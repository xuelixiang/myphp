<?php
namespace Home\Model;
use Think\Model;
class ManagerModel extends Model{
    // 是否批处理验证
    //protected $patchValidate    =   true;
    protected $_validate = array(
        array('username','require','账户必须填写！'),
        array('username','email','账户必须填写邮箱！'),
        array('password','require','密码必须填写！'),
        array('name','require','姓名必须填写！'),
        array('sex','require','性别必须填写！'),
        array('age','require','年龄必须填写！'),
        array('tell','require','电话号码必须填写！'),
        array('qq','require','QQ号必须填写！'),
        array('qq','/^[1-9]\d{4,9}$/','qq号码输入错误！'),
        array('password2','password','两次密码不一样哦！',0,'confirm'),
        array('tell','/^1[3|4|5|7|8]\d{9}$/','手机号码输入错误！'),
    );
    
    public function check_register($data){
        if(!$this->create($data)){
            exit($this->getError());
        }elseif(count($this->where('username="'.$data['username'].'"')->find())){
            return "账户名重复，修改一下！";
        }else{
            $data['register_time'] = date('Y-m-d H:i:s');
            if($this->add($data)){
                return "感谢您，注册成功！";
            }else{
                return "很遗憾，注册失败！";
            }
        }        
    }
    
    public function check_login($data){
        $verify = new \Think\Verify();
        if(!$verify->check($data[verify])){
            return "验证码不正确";
        }
        elseif(!$this->create($data)){
            exit($this->getError());
            //count方法可以不用
        }elseif(!count($user = $this->where('username="'.$data['username'].'"')->find())){
            return "账户名不存在！";
        }elseif($user[password]!=$data[password]){
            return "密码错误！";            
        }else{
            $data['login_time'] = date('Y-m-d H:i:s');
            //$data['id'] = $user['id'];这种方法比较便捷
            if($this->where('id="'.$user['id'].'"')->save($data)){
                session('id',$user['id']);
                //session('password',$data['password']);
                return "yes";
                //echo 'hah';
                //return session('id');
            }else{
                return "很遗憾，登录失败！";
            }
        }
    }
    
    public function check_upd($data,$id){
        //echo $id;
        if(!$this->create($data)){
            exit($this->getError());
        }elseif(count($this->where('username="'.$data['username'].'"')->find())){
            return "账户名重复了，修改一下！";
        }else{
            $data['update_time'] = date('Y-m-d H:i:s');
            //$a = $this->where("id=$id")->save($data); $a==1;
            if($this->where("id=$id")->save($data)){
                return "感谢您，修改资料成功！";
            }else{
                return "很遗憾，修改资料失败！";
            }            
        }
    }
    
    
    
    
}



