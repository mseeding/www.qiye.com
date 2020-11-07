<?php
namespace app\admin\controller;
use app\admin\common\Base;

class Index extends Base
{
	//后台主界面
    public function index()
    {
        return $this->fetch();
    }

    //后台登录页
    public function login()
    {
        return $this->fetch();
    }

    //后台欢迎主界面
    public function welcome()
    {
        return $this->fetch();
    }


}
