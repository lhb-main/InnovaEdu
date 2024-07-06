<?php

namespace app\controller;
use app\BaseController;

use think\facade\View;
use think\Image;
use app\controller\Login;
class Index extends BaseController
{
    //总登录页面
    public function index()
    {
        return View::fetch('');
    }
    //管理员登录页面
    public function admin_login()
    {
        return View::fetch('admin_login');
    }
    //管理员主页


    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
