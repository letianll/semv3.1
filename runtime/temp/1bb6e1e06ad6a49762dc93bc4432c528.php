<?php /*a:2:{s:72:"D:\webroot\semclientcmsv3.1\application\admin\view\sem\layout\index.html";i:1591951034;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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


<style type="text/css">.layui-form-required:before {font-size: 12px;}</style>
<body>

<!-- 页面加载loading -->
<div class="page-loading">
    <div class="ball-loader">
        <span></span><span></span><span></span><span></span>
    </div>
</div>

<!-- 正文开始 -->
<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-body">
            <!-- 添加和修改公用的表单 -->
            <form id="categoryEditForm" lay-filter="categoryEditForm" class="layui-form" autocomplete="off">
                <div class="layui-tab layui-tab-brief">
                    <div class="layui-tab-content">
                        
                          <!--代码输入框（注意请务必设置高度，否则无法显示）-->
                          <div class="container" id="div-hidden">
                          <button class="layui-btn icon-magic" type="button" id="layout" style="width: 20%;">  一键优化</button>
                          <br /><br />
                          <p style="" data-value=""></p>
                              <progress id="processbar" max="100" value="0" class="html5">
                                <div class="progress-bar" >
                                  
                                </div>
                              </progress>
                              <span id="processbar-text"></span>
                          <ul id='attention'>
                            <li><font size="3" color='orange'>优化注意事项</font></li>
                            <hr>
                            <li class="icon-hand-o-right"> 初次添加资料之前请勿使用该功能。</li>
                            <hr>
                            <li class="icon-hand-o-right"> 该功能主要优化站点SEO配置项。</li>
                            <hr>
                          </ul>
                          </div>


                    </div>
                </div>


                


            </form>
            <!-- 公用表单结束 -->
        </div>
    </div>
</div>


<!-- js部分 -->
<script type="text/javascript" src="../../assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="../../assets/js/common.js?v=317"></script>
<script type="text/javascript" src="../../static/plug/process/process.js"></script>
<link rel="stylesheet" href="../../static/plug/process/process.css"/>

<script>
layui.use(['layer', 'form', 'admin', 'element', ], function () {
    var $ = layui.jquery;
    var layer = layui.layer;
    var form = layui.form;
    var admin = layui.admin;
    var element = layui.element;


    $('#layout').click(function () {
        $("#layout").hide();
        $("#attention").hide();   
        $("#processbar-text").append("<p>词库检测中...</p>");
        layout('check');  
        setTimeout(function(){
            var processbarNum=0;
            var list = ['ProductCategory','Article'];
            for(var i=0;i<list.length;i++){
                layout(list[i]);
                processbarNum = processbarNum+10;
                $("#processbar").val(processbarNum);
            }
        },2000)       
    });
 
    function layout(e){
        var getUrl = "<?php echo url('sem.layout/doLayout'); ?>";
        $.ajax({
            type:'POST',
            url: getUrl,
            data:{param:e},
            success:function(data){
                if(data.status == 1){                                   
                    $("#processbar-text").append("<p>"+data.msg+"</p>");    
                }else{
                    $("#processbar-text").append("<p>"+data.msg+"</p>");  
                }
            }
        })
    }
   

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