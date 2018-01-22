<?php
/* Smarty version 3.1.30, created on 2018-01-21 07:23:59
  from "C:\wamp64\www\php\uekapp\template\index\hand.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a64400f0d6f56_27406824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'babd5d8e62dd5b76fc023c95ef583722324f8205' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\index\\hand.html',
      1 => 1516519437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a64400f0d6f56_27406824 (Smarty_Internal_Template $_smarty_tpl) {
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
	/*background-image:url('img/1.png');
    background-position:center;
     background-repeat:no-repeat;
     background-size: cover;position: absolute;
     width: 100%;
     top: 0;
     left: 0;
        height: 100%;
        margin: 0px;
        padding: 0px;*/
        background: rgb(42, 44, 49);
}
	.top{
		width: 100%;
		height: 1.01rem;
		background: rgb(42, 44, 49);

	}
    .tu{
    	width: 100%;
    	height: 0.47rem;
    	position: relative;
    }

    .word{
    	width: 100%;
    	height: 2.46rem;
    	position: relative;
    }
    .img{
    	width: 100%;
    	height: 5.91rem;
    	position: relative;
    }
     
    .kong{
    	width: 100%;
    	height: 2.6rem;
    	background: rgb(42, 44, 49);
    }
    .bottom{
    	position: relative;
    	width: 100%;
    	height: 0.88rem;
    	background: rgb(255, 221, 31);
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
2 (5).png" alt=""></div>
	<div class="word">
	    <img src="<?php echo IMG_PATH;?>
2 (6).png" alt="">
	</div>
	<div class="img"><img src="<?php echo IMG_PATH;?>
2 (1).png" alt=""></div>
	<div class="kong"></div>
	<a href="searching.html"><div class="bottom"><img src="<?php echo IMG_PATH;?>
2 (3).png" alt=""></div></a>
</body>
</html><?php }
}
