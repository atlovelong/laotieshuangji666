<?php
/* Smarty version 3.1.30, created on 2018-01-23 03:12:53
  from "C:\wamp64\www\php\uekapp\template\index\my.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a66a8350d3d12_84513131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53a2db84fa9aa2f34962092e1e152a3ab3e9dd55' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\index\\my.html',
      1 => 1516677008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a66a8350d3d12_84513131 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
my.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
my.js"><?php echo '</script'; ?>
>
</head>
<style>
    html, body {
      position: relative;
      height: 100%;
    }

    body {
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #2b2d33;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
      width: 100%;
	    height:100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: hsl(207, 11%, 20%);
	    height: auto;
      margin-top: 36px;
      /* Center slide text vertically */
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

	.refresh{
		position:absolute;
		line-height:100px;
		bottom:100%;
		text-align:center;
    width:100%;}
    
	.loadmore{
		position:absolute;
		line-height:20px;
		top:100%;
		text-align:center;
		width:100%;
    }

  .tt{
    margin-top: 0;
    background: none;
    width: 100%;
    height: 180px;
  }

  .cc{
    margin-top: 6px;
  }

  /* .swiper-container{
    margin-top: 0.88rem;
  } */
</style>
<body>
    <header>    
        <span>我的发布</span>
    </header>
    <div class="header-box"></div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="refresh">释放刷新</div>
          <div class="swiper-slide tt">
            <a href="" class="ditu">
              <img src="<?php echo IMG_PATH;?>
ditubanyuan.png" alt="">
            </a>
            <div class="h-center">
              <input type="text" placeholder="搜索城市/景点">
                <a href="">
                  <i class="iconfont icon-fangdajing"></i>
                </a>
              <div class="line"></div>
            </div>
          </div>
          <div class="swiper-slide cc">
            <!-- <section class="first-body"> -->
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
                <a href="index.php?a=comment">
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
          <!-- </section> -->
          </div>
          <div class="swiper-slide">
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
          </div>
          <div class="swiper-slide"><div class="brief">
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
      </div>
          <div class="swiper-slide">              <div class="brief">
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
      </div>
          <div class="swiper-slide">
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
              </div>
          </div>
          <div class="loadmore">加载更多</div>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>
    <section>
      <a href="">
        <img src="<?php echo IMG_PATH;?>
byl-button-1.png" alt="" class="btn-big">
      </a>
      <a href="">
        <img src="<?php echo IMG_PATH;?>
byl-button-2.png" alt="" class="btn-misc active-button">
      </a>
      <a href="index.php?a=handaccount">
          <img src="<?php echo IMG_PATH;?>
byl-button-3.png" alt="" class="btn-set active-button">
      </a>
      <a href="">
        <img src="<?php echo IMG_PATH;?>
byl-button-4.png" alt="" class="btn-tv active-button">
      </a>
    </section>
    <footer>
      <a href="index.php?a=zhuye">
        <img src="<?php echo IMG_PATH;?>
byl-index.png" alt="">
      </a>
      <a href="">
        <img src="<?php echo IMG_PATH;?>
byl-set.png" alt="" class="img-byl-set">
      </a>
      <a href="index.php?a=personalcenter">
        <img src="<?php echo IMG_PATH;?>
byl-int.png" alt="">
      </a>
    </footer>
</body>
</html><?php }
}
