{{--底部代码--}}
<footer>
    <div class="widewrapper footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-widget">
                    <h3><i class="fa fa-user"></i>关于我</h3>

                    <p>这是一个用laravel框架写的博客系统，功能还不是很完善，大概具备了 <b>后台发布文章，前台显示；管理员后台登陆</b>；</p>
                    <p>文章的编写和发布，增删查改；引用了<b> 「UEditor」 的扩展文本编辑器</b>来书写文章。</p>
                    <p>引用<b> 「uploadify」 </b>的扩展来上传缩略图，并且在上传过程中展示出来</p>
                    <p>父-子分类的列表展示的增删查改；</p>
                    <p>开发的系统环境：<b>WAMP</b>。</p>
                    <p>线上的系统环境：<b>LNMP</b>。</p></div>

                <div class="col-md-4 footer-widget">
                    <h3><i class="fa fa-pencil"></i> 文章阅读排行</h3>
                    <ul class="clean-list">
                        @foreach($val as $v)
                            <li><a href="{{url('detail/'.$v->art_id)}}">{{$v->art_title}}</a><b></b></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3><i class="fa fa-envelope"></i>联系我</h3>

                    <p>QQ邮箱： {{ '529057040@qq.com'}}</p>
                    <p>手机号码： {{ '13395057500'}}</p>

                    <div class="footer-widget-icon">
<<<<<<< HEAD
=======
                        <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google"></i>
>>>>>>> c070b3caa5208f80ecf968946c1405e9bd906b66
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="widewrapper copyright">
        Copyright 2017
    </div>
</footer>