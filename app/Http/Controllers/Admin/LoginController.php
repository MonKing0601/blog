<?php

namespace App\Http\Controllers\Admin;


use App\Http\Model\UserModel;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Mews\Captcha\Facades\Captcha;

class LoginController extends CommonController
{
    public function login(Request $request)
    {
        view('admin.login');
//        是否用post方法上传
        if (!$request->isMethod("POST")) {

            return view('admin/login');

        }

//      验证码是否正确  用mews的扩展包来验证
        if (!$res = Captcha::check($request['captcha'])) {
            return back()->with('msg', "验证码错误");
        }


//        获得表内的数据

        $user = UserModel::first();

//        解密表内的密码
        $userpwd = Crypt::decrypt($user['user_password']);



//        判断是否正确，不正确返回
        if (!($request['username'] == $user['user_name'] && $request['password'] == $userpwd)) {
            return back()->with('msg', "用户名或密码错误");
        }

//        将表的用户储存在session中
        session(['user' => $user]);
        return redirect('admin/index');
    }

    /**
     * @return 返回登录页面
     * 用户退出
     */
    public function quit()
    {
        session(['user' => null]);
        return redirect('admin/login');

    }


}
