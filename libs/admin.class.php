<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/3 0003
 * Time: 下午 2:01
 */

class admin
{
    public $s;
    function __construct()
    {
        $this->s=new Smarty();
        $this->s->setTemplateDir(ROOT_PATH."template");
        $this->s->setCompileDir(ROOT_PATH."compile");
    }
    function jump($mess,$url){
        $this->s->assign("mess",$mess);
        $this->s->assign("url",$url);
        $this->s->display("admin/mess.html");
    }

}