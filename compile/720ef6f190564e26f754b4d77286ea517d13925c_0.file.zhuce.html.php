<?php
/* Smarty version 3.1.30, created on 2018-01-22 08:17:45
  from "C:\wamp64\www\php\uekapp\template\index\zhuce.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a659e29253b41_65202426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '720ef6f190564e26f754b4d77286ea517d13925c' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\index\\zhuce.html',
      1 => 1516609064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a659e29253b41_65202426 (Smarty_Internal_Template $_smarty_tpl) {
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
    html { 
   background: url(<?php echo IMG_PATH;?>
取消2.png) no-repeat center center fixed;
   -webkit-background-size: cover;
   -moz-background-size: cover;
    -o-background-size: cover;
   background-size: cover;
}
.top{
		width: 100%;
		height: 0.4rem;
	}
	div.login{
        width: 100%;
        height: 0.88rem;
        position: absolute;
        overflow: auto;
        margin-bottom: 4.29rem;
     }
	.login .left{
	    width: 0.54rem;
		height: 0.27rem;
		font-size: 0.27rem;
        color: rgb(255, 255, 255); 
        margin-left: 0.17rem;
        margin-top: 0.3rem;
        float: left;
	}
	.login .middle{
		width: 1.36rem;
		height: 0.32rem;
	  margin-left: 2.36rem;
	  font-size: 0.32rem;
      margin-top: 0.27rem;
      float: left;
      color: rgb(255, 255, 255); 
	}
	
	.clear{
	 clear:both;
	 height: 0; 
	 line-height: 0; 
	 font-size: 0;
	}
	
 section{
        width: 100%;
        height: 3.56rem;
        margin-top: 4.23rem;
        margin-bottom: 0.34rem;
    }
    div.center{
        width: 5.79rem;
        height:1.04rem;
        left:0;
        top:0;
        right: 0;
        bottom:0;
        margin: auto;
        position: relative;
        margin-bottom: 0.37rem;
      /*  border-radius: 1rem;
        border: 0.15rem solid rgb(255, 255, 255); */
    }
    div.center input{
        display: block;
        width: 100%;
        height: 0.79rem;
        border-radius: 0.6rem;
        position: absolute;
        left: 0;
        top:0;
        bottom:0;
        right:0;
        margin:auto;
        outline: none;
        border: 0.06rem solid rgb(255, 255, 255);
        padding-left: 0.7rem;
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        /*font-family: pingFang SC bold;*/
    }
     div.center .text{
        padding-left: 1.3rem;
     }
    input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
         /*padding-left: 0.4rem;*/
        color: rgb(255, 255, 255);
    }
   
    .denglu{
    	width: 5.79rem;
    	height: 0.79rem;
    	border-radius: 1rem;
    	line-height: 0.79rem;
    	text-align: center;
    	color: rgb(0, 0, 0);
    	background: rgb(255, 255, 255); 
    	font-size: 0.28rem;
    	letter-spacing: 0.26rem;
    }
    .center .img{
    	width: 0.29rem;
        height: 0.4rem;
        position: relative;
        float: left;
    }
    .img img{
    	position: absolute;
    	width: 100%;
    	height: 100%;
    	top: 0.32rem;
    	left: 0.32rem;
    }
    .eight{
        width: 0.63rem;
        height: 0.25rem;
        text-align: center;
        line-height: 0.25rem;
        color: rgb(255, 255, 255); 
        font-size: 0.2rem; 
        position: absolute;
        top: 0.4rem;
        left: 0.6rem;
        border-right: 0.02rem solid rgb(255, 255, 255); 
    }
    .line{
        width: 0.02rem;
        height: 0.25rem;
        background: rgb(255, 255, 255);  
        line-height: 0.25rem;
    }
	.center .right{
        width: 1.39rem;
        height: 0.43rem;
        text-align: center;
        color: rgb(76, 76, 76); 
        line-height: 0.43rem;
        background: rgb(255, 255, 255); 
        font-size: 0.2rem;
        letter-spacing: 0.02rem;
        border-radius: 0.07rem;
        position: absolute;
         top:0;
        bottom:0;
        margin-top: auto;
        margin-bottom: auto;
        right: 0.35rem;
    }
    .more{
        margin-top: 4.22rem;
    	width: 100%;
    	height: 0.24rem;
    	margin-bottom: 0.45rem;
    }
    .more div{
    	width: 0.5rem;
    	height: 0.24rem;
    	font-size: 0.24rem;
    	margin: 0 auto;
    	color: rgb(255, 255, 255); 
    	text-align: center;
    }
        .ago>li{
        border-left: 5px solid #999;
        opacity: 0.5;
    }
  /*  input{
        width:80%;
        border:none;
        font-size: 14px;
    }*/
    /*.doing>li>input,.done>li>input{
        position: absolute;
        top: 5px;
        left: 10px;
        width: 22px;
        height: 22px;
        cursor: pointer;
    }*/
    .check{
        width: 100%;
        height: 0.3rem;
        position: relative;
        display: flex;
        align-items: center;
        margin-bottom: 0.3rem;
    }
    .check input{
        width: 0.3rem;
        height: 0.3rem;
        margin-left: 0.85rem;
        position: absolute;
        float: left;

        line-height: 0.3rem;
    }
    .message{
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 0.2rem;
        position: absolute;
        margin-left: 1.3rem;
        color: rgb(255, 255, 255); 
        float: left;
    }
    .message span{
        color: rgba(0, 0, 0, 1.0);
    }

</style>
<body>


	<div class="top"></div>
	<div class="login">
		<div class="left">取消</div>
		<div class="middle">正在注册</div>
		 <div class="clear"></div>
	</div>
<section>
    <div class="center first">

    <div class="img">
        <img src="<?php echo IMG_PATH;?>
123.png" alt="">
    </div>
     <div class="eight">+86</div>
        <input type="text" placeholder="请输入手机号" class="text">
       
    </div>
    <div class="center">
    <div class="img">
        <img src="<?php echo IMG_PATH;?>
75.png" alt="">
    </div>
        <input type="password" placeholder="请输入密码">
    </div>
<div class="center">
    <div class="img">
        <img src="<?php echo IMG_PATH;?>
34.png" alt="">
    </div>
        <input type="text" placeholder="请输入验证码">
        <div class="right">获取验证码</div>
    </div>
    <div class="check">
  <input type="checkbox">
                    <p class="message">我已阅读并接受<span>服务条议</span></p>
                   
</div>
<a href="success.html"><div class="center">
   <div class="denglu">注册</div>
</div></a>
</section>

<div class="more"><div>更多</div></div>
</body>
</html><?php }
}
