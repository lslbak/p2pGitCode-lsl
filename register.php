<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户注册页面</title>
    <!-- 引入bootstrap核心库样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入bootstrapValidator的样式 -->
    <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
    <!-- 引入编译和压缩过的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/reglogin.min.css">
    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
        <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- 引入头部 -->
    <?php 
        require_once("regloginTop.php");
    ?>
    <!-- 注册内容 -->
    <div class="container relogin">
        <div class="panel panel-default">
            <div class="panel-heading">用户注册</div>
            <div class="panel-body">
                
                <form class="form-horizontal" id="regForm">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">用户名：</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="username"  placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">密码：</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="password"  placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">确认密码：</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="repeatPassword"  placeholder="请再次输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">手机号码：</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="mobile"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">邮箱：</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="email"  placeholder="">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">用户注册</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>


    <!-- 引入页脚 -->
    <?php 
        require_once("footer.php");
    ?>

    <!--引入jquery  -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入bootstrapValidator的js库 -->
    <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
    <!-- 引入自定义效果 -->
    <script src="./dist/js/p2p.min.js"></script>
    <!-- 表单验证的js效果 -->
    <script src="./dist/js/formcheck.min.js"></script>
</body>

</html>