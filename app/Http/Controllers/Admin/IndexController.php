<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends CommonController
{

    /**
     * @return
     * 后台主页面
     */
    public function index()
    {
        return view('common.admin_layouts');
    }

    /**
     * @return
     * 配置信息展示页面
     */
    public function info()
    {
        return view('admin.index');

    }

}
