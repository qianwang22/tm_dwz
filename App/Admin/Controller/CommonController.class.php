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

    /**
     * Ajax表单提交后服务器端响应
     * $code 200 成功
     * $code 300 失败
     * $message 提示信息
     * $navTabId 要刷新的navTab的rel值
     */
    public function dwzAjaxReturn($code,$message,$navTabId=''){
        $data = array(
            'statusCode'    => $code,
            'message'       => $message,
            'navTabId'      => $navTabId,
            'rel'           => '',
            'callbackType'  => 'closeCurrent',
            'forwardUrl'    => '',
        );
        echo json_encode($data);
    }
}