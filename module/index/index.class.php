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
        $row=$d->selOne("zhanghao=$user");
        if($user!=''){
            if($pass!=''){
                if ($row){
                    if ($row['pass']===$pass){
                        $obj->set("user",$user);
                        $this->smarty->display('index/zhuye.html');
//                $this->jump("登录成功","index.php?a=zhuye");
                    }else{
                        echo '密码错误';
                    }
                }else{
                    echo '账号错误';
                }
            }else{
                echo '请输入密码';
            }
        }else{
            echo '请输入账号';
        }
        $d->db->close();
    }
//    function zhuye(){
//        $this->smarty->display('index/zhuye.html');
//    }
}
