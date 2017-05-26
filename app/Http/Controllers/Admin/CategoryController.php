<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\CategoryModel;
use Illuminate\Support\Facades\Input;

class CategoryController extends CommonController
{
//    get.admin/category
    public function index()
    {
        $categorys = CategoryModel::tree();
        return view('admin.category.categoryList')->with('data', $categorys);
    }


//get
    public function create()
    {
        $data = CategoryModel::where('cate_pid', 0)->get();

        return view('admin.category.addCate', compact('data'));
    }

//post
    public function store()
    {
        $input = Input::except('_token');
        $validator = \Validator::make($input, [
            'cate_name' => 'required',
        ],
            ['required' => ':attribute 不能为空'
            ], ['cate_name' => '分类名称']);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            //     dd($input);
            if (CategoryModel::create($input)) {
                return redirect('admin/category/create')->with('success', '添加成功');
            } else {
                return redirect('admin/category/create')->with('error', '添加失败');
            }
        }


    }

    /**
     * 修改分类
     */
    public function edit($cate_id)
    {
        $cate = CategoryModel::find($cate_id);
        $data = CategoryModel::where('cate_pid', 0)->get();
        return view('admin.category.editCate', compact('cate', 'data'));

    }

    public function show()
    {

    }

    public function destroy($cate_id)
    {
         $res=CategoryModel::where('cate_id',$cate_id)->delete();
         CategoryModel::where('cate_pid',$cate_id)->update(['cate_pid'=>0]);
        if ($res){
            return $data=['success','删除成功'];
        }else{
            return $data=['error','删除失败'];
        }
    }

    /**
     * 更新信息
     */
    public function update($cate_id)
    {
        $data = Input::except('_token', '_method');
        $res=CategoryModel::where('cate_id', $cate_id)->update($data);
        if ($res){
            return redirect('admin/category/create')->with('success','更新成功！');
        }else{
            return back()->with('error','分类更新失败');
        }
    }


}
