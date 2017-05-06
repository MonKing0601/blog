<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\UserModel;
use Illuminate\Http\Request;

class AdminController extends CommonController
{
    /**
     * 获取所有管理员的信息
     */
    public function getAdminList()
    {
        $res = UserModel::get();
        return view('admin.adminList', ['res' => $res]);

    }

    /**
     * 添加管理员
     */
    public function addAdmin()
    {
        return view('Admin/addAdmin');
    }

    /**
     * @param Request $request
     * 保存管理员信息到数据库
     */
    public function save(Request $request)
    {
        $res = $request->input('Admin');
        $admin = new UserModel();
        $admin->user_name = $res['user_name'];
        $admin->user_password = encrypt($res['user_password']);
        $admin->user_email = $res['user_email'];
        if ($admin->save()) {
            echo "添加成功|" . "<a href=" . url('admin/adminList') . ">查看管理员列表</a>";
        };
    }

    public function editAdmin(Request $request, $id)
    {
        $admin = UserModel::find($id);
        if ($request->isMethod("POST")) {
            $res = $request->input('Admin');
            $admin->user_name = $res['user_name'];
            $admin->user_password = $res['user_password'];
            $admin->user_email = $res['user_email'];
            if ($admin->save()) {
                return redirect('Admin/adminList')->with('success', '修改成功！');
            };
        }
        return view('admin.editAdmin', ['Admin' => $admin]);
    }
}
