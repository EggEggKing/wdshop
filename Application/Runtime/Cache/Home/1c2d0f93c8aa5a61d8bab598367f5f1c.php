<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<head>
    <title>商城</title>
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
                <li class="active"><a href="shopping">挑选</a></li>
                <li><a href="shopping_car">购物车</a></li>
                <li><a href="../user/login">登录</a></li>
                <li><a href="../user/register">注册</a></li>
                <li><a href='../user/logout'>登出</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="ptCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#ptCarousel" data-slide-to="0" class="active"> </li>
        <li data-target="#ptCarousel" data-slide-to="1"> </li>
        <li data-target="#ptCarousel" data-slide-to="2"> </li>
        <li data-target="#ptCarousel" data-slide-to="3"> </li>
    </ol>
    <div class="carousel-inner">
        <div class="item active" style="background:#F5E4DC;">
            <img src="/tp3/phpSJ/images/b2.jpg" alt="第一张" />
        </div>
        <div class="item" style="background:#080808;">
            <img src="/tp3/phpSJ/images/b3.jpg" alt="第二张" />
        </div>
        <div class="item" style="background:#e4606d;">
            <img src="/tp3/phpSJ/images/b4.jpg" alt="第三张" />
        </div>
        <div class="item" style="background:#5bc0de;">
            <img src="/tp3/phpSJ/images/b6.jpg" alt="第四张" />
        </div>

    </div>

    <a href="#ptCarousel" data-slide="prev" class="carousel-control left">
        <span class="glyphicon glyphicon-chevron-left"> </span>
    </a>
    <a href="#ptCarousel" data-slide="next" class="carousel-control right">
        <span class="glyphicon glyphicon-chevron-right"> </span>
    </a>
</div>

<div class="container" style="padding-left: 30px">
    <div align="center">
        <h1>热门商品</h1>
        <p class="lead">为您推荐近期热销的商品</p>
    </div>
    <div class="row" align="center">
        <div class="col-md-10" style="padding-left: 50px; padding-top: 15px">
            <div class="row">
                <div class="col-md-3" style="height:390px;width: 540px;">
                    <a href="#"><img src="/tp3/phpSJ/images/big02.jpg" height="100%" width="100%"></a>
                </div>
                <div class="col-md-5" align="center" style="padding-left: 50px;padding-top: 90px">
                    <a href="#"><img src="/tp3/phpSJ/images/s7.jpg" height="32%" width="100%"></a>
                    <a href="#"><p><font color="gray">Nike AirMax Light</p></a>
                    <p><font color="gray">Size:37.5-46</p>
                    <p><font color="red">￥584</font></p>
                    <a href="#" class="btn btn-warning">收藏</a>
                    <a href="#" class="btn btn-primary">加入购物车</a>
                </div>
            </div>
            <div class="row" style= "padding-top: 15px">
                <div class="col-md-3" align="center">
                    <a href="#"><img src="/tp3/phpSJ/images/s8.jpg" height="23%" width="100%"></a>
                    <a href="#"><p><font color="gray">Nike Kyrie Flypap II</p></a>
                    <p><font color="gray">Size:40-46</p>
                    <p><font color="red">￥354</font></p>
                    <a href="#" class="btn btn-warning">收藏</a>
                    <a href="#" class="btn btn-primary">加入购物车</a>
                </div>
                <div class="col-md-3" align="center">
                    <a href="#"><img src="/tp3/phpSJ/images/s10.jpg" height="23%" width="100%"></a>
                    <a href="#"><p><font color="gray">Adidas ClimaCool 2.0</p></a>
                    <p><font color="gray">Size:39-46</p>
                    <p><font color="red">￥424</font></p>
                    <a href="#" class="btn btn-warning">收藏</a>
                    <a href="#" class="btn btn-primary">加入购物车</a>
                </div>
                <div class="col-md-3" align="center">
                    <a href="#"><img src="/tp3/phpSJ/images/s11.jpg" height="23%" width="100%"></a>
                    <a href="#"><p><font color="gray">Puma Suede</p></a>
                    <p><font color="gray">Size:35.5-42.5</p>
                    <p><font color="red">￥344</font></p>
                    <a href="#" class="btn btn-warning">收藏</a>
                    <a href="#" class="btn btn-primary">加入购物车</a>
                </div>
                <div class="col-md-3" align="center">
                    <a href="#"><img src="/tp3/phpSJ/images/s12.jpg" height="23%" width="100%"></a>
                    <a href="#"><p><font color="gray">Nike AirMax Dia</p></a>
                    <p><font color="gray">Size:35.5-38.5</p>
                    <p><font color="red">￥604</font></p>
                    <a href="#" class="btn btn-warning">收藏</a>
                    <a href="#" class="btn btn-primary">加入购物车</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top:10px;">
    <div class="row">
        <div>
            <img src="/tp3/phpSJ/images/all4.PNG" style="width: 100%">
        </div>
    </div>
</div>

<div class="container" align="center">
    <footer>
        <div class="row">
            <ul class="list-inline"  align="center">
                <li><a href="#">关于我们</a></li>
                <li><a href="#">联系我们</a></li>
                <li><a href="#">招贤纳士</a></li>
                <li><a href="#">法律声明</a></li>
                <li><a href="#">有情链接</a></li>
                <li><a href="#">支付方式</a></li>
                <li><a href="#">配送方式</a></li>
                <li><a href="#">服务声明</a></li>
                <li><a href="#">广告声明</a></li>
            </ul>

            <address>
                <strong>17计信2@许玳诚</strong>
                深圳市，南山区<br/>
                深圳职业技术学院
                <abbr title="id">学号:17240051</abbr>
            </address>
    </footer>
</div>
<script src="/tp3/phpSJ/static/jquery/2.1.1/jquery.min.js"></script>
<script src="/tp3/phpSJ/static/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>