<?php
/**
 * Created by PhpStorm.
 * User: 白杨
 * Date: 2018-01-21
 * Time: 14:17
 */

class index
{
    public $smarty;
    function __construct()
    {
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir('template/');
        $this->smarty->setCompileDir('compile/');
    }
    function init(){
        $this->smarty->display('index/hand.html');
    }
    function inittwo(){
        $this->smarty->display('index/searching.html');
    }
}