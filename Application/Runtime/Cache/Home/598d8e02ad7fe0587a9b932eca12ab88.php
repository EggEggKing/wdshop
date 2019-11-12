<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<head>
    <title>登录页</title>
    <link rel="stylesheet" href="/tp3/phpSJ/static/bootstrap/3.1.1/css/bootstrap.min.css">
    <style>
        body
        {
            padding-top:50px;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">不毒</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="../index/index">主页</a></li>
                <li><a href="../index/shopping">挑选</a></li>
                <li><a href="../index/shopping_car">购物车</a></li>
                <li class="active"><a href="login">登录</a></li>
                <li><a href='register'>注册</a></li>
                <li><a href='../user/logout'>登出</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div align="center">
        <h1>管理员登录界面</h1>
        <p class="lead">请输入用户名密码登录以查看用户信息</p>
    </div>
</div>
<div class="container">
    <form action="do_login_info" method="post">
        <div class="form-group">
            <label class="col-md-6">用户名</label>
            <input type="text" name="username" class="form-control" placeholder="Username" maxlength="20">
        </div>
        <div class="form-group">
            <label class="col-md-6">密码</label>
            <input type="password" name="passwd" class="form-control" placeholder="Password" maxlength="20">
        </div>
        <div class="form-group">
            <span>还没有账号？ <a href="register">点我新建账号</a></span>
            <input type="submit" class="btn btn-success pull-right" value="登录">
        </div>
    </form>
</div>

</body>
</html>