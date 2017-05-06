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
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addCategory()">
        </div>
        @include('common.validator')
    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="15%">编号</th>
            <th width="25%">分类名称</th>
            <th width="30%">分类信息</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $cate)
            <tr>
                <td><input type="checkbox" id="c1" class="check"><label for="c1"
                                                                        class="label">{{$cate['cate_id']}}</label>
                </td>
                <td>{{$cate['_cate_name']}}</td>
                <td>{{$cate['cate_title']}}</td>
                <td align="center">
                    <a href="{{url('admin/category/'.$cate->cate_id.'/edit')}}">修改</a>
                    <a href="javascript:;" onclick="delCate({{$cate->cate_id}})">删除</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
</body>
<script type="text/javascript">
    function delCate(id) {
        var i = confirm("你确定要删除这条数据吗？");
        if (i) {
            $.post("{{url('admin/category')}}/" + id, {
                '_method': 'delete',
                '_token': '{{csrf_token()}}'
            }, function (data) {
                if (data) {
                    location.href = location.href;
                }
            });
        }
    }
    function addCategory() {
        window.location = "{{url('admin/category/create')}}";
    }
</script>
</html>
