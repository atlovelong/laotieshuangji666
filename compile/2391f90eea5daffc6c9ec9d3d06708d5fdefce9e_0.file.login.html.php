<?php
/* Smarty version 3.1.30, created on 2018-01-16 09:44:24
  from "C:\wamp64\www\php\uekapp\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dc9789e04b1_99638065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2391f90eea5daffc6c9ec9d3d06708d5fdefce9e' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\admin\\login.html',
      1 => 1514899044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5dc9789e04b1_99638065 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/bootstrap.css">
    <?php echo '<script'; ?>
 src="src/js/jquery-1.11.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="src/css/theme.css">
    <link rel="stylesheet" type="text/css" href="src/css/premium.css">
</head>
<style type="text/css">
    #line-chart {
        height:300px;
        width:800px;
        margin: 0 auto;
        margin-top: 1em;
    }
    .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {
        color: #fff;
    }
    .theme-blue .navbar{
        background:#46b8da;
    }
    .panel-heading{
        text-align: center;
        font-size: 14px!important;
    }
    .myimg{
        position: relative;
    }
    .myimg input{
        width: 70%;
    }
    .myimg img{
        position: absolute;
        bottom: 0;
        right: 0;
        height: 32px;
    }
</style>
<body class=" theme-blue">
    <div>
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
             <a class="" href=""><span class="navbar-brand"><span class="fa fa-paper-plane"></span> 我的博客</span></a></div>
            <div class="navbar-collapse collapse" style="height: 1px;">
         </div>
        </div>
    </div>
    <div class="dialog">
        <div class="panel panel-default">
            <p class="panel-heading no-collapse">登录</p>
            <div class="panel-body">
                <form action="index.php?m=admin&a=verify" method="post">
                    <div class="form-group">
                        <label for="user">账号</label>
                        <input type="text" name="user" id="user" placeholder="请输入账号" class="form-control span12">
                    </div>
                    <div class="form-group">
                        <label for="pass">密码</label>
                        <input type="password" name="pass" id="pass" placeholder="请输入密码" class="form-controlspan12 form-control">
                    </div>
                    <div class="form-group myimg">
                        <label for="code">验证码</label>
                        <input type="text" name="code" id="code" placeholder="请输入验证码" class="form-controlspan12 form-control">
                        <img src="index.php?m=admin&a=code" onclick="this.src='index.php?m=admin&a=code&'+Math.random()" alt="">
                    </div>
                    <button class="btn btn-info pull-right">登录</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p><a href="">账号注册</a></p>
    </div>
</body>
</html>
<?php }
}
