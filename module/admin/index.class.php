<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/2 0002
 * Time: 上午 11:29
 */

class index extends admin
{
    function init(){
        $this->s->display("admin/login.html");
    }
    function code(){
        $obj=new code();
        $obj->outcode();
    }

    function verify(){
        $obj=new session();
        $d=new db("user");
        $u=$_REQUEST['user'];
        $p=$_REQUEST['pass'];
        $c=$_REQUEST['code'];
        $row=$d->selOne("zhanghao='$u'");
        if (strtoupper($c)===strtoupper($obj->get("code"))){

            if ($row){
                if ($row['pass']===$p){
                    $obj->set("user",$u);
                    $this->jump("登录成功","index.php?m=admin&a=main");
                }else{
                    $this->jump("密码错误","admin.php");

                }
            }else{
                $this->jump("账号不存在","admin.php");
            }
        }else{
            $this->jump("验证码错误","admin.php");
        }
        $d->db->close();
    }
    function main(){
        $session=new session();
        if ($session->get("user")){
            $name=$session->get('user');
            $this->s->assign("name",$name);
            $this->s->display("admin/main.html");
        }else{
            $this->jump("请先登录","admin.php");
        }
    }
    function exits(){
        $session=new session();
        $session->del("user");
        $session->del("code");
        $this->jump("退出成功","admin.php");
    }
    function passAtr(){
        $obj=new session();
        $name=$obj->get('user');
        $this->s->assign("name",$name);
        $this->s->display("admin/passatr.html");
    }
    function passUpdate(){
        $u=$_REQUEST['user'];
        $p=$_REQUEST['pass'];
        $db=new db("user");
        $row=$db->atr("pass='$p'","zhanghao='$u'");
        echo $row;
    }
}