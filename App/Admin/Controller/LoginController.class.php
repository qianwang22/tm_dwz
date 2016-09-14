<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    public function index()
    {
        $this->display();
    }

    public function login()
    {
        $username = I('username');
        $password = I('password');
        $code         = I('code');
        if(A('Public')->check_verify($code) != 1)  $this->error('验证码输入错误!!!');
        if($username != 'admin888')  $this->error('用户名或密码错误!!!');
        if(md5($password) != 'e10adc3949ba59abbe56e057f20f883e')  $this->error('用户名或密码错误!!!');
        session('uid',1);
        $this->success('登录成功!!!',U('Index/index'));
    }

    public function login_out()
    {
        session('uid',null);
        $this->success('退出成功!!!',U('Login/index'));
    }
}