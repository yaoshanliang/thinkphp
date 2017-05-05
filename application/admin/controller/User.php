<?php

namespace app\admin\controller;

use think\Controller;

class User extends Controller
{
    public function index()
    {
        return view('user/index');
    }

    public function miss()
    {
        return 'miss';
    }

    public function hello()
    {
        return 11;
    }
}
