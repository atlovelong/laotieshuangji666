<?php
/* Smarty version 3.1.30, created on 2018-01-23 02:11:17
  from "C:\wamp64\www\php\uekapp\template\index\search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6699c594f8a0_46429200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f135423a358ea26d2164999fd59b96f59b76af18' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\index\\search.html',
      1 => 1516672213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6699c594f8a0_46429200 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
search.css">
</head>
<body>
    <header>
        <div class="h-left">
          <a href="index.php?a=zhuye">
              <i class="iconfont icon-iconfontzhizuobiaozhun023126"></i>
          </a>
        </div>
        <div class="h-center">
          <input type="text" placeholder="搜索城市/景点">
          <a href="">
            <i class="iconfont icon-fangdajing"></i>
          </a>
          <div class="line"></div>
        </div>
        <a href="" class="h-right">
          <i class="iconfont icon-icon--1"></i>
        </a>
    </header>
    <section>
      <div class="section-head">
        <div></div>
          <span>历史记录</span>
            <a href="">
              <i class="iconfont icon-icon--"></i>
            </a>
      </div>
      <div class="section-body"></div>
    </section>
    <section>
      <div class="section-head">
        <div></div>
        <span>热门搜索</span>
        <a href="">
            <i class="iconfont "></i>
        </a>
      </div>
      <div class="section-body"></div>
    </section>
</body>
</html>
<?php }
}
