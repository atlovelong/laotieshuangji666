<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017-12-29
 * Time: 11:04
 */

class router
{
    private $m;                                                  //模块
    private $f;                                                  //类文件
    private $a;                                                  //方法

    function getInfo(){
        $this->m=isset($_REQUEST['m'])?$_REQUEST['m']:'index';   //对m进行初始化
        $this->f=isset($_REQUEST['f'])?$_REQUEST['f']:'index';
        $this->a=isset($_REQUEST['a'])?$_REQUEST['a']:'init';
        $path='module/'.$this->m;                                //检测模块是否存在
        if(is_dir($path)){
            $file=$path.'/'.$this->f.'.class.php';               //检测文件是否存在
            if(is_file($file)){
                include_once $file;                              //引入文件
                if (class_exists($this->f)){
                    $class=$this->f;                             //引入类
                    $c=new $class;
                    if (method_exists($c,$this->a)){
                        $fun=$this->a;                           //引入方法
                        $c->$fun();
                    }else{
                        echo $this->a."方法不存在";
                        exit;
                    }
                }else{
                    echo $this->f.'类不存在';
                    exit;
                }
            }else{
                echo $this->f.'.class.php文件不存在';
                exit;
            }
        }else{
            echo $this->m.'模块不存在';
            exit;
        }
    }
}

