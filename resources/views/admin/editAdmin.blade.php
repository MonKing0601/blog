<html>
<head>
    <meta charset="UTF-8">
    <title>修改管理员</title>
</head>
<body>
<h3>修改管理员</h3>
<form action="" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td>管理员名称</td>
            <td><input type="text" name="Admin[user_name]" value="{{$Admin['user_name']}}" placeholder=""/></td>
        </tr>
        <tr>
            <td>管理员密码</td>
            <td><input type="password" name="Admin[user_password]" value="{{$Admin->user_password}}"/></td>
        </tr>
        <tr>
            <td>管理员邮箱</td>
            <td><input type="text" name="Admin[user_email]" placeholder="" value="{{$Admin->user_email}}"/></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><input type="submit" value="修改管理员"/></td>
        </tr>
    </table>
</form>
</body>
</html>