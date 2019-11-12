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
                <li><a href="/tp3/phpSJ/Home/index/account">检查信息</a></li>
                <li class="active"><a href="/tp3/phpSJ/Home/index/shoes_db">检查鞋库</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div>
        <h1>鞋库</h1>
        <p class="lead">欢迎你，管理员<?php echo ($_SESSION['account']['username']); ?>！检查鞋库，修改删除请小心</p>
    </div>

</div>

<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>编号</th><th>鞋名</th><th>码数</th><th>价格</th><th>库存</th><td><a href="shoes_add">增加</a></td>
        </tr>
        </thead>

        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($item["s_id"]); ?></td><td><?php echo ($item["s_name"]); ?></td><td><?php echo ($item["size"]); ?></td><td>&yen;<?php echo ($item["price"]); ?></td><td><?php echo ($item["stock"]); ?></td>
                <td><a href="<?php echo U('delete?id='.$item['s_id']);?>" onclick="return confirm('确定删除此条鞋子记录？')">删除</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </table>

    <p>
        <?php echo ($page); ?>
    </p>
</div>

</body>
</html>