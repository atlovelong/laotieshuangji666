<?php
/* Smarty version 3.1.30, created on 2018-01-22 08:02:07
  from "C:\wamp64\www\php\uekapp\template\admin\mess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a659a7f5cd8b5_29362482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a3be8cc42d56093bb4423404b5fa89f7d60359' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\admin\\mess.html',
      1 => 1516586164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a659a7f5cd8b5_29362482 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background: #333;
    }
    .box{
        width: 400px;
        height: 300px;
        position: fixed;
        left: 0;
        right: 0;
        margin: auto;
        top: 20%;
        background:#fff;
        border-radius: 8px;
        background: url("src/img/1.jpg");
        background-size: cover;
    }
    .shadow{
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 8px;
        background-color: rgba(0,0,0,0.7);
        /*overflow: hidden;*/
    }
    h1{
        margin-top: 80px;
        color: #fff;
        width: 100%;
        text-align: center;
        z-index: 999;
    }
    p{
        margin-top:60px;
        color: #fff;
        width: 100%;
        text-align: center;
        z-index: 999;
    }
    span{
        color: red;
        font-size: 24px;
        letter-spacing: 5px;
    }
    a{
        color: #e3123e;
        text-decoration: none;
    }
</style>
<body>
    <div class="box">
        <div class="shadow">
            <h1><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</h1>
            <p><span>3</span>秒后自动返回登录页，<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击跳转</a></p>
        </div>
    </div>
</body>
</html>
<?php echo '<script'; ?>
>
    let h1=document.querySelector("h1");
    let span=document.querySelector("span");
    let num=3;
    function fn() {
        num--;
        span.innerText=num;
        if (num==0){
            location.href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";
        }
    }
    let t=setInterval(fn,1000);
<?php echo '</script'; ?>
><?php }
}
