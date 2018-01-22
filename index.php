<?php
/**
 * Created by PhpStorm.
 * User: 白杨
 * Date: 2017-12-29
 * Time: 8:57
 */
//include_once "controller.class.php";
//include_once "view.class.php";
//include_once "model.class.php";
//$c=new controller();
//$c->hello();
$str=substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/'));
//网络路径
define('WEB_PATH','http://'.$_SERVER['HTTP_HOST'].$str.'/');
//本地路径
define('ROOT_PATH',__DIR__.'/');

define('LIBS_PATH',ROOT_PATH.'libs/');

define('JS_PATH',WEB_PATH.'src/js/');
define('CSS_PATH',WEB_PATH.'src/css/');
define('IMG_PATH',WEB_PATH.'src/img/');
define('FONT_PATH',WEB_PATH.'src/font/');
//var_dump(ROOT_PATH);
include_once LIBS_PATH.'router.class.php';
require_once LIBS_PATH.'code.php';
require_once LIBS_PATH.'db.class.php';
require_once LIBS_PATH.'session.class.php';
require_once LIBS_PATH.'Smarty.class.php';
$obj=new router();
$obj->getInfo();