<?php
/* Smarty version 3.1.30, created on 2018-01-23 03:11:50
  from "C:\wamp64\www\php\uekapp\template\index\zhuye.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66a7f68f84e4_71195561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77238a9d3b70d5eb020d352c37e1c6f9617a452a' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\index\\zhuye.html',
      1 => 1516677008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66a7f68f84e4_71195561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.js"><?php echo '</script'; ?>
>
    <style>
        *{
            margin:0;
            padding:0;
            list-style: none;
            text-decoration: none;
        }
        body{
            background: #2B2D33;
            padding-bottom: 1rem;
        }
        header{
            width:100%;
            height:0.88rem;
            background: #FFDD1F;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top:0;
            left:0;
            z-index: 999;
        }
        .h-left,.h-right{
            font-size: 0.25rem;
            color: white;
        }
        .h-left{
            margin-left: 0.26rem;
            position: relative;
        }
        .h-left img{
            display: block;
            width:0.14rem;
            height:0.07rem;
            position: absolute;
            top:0.12rem;
            left:0.6rem;
        }
        .h-right{
            margin-right: 0.2rem;
        }
        .h-right img{
            /*display: block;*/
            width:0.24rem;
            height:0.24rem;
           /* position: absolute;
            top:0.12rem;
            left:0.6rem;*/
        }
        .h-center{
            width:70%;
            height:0.6rem;
            position: relative;
        }
        .h-center a{
            display: block;
            width:0.4rem;
            height:0.4rem;
            border-radius: 50%;
            background: red;
            position: absolute;
            top:0;
            bottom:0;
            margin-top: auto;
            margin-bottom: auto;
            right:0.2rem;
        }
        .h-center a img{
            display: block;
            width:100%;
            height:100%;
        }
        .h-center input{
            display: block;
            width:100%;
            height:100%;
            border-radius: 0.6rem;
            outline: none;
            border:0.02rem solid #DCBF1D;
            padding-left: 0.4rem;
            box-sizing: border-box;
            margin-left: 0.1rem;
        }
        .h-center .line{
            width:0.04rem;
            height:0.24rem;
            background: #FFDD1F;
            position: absolute;
            top:0;
            bottom:0;
            margin-top: auto;
            margin-bottom: auto;
            left:0.2rem;
        }
        input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
            color:    #FEE55B;
        }
        footer{
            width: 100%;
            height:0.98rem;
            background: #14171A;
            position: fixed;
            bottom: 0;
            left:0;
            z-index: 999;
            display: flex;
        }
        footer .left{
            width:33.33333%;
            height:100%;
        }
        footer .left img{
            display: block;
            width:100%;
            height:100%;
        }
        footer .center{
            width:33.33333%;
            height:100%;
        }
        footer .center img{
            display: block;
            width:100%;
            height:100%;
        }
        footer .right{
            width:33.33333%;
            height:100%;
        }
        footer .right img{
            display: block;
            width:100%;
            height:100%;
        }
        .banner{
            width:100%;
            height:3.74rem;
            margin-top: 0.88rem;
            position: relative;
        }
        .sanjiao{
            width:100%;
            height:5rem;
            border-radius: 50%;
            background: #FEDC2A;
            position: absolute;
            top:-1.62rem;
            left:0;
        }
        .swiper-container{
            width:100%;
            height:3.74rem;
            margin-top: 0.88rem;
            overflow: hidden;
        }
        .swiper-wrapper{
            width:90%;
            height:100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            width: 90%;
            height:100%;
            border:0.05rem solid white;
            box-sizing: border-box;
        }
        .swiper-slide img{
            display: block;
            width:100%;
            height:100%;
        }
       /* .swiper-pagination{
            width: 0.5rem;
            height:0.2rem;
        }*/
        .nvc{
            width:100%;
            height:1.82rem;
        }
        .nvc ul{
            width:100%;
            height:100%;
            display: flex;
        }
        .nvc ul li{
            width:25%;
            height:100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .nvc ul li a{
            display: block;
            width:0.8rem;
            height:0.8rem;
            border-radius: 50%;
            background: red;
            margin-bottom:0.16rem;
        }
        .nvc ul li a img{
            display: block;
            width:100%;
            height:100%;
        }
        .nvc ul li .word{
            font-size: 0.22rem;
            color: white;
        }
        .first-body{
            width:100%;
            height:5.06rem;
            /*background: red;*/
        }
        .brief{
            width:100%;
            height:1.08rem;
            background: #2F363B;
        }
        .content{
            width:100%;
            height:3rem;
        }
        .comment{
            width:100%;
            height:0.98rem;
            background:#2F363B ;
        }
        .people{
            width:1rem;
            height:100%;
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .people .tou{
            width:50%;
            height:50%;
            border-radius: 50%;
        }
        .people .tou img{
            display: block;
            width:100%;
            height:100%;
        }
        .describe{
           /* width:2.06rem;*/
            height:100%;
            float: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .describe .pol{
            font-size: 0.22rem;
            color: #ff6700;
        }
        .describe .design{
            font-size: 0.22rem;
            color: white;
        }
        .position{
            height:100%;
            float: right;
            margin-right: 0.23rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-end;
        }
        .po-top{
            font-size: 0.18rem;
            color: white;
        }
        .po-top img{
            width:0.14rem;
            height:0.2rem;
            margin-right: 0.1rem;
        }
        .po-bottom{
            font-size: 0.22rem;
            color: #96999B;
        }
        .zan{
            width: 0.74rem;
            height:100%;
            font-size: 0.3rem;
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .zan img{
            display: block;
            width:0.4rem;
            height:0.4rem;
        }
        .person{
            height:100%;
            display: flex;
            align-items: center;
            float: left;
        }
        .person .head{
            width:0.5rem;
            height:0.5rem;
            border-radius: 50%;
        }
        .count{
            height:100%;
            text-align: center;
            line-height: 0.98rem;
            float: left;
            font-size: 0.3rem;
            margin-left: 0.1rem;
            color: white;
        }
        .evaluate{
            height:100%;
            display: flex;
            align-items: center;
            float: right;
        }
        .evaluate .p{
            width:0.4rem;
            height:0.4rem;
        }
        .evaluate .shu{
            height:100%;
            font-size: 0.3rem;
            text-align: center;
            line-height: 0.98rem;
            margin-left: 0.14rem;
            color: white;
        }
        .evaluate .x{
            width:0.4rem;
            height:0.4rem;
            margin-left: 0.25rem;
            margin-right: 0.22rem;
        }
        .second-body{
            width:100%;
            margin-top: 0.22rem;
            background:#2F363B;
        }
        .content2{
            width:85%;
            height:0.84rem;
            margin-left: 10%;
            background: #2F363B;
            padding-top: 0.1rem;
        }
        .content2 img{
            display: block;
            width:100%;
            height:100%;
        }
        .third-body{
            width:100%;
            margin-top: 0.22rem;
            background:#2F363B;
        }
        .content3{
            width:85%;
            font-size: 0.2rem;
            line-height: 0.28rem;
            color: #9C9EA1;
            margin-left: 10%;
        }
        .four-body{
            width:100%;
            margin-top: 0.22rem;
            background:#2F363B;
        }
        .content img{
            display: block;
            width:100%;
            height:100%;
        }
        .p img{
            display: block;
            width:100%;
            height:100%;
        }
        .x img{
            display: block;
            width:100%;
            height:100%;
        }
        .swiper-pagination span{
            width:0.2rem;
            height:0.1rem;
            border-radius: 0;
            background: white;
        }
        .head img{
           display: block;
            width:100%;
            height:100%;
        }
        /*.content video{
            width:85%;
            height:100%;
            margin-left: 10%;
            padding-top: 0.1rem;
        }*/
    </style>
</head>
<body>
    <header>
        <div class="h-left">南京<img src="<?php echo IMG_PATH;?>
xuan.png" alt=""></div>
        <div class="h-center">
            <input type="text" placeholder="搜索城市/景点">
            <div class="line"></div>
            <a href=""><img src="<?php echo IMG_PATH;?>
serch.png" alt=""></a>
        </div>
        <div class="h-right">签到&nbsp;<img src="<?php echo IMG_PATH;?>
qian.png" alt=""></div>
    </header>
    <div class="sanjiao"></div>
    <div class="swiper-container banner">

            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
content.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
content.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
content.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
content.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
content.jpg" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
content.jpg" alt=""></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
    </div>
    <section class="nvc">
        <ul>
            <li>
                <a href="index.php?a=record"><img src="<?php echo IMG_PATH;?>
shou.png" alt=""></a>
                <div class="word">手账</div>
            </li>
            <li>
                <a href=""><img src="<?php echo IMG_PATH;?>
shi.png" alt=""></a>
                <div class="word">视频</div>
            </li>
            <li>
                <a href=""><img src="<?php echo IMG_PATH;?>
yin.png" alt=""></a>
                <div class="word">音频</div>
            </li>
            <li>
                <a href=""><img src="<?php echo IMG_PATH;?>
wen.png" alt=""></a>
                <div class="word">软文</div>
            </li>
        </ul>
    </section>

    <section class="first-body">
        <div class="brief">
            <div class="people">
                <div class="tou"><img src="<?php echo IMG_PATH;?>
1.png" alt=""></div>
            </div>
            <div class="describe">
                <div class="pol">牧业</div>
                <div class="design">在希望的田野上</div>
            </div>
            <div class="position">
                <div class="po-top"><img src="<?php echo IMG_PATH;?>
wei.png" alt="">南京</div>
                <div class="po-bottom">2小时前</div>
            </div>
        </div>
        <div class="content">
            <a href="index.php?a=look">
                <img src="<?php echo IMG_PATH;?>
content.jpg" alt="">
            </a>
        </div>
        <div class="comment">
            <div class="zan"><img src="<?php echo IMG_PATH;?>
zan.png" alt=""></div>
            <div class="person">
                <div class="head"><img src="<?php echo IMG_PATH;?>
1.png" alt=""></div>
                <div class="head"><img src="<?php echo IMG_PATH;?>
2.png" alt=""></div>
                <div class="head"><img src="<?php echo IMG_PATH;?>
3.png" alt=""></div>
            </div>
            <div class="count">+3</div>
            <div class="evaluate">
                <div class="p"><img src="<?php echo IMG_PATH;?>
pin.png" alt=""></div>
                <div class="shu">+5</div>
                <div class="x"><img src="<?php echo IMG_PATH;?>
fen.png" alt=""></div>
            </div>
        </div>
    </section>
    <section class="four-body">
        <div class="brief">
            <div class="people">
                <div class="tou"><img src="<?php echo IMG_PATH;?>
2.png" alt=""></div>
            </div>
            <div class="describe">
                <div class="pol">吃·EAT</div>
                <div class="design">吃饭，睡觉，打豆豆</div>
            </div>
            <div class="position">
                <div class="po-top"><img src="<?php echo IMG_PATH;?>
wei.png" alt="">南京</div>
                <div class="po-bottom">2小时前</div>
            </div>
        </div>
        <div class="content"><img src="<?php echo IMG_PATH;?>
content.jpg" alt=""></div>
        <div class="comment">
            <div class="zan"><img src="<?php echo IMG_PATH;?>
zan.png" alt=""></div>
            <div class="person">
                <div class="head"><img src="<?php echo IMG_PATH;?>
1.png" alt=""></div>
                <div class="head"><img src="<?php echo IMG_PATH;?>
2.png" alt=""></div>
                <div class="head"><img src="<?php echo IMG_PATH;?>
3.png" alt=""></div>
            </div>
            <div class="count">+3</div>
            <div class="evaluate">
                <div class="p"><img src="<?php echo IMG_PATH;?>
pin.png" alt=""></div>
                <div class="shu">+5</div>
                <div class="x"><img src="<?php echo IMG_PATH;?>
fen.png" alt=""></div>
            </div>
        </div>
    </section>
    <section class="second-body">
        <div class="brief">
            <div class="people">
                <div class="tou"><img src="<?php echo IMG_PATH;?>
3.png" alt=""></div>
            </div>
            <div class="describe">
                <div class="pol">小耳朵</div>
                <div class="design">聆听世界的声音</div>
            </div>
            <div class="position">
                <div class="po-top"><img src="<?php echo IMG_PATH;?>
wei.png" alt="">南京</div>
                <div class="po-bottom">2小时前</div>
            </div>
        </div>
        <div class="content2"><img src="<?php echo IMG_PATH;?>
yinyue.png" alt=""></audio></div>
        <div class="comment">
            <div class="zan"><img src="<?php echo IMG_PATH;?>
zan.png" alt=""></div>
            <div class="person">
                <div class="head"><img src="<?php echo IMG_PATH;?>
1.png" alt=""></div>
                <div class="head"><img src="<?php echo IMG_PATH;?>
2.png" alt=""></div>
                <div class="head"><img src="<?php echo IMG_PATH;?>
3.png" alt=""></div>
            </div>
            <div class="count">+3</div>
            <div class="evaluate">
                <div class="p"><img src="<?php echo IMG_PATH;?>
pin.png" alt=""></div>
                <div class="shu">+5</div>
                <div class="x"><img src="<?php echo IMG_PATH;?>
fen.png" alt=""></div>
            </div>
        </div>
    </section>
    <section class="third-body">
        <div class="brief">
            <div class="people">
                <div class="tou"><img src="<?php echo IMG_PATH;?>
1.png" alt=""></div>
            </div>
            <div class="describe">
                <div class="pol">希冀</div>
                <div class="design">所走就走的一生</div>
            </div>
            <div class="position">
                <div class="po-top"><img src="<?php echo IMG_PATH;?>
wei.png" alt="">南京</div>
                <div class="po-bottom">2小时前</div>
            </div>
        </div>
        <div class="content3">有人说：“人生至少要有两次冲动：一场奋不顾身的爱情和一段走就走的旅行。”<br>
            我想在每个人的青春年岁里，都曾有过一段关于旅行的憧憬，一段说走就走的旅行。可是在现实里，因为种种的原因，这个美好的希冀变成了每个午夜梦回</div>
        <div class="comment">
            <div class="zan"><img src="<?php echo IMG_PATH;?>
zan.png" alt=""></div>
            <div class="person">
                <div class="head"><img src="<?php echo IMG_PATH;?>
1.png" alt=""></div>
                <div class="head"><img src="<?php echo IMG_PATH;?>
2.png" alt=""></div>
                <div class="head"><img src="<?php echo IMG_PATH;?>
3.png" alt=""></div>
            </div>
            <div class="count">+3</div>
            <div class="evaluate">
                <div class="p"><img src="<?php echo IMG_PATH;?>
pin.png" alt=""></div>
                <div class="shu">+5</div>
                <div class="x"><img src="<?php echo IMG_PATH;?>
fen.png" alt=""></div>
            </div>
        </div>
    </section>
    <footer>
        <div class="left"><a href=""><img src="<?php echo IMG_PATH;?>
f1.png" alt=""></a></div>
        <div class="center"><a href="index.php?a=my"><img src="<?php echo IMG_PATH;?>
f2.png" alt=""></a></div>
        <div class="right"><a href="index.php?a=personalcenter"><img src="<?php echo IMG_PATH;?>
f3.png" alt=""></a></div>
    </footer>
</body>
</html>
<?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container',{
       /* pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">'/!* + (index + 1)*!/ + '</span>';
            }
        },
        autoplay:{
            delay:1500
        },
        loop:true,*/
//        preventLinksPropagation : false,
//        preventClicks:true,
//        speed:1000,
//        effect : 'flip',
        slidesPerView: 1.2,
        spaceBetween: 10,
        centeredSlides: true,
        autoplay:{
            delay:1500
        },
            loop:true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

    });
    console.log($("input"));
    $("input").focus(function () {
        location.href="index.php?a=search";
    });
<?php echo '</script'; ?>
>
<?php }
}
