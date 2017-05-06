@extends('show.common.main_layout')
@section('title','文章详情')
@section('navigate')
    <a href="{{url('/')}}">主页</a>
    <span class="separator">&#x2F;</span>
    <a href="#">{{$cate->cate_name}}</a>
    <span class="separator">&#x2F;</span>
    <a href="#">{{$data->art_title}}</a>
@stop
@section('content')

    <article class="blog-post">
        <header>
            <div class="lead-image">
                <img src="{{asset('img/single-post.jpg')}}" alt="" class="img-responsive">
            </div>
        </header>
        <div class="body">
            {{--文章标题--}}
            <h1>{{$data->art_title}}</h1>
            {{--文章信息部分--}}
            <div class="meta">
                <i class="fa fa-user"></i> {{$data->art_editor}}
                <i class="fa fa-calendar"></i>{{date('Y M d h:i',$data->art_time)}}
                <i class="fa fa-comments"></i><span class="data"><a href="#comments">评论 : {{count($comments)}}条</a></span>
                <i class="fa "></i>浏览 : {{$click}} 次
            </div>
            {{--文章内容部分--}}
            {!! $data->art_content !!}
        </div>
    </article>
    {{--分享区--}}
    @include('show.common.share')
    {{--评论展示区--}}
    @include('show.common.comments')
    {{--评论区--}}
    @include('show.common.addComments')
@stop