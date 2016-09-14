<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
    public function _initialize()
    {
       $uid = session('uid');
        if($uid == null)
        {
            $this->error('请先登录!!!',U('Login/index'));
        }
    }
}