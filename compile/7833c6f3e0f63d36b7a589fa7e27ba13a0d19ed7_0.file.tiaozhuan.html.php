<?php
/* Smarty version 3.1.30, created on 2018-01-21 07:02:18
  from "C:\wamp64\www\php\uekapp\template\admin\tiaozhuan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a643afa1fd806_91683316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7833c6f3e0f63d36b7a589fa7e27ba13a0d19ed7' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\admin\\tiaozhuan.html',
      1 => 1514949007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a643afa1fd806_91683316 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    .section {
        width: 500px;
        height: 400px;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        box-sizing: border-box;
    }
    .section div{
        width: 100%;
        height: 30%;
        text-align: center;
        line-height: 200px;
        font-size: 26px;
    }
    .daojishi span{
        color:red;
        font-size: 36px;
    }
</style>
<body>
<section class="section">
    <div class="biaoti">
        <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
    </div>
    <div class="daojishi"><span>3</span>秒后返回,<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tiaozhuan']->value;?>
</a></div>
</section>
</body>
</html>
<?php echo '<script'; ?>
>
    let daojishi=document.querySelector('.daojishi span');
    let s=3;
    let h3=document.querySelector('h3');
    // console.log(h3.innerHTML)
    function fn() {
        s--;
        daojishi.innerHTML=s;
        if(s==0){
            clearInterval(t);
            if(h3.innerHTML!='登陆成功') {
                location.href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
            } else{
                location.href='main.html';
            }
        }
    }
    t=setInterval(fn,1000);
<?php echo '</script'; ?>
>
<?php }
}
