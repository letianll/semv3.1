<?php /*a:2:{s:80:"D:\webroot\semclientcmsv3.1\application\admin\view\publish\soft_article\add.html";i:1591414244;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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
<link rel="stylesheet" href="/static/plug/selectpage/selectpage.css"/>
<link href="/static/plug/ueditor/themes/default/css/ueditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/static/plug/ueditor/third-party/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/static/plug/ueditor/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/plug/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/plug/ueditor/ueditor.all.js"></script>

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
                        <div class="layui-tab-item layui-show">
                            <?php if(isset($product_category_id)): ?>    
                                <input type="hidden" name="product_category_id" value="<?php echo htmlentities($product_category_id); ?>">
                            <?php else: ?>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">关联产品分类</label>
                                    <div class="layui-input-inline">
                                        <select name="product_category_id" class="layui-select">
                                            <?php if(is_array($productCategory) || $productCategory instanceof \think\Collection || $productCategory instanceof \think\Paginator): if( count($productCategory)==0 ) : echo "" ;else: foreach($productCategory as $key=>$data): ?>
                                            <option value="<?php echo htmlentities($data['id']); ?>"><?php echo htmlspecialchars_decode($data['category']); ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>     
                            <?php endif; ?>
                            <div class="layui-form-item">
                                <label class="layui-form-label"><span style="color:red">*</span>素材标题</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="name" required lay-verify="required" placeholder="请输入素材标题" class="layui-input" >
                                </div>
                            </div>
        
                            <div class="layui-form-item">
                                <label class="layui-form-label" ><b>提醒</b></label>
                                <div class="layui-input-block">
                                    <span style="color:red"><p>请找一些高质量文章或资料，最好是公司行业相关的权威书籍、论文等高质量内容。</p>
                                    <!-- <p>请务必【清除格式】或【复制到记事本然后剪切进来】后再提交！！！</p>
                                    <p>发布素材为一个整段落 不能有回车、空白、换行、多段落等，插入主词 +周边词 2次。</p> -->
                                    <p>段落字数建议为【400 字以内】，请注意！</p></span>
                                   
                                    <div class="layui-btn-group">
                                    <button onclick="insertWord('【地区】')"  type="button" class="layui-btn layui-btn-normal insertDq">【地  区】</button>
                                    <button onclick="insertWord('【主词】')"  type="button" class="layui-btn layui-btn-normal insertDq">【主  词】</button>
                                    <button onclick="insertWord('【后缀】')"  type="button" class="layui-btn layui-btn-normal insertDq">【后  缀】</button>
                                    </div>
                                    <span style="padding-left:100px;">剩余字数 <span id="textCount" class="layui-badge layui-bg-blue">400</span> </span>
                                </div>
                            </div>
        
                            <div class="layui-form-item" id="nav-content">
                                <label class="layui-form-label"><span style="color:red">*</span>栏目内容</label>
                                <div class="layui-input-block">
                                    <textarea  class="" name="content" id="myEditor" style="height: 300px;"></textarea>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>

                <div class="layui-form-fixed-footer">
                    <div class="layui-form-btn text-center">
                        <button class="layui-btn" lay-filter="categoryEditSubmit" lay-submit>保存</button>
                        <button class="layui-btn layui-btn-primary countNum" type="button" >预计生成关键词数</button>
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
<script src="/assets/libs/jquery/jquery-3.2.1.min.js"></script>
<script src="/static/plug/selectpage/selectpage.js"></script>

<script>
layui.use(['layer', 'form', 'admin', 'element'], function () {
    var $ = layui.jquery;
    var layer = layui.layer;
    var form = layui.form;
    var admin = layui.admin;
    var element = layui.element;

    var tag_data;
    $.post('<?php echo url("admin/sem.keyword_category/getCitys"); ?>', '', function (res) {
        tag_data= res;
        $('#selectPage').selectPage({
        showField : 'name',
        keyField : 'id',
        data : tag_data,
        //启用多选模式
        multiple : true
    });
    })  
   
 
    // 表单提交事件
    form.on('submit(categoryEditSubmit)', function (data) {
        console.log(data);
        var loadIndex = layer.load(2);
        $.post('<?php echo url("admin/publish.soft_article/add"); ?>', data.field, function (res) {
            console.log(res);
            layer.close(loadIndex);
            if (res.status == '1') {
                layer.msg(res.msg, {icon: 1,time:1000}, function(){
                    admin.closeThisTabs();
                });

            } else {
                layer.msg(res.msg, {icon: 2,time:2000});
            }
        }, 'json');
        return false;
    });


});

editor = UE.getEditor('myEditor', {
        toolbars : [
            ['fullscreen', 'source', 'undo', 'redo'],
                ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|', ,'insertframe','link','|','seoimage']
        ],
            autoHeightEnabled: true,
            autoFloatEnabled: true
    });

editor.addListener("contentChange", function() {
    var udLength = parseInt(editor.getContentTxt().length);
    $("#textCount").text(400 - udLength);
        
});

function insertWord(e){
        editor.focus();
        editor.execCommand('inserthtml',e);
    }
    
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