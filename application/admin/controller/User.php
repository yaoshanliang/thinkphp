<?php

namespace app\admin\controller;

use think\Controller;

class User extends Controller
{
    public function index()
    {
        return view('user/index');
    }

    public function create()
    {
        return view('user/create');
    }

    public function postcreate()
    {
        return json(['code' => 0, 'message' => '失败']);
    }
}
