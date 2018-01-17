<?php
/* Smarty version 3.1.30, created on 2018-01-16 09:46:16
  from "C:\wamp64\www\php\uekapp\template\admin\passatr.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dc9e84d3ea7_82322128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d6ba62560218ccdb4e824d6b7f3434a6664f49' => 
    array (
      0 => 'C:\\wamp64\\www\\php\\uekapp\\template\\admin\\passatr.html',
      1 => 1514945592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5dc9e84d3ea7_82322128 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>注册</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <?php echo '<script'; ?>
 src="src/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="src/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="src/js/messages_zh.js"><?php echo '</script'; ?>
>
</head>
<style type="text/css">
    html{
        width: 100%;
        height: 100%;
    }
    body{
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
    }
    a {
        color:#0078ff;
    }
    .bigbox{
        width: 50%;
        margin: 60px auto;
    }
    h2{
        text-align: center;

    }
    .btn{
        display: block;
        margin: 0 auto;
        text-align: center;
    }
    .success{
        position: absolute;
        width: 300px;
        height: 150px;
        top: 22%;
        margin-top: -75px;
        left: 50%;
        margin-left: -150px;
        border-radius: 8px;
        background-color: rgba(0,0,0,0.7);
        display: none;
    }
    .success>h3{
        color: #fff;
        width: 100%;
        text-align: center;
        z-index: 999;
        line-height: 150px;
        margin: 0;
    }
    .box{
        font-size: 12px;
        color: red;
        height: 20px;
        line-height: 14px;
    }
</style>
<body>
<div class="bigbox">
    <h2>修改密码  </h2>
    <form class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-12">
                <input type="text" name="user" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" readonly class="form-control" id="inputEmail3">
                <div class="box"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <input type="password" name="pass1" class="form-control" id="inputPassword3" placeholder="请输入新密码">
                <div class="box"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <input type="password" name="pass2" class="form-control" id="inputPassword4" placeholder="请确认新密码">
                <div class="box"></div>
            </div>
        </div>
        <button type="submit" class="btn btn-info">点击修改</button>
    </form>
</div>
<div class="success">

</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $("form").validate({
        rules:{
            user:{
                required:true,         //输入框不能为空
                rangelength:[4,10]    //数据长度
            },
            pass1:{
                required:true,
                rangelength:[3,10]
            },
            pass2:{
                required:true,
                equalTo: "#inputPassword3"
            }
        },
        messages:{
            user:{
                required:"帐号是必填的",  //验证失败返回数据
                remote:"用户名已存在"
            },
            pass1:{
                required:"密码是必填的"
            },
            pass2: {
                required: "确认密码是必填的",
                equalTo:"确认密码与密码不同"
            }
        },
        errorElement:"div",  //将判断后的语句放到div标签中
        errorPlacement:function (error,input) {     //error错误时输出的语句,input(jq对象)产生error的元素
            error.appendTo(input.next());
        },
        success:function (er,input) {   //er格式正确时输出的语句,input(jq对象)产生error的元素
            // $(input).next().text("格式正确");
        },
        submitHandler:function () {       //验证成功后执行
            var user=$('input[id="inputEmail3"]').val();
            var pass=$('input[id="inputPassword4"]').val();
            $.ajax({
                url:"index.php?m=admin&a=passUpdate",
                data:{ user,pass},
                type:"POST",
                success:function (res) {
                    if(res!=="1"){
                        $(".success").html("<h3>修改失败</h3>").slideDown(200).delay(1000).slideUp(200);
                    }else{
                        $(".success").html("<h3>修改成功</h3>").slideDown(200).delay(1000).slideUp(200);
                    }
                }
            })
        }
    });
<?php echo '</script'; ?>
>
<?php }
}
