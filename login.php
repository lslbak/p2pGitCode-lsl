<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录页面</title>
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
     
    <!-- 登录框 -->
    <div class="container relogin">
        <div class="panel panel-default">
            <div class="panel-heading">用户登录</div>
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
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">用户登录</button>
                        </div>
                    </div>
              </form>
            </div>
        </div>
    </div>


     <!-- 页脚 -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-xs-12">
              <p>专业Java培训、PHP培训、UI培训、iOS培训、高级Web前端培训机构</p>
              <p>版权所有： 2006-2015成都源代码教育咨询有限公司</p>
              <p>地  址： 成都市高新区府城大道西段399号天府新谷1号楼620-625</p>
              <p>电  话： 028-86261949  / 400-808-6840  邮箱： yuandaima@itsource.cn</p>
              <p><a href="#">蜀ICP备14030149号-1  蜀公网安备510114990541</a></p>
            </div>
            <div class="col-sm-2 col-xs-6">
              <p>官方微博：</p>
              <p><img class="img-responsive" src="./images/tecent.png" alt="腾讯微博"></p>
              <p><img class="img-responsive" src="./images/sina.png" alt="新浪微博"></p>
            </div>
            <div class="col-sm-2 col-xs-6">
              <p>官方微信：</p>
              <p><img class="img-responsive" src="./images/wx.jpg" alt="微信二维码"></p>
            </div>
          </div>
        </div>
    </footer>

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