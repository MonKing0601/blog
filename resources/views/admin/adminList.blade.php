<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>-.-</title>
    <link rel="stylesheet" href="{{asset('css/backstage.css')}}">
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addAdmin()">
        </div>

    </div>
    <!--表格-->
    @if(Session::has('success'))
        <p>{{session('success')}}</p>
    @endif
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="15%">编号</th>
            <th width="25%">管理员名称</th>
            <th width="30%">管理员邮箱</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($res as $admin)
        <tr>
            <td><input type="checkbox" id="c1" class="check"><label for="c1" class="label">{{$admin['user_id']}}</label>
            </td>
            <td>{{$admin['user_name']}}</td>
            <td>{{$admin['user_email']}}</td>
            <td align="center">
                <input type="button" value="修改" class="btn"
                       onclick="editAdmin()">
                <input type="button" value="删除" class="btn"
                       onclick="">
            </td>
        </tr>
        @endforeach

        <tr>
            <td colspan="4"></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
<script type="text/javascript">
    function editAdmin() {
        window.location = "{{url('admin/editAdmin',['id'=>$admin['user_id']])}}";
    }
    function delAdmin(id) {
        var i = window.confirm("你确定要删除吗？删除之后不可恢复");
        if (i) {
            window.location = "doAdminAction.php?act=delAdmin&id=" + id;
        }
    }
    function addAdmin() {
        window.location = "{{url('admin/addAdmin')}}";
    }
</script>
</html>