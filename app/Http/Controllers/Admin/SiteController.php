<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use View;

class SiteController extends Controller
{

    public function getLogin()
    {
        // 判断是否已经登录
        if (Auth::check()) {
            return redirect()->intended('/admin');
        }

        return View::make('layouts/admin_login');
    }

    public function postLogin(Request $reques)
    {
        // 获取提交数据
        $data = $reques->all();

        // 验证
        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
            return redirect()->intended('/admin');
        }

        return redirect()->back()->withInput()->withErrors(['error' => '"用户名"或者"密码"错误，请重新登录。']);
    }

    // 退出登录
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/admin_login');
    }

}
