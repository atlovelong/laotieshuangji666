<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/29 0029
 * Time: 上午 9:59
 */

class controller
{
    function hello(){
        $obj=new model();
        $result=$obj->getHello();
        $show=new view();
        $show->showHello($result);
    }
    function user(){
        $obj=new model();
        $result=$obj->getUser();
        $show=new view();
        $show->showUser($result);
    }
}