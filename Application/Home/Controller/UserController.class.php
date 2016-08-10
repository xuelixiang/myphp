<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class UserController extends Controller {
    public function jianli(){
        $jianli[name] = '薛理想';
        $jianli[sex] = '外星人';
        $jianli[school] = '青岛大学';
		$this->assign('jianli',$jianli);
        $this->display();
    } 
    
    
    public function create(){
        header("content-type:text/html;charset=utf-8");
        if(IS_POST){
               $data = I('post.');
               $this->ajaxReturn(D('User')->register($data));
       }else{
            $this->display();
        };
    }
    
     public function login(){
         header("content-type:text/html;charset=utf-8");
          if(IS_POST){
                  $data = I('post.');
                  $this->ajaxReturn(D('User')->log($data));
          }else{
              $this->display();
          };
     }
    
}