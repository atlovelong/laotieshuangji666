<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/29 0029
 * Time: 上午 9:58
 */

class view
{
    function showHello($data){
        echo "<h1>$data</h1>";
    }
    function showUser($data){
        $str="<ul>";
        foreach ($data as $i){
            $str.="<li>$i</li>";
        }
        $str.="</ul";
        echo $str;
    }
}