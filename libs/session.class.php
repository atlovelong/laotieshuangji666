<?php
class session{
    function __construct()
    {
        session_start();
    }
    function set($type,$value){
        $_SESSION[$type]=$value;
    }
    function get($type){
        return $_SESSION[$type];
    }
    function del($type){
        unset($_SESSION[$type]);
    }
}