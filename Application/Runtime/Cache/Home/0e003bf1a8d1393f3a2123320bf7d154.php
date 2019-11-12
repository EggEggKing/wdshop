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
    <div class="table-responsive m-t">
        <table class="table invoice-table">
            <thead>
            <tr>
                <th>清单</th><th>数量</th><th>价格</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                <td>
                    <div><strong><?php echo ($item["s_name"]); ?></strong></div>
                    <small><?php echo ($item["sales"]); ?></small>
                </td>
                <td><?php echo ($item["b_num"]); ?></td>
                <td>&yen;<?php echo ($item["price"]); ?></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <tr>
                <td><strong>总价：</strong></td>
                <td>&yen;2461.00</td>
            </tr>
            <tr>
                <td><strong>税：</strong></td>
                <td>&yen;235.98</td>
            </tr>
            <tr>
                <td><strong>总计</strong></td>
                <td>&yen;2696.98</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="text-right">
        <button class="btn-success pull-right"><a href="pay">去付款</a></button>
    </div>

    <div class="well m-t"><strong>注意：</strong> 请在30日内完成付款，否则订单会自动取消。
    </div>
</div>

</div>
</body>
</html>