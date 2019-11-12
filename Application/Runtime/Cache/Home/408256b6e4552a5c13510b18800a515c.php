<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<head>
    <title>购物车</title>
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
                <li class="active"><a href="shopping_car">购物车</a></li>
                <li><a href="../user/login">登录</a></li>
                <li><a href="../user/register">注册</a></li>
                <li><a href='../user/logout'>登出</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div>
        <h1>购物车</h1>
        <p class="lead">别再犹豫啦！快点支付购买吧</p>
    </div>
    <div class="col-md-6">
        <img src="/tp3/phpSJ/images/pay.jpg" class="img-responsive" alt="Responsive image">
    </div>
</div>

</div>
</body>
</html>