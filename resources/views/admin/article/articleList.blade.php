<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>-.-</title>
    <link rel="stylesheet" href="{{asset('css/backstage.css')}}">
    <script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.js"></script>
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addArticle()">
            @include('common.validator')
            @include('common.message')
        </div>
    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="10%">编号</th>
            <th width="15%">文章名称</th>
            <th width="15%">文章关键词</th>
            <th width="15%">文章描述</th>
            <th width="15%">文章作者</th>
            <th width="15%">发表时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $article)
        <tr>
            <td><input type="checkbox" id="c1" class="check"><label for="c1"
                                                                    class="label">{{$article['art_id']}}</label>
            </td>
            <td>{{$article['art_title']}}</td>
            <td>{{$article['art_tag']}}</td>
            <td>{{$article['art_description']}}</td>
            <td>{{$article['art_editor']}}</td>
            <td>{{date("Y:m:d h:i:s",$article['art_time'])}}</td>

            <td align="center">
                <a href="{{url('admin/article/'.$article->art_id.'/edit')}}">修改</a>
                <a href="javascript:;" onclick="delArticle({{$article->art_id}})">删除</a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
</body>
<script type="text/javascript">
    function delArticle(id) {
        var i = confirm("你确定要删除这条数据吗？");
        if (i) {
            $.post("{{url('admin/article')}}/" + id, {
                '_method': 'delete',
                '_token': '{{csrf_token()}}'
            }, function (data) {
                if (data) {
                    location.href = location.href;
                }
            });
        }
    }
    function addArticle() {
        window.location = "{{url('admin/article/create')}}";
    }
</script>
</html>
