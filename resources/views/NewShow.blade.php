<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{url('css/myStyle.css')}}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body  class="comBody">
{{--导航列表--}}
<div class="navbar " role="navigation">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="##" class="navbar-brand">-MonKing-blog-</a>
    </div>

    <div class="collapse navbar-collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav ">
            <li class="active"><a href="##"  class="btn-lg">首页</a></li>
            <li><a href="##" class="btn-lg">文章</a></li>
            <li><a href="##"  class="btn-lg">关于我</a></li>
            <li><a href="##"  class="btn-lg">联系方式</a></li>
        </ul>
        <form action="##" class="navbar-form navbar-right " rol="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="请输入关键词"/>
            </div>
            <button type="submit" class="btn btn-primary">搜索</button>
        </form>
    </div>
</div>

{{--中部内容网格   右侧内容网格--}}
<div class="row">
    {{--文章列表显示--}}
    <div class="col-md-8 ">
        <div class="col-xs-6 col-md-4">
            <a href="#" class="thumbnail">
                <img alt="100%x180" src="http://img.mukewang.com/5434eba100014fe906000338.png"
                     style="height: 180px; width: 100%; display: block;">
            </a>
            <div class="caption">
                <h3>Bootstrap框架系列教程</h3>
                <p> Bootstrap框架是一个优秀的前端框，就算您是一位后端程序员或者你是一位不懂设计的前端人员，你也能依赖于Bootstrap制作做优美的网站...</p>
                <p style="float: right">
                    <a href="##" class="btn btn-defult">更多...</a>
                </p>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <a href="#" class="thumbnail">
                <img alt="100%x180" src="http://img.mukewang.com/5434eba100014fe906000338.png"
                     style="height: 180px; width: 100%; display: block;">
            </a>
            <div class="caption">
                <h3>Bootstrap框架系列教程</h3>
                <p> Bootstrap框架是一个优秀的前端框，就算您是一位后端程序员或者你是一位不懂设计的前端人员，你也能依赖于Bootstrap制作做优美的网站...</p>
                <p style="float: right">
                    <a href="##" class="btn btn-defult">更多...</a>
                </p>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <a href="#" class="thumbnail">
                <img alt="100%x180" src="http://img.mukewang.com/5434eba100014fe906000338.png"
                     style="height: 180px; width: 100%; display: block;">
            </a>
            <div class="caption">
                <h3>Bootstrap框架系列教程</h3>
                <p> Bootstrap框架是一个优秀的前端框，就算您是一位后端程序员或者你是一位不懂设计的前端人员，你也能依赖于Bootstrap制作做优美的网站...</p>
                <p style="float: right">
                    <a href="##" class="btn btn-defult">更多...</a>
                </p>
            </div>
        </div>
        <div class="col-xs-6 col-md-4">
            <a href="#" class="thumbnail">
                <img alt="100%x180" src="http://img.mukewang.com/5434eba100014fe906000338.png"
                     style="height: 180px; width: 100%; display: block;">
            </a>
            <div class="caption">
                <h3>Bootstrap框架系列教程</h3>
                <p> Bootstrap框架是一个优秀的前端框，就算您是一位后端程序员或者你是一位不懂设计的前端人员，你也能依赖于Bootstrap制作做优美的网站...</p>
                <p style="float: right">
                    <a href="##" class="btn btn-defult">更多...</a>
                </p>
            </div>
        </div>
        {{--给文章分页留的空间--}}
        <div></div>
    </div>
    {{--右侧列表--}}
    <div class="col-md-4">
        <div class="col-md-12">
            <div class="panel ">
                <div class="panel-heading">热门文章</div>
                <div class="list-group">
                    <a href="##" class="list-group-item"><span class="badge">1</span>文章</a>
                    <a href="##" class="list-group-item"><span class="badge">2</span>文章</a>
                    <a href="##" class="list-group-item"><span class="badge">3</span>文章</a>
                    <a href="##" class="list-group-item"><span class="badge">4</span>文章</a>
                    <a href="##" class="list-group-item"><span class="badge">5</span>文章</a>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel ">
                <div class="panel-heading">文章分类</div>
                <div class="list-group">
                    <a href="##" class="list-group-item"><span class="badge">1</span>分类1</a>
                    <a href="##" class="list-group-item"><span class="badge">2</span>分类1</a>
                    <a href="##" class="list-group-item"><span class="badge">3</span>分类1</a>
                    <a href="##" class="list-group-item"><span class="badge">4</span>分类1</a>
                    <a href="##" class="list-group-item"><span class="badge">5</span>分类1</a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row footer combody">
    <div class="col-md-4">footer</div>
    <div class="col-md-4">footer</div>
    <div class="col-md-4">footer</div>
</div>

<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>