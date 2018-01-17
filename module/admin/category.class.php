<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/3 0003
 * Time: 下午 2:00
 */

class category extends admin
{
    private $str="";
    private $atr="";
    function init(){
        $db=new db("category");
        $this->gettable($db);
        $this->s->assign("atr",$this->atr);
        $this->s->display("admin/category.html");

    }
    function gettable($db,$pid=0,$num=0){
        $arr=$db->selAll("pid={$pid}");
        $str1=str_repeat("--",$num);
        if ($arr){
            foreach ($arr as $item){
                $this->atr.="
                            <tr id='{$item['id']}'>
                                <td>{$item['id']}</td>
                                <td>{$str1}{$item['name']}</td>
                                <td>{$item['img']}</td>
                                <td>{$item['pid']}</td>
                                <td>
                                    <a href='index.php?m=admin&f=category&a=atr&id={$item['id']}&pid={$item['pid']}&name={$item['name']}' id=\"alter\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"javascript:;\" role=\"button\" data-toggle=\"modal\" id=\"del\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>";
                $this->gettable($db,$item['id'],$num+1);
            }
        }
    }
    function loop($db,$pid=0,$num=0,$mark=null){
        $arr=$db->selAll("pid={$pid}");
        $str1=str_repeat("--",$num);
        if ($arr){
            foreach ($arr as $item){
                if ($item['id']==$mark){
                    $this->str.="<option selected value='{$item['id']}'>{$str1}{$item['name']}</option>";
                }else{
                    $this->str.="<option value='{$item['id']}'>{$str1}{$item['name']}</option>";
                }
                $this->loop($db,$item['id'],$num+1,$mark);
            }
        }

    }
    function add(){
        $db=new db("category");
        $this->loop($db);
        $this->s->assign("option",$this->str);
        $this->s->display("admin/categoryadd.html");
    }
    function update(){
        $db=new db('category');
        $pid=$_POST['sel'];
        $title=$_POST['title'];
        $file=$_FILES['list'];
        $size=1024*1024;
        $t=$file['type'];
        $type=array('image/png','image/jpeg','image/gif');
        foreach ($t as $item){
            if (!in_array($item,$type)){
                $this->jump("请上传图片文件","javascript:history.back();");
                exit;
            }
        }
        $s=$file['size'];
        $tmp='unload';
        date_default_timezone_set('Asia/Shanghai');
        foreach ($s as $item){
            if ($item>$size){
                $this->jump("文件太大","javascript:history.back();");
                exit;
            }
        }
        if(!is_dir($tmp)){
            mkdir($tmp);
        }
        $location="";
        $n=$file['name'];
        $t=$file['tmp_name'];
        foreach ($n as $key=>$item){
            if($item){
                $m=explode('.',$item)[1];
                $name=microtime(true).'.'.$m;
                if (is_uploaded_file($t[$key])){
                    $result=move_uploaded_file($t[$key],"$tmp/$name");
                    $location.=WEB_PATH.$tmp.'/'.$name.'--';
                }
            }
        }
        $location=substr($location,0,strlen($location)-2);
        $row=$db->add("name,img,pid","'$title','$location',$pid");
        if($row===1){
            $this->jump("添加成功","index.php?m=admin&f=category");
        }else{
            $this->jump("添加失败","javascript:history.back();");
        }
    }
    function del(){
        $id=$_REQUEST["id"];
        $db=new db('category');
        $row=$db->del("id=$id");
        if($row==1){
            echo 1;
        }else{
            echo "删除失败";
        }
    }
    function atr(){
        $id=$_REQUEST['id'];
        $db=new db('category');
        $pid=$_REQUEST['pid'];
        $val=$_REQUEST['name'];
        $this->loop($db,0,0,$pid);
        $this->s->assign("option",$this->str);
        $this->s->assign("id",$id);
        $this->s->assign("val",$val);
        $this->s->display("admin/categoryatr.html");
    }
    function alter(){
        $db=new db('category');
        $id=$_REQUEST['id'];
        $pid=$_REQUEST['sel'];
        if ($id===$pid){
            $this->jump("请选择正确的上级导航","javascript:history.back();");
            exit;
        }
        $title=$_REQUEST['title'];
        $file=$_FILES['list'];
        $size=1024*1024;
        $t=$file['type'];
        $type=array('image/png','image/jpeg','image/gif');
        foreach ($t as $item){
            if (!in_array($item,$type)){
                $this->jump("请上传图片文件","javascript:history.back();");
                exit;
            }
        }
        $s=$file['size'];
        $tmp='unload';
        date_default_timezone_set('Asia/Shanghai');
        foreach ($s as $item){
            if ($item>$size){
                $this->jump("文件太大","javascript:history.back();");
                exit;
            }
        }
        if(!is_dir($tmp)){
            mkdir($tmp);
        }
        $location="";
        $n=$file['name'];
        $t=$file['tmp_name'];
        foreach ($n as $key=>$item){
            if($item){
                $m=explode('.',$item)[1];
                $name=microtime(true).'.'.$m;
                if (is_uploaded_file($t[$key])){
                    $result=move_uploaded_file($t[$key],"$tmp/$name");
                    $location.=WEB_PATH.$tmp.'/'.$name.'--';
                }
            }
        }
        $location=substr($location,0,strlen($location)-2);
        $row=$db->atr("name='$title',img='$location',pid=$pid","id=$id");
        if($row===1){
            $this->jump("添加成功","index.php?m=admin&f=category");
        }else{
            $this->jump("添加失败","javascript:history.back();");
        }
    }
}