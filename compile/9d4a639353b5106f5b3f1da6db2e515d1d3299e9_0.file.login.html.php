<?php
/* Smarty version 3.1.30, created on 2018-01-23 03:11:29
  from "C:\wamp64\www\php\uekapp\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66a7e1c34276_44485357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d4a639353b5106f5b3f1da6db2e515d1d3299e9' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\index\\login.html',
      1 => 1516677008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66a7e1c34276_44485357 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style: none;
    }

    html {
        background: url(<?php echo IMG_PATH;?>
取消.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .top {
        width: 100%;
        height: 0.4rem;
    }

    div.login {
        width: 100%;
        height: 0.88rem;
        position: absolute;
        overflow: auto;
        margin-bottom: 4.29rem;
    }

    .login .left {
        width: 0.54rem;
        height: 0.27rem;
        font-size: 0.27rem;
        color: rgb(255, 255, 255);
        margin-left: 0.17rem;
        margin-top: 0.3rem;
        float: left;
    }

    .login .middle {
        width: 1.36rem;
        height: 0.32rem;
        margin-left: 2.36rem;
        font-size: 0.32rem;
        margin-top: 0.27rem;
        float: left;
        color: rgb(255, 255, 255);
    }

    .login .right {
        width: 0.55rem;
        height: 0.27rem;
        color: rgb(255, 255, 255);
        font-size: 0.27rem;
        margin-left: 2.36rem;
        margin-top: 0.3rem;
        float: left;
    }

    .clear {
        clear: both;
        height: 0;
        line-height: 0;
        font-size: 0;
    }

    section {
        width: 100%;
        height: 3.56rem;
        margin-top: 5.13rem;

    }

    div.center {
        width: 5.79rem;
        height: 0.79rem;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        position: relative;
        margin-bottom: 0.37rem;
        background: #fff;
        border-radius: 1rem;
        /*  border-radius: 1rem;
          border: 0.15rem solid rgb(255, 255, 255); */
    }

    div.center input {
        display: block;
        width: 100%;
        height: 0.79rem;
        border-radius: 0.6rem;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        outline: none;
        border: 0.06rem solid rgb(255, 255, 255);
        padding-left: 0.7rem;
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        font-family: pingFang SC bold;
    }

    div.center .text {
        padding-left: 1.3rem;
    }

    /*input::-webkit-input-placeholder, textarea::-webkit-input-placeholder */

    .denglu {
        display: block;
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

    .center .img {
        width: 0.29rem;
        height: 0.4rem;
        position: relative;
    }

    .img img {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0.32rem;
        left: 0.32rem;
    }

    .jian {
        width: 100%;
        height: 0.24rem;
        margin-top: 0.4rem;
        overflow: hidden;
        margin-bottom: 0.87rem;
    }

    .jian .word {
        width: 1.3rem;
        height: 0.24rem;
        line-height: 0.24rem;
        font-size: 0.24rem;
        color: rgb(255, 255, 255);
        margin-left: 5.44rem;
    }

    .three {
        margin-left: 1.21rem;
        width: 5.07rem;
        height: 0.24rem;
        display: -webkit-flex;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .three .left {
        width: 1.8rem;
        height: 0.02rem;
        background: rgb(255, 255, 255);

    }

    .three .middle {
        width: 1.3rem;
        height: 0.24rem;
        line-height: 0.24rem;
        text-align: center;
        color: rgb(255, 255, 255);
        font-size: 0.24rem;
    }

    .three .right {
        width: 1.8rem;
        height: 0.02rem;
        background: rgb(255, 255, 255);

    }

    .pic {
        width: 5.05rem;
        height: 0.88rem;
        margin-left: 1.21rem;
        display: -webkit-flex;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-bottom: 0.43rem;
    }

    .pic div {
        width: 0.88rem;
        height: 0.88rem;
        border: 0.02rem solid rgb(255, 255, 255);
        border-radius: 50%;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .pic .left .img {
        width: 0.54rem;
        height: 0.44rem;
        border: none;
        position: relative;

    }

    .pic .middle .img {
        width: 0.43rem;
        height: 0.49rem;
        border: none;
        position: relative;

    }

    .pic .right .img {
        width: 0.45rem;
        height: 0.45rem;
        border: none;
        position: relative;

    }

    .pic .img img {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0rem;
        left: 0rem;
    }

    .more {
        width: 100%;
        height: 0.24rem;
        margin-bottom: 0.45rem;
    }

    .more div {
        width: 0.5rem;
        height: 0.24rem;
        font-size: 0.24rem;
        margin: 0 auto;
        color: rgb(255, 255, 255);
        text-align: center;

    }

    .tishi {
        width: 100%;
        height: 100%;
        background: red;
        position: absolute;
        left: 0;
        top: -100%;
        display: none;
        text-align: center;
        line-height: 1.04rem;
        color: #fff;
        font-size: 0.42rem;
    }
</style>
<body>


<div class="top"></div>
<div class="login">
    <a href="index.php?a=initthree">
        <div class="left">取消</div>
    </a>
    <div class="middle" style="text-align: center;">登录</div>
    <a href="index.php?a=zhuce">
        <div class="right">注册</div>
    </a>
</div>
<section>
    <form action="index.php?a=landing" method="post">
        <div class="center">
            <div class="img">
                <img src="<?php echo IMG_PATH;?>
123.png" alt="">
            </div>
            <div class="tishi"></div>
            <input type="text" placeholder="请输入手机号" value="" name="zhanghao" class="user">
            <div class="line"></div>
            <div class="right"></div>
        </div>

        <div class="center">
            <div class="img">
                <img src="<?php echo IMG_PATH;?>
75.png" alt="">
            </div>
            <input type="password" placeholder="请输入密码" value="" name="pass" class="mima">
            <div class="line"></div>
            <div class="right"></div>
        </div>


        <div class="center">
            <input type="submit" value="登陆" class="denglu">
            <!--<button class="denglu">登陆</button>-->
            <!--<div class="denglu">登录</div>-->
        </div>
    </form>
</section>
<div class="jian">
    <div class="word">忘记密码？</div>
</div>
<div class="three">
    <div class="left"></div>
    <div class="middle">第三方登录</div>
    <div class="right"></div>
</div>
<div class="pic">
    <div class="left">
        <div class="img">
            <img src="<?php echo IMG_PATH;?>
25.png" alt="">
        </div>
    </div>
    <div class="middle">
        <div class="img">
            <img src="<?php echo IMG_PATH;?>
26.png" alt="">
        </div>
    </div>
    <div class="right">
        <div class="img">
            <img src="<?php echo IMG_PATH;?>
24.png" alt="">
        </div>
    </div>
</div>
<div class="more">
    <div>更多</div>
</div>
</body>
</html>
<?php }
}
