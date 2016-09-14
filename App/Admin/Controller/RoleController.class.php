<?php
namespace Admin\Controller;
use Think\Controller;

class RoleController extends CommonController{
    public function create()
    {
        $this->display();
    }

    public function index()
    {
        echo 'index';
        $this->display();
    }
}