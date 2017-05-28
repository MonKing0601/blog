<?php

namespace App\Http\Controllers\Show;

use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\ArticleModel;
use App\Http\Model\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use TomLingham\Searchy\Facades\Searchy;
use Visitor;
use App\Http\Model\CommentModel;
use Carbon\Carbon;

class ShowController extends CommonController
{
    /**
     * 文章展示的方法
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function show()
    {
        $data = [];
        ArticleModel::orderBy('art_id')->chunk(2, function ($rows) use (&$data) {
            foreach ($rows as $row) {
                $data[$row->art_id] = $row;
            }
        });
        $val = ArticleModel::Article_OrderByClick();
        return view('show.index', ['data' => $data, 'val' => $val]);


    }

    /**
     * 文章详情页方法
     */
    public function detail($id)
    {
        $data = ArticleModel::find($id);
        $cate = CategoryModel::find($data->cate_id);
        $onclick = ArticleModel::countClick($id);
        $comments = CommentModel::getComments($id);
        return view('show.detail', ['data' => $data, 'cate' => $cate, 'click' => $onclick, 'comments' => $comments]);
    }

    /**
     * 获得评论,根据相关文章的id储存相应的评论
     */
    public function getComment()
    {
        $data = Input::except('_token');
        CommentModel::create($data);
        return Redirect::back();
    }


    /**
     * ‘关于我’的静态界面
     */
    public function about()
    {
        return view('show.common.about');

    }

    /**
     * ‘联系我’静态页面
     */
    public function contact()
    {
        return view('show.common.contact');

    }

    /**
     * 新前端模板 自写测试页面
     * 未使用
     */
    public function newshow()
    {
        return view('NewShow');

    }


    /**
     * 搜索文章搜索功能
     */
    public function searchArt(Request $request)
    {
        $searchCondition = $request->searchbox;
        $artData = ArticleModel::Article_Search($searchCondition);
        return view('show.index', ['data' => $artData]);
        //返回搜索完毕的文章页面，并将搜索的数据带回去
    }


    /**
     * 文章点击度排行的右侧页面
     */
    public
    function right_side_order()
    {
        $val = ArticleModel::Article_OrderByClick();
        return $val;
    }
}

