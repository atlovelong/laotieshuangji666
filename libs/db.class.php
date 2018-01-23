<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/28 0028
 * Time: 下午 5:19
 */

class db
{
    private $host="sqld.duapp.com";
    private $user="728fd5ef6c7d498c8905f72564f01f89";
    private $pass="3f2b29baf40b461a976c4b67ca95788e";
    private $dbname="lWYXJzOxxATItEaCHSYG";
    private $port='4050';
    public $db="";
    private $table="";
    function __construct($table)
    {
        $this->table=$table;
        $this->db=new mysqli($this->host,$this->user,$this->pass,$this->dbname,$this->port);
        $this->db->query("set names utf8");
    }
    function selAll($cond,$filed="*"){
        $sql="select ".$filed." from ".$this->table." where ".$cond;
        return $this->db->query($sql)->fetch_all(MYSQL_ASSOC);
    }
    function selOne($cond,$filed="*"){
        $sql="select ".$filed." from ".$this->table." where ".$cond;
        return $this->db->query($sql)->fetch_assoc();
    }
    function del($cond){
        $sql="delete from ".$this->table." where ".$cond;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function add($type,$values){
        $sql="insert into ".$this->table."(".$type.")"." values (".$values.")";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function atr($value,$cond){
        $sql="update ".$this->table." set ".$value." where ".$cond;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
}
