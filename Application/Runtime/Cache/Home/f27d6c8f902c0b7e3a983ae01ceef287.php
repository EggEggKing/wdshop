<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<head>
    <title>信息填写</title>
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
                <li class="active"><a href="../index/index">主页</a></li>
                <li><a href="../index/shopping">挑选</a></li>
                <li><a href="../index/shopping_car">购物车</a></li>
                <li><a href="login">登录</a></li>
                <li><a href="register">注册</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div align="center">
        <h1>填写信息</h1>
        <p class="lead">请输入您的个人信息，我将看心情保管您的隐私</p>
    </div>
    <div class="container">
        <form action="do_pinfo" method="post">
            <div class="form-group">
                <label class="col-md-6 control-label">用户名</label>
                <input type="text" name="username" class="form-control" placeholder="请填写用户名*" maxlength="20">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">姓名</label>
                <input type="text" name="name" class="form-control" placeholder="请填写真实姓名*" maxlength="20">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">身份证</label>
                <input type="text" name="id_card" class="form-control" placeholder="请填写有效的18位身份证号码*" maxlength="18">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">性别</label>
                <input type="text" name="sex" class="form-control" placeholder="男/女*" maxlength="2">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">电话</label>
                <input type="text" name="phone" class="form-control" placeholder="请填写真实电话*" maxlength="11">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">邮箱</label>
                <input type="text" name="mail" class="form-control" placeholder="xxxxx@qq.com" maxlength="30">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">国家</label>
                <input type="text" name="country" class="form-control" placeholder="中国" maxlength="20">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">居住地址</label>
                <input type="text" name="address" class="form-control" placeholder="XX省-XX市-XX区-XX街道-xxxx" maxlength="50">
            </div>
            <div class="form-group">
                <label>
                    <a href="#">跳过填写，以后再说</a>
                </label>
                <input type="submit" class="btn btn-success pull-right" value="提交">
                <input type="reset" class="btn btn-warning pull-right" value="重置">
            </div>
        </form>
    </div>
</div>

</body>
</html>