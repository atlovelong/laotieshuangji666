<?php
/* Smarty version 3.1.30, created on 2018-01-16 09:46:03
  from "C:\wamp64\www\php\uekapp\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dc9db7b3134_32636452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd9812298d7ad1ee2cec407b266636d6a3d1ed44' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\admin\\main.html',
      1 => 1515029446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5dc9db7b3134_32636452 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/font-awesome/css/font-awesome.css">
<!--    <link rel="stylesheet" type="text/css" href="../css/theme.css">-->
    <link rel="stylesheet" type="text/css" href="src/css/premium.css">
    <link rel="stylesheet" href="src/css/theme.css">

    <?php echo '<script'; ?>
 src="src/js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="src/js/jquery.knob.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="src/js/bootstrap.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    <?php echo '</script'; ?>
>
</head>
<style type="text/css">
    body{
        margin: 0;
        padding: 0;
        /*overflow: hidden;*/
    }
    #line-chart {
        height:300px;
        width:800px;
        margin: 0px auto;
        margin-top: 1em;
    }
    .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {
        color: #fff;
    }
    .mymain{
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .navbar-header {
        position: absolute;
        top: 0;
        z-index: 10000;
    }
    .content{
        /*min-height: 0px;*/
        overflow: hidden;
        position: relative;
        /*width: 100%;*/
        /*height: 100%;*/
    }
    iframe{
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        display: block;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .theme-blue .navbar{
        background:#46b8da;
    }
    .navbar .nav > li:hover {
        background-color: #28a3ff;
    }
    .navbar .nav li.dropdown.open > .dropdown-toggle {
        background-color: #28a3ff;
    }
    .exit{
        position: absolute;
        display: block;
        right: 20px;
        color: #fff;
        line-height: 50px;
        padding: 0 12px;
    }
    .exit:hover{
        background: #2aabd2;
        color: #fff;
    }
    .login{
        position: absolute;
        right: 130px;
        line-height: 50px;
        color: #fff;
    }
</style>
<body class="theme-blue">
<div class="navbar navbar-default" role="navigation">
    <p class="login">欢迎<span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>登录！</p>
    <a href="index.php?m=admin&a=exits" class="exit">退出登录</a>
    <div class="navbar-header">
        <a class="mymain" href=""><span class="navbar-brand"><span class="fa fa-paper-plane"></span> MySql</span></a>
    </div>
</div>
<div class="sidebar-nav">
    <ul>
        <li>
            <a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse">
                <i class="fa fa-fw fa-dashboard"></i> 账户信息<i class="fa fa-collapse"></i>
            </a>
        </li>
        <li><ul class="dashboard-menu nav nav-list collapse in">
                <li><a href="index.php?m=admin&a=passAtr" target="blank"><span class="fa fa-caret-right"></span> 修改密码</a></li>
                <li ><a href="users.html"><span class="fa fa-caret-right"></span> User List</a></li>
                <li ><a href="user.html"><span class="fa fa-caret-right"></span> User Profile</a></li>
            </ul></li>

        <li data-popover="true" data-content="Items in this group require a <strong><a href='http://portnine.com/bootstrap-themes/aircraft' target='blank'>premium license</a><strong>." rel="popover" data-placement="right">
            <a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse">
                <i class="fa fa-fw fa-fighter-jet"></i> 数据详情<i class="fa fa-collapse"></i>
            </a>
        </li>
        <li>
            <ul class="premium-menu nav nav-list collapse">
                <li ><a href="index.php?m=admin&f=category" target="blank"><span class="fa fa-caret-right"></span> 导航列表</a></li>
                <li ><a href="piclist.php" target="blank"><span class="fa fa-caret-right"></span> 图片列表</a></li>
                <li ><a href="reviewlist.php" target="blank"><span class="fa fa-caret-right"></span> 评论列表</a></li>
            </ul>
        </li>
        <li>
            <a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse">
                <i class="fa fa-fw fa-briefcase"></i> 添加数据 <span class="label label-info">+3</span>
            </a>
        </li>
        <li>
            <ul class="accounts-menu nav nav-list collapse">
                <li ><a href=" " target="blank"><span class="fa fa-caret-right"></span> 导航上传</a></li>
                <li ><a href="contentup.php" target="blank"><span class="fa fa-caret-right"></span> 文章上传</a></li>
                <li ><a href="reviewadd.php" target="blank"><span class="fa fa-caret-right"></span> 评论添加</a></li>
            </ul>
        </li>

        <li>
            <a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse">
                <i class="fa fa-fw fa-legal"></i> Legal<i class="fa fa-collapse"></i>
            </a>
        </li>
        <li>
            <ul class="legal-menu nav nav-list collapse">
                <li ><a href="privacy-policy.html"><span class="fa fa-caret-right"></span> Privacy Policy</a></li>
                <li ><a href="terms-and-conditions.html"><span class="fa fa-caret-right"></span> Terms and Conditions</a></li>
            </ul>
        </li>
        <li><a href="help.html" class="nav-header"><i class="fa fa-fw fa-question-circle"></i> Help</a></li>
        <li><a href="faq.html" class="nav-header"><i class="fa fa-fw fa-comment"></i> Faq</a></li>
        <li>
            <a href="http://portnine.com/bootstrap-themes/aircraft" class="nav-header" target="blank"><i class="fa fa-fw fa-heart"></i> Get Premium</a>
        </li>
    </ul>
</div>

<div class="content">
    <iframe  frameborder="0" name="blank"></iframe>
</div>

</body>
</html>

<?php }
}
