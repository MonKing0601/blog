{{--主模板界面  包括导航栏 搜索栏 右侧菜单栏  底部菜单栏  JS语法占位符--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title','主页')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{asset('showCss/bootstrap.min.css')}}">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="{{asset('showCss/font-awesome/css/font-awesome.min.css')}}">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet'
          type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('showCss/style.css')}}" id="theme-styles">

    <!--[if lt IE 9]>
    <script src="{{asset('showCss/js/vendor/google/html5-3.6-respond-1.1.0.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<header>
    <div class="widewrapper masthead">
        <div class="container">
            <a href="{{url('/')}}" id="logo">
                <img src="{{asset('img/MonKlngBlog.png')}}" alt="clean Blog">
            </a>

            <div id="mobile-nav-toggle" class="pull-right">
                <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <nav class="pull-right clean-nav">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills navbar-nav">

                        <li>
                            <a href="{{url('/')}}">博客主页</a>
                        </li>
                        <li>
                            <a href="{{url('/about')}}">关于我</a>
                        </li>
                        <li>
                            <a href="{{url('/contact')}}">联系方式</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>

    <div class="widewrapper subheader">
        <div class="container">
            <div class="clean-breadcrumb">
                @section('navigate')
                    <a href="{{url('/')}}">Blog</a>
                @show
            </div>

            <div class="clean-searchbox">
                <form method="post"  action="{{url('/Search')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="searchfield" id="searchbox" name="searchbox" type="text" placeholder="Search">
                    <button class="searchbutton" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="widewrapper main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                {{--一行两列的代码--}}
                @section('content')
                <div class="paging">
                    <a href="#" class="older"><i>Older Post</i></a>
                </div>
                @show
            </div>
            {{--右侧菜单栏区域--}}
            @section('right_side')
            <aside class="col-md-4 blog-aside">
                @include('show.blog_right_side_layout')
            </aside>
            @show
        </div>
    </div>
</div>

@include('show.common.footer_layout')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{asset('showCss/js/bootstrap.min.js')}}"></script>
<script src="{{asset('showCss/js/modernizr.js')}}"></script>
@yield('script')
</body>
</html>