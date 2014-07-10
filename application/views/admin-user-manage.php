<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta name="keywords" content="汕头电商诚信保障平台, 汕头电商, 诚信, 保障">
        <meta name="description" content="汕头电商诚信保障平台，让您更放心的去购物">
        <title>汕头电商诚信保障平台</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/head.css" />
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/home.css" /> -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/admin.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/foot.css" />
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
    <body>
        <header>
            <div id="head-container">
                <h1>
                    <a href="#"><img src="<?php echo base_url(); ?>static/img/logo.png"></a>
                    汕头电商诚信保障平台
                </h1> 
            </div>
        </header>
        
        <div id="main-container" class="clear-float">
            <div id="user-operation">
                <a href="#" class="float-right user-operation" id="logout">退出</a>
                <a href="#" class="float-right user-operation" id="personal">个人</a>
            </div>
            <h2 class="title">用户管理</h2>
            <aside>
                <ul>
                    <li><a href="admin.html">主页编辑</a></li>
                    <li><a href="admin-approve.html">商家审批</a></li>
                    <li class="active"><a href="admin-user-manage.html">用户管理</a></li>
                    <li><a href="admin-news-manage.html">新闻管理</a></li>
                </ul>
            </aside>
            <article>
                <table>
                    <thead>
                        <tr>
                            <th>类别</th>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="#">
                            <td>商家</td>
                            <td><a href="#">某某某</a></td>
                            <td>1234567890123</td>
                            <td><button class="user-delete">删除</button></td>
                        </tr>
                        <tr data-id="#">
                            <td>商家</td>
                            <td><a href="#">某某某</a></td>
                            <td>1234567890123</td>
                            <td><button class="user-delete">删除</button></td>
                        </tr>
                        <tr data-id="#">
                            <td>普通用户</td>
                            <td><a href="#">某某某</a></td>
                            <td>1234567890123</td>
                            <td><button class="user-delete">删除</button></td>
                        </tr>
                    </tbody>
                </table>
            </article>
        </div>



        <footer>
            <address>&copy;2014 By 陈冠达 郑锦泽 &nbsp; 备案号：粤12345678</address>
        </footer>
    </body>
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-2.1.1.js"></script>
    <!-- // <script type="text/javascript" src="<?php echo base_url(); ?>static/js/home.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/admin.js"></script>
</html>