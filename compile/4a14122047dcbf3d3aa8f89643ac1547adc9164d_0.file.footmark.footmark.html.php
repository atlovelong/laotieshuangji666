<?php
/* Smarty version 3.1.30, created on 2018-01-23 02:02:40
  from "C:\wamp64\www\php\uekapp\template\index\footmark.footmark.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6697c05aeac5_77211746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a14122047dcbf3d3aa8f89643ac1547adc9164d' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\index\\footmark.footmark.html',
      1 => 1516672212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6697c05aeac5_77211746 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Document</title>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
</head>
<style>
*{
	margin: 0;
	padding: 0;
	text-decoration: none;
	list-style: none;
}
body{
	width: 100%;
	height: 100%;
	background: url('../../src/img/duanyinghua-1.png') no-repeat cover;
}
body{

        background: rgb(42, 44, 49);
}
	.top{
		width: 100%;
		height: 1.05rem;
		background: rgb(42, 44, 49);
	}
 .tu{
    	width: 100%;
    	height: 0.49rem;
    	position: relative;
    }
  .jian{
  	width: 100%;
  	height: 0.32rem;
  	background: rgb(42, 44, 49);
  }
    .word{
    	width: 100%;
    	height: 0.28rem;
    	line-height: 0.28rem;
    	position: relative;
    	font-size: 0.28rem;
    	color: rgb(255, 255, 255);
    	text-align: center;
    }
    .kong{
    	width: 100%;
    	height: 1.15rem;
    	background: rgb(42, 44, 49);
    }
    .img{
    	width: 100%;
    	height: 5.89rem;
    	position: relative;
    }
     
    .konger{
    	width: 100%;
    	height: 3.28rem;
    	background: rgb(42, 44, 49);
    }
    /*.bottom{
    	border-radius: 0.01rem;
    	width: 100%;
    	height: 0.88rem;
    	
    }*/
   .middle{
        width: 100%;
        height: 0.88rem;
        text-align: center;
        font-size: 0.32rem;
        line-height: 0.88rem;
        background: rgb(255, 221, 31);
        color: rgb(255, 255, 255);
    }
    img{
    	position: absolute;
    	width: 100%;
    	height: 100%;
    	top: 0;
    	left: 0;
    }
	
</style>
<body>
	<div class="top"></div>
	<div class="tu"><img src="<?php echo IMG_PATH;?>
4.png" alt=""></div>
	<div class="jian"></div>
	<div class="word">
	    我的良心活蹦乱跳，你到的城市灯光闪耀
	</div>
	<div class="kong"></div>
	<div class="img"><img src="<?php echo IMG_PATH;?>
duanyinghua-3.png" alt=""></div>
	<div class="konger"></div>
	<a href="index.php?a=login"><div class="middle">开启花笺之旅</div></a>
</body>
</html><?php }
}
