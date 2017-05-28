<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//登录页面
Route::any('admin/login', 'Admin\LoginController@login');

//前台展示路由
Route::get('/','Show\ShowController@show');
Route::get('detail/{id}','Show\ShowController@detail');
Route::get('/about','Show\ShowController@about');
Route::get('contact','Show\ShowController@contact');
Route::any('getComment','Show\ShowController@getComment');
<<<<<<< HEAD
Route::any(' ','Show\ShowController@right_side_order');
Route::post('/Search','Show\ShowController@searchArt');

=======
Route::any('ArticleOrderBy','Show\ShowController@right_side_order');
>>>>>>> c070b3caa5208f80ecf968946c1405e9bd906b66
//写模板用的测试路由
Route::any('newShow','Show\ShowController@newShow');

Route::group(['middleware' => ['admin.login'],'prefix'=>'admin','namespace'=>'Admin'],function () {
   //父控制器 下载 路由
    Route::any('upload', 'CommonController@upload');

    //后台主页面  配置信息页面  退出功能路由
    Route::get('index', 'IndexController@index');
    Route::get('info', 'IndexController@info');
    Route::get('quit', 'LoginController@quit');

    //管理员列表 增加管理员 修改管理员 保存
    Route::get('adminList', 'AdminController@getAdminList');
    Route::any('addAdmin', 'AdminController@addAdmin');
    Route::any('editAdmin/{id}', 'AdminController@editAdmin');
    Route::any('save', 'AdminController@save');

    //文章分类路由
    Route::resource('category','CategoryController');

    //文章路由
    Route::resource('article','ArticleController');
});



