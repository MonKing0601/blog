<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title','博客后台管理')</title>
    <link rel="stylesheet" href="{{asset('css/backstage.css')}}">

</head>

<body>
{{--黑色区域块文字部分--}}
<div class="head">
    <div class="logo fl"><a href=""></a></div>

    <h3 class="head_text fr">博客后台管理</h3>
</div>
{{--横向菜单部分--}}
<div class="operation_user clearfix">
<<<<<<< HEAD
    <div class="link fl"><a href="#" /></div>
=======
    <div class="link fl"><a href="#"></div>
>>>>>>> c070b3caa5208f80ecf968946c1405e9bd906b66
    <div class="link fr">
        <p></p>
        <a href="{{url('admin/info')}}" target="mainFrame" class="icon icon_i">首页</a><span></span><a href="#" class="icon icon_j">前进</a><span></span><a
                href="#" class="icon icon_t">后退</a><span></span><a href="#" class="icon icon_n">刷新</a><span></span><a
                href="{{url('admin/quit')}}" class="icon icon_e">退出</a>

    </div>
</div>
{{--主要内容区域   左侧菜单栏和右侧内容--}}
<div class="content clearfix">
    <div class="main">
        <!--右侧内容-->
            <div class="cont">
                <div class="title">后台管理</div>
                <!-- 嵌套网页开始 -->
                <iframe src="{{url('admin/info')}}" frameborder="0" name="mainFrame" width="100%" height="522"></iframe>
                <!-- 嵌套网页结束 -->
            </div>

    </div>
    <!--左侧列表-->
    <div class="menu">
            <div class="cont">
                @section('left_menu')
                <div class="title">管理员</div>
                <ul class="mList">
                    <li>
                        <h3><span onclick="show('menu1','change1')" id="change1">+</span>管理员信息</h3>
                        <dl id="menu1" style="display:none;">
                            <dd><a href="{{url('admin/adminList')}}" target="mainFrame">管理员列表</a></dd>
                            <dd><a href="{{url('admin/addAdmin')}}"  target="mainFrame">添加管理员</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onclick="show('menu2','change2')" id="change2">+</span>文章分类管理</h3>
                        <dl id="menu2" style="display:none;">
                            <dd><a href="{{url('admin/category')}}" target="mainFrame">文章分类列表</a></dd>
                            <dd><a href="{{url('admin/category/create')}}" target="mainFrame">增加文章分类</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onclick="show('menu3','change3')" id="change3">+</span>文章管理</h3>
                        <dl id="menu3" style="display:none;">
                            <dd><a href="{{url('admin/article')}}" target="mainFrame">文章列表</a></dd>
                            <dd><a href="{{url('admin/article/create')}}" target="mainFrame">添加文章</a></dd>
                        </dl>
                    </li>

                </ul>
                @show
            </div>
    </div>
</div>
<script type="text/javascript">

    function show(num, change) {
        var menu = document.getElementById(num);
        var change = document.getElementById(change);
        if (change.innerHTML == "+") {
            change.innerHTML = "-";
        } else {
            change.innerHTML = "+";
        }
        if (menu.style.display == 'none') {
            menu.style.display = '';
        } else {
            menu.style.display = 'none';
        }
    }
    @yield('script')
</script>
</body>
</html>