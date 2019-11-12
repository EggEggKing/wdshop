<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<head>
    <title>增加数据</title>
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
                <li><a href="account">检查信息</a></li>
                <li><a href="shoes_db">检查鞋库</a></li>
                <li><a href='../user/logout'>登出</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div align="center">
        <h1>填写信息</h1>
        <p class="lead">请输入鞋子信息，输错了你看着办</p>
    </div>
    <div class="container">
        <form action="do_add" method="post">
            <div class="form-group">
                <label class="col-md-6 control-label">编号</label>
                <input type="text" name="s_id" class="form-control" placeholder="请填写正确编号" maxlength="10">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">鞋名</label>
                <input type="text" name="s_name" class="form-control" placeholder="请填写鞋名" maxlength="50">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">尺码</label>
                <input type="text" name="size" class="form-control" placeholder="如：38.5-42" maxlength="10">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">价格</label>
                <input type="text" name="price" class="form-control" placeholder="仅填数字" maxlength="5">
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label">库存</label>
                <input type="text" name="stock" class="form-control" maxlength="4">
            </div>

            <div class="form-group">
                <label>
                    <a href="shoes_db">点错了，不填了</a>
                </label>
                <input type="submit" class="btn btn-success pull-right" value="提交">
                <input type="reset" class="btn btn-warning pull-right" value="重置">
            </div>
        </form>
    </div>
</div>

</body>
</html>