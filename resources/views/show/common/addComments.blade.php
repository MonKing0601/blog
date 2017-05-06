{{--添加评论区 模版--}}
<aside class="create-comment" id="create-comment">
    <hr>

    <h2><i class="fa fa-pencil"></i> 增加评论</h2>

    <form action="{{url('getComment')}}" method="get" accept-charset="utf-8">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="art_id" value="{{ $data->art_id }}">
        <input type="hidden" name="father_id" id="father_id" value="">
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="comment_name" id="comment-name" placeholder="Your Name"
                       class="form-control input-lg">
            </div>
            <div class="col-md-6">
                <input type="email" name="comment_email" id="comment-email" placeholder="Email"
                       class="form-control input-lg">
            </div>
        </div>


        <textarea rows="10" name="comment_content" id="comment-body" placeholder="Your Message"
                  class="form-control input-lg"></textarea>

        <div class="buttons clearfix">
            <button type="submit" class="btn btn-xlarge btn-clean-one">评论</button>
        </div>
    </form>
</aside>
