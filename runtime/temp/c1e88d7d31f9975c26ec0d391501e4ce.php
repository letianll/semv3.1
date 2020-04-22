<?php /*a:2:{s:67:"D:\webroot\semclientcmsv3.1\application\admin\view\login\index.html";i:1584527172;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="/assets/images/favicon.ico" rel="icon">
<title>希望科技-SEM3.2系统 </title>
<link rel="stylesheet" href="/assets/libs/layui/css/layui.css"/>
<link rel="stylesheet" href="/assets/module/admin.css?v=316"/>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>



<style type="text/css">html,body{height:100%;}</style>
<style>
body,html {
margin: 0;
padding: 0;
width: 100%;
max-height: 100vh;
position: relative;
background: linear-gradient(125deg, #0fb8ad 0%, #40E0D0 30%, #436EEE 75%);
overflow: hidden;
}
.layui-btn {height: 38px;line-height: 38px;}

#login-page {background-size: cover;height: 100%;}
#login-page-box {width: 380px;padding-left: 15px; padding-right: 15px; position: absolute;left: 48%;margin-left: -190px;
height: 320px;overflow: hidden;top: 50%;margin-top: -160px;
}
#form-login {background: rgba(255,255,255,.8); padding: 20px;height: 100%;border-radius: 20px; box-sizing: border-box;}
#logo {padding-bottom: 10px;}
#logo img {max-width: 70px;margin-bottom: 10px;}
.system-name {font-size: 20px;}
.margin-top10 {margin-top: 10px;}
.margin-top15 {margin-top: 15px;}
.margin-top20 {margin-top: 20px;}
#form-login .field {position: relative;}
#form-login .field i.layui-icon {position: absolute;right: 8px;top: 10px;}
#vcodeimg {width: 123px;height:36px;}
.vcodeimg {margin-right: 130px;}
.layui-elem-field legend {font-size: 16px;}
</style>

<body id="login-page">
<div id="login-page-box">
    <form id="form-login" method="post" action="<?php echo url('admin/Login/checklogin'); ?>" class="layui-form">
        <div id="logo">
            <div class="text-center">
                <img src="/assets/images/minilogo.png"/>
                <b class="system-name">希望科技SEM</b> <span class="layui-badge">V3.2</span>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="field">
                <input type="text" name="username" id="username" placeholder="请输入账号"  class="layui-input" size="32" lay-verType="tips" lay-verify="required"/>
                <i class="layui-icon layui-icon-username"></i>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="field">
                <input type="password" name="password" id="password" placeholder="请输入密码"  class="layui-input" size="32" lay-verType="tips" lay-verify="required" />
                <i class="layui-icon layui-icon-password"></i>
            </div>
        </div>
        <div class="layui-form-item">
            <img id="vcodeimg" src="<?php echo captcha_src(); ?>" onClick="this.src='<?php echo captcha_src(); ?>?timer=' + Math.random()" class="pull-right">
            <div class="field vcodeimg">
                <input type="text" name="vcode" id="vcode" class="layui-input" placeholder="验证码" size="11" minlength="5" maxlength="5" lay-verType="tips" lay-verify="required|h5" style="display:inline-block" />
                <i class="layui-icon layui-icon-auz"></i>
            </div>
        </div>
        <div id="button_group">
            <button lay-filter="formSubmit" lay-submit class="layui-btn layui-btn-normal" style="width:100%;">立即登录</button>
        </div>
    </form>
</div>


<!-- js部分 -->
<script type="text/javascript" src="/assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="/assets/js/common.js?v=316"></script>
<script type="text/javascript" src="/assets/libs/jquery/jquery-3.2.1.min.js"></script>
<script>
    layui.use(['index','form','layer'], function () {
        var $ = layui.jquery;
        var form = layui.form;
        var layer = layui.layer;

        /* 监听表单提交 */
        form.on('submit(formSubmit)', function (data) {
            // console.log(JSON.stringify(data.field));
            $.ajax({
                type:'POST',
                url:$('#form-login').attr('action'),
                data:data.field,
                success:function(res){
                    console.log(res);
                    if(res.status=='1'){
                        //验证登录成功
                        layer.msg(res.msg, {icon: 1,time:1000,shade:[0.3,'#000000']},function(){
                            window.location.href = "<?php echo url('admin/Index/index'); ?>";
                        });
                    }else{
                        //验证错误信息显示
                        layer.msg(res.msg, {icon: 2,time:2000},function(){
                            $('#vcodeimg').trigger('click');
                        });
                    }
                    
                }
            });
            return false;
        });

    });
</script>
</body>
</html>



<style type="text/css">
.layui-form-fixed-footer:before {content:''; display: block; height: 76px;}
.layui-form-fixed-footer .layui-form-btn {position: fixed;left: 0;right:0;bottom: 0;background: #fff;padding: 10px 0;border-top: 1px solid #eee;box-shadow: 0px -5px 10px rgba(0,0,0,.05);}
.pc-max-width50 {max-width: 50%;}

@media only screen and (min-width: 320px) and (max-width: 640px){
	.pc-max-width50 {max-width: 100%;}
}
</style>