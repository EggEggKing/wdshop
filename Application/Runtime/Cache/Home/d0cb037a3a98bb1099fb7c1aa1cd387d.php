<?php if (!defined('THINK_PATH')) exit();?><html>
<meta charset="UTF-8">
<head>
    <title>检查信息</title>
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
                <li><a href="/tp3/phpSJ/Home/index/index">主页</a></li>
                <li class="active"><a href="/tp3/phpSJ/Home/index/account">检查信息</a></li>
                <li><a href="/tp3/phpSJ/Home/index/shoes_db">检查鞋库</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div>
        <h1>信息界面</h1>
        <p class="lead">欢迎你，管理员<?php echo ($_SESSION['account']['username']); ?>！检查用户个人信息，不可修改</p>
    </div>

</div>

<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>用户名</th><th>姓名</th><th>性别</th><th>电话</th><th>邮箱</th><th>国家</th><th>地址</th>
        </tr>
        </thead>

        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($item["username"]); ?></td><td><?php echo ($item["name"]); ?></td><td><?php echo ($item["sex"]); ?></td><td><?php echo ($item["phone"]); ?></td><td><?php echo ($item["mail"]); ?></td><td><?php echo ($item["country"]); ?></td><td><?php echo ($item["address"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </table>

    <p>
        <?php echo ($page); ?>
    </p>
</div>

</body>
</html>