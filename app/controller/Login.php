<?php

namespace app\controller;

use app\BaseController;
use app\model\Admin;
use think\View;
use think\Request;
class Login extends BaseController
{
    public function admin_login(Request $request)
    {
        $data = $request->param();

        $user=Admin::where('username',$data['username'])->find();
        if ($user['password'] == $data['password']) {
            // 登录成功，返回成功消息
            return $this->success('登录成功，即将进入管理员界面','admin/index');
        } else {
            // 登录失败，返回错误消息
            return $this->error('用户名或密码错误','index/admin_login');
        }

    }
}