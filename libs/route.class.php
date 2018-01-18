<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/29 0029
 * Time: 上午 11:30
 */

class route
{
    private $m;
    private $f;
    private $a;
    function getInfo(){
        $this->m=isset($_REQUEST['m'])?$_REQUEST['m']:'index';
        $this->f=isset($_REQUEST['f'])?$_REQUEST['f']:'index';
        $this->a=isset($_REQUEST['a'])?$_REQUEST['a']:'init';
        $path="module/".$this->m;
        if (is_dir($path)){
            $file=$path."/".$this->f.".class.php";
            if (is_file($file)){
                include_once $file;
                if (class_exists($this->f)){
                    $obj=new $this->f;
                    $c=$this->a;
                    if (method_exists($obj,$c)){
                        $obj->$c();
                    }else{
                        echo $this->a."方法不存在";
                    }
                }else{
                    echo $this->f."类不存在";
                    exit;
                }
            }else{
                echo $this->f.".class.php文件不存在";
                exit;
            }
        }else{
            echo $this->m."模块不存在";
            exit;
        }
    }
}