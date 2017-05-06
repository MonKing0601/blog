<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\ArticleModel;
use App\Http\Model\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticleController extends CommonController
{
    //文章列表展示
    public function index()
    {
        $data = ArticleModel::all();
        return view('admin.article.articleList', compact('data', $data));
    }

    public function create()
    {
        $data = CategoryModel::tree();
        return view('admin.article.createArticle', compact('data', $data));
    }

//添加文章提交
    public function store()
    {
        $input = Input::except('_token');
        $input['art_time'] = time();
        $res = ArticleModel::create($input);
        if ($res) {
            return redirect('admin/article')->with('success', '上传成功');
        } else {
            return back()->with('error', '数据上传失败');
        }

    }


    public function edit($art_id)
    {
        $data = ArticleModel::find($art_id);
        $cates = CategoryModel::tree();
        return view('admin.article.editArticle', compact('data', 'cates', $data, $cates));
    }

    public function update($art_id)
    {
        $data = Input::except('_token', '_method');
        $res = ArticleModel::where('art_id', $art_id)->update($data);
        if ($res) {
            return redirect('admin/article')->with('success', '更新成功！');
        } else {
            return back()->with('error', '分类更新失败');
        }
    }

    public function show()
    {

    }

    public function destroy($art_id)
    {
        $res = ArticleModel::where('art_id', $art_id)->delete();
        if ($res) {
            return redirect('admin/article')->with('success','更新成功！');
        }else{
            return back()->with('error','分类更新失败');
        }
    }

}
