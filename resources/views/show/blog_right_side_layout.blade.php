{{--右侧菜单区域代码--}}
<div class="aside-widget">
    <header>
        <h3>文章阅读排行</h3>
    </header>
    <div class="body">
        <ul class="clean-list">
            @foreach($val as $v)
                <li><a href="{{url('detail/'.$v->art_id)}}">{{$v->art_title}}</a><b></b></li>
            @endforeach
        </ul>
    </div>
</div>
