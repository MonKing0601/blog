<html>
<head>
    <meta charset="UTF-8">
    <title>添加分类</title>
</head>
<link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.css')}}">
<body>
<h3>添加分类</h3>
@include('common.message')
@include('common.validator')
<hr/>
<form action="{{url('admin/category')}}" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table width="70%" border="0" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td>父级分类</td>
            <td><select name="cate_pid" id="">
                    <option value="0">==选择分类==</option>
                    @foreach($data as $d)
                        <option value="{{$d->cate_id}}">{{$d->cate_name}}</option>
                    @endforeach
                </select></td>
        </tr>
        <tr>
            <td>分类名称</td>
            <td><input type="text" name="cate_name" /></td>
        </tr>
        <tr>
            <td>分类标题</td>
            <td><input type="text" name="cate_title"/></td>
        </tr>
        <tr>
            <td>分类描述</td>
            <td><input type="text" name="cate_description"/></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><input type="submit" value="添加分类"/></td>
        </tr>
    </table>
</form>
</body>
</html>