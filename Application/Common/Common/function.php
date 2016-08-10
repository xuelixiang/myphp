<?php
/*
 * 打印数组
 * $param array $array
 */
function p($array){
	dump($array,1,'',0);
}

/**
 * 检测用户是否登录
 * @return integer 0-未登录，大于0-当前登录用户ID
 */
function is_login(){
    $id = session('id');
    if (empty($id)) {
        return 0;
    } else {
        return $id;
    }
}

// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
function check_verify($code, $id = ''){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
?>