<?php
/**
 * Created by PhpStorm.
 * User: 白杨
 * Date: 2018-01-02
 * Time: 10:32
 */

class index
{
    public $smarty;
    function __construct()
    {
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir('template/');
        $this->smarty->setCompileDir('compile/');
//        $this->s->setCompileDir()
    }
    function init(){
        $this->smarty->display('admin/login.html');
    }
    function code(){
        $c=new code('src/font/POST.TTF');
        $c->output();
    }
    function jump($title,$url,$tiao){
        $this->smarty->assign('title',$title);
        $this->smarty->assign('url',$url);
        $this->smarty->assign('tiaozhuan',$tiao);
        $this->smarty->display('admin/tiaozhuan.html');
    }
    function main(){
        session_start();
        if(!isset($_SESSION['user'])){
            $this->jump('请先登陆','index.php?m=admin','点击立即跳转');
        }
    }
    function denglu(){
        session_start();
        $user=$_REQUEST['user'];
        $pass=$_REQUEST['pass'];
        $code=$_REQUEST['code'];
        if(strtolower($code)===strtolower($_SESSION['code'])){
            $db=new db('user');
            $row=$db->selOne('*',"zhanghao='$user'");
            if($row){
                if($row['pass']===$pass || $row=$_SESSION['pass']){
//                    $this->jump('登陆成功','main.html','点击立即跳转');
                    $this->smarty->display('admin/main.html');
                    $_SESSION['user']=$user;
                }else{
                    $this->jump('密码错误','index.php?m=admin','点击立即返回');
                }
            }else{
                $this->jump('账号不存在','index.php?m=admin','点击立即返回');
            }
        }else{
            $this->jump('验证码错误','index.php?m=admin','点击立即返回');
        }
//        echo $_SESSION['code'];
    }
    function tuichu(){
        session_start();
        unset($_SESSION['user'],$_SESSION['pass']);
        if(!isset($_SESSION['user'])){
            $this->jump('退出成功','index.php?m=admin','点击立即跳转');
        }
    }
    function password(){
        session_start();
        $user=$_SESSION['user'];
        $this->smarty->assign('user',$user);
        $this->smarty->display('admin/password.html');
    }
    function reformpass(){
        session_start();
        $zhanghao=$_REQUEST['myname'];
        $pass=$_REQUEST['pass'];
        $passtwo=$_REQUEST['passtwo'];
        $db=new db('user');
//        $db=new mysqli('localhost','root','','wuif1708');
//        $db->query('set names utf8');
        if($pass==$passtwo && $pass!=''){
//            $sql="update  user  set  pass='$pass' where zhanghao='$zhanghao';";
//            $result=$db->query($sql);
//            $row=$db->affected_rows;
            $row=$db->update('user',"zhanghao=$zhanghao");
        }else if($pass==''){
            $this->jump('密码不能为空','index.php?m=admin&a=password','点击立即返回');
            exit;
        }else{
            $row=false;
        }

        if($row){
            $_SESSION['pass']=$pass;
            $this->jump('修改成功','index.php?m=admin&a=password','点击跳转');
        }else{
            $this->jump('修改失败','index.php?m=admin&a=password','点击立即返回');
        }
    }
    function lanmu(){
        $db=new db('');
    }
}