{{--评论展示区模版--}}
<aside class="comments" id="comments">
    <hr>
    {{--评论总数--}}
    <h2><i class="fa fa-comments"></i> {{count($comments)}} 条评论</h2>
    {{--首次评论--}}
    @foreach($comments as $k=>$v)
        @if($v->father_id==0)
            <article class="comment">
                <header class="clearfix">
                    <img src="{{asset('img/avatar.png')}}" alt="A Smart Guy" class="avatar">
                    <div class="meta">
                        <h3><a href="#">{{$v->comment_name}}</a></h3>
                        <span class="date">
                                       {{date("d M Y",$v->updated_at)}}
                                    </span>
                        <span class="separator">
                                        -
                                    </span>

                        <a href="#create-comment" class="reply-link" value="{{$v->id}}"><span id="reply" >回复</span></a>
                    </div>
                </header>
                <div class="body">
                    {{$v->comment_content}}
                </div>
            </article>
        @else
            {{--回复评论--}}
            <article class="comment reply">
                <header class="clearfix">
                    <img src="{{asset('img/avatar.png')}}" alt="A Smart Guy" class="avatar">
                    <div class="meta">
                        <h3><a href="#">{{$v->comment_name}}</a></h3>
                        <span class="date">
                                        {{date("d M Y",$v->updated_at)}}
                                    </span>
                        <span class="separator">
                                        -
                                    </span>

                        <a href="#create-comment" class="reply-link" value="{{$v->id}}"><span id="reply" >回复</span></a>
                    </div>
                </header>
                <div class="body">
                    {{$v->comment_content}}
                </div>
            </article>
        @endif
    @endforeach()


</aside>
