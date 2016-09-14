<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController{
    /**
     * 修改个人资料视图
     */
    public function edit_info()
    {
        echo 'edit_info';
        $this->display();
    }

    /**
     * 修改密码视图
     */
    public function edit_pwd()
    {
        echo 'edit_pwd';
        $this->display();
    }

    /**
     * 添加用户视图
     */
    public function create()
    {
        $this->display();
    }

    public function store(){
        $data = $_POST;
        var_dump($data);die;
        $User = M('User');
        if($User->add($data))
        {
            $this->dwzAjaxReturn(200,'添加用户成功!!!','User_index');
        }else{
            $this->dwzAjaxReturn(300,'添加用户失败!!!','User_index');
        }
    }

    /**
     * 用户列表视图
     */
    public function index()
    {
        $User       = M('User');
        $pagesize   = C('PAGE_SIZE');
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,$pagesize);
        $list       = $User->limit($Page->firstRow.','.$Page->listRows)->order("id DESC")->select();
        $this->assign('list',$list);
        $this->assign('count',$count);
        $this->assign('numPerPage',$Page->listRows);
        $this->assign('pageNumShown',$pagesize);
        $this->assign('currentPage',!empty($_REQUEST[C('VAR_PAGE')])?$_REQUEST[C('VAR_PAGE')]:1);
        $this->display();
    }

    /**
     * 管理登录日志视图
     */
    public function login_log()
    {
        echo 'login_log';
        $this->display();
    }

    /**
     * 管理操作日志视图
     */
    public function action_log()
    {
        echo 'action_log';
        $this->display();
    }
}