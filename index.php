<?php
header("content-type:text/html;charset=utf8");
//网络路径
define("WEB_PATH","http://".$_SERVER["HTTP_HOST"].substr($_SERVER["SCRIPT_NAME"],"0",strrpos($_SERVER["SCRIPT_NAME"],"/")+1));
//本地路径
define("ROOT_PATH",str_replace("\\","/", __DIR__).'/');
define("LIBS_PATH",ROOT_PATH."libs/");
define("JS_PATH",ROOT_PATH."src/js/");
define("CSS_PATH",ROOT_PATH."src/css/");
define("IMG_PATH",ROOT_PATH."src/img/");
define("FONT_PATH",ROOT_PATH."src/font/");
include_once LIBS_PATH."code.php";
include_once LIBS_PATH."Smarty.class.php";
include_once LIBS_PATH."route.class.php";
include_once LIBS_PATH."db.class.php";
include_once LIBS_PATH."session.class.php";
include_once LIBS_PATH."admin.class.php";
$obj=new route();
$obj->getInfo();