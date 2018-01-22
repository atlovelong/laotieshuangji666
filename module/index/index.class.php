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
    function jump($mess,$url){
        $this->smarty->assign("mess",$mess);
        $this->smarty->assign("url",$url);
        $this->smarty->display("admin/mess.html");
    }
    function init(){
        $this->smarty->display('index/hand.html');
    }
    function inittwo(){
        $this->smarty->display('index/searching.html');
    }
    function initthree(){
        $this->smarty->display('index/footmark.footmark.html');
    }
    function login(){
        $this->smarty->display('index/login.html');
    }
    function landing(){
        $obj=new session();
        $d=new db('indexuser');
        $user=$_REQUEST['zhanghao'];
        $pass=$_REQUEST['pass'];
        $row=$d->selOne("zhanghao='$user'");
        if($user!=''){
            if($pass!=''){
                if ($row){
                    if ($row['pass']===$pass){
                        $obj->set("user",$user);
                        $this->jump("登录成功","index.php?m=index&a=zhuye");
                    }else{
                        $this->jump("密码错误","index.php?m=index&a=login");

                    }
                }else{
                    $this->jump("账号不存在","index.php?m=index&a=login");
                }
            }else{
                $this->jump("请输入密码","index.php?m=index&a=login");
            }
        }else{
            $this->jump("请输入账号","index.php?m=index&a=login");
        }
        $d->db->close();
    }
    function zhuye(){
        $this->smarty->display('index/zhuye.html');
    }
    function zhuce(){
        $this->smarty->display('index/zhuce.html');
    }
}