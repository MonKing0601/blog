<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- -->
    <script>var __links = document.querySelectorAll('a');
        function __linkClick(e) {
            parent.window.postMessage(this.href, '*');
        }
        ;
        for (var i = 0, l = __links.length; i < l; i++) {
            if (__links[i].getAttribute('data-t') == '_blank') {
                __links[i].addEventListener('click', __linkClick, false);
            }
        }</script>
    <script src="js/jquery.min.js"></script>
    <script>$(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.message').fadeOut('slow', function (c) {
                    $('.message').remove();
                });
            });
        });
    </script>
</head>
<body>
<!-- contact-form -->
<div class="message warning">
    <div class="inset">
        <div class="login-head">
            <h1>Login Form</h1>
            <div class="alert-close"></div>
        </div>
        @if(session('msg'))
        <li style="text-color:#fff;">{{session('msg')}}</li>
        @endif
            <form  method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <li>
                <input type="text" class="text" value="Username" name="username" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Username';}">
            </li>
            <div class="clear"></div>
            <li>
                <input type="password" value="Password" name="password" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Password';}">
            </li>
            <li>
                <input type="text" value="captcha" name="captcha" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'captcha';}">
            </li>
            <li>
                {{--验证码区域--}}
                <img src="{{captcha_src()}}" />
            </li>
            <div class="clear"></div>
            <div class="submit">
                <input type="submit" onclick="myFunction()" value="Sign in">
                <h4><a href="#">Lost your Password ?</a></h4>
                <div class="clear"></div>
            </div>

        </form>
    </div>
</div>
</div>
<div class="clear"></div>
<!--- footer --->
<div class="footer">
</div>
</body>
</html>