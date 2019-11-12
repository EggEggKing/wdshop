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
                <li><a href="index">主页</a></li>
                <li><a href="shopping">挑选</a></li>
                <li><a href="shoppingcar">购物车</a></li>
                <li><a href="login">登录</a></li>
                <li class="active"><a href="register">注册</a></li>
                <li><a href="#">我的账号</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div align="center">
        <h1>注册界面</h1>
        <p class="lead">请输入用户名密码注册以创建您的账号</p>
    </div>
</div>

<div class="container">
    <form action="do_register" method="post">
        <div class="form-group">
            <label class="col-md-6">用户名</label>
            <input type="text" name="username" class="form-control" placeholder="请输入用户名（不超过20个字符）" maxlength="20">
        </div>
        <div class="form-group">
            <label class="col-md-6">密码</label>
            <input type="password" name="password" class="form-control" placeholder="请输入密码（不超过20个字符）" maxlength="20">
        </div>
        <div class="form-group">
            <label class="col-md-6">再次输入</label>
            <input type="password" name="repassword" class="form-control" placeholder="请再次输入相同的密码" maxlength="20">
        </div>
        <div class="form-group">
            <span>已有账号？ <a href="login">点我登录</a></span>
            <input type="submit" class="btn btn-success pull-right" value="提交">
            <input type="reset" class="btn btn-warning pull-right" value="重置">
        </div>
    </form>
</div>

</body>
</html>