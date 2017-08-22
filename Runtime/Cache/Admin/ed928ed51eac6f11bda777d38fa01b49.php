<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Hello MUI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/MhyShopAdmin/Public/Admin/css/bootstrap.min.css">
        <link rel="stylesheet" href="/MhyShopAdmin/Public/Admin/css/font-awesome.min.css">
        <link rel="stylesheet" href="/MhyShopAdmin/Public/Admin/css/base.css">
        <script src="/MhyShopAdmin/Public/js/jquery.min.js"></script>
        <script src="/MhyShopAdmin/Public/plug/laydate/laydate.js"></script>
        <script src="/MhyShopAdmin/Public/plug/layer/layer.js"></script>

        <script src="./js/base.js"></script>
        <style type="text/css">
            .laydate_box, .laydate_box * {
                box-sizing:content-box;
            }

            .laydate-icon{
                height: 34px;
                line-height: 34px;
            }
        </style>
	</head>

	<body>
    <div class="login">
        <form action="<?php echo U('Public/login');?>" method="post">

            <div class="form-group">

                <h3 class="text-center">登&nbsp;&nbsp;录</h3>
            </div>
            <div class="form-group">

                <input type="input" class="form-control" id="adminName" name="adminName" placeholder="用户名">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="密码">
            </div>

            <button type="submit" class="btn btn-success btn-block">登&nbsp;&nbsp;录</button>
        </form>


    </div>

	</body>

</html>