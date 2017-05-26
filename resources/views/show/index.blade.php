@extends('show.common.main_layout')
@section('content')
    <div class="row">
        @if(Session::has('error'))
            <p>{{session('error')}}</p>
        @endif
        @foreach($data as $d)
            {{--单个文章的代码--}}
            <div class="col-md-6 col-sm-6">
                <article class=" blog-teaser">
                    <header>
                        <img style="height: 160px;" src="{{asset($d->art_thumb)}}" alt="">
                        <h3><a href="{{url('detail/'.$d->art_id)}}">{{$d->art_title}}</a></h3>
                        <span class="meta">{{date('Y M d h:i',$d->art_time)}}</span>
                        <hr>
                    </header>
                    <div class="body">
                        {{$d->art_tag}}
                    </div>
                    <div class="clearfix">
                        <a href="{{url('detail/'.$d->art_id)}}" class="btn btn-clean-one">更多...</a>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
    @parent
@stop