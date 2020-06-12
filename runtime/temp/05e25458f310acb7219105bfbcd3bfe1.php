<?php /*a:2:{s:76:"D:\webroot\semclientcmsv3.1\application\admin\view\category\product\add.html";i:1584695012;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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
                    <ul class="layui-tab-title">
                        <li class="layui-this">基本信息</li>
                        <li>SEO配置</li>
                    </ul>
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label layui-form-required">所属分类：</label>
                                    <div class="layui-input-inline">
                                        <select name="parentid" class="layui-select">
                                            <option value="<?php echo htmlentities($nav_list['id']); ?>"><?php echo htmlentities($nav_list['category']); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label layui-form-required">分类名称：</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="category" class="layui-input" lay-vertype="tips" lay-verify="required">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label layui-form-required">分类别名：</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="urlname" class="layui-input" lay-vertype="tips" lay-verify="required" style="width: 80px;">
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">分类排序：</label>
                                    <div class="layui-input-inline" style="width: auto;">
                                        <input type="number" name="paixu" class="layui-input" value="0" min="0" style="width: 50px;">
                                    </div>
                                    <div class="layui-form-mid layui-word-aux">（倒叙排列）</div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label">打开方式：</label>
                                    <div class="layui-input-inline">
                                        <input type="radio" name="target" value="_self" title="本页" checked="">
                                        <input type="radio" name="target" value="_blank" title="新窗口">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label">nofollow：</label>
                                    <div class="layui-input-inline" style="width: auto">
                                        <input type="checkbox" name="nofollow" value="nofollow" lay-skin="primary" title="启用">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label">分类属性：</label>
                                    <div class="layui-input-inline">
                                        <input type="checkbox" name="is_check" value="1" lay-skin="primary" title="启用" checked="">
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label layui-form-required">优化词：</label>
                                    <div class="layui-input-inline" style="width: auto;">
                                        <input type="text" name="keyword" class="layui-input" style="width: 100px;" placeholder="请填写1个词">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label">创建时间</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="addtime" id="addtime" value="<?php echo date('Y-m-d H:i:s'); ?>" class="layui-input icon-date" lay-key="1" lay-vertype="tips" lay-verify="dateX">
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">分类图片：</label>
                                    <div class="layui-input-inline" style="width:auto;">
                                        <input type="text" name="cateimg" id="cateimg" class="layui-input" placeholder="可手填或选择上传" size="40">
                                    </div>
                                    <div class="layui-input-inline" style="width:auto;">
                                        <a class="layui-btn" id="file-btn-choose">选择图片</a>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">分类外链：</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="url" class="layui-input" lay-vertype="tips" lay-verify="urlX">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">页面标题：</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <input type="text" name="seo_title" class="layui-input">
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">关键词：</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <textarea name="seo_keywords" class="layui-textarea" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">页面描述：</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <textarea name="seo_description" class="layui-textarea" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="layui-form-fixed-footer">
                    <div class="layui-form-btn text-center">
                        <button class="layui-btn" lay-filter="categoryEditSubmit" lay-submit>保存</button>
                        <button class="layui-btn layui-btn-primary" type="button" ew-event="closeThisTabs">取消</button>
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
<script>
layui.use(['layer', 'form', 'admin', 'element', 'laydate', 'fileChoose'], function () {
    var $ = layui.jquery;
    var layer = layui.layer;
    var form = layui.form;
    var admin = layui.admin;
    var element = layui.element;
    var laydate = layui.laydate;
    var fileChoose = layui.fileChoose;

    // 表单提交事件
    form.on('submit(categoryEditSubmit)', function (data) {
        var loadIndex = layer.load(2);
        $.post('<?php echo url("admin/category.product/add"); ?>', data.field, function (res) {
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

    // 文件弹窗选择
    $('#file-btn-choose').click(function () {
        fileChoose.open({
            fileUrl: '',
            listUrl: '<?php echo url("admin/files/lists",["filetype"=>0]); ?>',
            num: 1,
            onChoose: function (urls) {
                var fileUrls = [], fileUrl = '';
                for (var i = 0; i <= urls.length-1; i++) {
                    // console.log(urls[i]['url']);
                    fileUrls[i] = urls[i]['url'];
                }
                fileUrl = fileUrls.join(',');
                console.log(fileUrl);
                $('#cateimg').val(fileUrl);
                layer.msg('操作成功！', {icon: 1,time:1000});

            }
        });
    });


    laydate.render({
        elem: '#addtime',
        type: 'datetime'
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