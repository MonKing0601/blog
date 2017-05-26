<html>
<head>
    <meta charset="UTF-8">
    <title>添加管理员</title>
</head>
<link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.css')}}">
<body>
<h3>添加管理员</h3>
<hr />
<form action="{{url('admin/save')}}" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table width="70%" border="0" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td>管理员名称</td>
            <td><input type="text" name="Admin[user_name]" placeholder="请输入管理员名称"/></td>
        </tr>
        <tr>
            <td>管理员密码</td>
            <td><input type="password" name="Admin[user_password]"/></td>
        </tr>
        <tr>
            <td>管理员邮箱</td>
            <td><input type="text" name="Admin[user_email]" placeholder="请输入管理员邮箱"/></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><input type="submit" value="添加管理员"/></td>
        </tr>
    </table>
</form>
</body>
</html>