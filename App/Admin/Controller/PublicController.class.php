<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller{
    /**
     * 验证码
     */
    function verify(){
        $config =    array(
            'fontSize'    =>    16,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            'imageW'      =>    100,   // 关闭验证码杂点
            'imageH'      =>    34,   // 关闭验证码杂点
        );
        $Verify = new \Think\Verify($config);
        // 设置验证码字符为纯数字
        $Verify->codeSet = '0123456789';
        $Verify->entry();
    }

    /**
     * 验证验证码
     */
    function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
}