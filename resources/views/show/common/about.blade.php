@extends('show.common.main_layout')
@section('content')
    <div class="container about">
        <h1>你好, 我是<span class="about-bold">  MonKing</span></h1>
        <p>这是一个用laravel框架写的博客系统，功能还不是很完善，大概具备了 <b>后台发布文章，前台显示；管理员后台登陆</b>；</p>
        <p>文章的编写和发布，增删查改；引用了<b> 「UEditor」 的扩展文本编辑器</b>来书写文章。</p>
        <p>引用<b> 「uploadify」 </b>的扩展来上传缩略图，并且在上传过程中展示出来</p>
        <p>父-子分类的列表展示的增删查改；</p>
        <p>开发的系统环境：<b>WMAP</b>。</p>
        <div class="about-button">
            <a class="btn btn-xlarge btn-clean-one" href="{{url('/contact')}}">联系我</a>
        </div>
        <hr>
    </div>
@stop
@section('right_side')
@stop