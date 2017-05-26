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
<form action="{{url('admin/article/'.$data->art_id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table width="70%" border="0" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td>分类</td>
            <td><select name="cate_id" id="">
                    <option value="0">==选择分类==</option>
                    @foreach($cates as $cate)
                        <option value="{{$cate->cate_id}}">{{$cate->_cate_name}}</option>
                    @endforeach
                </select></td>
        </tr>
        <tr>
            <td>文章标题</td>
            <td><input type="text" name="art_title" value="{{$data->art_title}}"/></td>
        </tr>
        <tr>
            <td>编辑作者</td>
            <td><input type="text" name="art_editor" value="{{$data->art_editor}}"/></td>
        </tr>
        <tr>
            <td>关键词</td>
            <td><input type="text" name="art_tag" value="{{$data->art_tag}}"/></td>
        </tr>
        <tr>
            <td>文章描述</td>
            <td><input type="text" name="art_description" value="{{$data->art_description}}"/></td>
        </tr>
        <tr>
            <td>缩略图</td>
            <td style="padding: 5px 0;">
                <input type="text" name="art_thumb"  size="50" value="{{$data->art_thumb}}">
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"
                        type="text/javascript"></script>
                <script src="{{asset('uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="{{asset('uploadify/uploadify.css')}}">
                <input id="file_upload" name="file_upload" type="file" multiple="true">
                <script type="text/javascript">
                    <?php $timestamp = time();?>
         $(function () {
                        $('#file_upload').uploadify({
                            'formData': {
                                'timestamp': '<?php echo $timestamp;?>',
                                '_token': '{{csrf_token()}}'
                            },
                            'buttonText': '图片上传',
                            'swf': "{{asset('uploadify/uploadify.swf')}}",
                            'uploader': "{{url('admin/upload')}}",
                            'onUploadSuccess':function (file, data, response) {
                                $('#thumb_img').attr('src','/blog/'+data);
                            }
                        });
                    });
                </script>
            </td>
        </tr>
        <tr style="width: 100%;height: 100px;">
            <td>图片展示</td>
            <td><img src="/blog/{{$data->art_thumb}}" alt="" id="thumb_img" style="max-height: 250px; max-width: 150px"></td>
        </tr>
        <tr>
            <td>文章内容</td>
            <td>
                <script type="text/javascript" charset="utf-8"
                        src="{{asset('ueditor/ueditor.config.js')}}"></script>
                <script type="text/javascript" charset="utf-8"
                        src="{{asset('ueditor/ueditor.all.min.js')}}"></script>
                <script type="text/javascript" charset="utf-8"
                        src="{{asset('ueditor/ueditor.all.min.js')}}"></script>
                <script id="editor" name="art_content" type="text/plain" style="width:800px;height:500px;">{!! $data->art_content !!}</script>
                <script type="text/javascript"> var ue = UE.getEditor('editor');  </script>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><input type="submit" value="添加分类"/></td>
        </tr>
    </table>
</form>
</body>
</html>