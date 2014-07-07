<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta name="keywords" content="汕头电商诚信保障平台, 汕头电商, 诚信, 保障">
        <meta name="description" content="汕头电商诚信保障平台，让您更放心的去购物">
        <title>汕头电商诚信保障平台</title>
        <link rel="stylesheet" type="text/css" href="../static/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="../static/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="../static/css/head.css" />
        <link rel="stylesheet" type="text/css" href="../static/css/home.css" />
        <link rel="stylesheet" type="text/css" href="../static/css/foot.css" />
        <script type="text/javascript">
            /* 检测IE版本
             * 若IE版本低于9，则跳转
             * 
            */
            var isIE = !!window.ActiveXObject
            var version = navigator.appVersion;
            var version = version.split(";");  
            var trimVersion = version[1].replace(/\s/g,""); 
            if(isIE && (trimVersion=="MSIE6.0" || trimVersion == "MSIE7.0" || trimVersion == "MSIE8.0") ) {
                alert("您的IE版本过低，请升级您的IE浏览器至IE9+或使用谷歌、火狐等高级浏览器");
                window.location.href = "http://ie.microsoft.com";
            }
        </script>
    </head>
    <body class="clear-float">
        <header>
            <div id="head-container">
                <h1>
                    <a href="#"><img src="../static/img/logo.png"></a>
                    汕头电商诚信保障平台
                </h1> 
            </div>
        </header>
        <div class="hide mask-layer"></div>
        <div class="hide hidebox" id="login-box">
            <form action="index.php/user/login" method="post">
                <h2>用户登录</h2>
                <div class="items">
                    <label for="name">用户名</label>
                    <input type="text" id="name" name="name" placeholder="用户名" />
                </div>
                <div class="items">
                    <label for="password">密码</label>
                    <input type="password" id="password" name="password" placeholder="密码" /> 
                </div>
                <div class="items">
                    <input type="checkbox" id="auto-login" name="auto-login" class="float-left" />
                    <span>七天内自动登录</span>
                </div>
                <div class="btns">
                    <button type="submit">登录</button>
                    <button type="reset">取消</button>
                </div>
            </form>
        </div>
        <div class="hide hidebox" id="register-box-0">
            <form action="#" method="post">
                <h2>用户注册</h2>
                <div class="items">
                    <label>用户类别</label>
                    <input type="radio" name="type" value="0" checked="checked" /> 商家入驻
                    <input type="radio" name="type" value="1" /> 普通用户
                </div>
                <div class="items">
                    <label for="name">用户名</label>
                    <input type="text" id="name" name="name" placeholder="用户名" />
                </div>
                <div class="items">
                    <label for="password">密码</label>
                    <input type="password" id="password" name="password" placeholder="密码" /> 
                </div>
                <div class="items">
                    <label for="real-name">真实姓名</label>
                    <input type="text" id="real-name" name="real-name" placeholder="真实姓名" />
                </div>
                <div class="items">
                    <label for="mobile">电话</label>
                    <input type="number" id="mobile" name="mobile" placeholder="电话" />
                </div>
                <div class="items">
                    <label for="address">地址</label>
                    <input type="text" id="address" name="address" placeholder="地址" />
                </div>
                <div class="items">
                    <label for="license">营业执照</label>
                    <input type="file" id="license" name="license" accept="image/*" />
                </div>
                <div class="btns">
                    <button type="submit">注册</button>
                    <button type="reset">取消</button>
                </div>
            </form>
        </div>
        <div class="hide hidebox" id="register-box-1">
            <form action="#" method="post">
                <h2>用户注册</h2>
                <div class="items">
                    <label>用户类别</label>
                    <input type="radio" name="type" value="0" /> 商家入驻
                    <input type="radio" name="type" value="1" checked="checked" /> 普通用户
                </div>
                <div class="items">
                    <label for="name">用户名</label>
                    <input type="text" id="name" name="name" placeholder="用户名" />
                </div>
                <div class="items">
                    <label for="password">密码</label>
                    <input type="password" id="password" name="password" placeholder="密码" /> 
                </div>
                <div class="items">
                    <label for="real-name">真实姓名</label>
                    <input type="text" id="real-name" name="real-name" placeholder="真实姓名" />
                </div>
                <div class="items">
                    <label for="mobile">电话</label>
                    <input type="number" id="mobile" name="mobile" placeholder="电话" />
                </div>
                <div class="items">
                    <label for="address">地址</label>
                    <input type="text" id="address" name="address" placeholder="地址" />
                </div>
                <div class="btns">
                    <button type="submit">注册</button>
                    <button type="reset">取消</button>
                </div>
            </form>
        </div>
        <div id="main-container" class="clear-float">
            <div id="user-operation">
                <a href="#" class="float-right user-operation" id="register">注册</a>
                <a href="#" class="float-right user-operation" id="login">登陆</a>
            </div>
        <!-- 到这里为head.html部分 -->
            <h2 class="title">首页</h2>
            <div class="clear-float">
                <div class="columns">
                    <div class="block block-1">
                        <div class="inner-block"></div>
                        <span class="read-more text-right">
                            <a href="#">更多</a>
                        </span>
                    </div>
                    <div class="block block-2">
                        <div class="inner-block"></div>
                        <span class="read-more text-right">
                            <a href="#">更多</a>
                        </span>
                    </div>
                    <div class="block block-3">
                        <div class="inner-block"></div>
                        <span class="read-more text-right">
                            <a href="#">更多</a>
                        </span>
                    </div>
                </div>
                <div class="columns">
                    <div class="block block-4">
                        <div class="inner-block"></div>
                        <span class="read-more text-right">
                            <a href="#">更多</a>
                        </span>
                    </div>
                    <div class="block double-block block-5">
                        <div class="inner-block"></div>
                        <span class="read-more text-right">
                            <a href="#">更多</a>
                        </span>
                    </div>
                </div>
                <div class="columns">
                    <div class="block block-6">
                        <div class="inner-block"></div>
                        <span class="read-more text-right">
                            <a href="#">更多</a>
                        </span>
                    </div>
                    <div class="block block-7">
                        <div class="inner-block"></div>
                        <span class="read-more text-right">
                            <a href="#">更多</a>
                        </span>
                    </div>
                    <div class="block block-8">
                        <div class="inner-block"></div>
                        <span class="read-more text-right">
                            <a href="#">更多</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <address>&copy;2014 By 陈冠达 郑锦泽 &nbsp; 备案号：粤12345678</address>
        </footer>
    </body>
    <script type="text/javascript" src="../static/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="../static/js/head.js"></script>
    <script type="text/javascript" src="../static/js/home.js"></script>
</html>