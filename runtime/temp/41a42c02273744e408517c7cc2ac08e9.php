<?php /*a:2:{s:83:"D:\webroot\semclientcmsv3.1\application\admin\view\sem\keyword_category\config.html";i:1591262338;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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
                   <input type="hidden" name="id" value="<?php echo htmlentities($details['id']); ?>">
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">关联产品分类</label>
                                    <div class="layui-input-inline">
                                        <select name="product_category_id" class="layui-select">
                                            <?php if(is_array($productCategory) || $productCategory instanceof \think\Collection || $productCategory instanceof \think\Paginator): if( count($productCategory)==0 ) : echo "" ;else: foreach($productCategory as $key=>$data): ?>
                                            <option value="<?php echo htmlentities($data['id']); ?>" <?php if($details['id'] == $data['id']): ?>selected<?php endif; ?>><?php echo htmlspecialchars_decode($data['category']); ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-inline">
                                        <label class="layui-form-label ">地区</label>
                                        <div class="layui-input-inline" style="width: 558px;">
                                            <input type="text" id="selectPage" name="citys" class="layui-input form-control" value="<?php echo htmlentities($details['citys']); ?>" placeholder="选择或输入地区" >
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-block">
                                        <label class="layui-form-label">主词</label>
                                        <div class="layui-input-block pc-max-width50">
                                            <textarea name="main_keywords" id="main_keywords" placeholder="多个词之间用中文或者英文逗号分隔" class="layui-textarea" cols="30" rows="10"><?php echo htmlentities($details['main_keywords']); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-block">
                                        <label class="layui-form-label">后缀词：</label>
                                        <div class="layui-input-block pc-max-width50">
                                            <textarea name="after_keywords" id="after_keywords" placeholder="多个词之间用中文或者英文逗号分隔"  class="layui-textarea" cols="30" rows="10"><?php echo htmlentities($details['after_keywords']); ?></textarea>
                                        </div>
                                    </div>
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
layui.use(['layer', 'form', 'admin', 'element', 'laydate', 'fileChoose'], function () {
    var $ = layui.jquery;
    var layer = layui.layer;
    var form = layui.form;
    var admin = layui.admin;
    var element = layui.element;
    var laydate = layui.laydate;
    var fileChoose = layui.fileChoose;

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

    $(".countNum").click(function(){
        var loadIndex = layer.load(2);
        var params={}
        params.city = $("input[name='citys']").val();
        params.main_keywords = $("#main_keywords").val();
        params.after_keywords =$("#after_keywords").val();
        if(params.city=='' || params.city==undefined || params.city ==null ||
            params.main_keywords=='' || params.main_keywords==undefined || params.main_keywords ==null ||
            params.after_keywords=='' || params.after_keywords==undefined || params.after_keywords ==null
        ){
            layer.close(loadIndex);
            layer.msg('请填写城市，主词，后缀词', {icon: 2,time:2000});
            return 0
        }       
        console.log(params)
        $.post('<?php echo url("admin/sem.keyword_category/getKeywords"); ?>', params, function (res) {
            console.log(res);
            layer.close(loadIndex);
            if (res.status == '1') {
                layer.msg(res.msg, {icon: 1,time:1000}, function(){
                });

            } else {
                layer.msg(res.msg, {icon: 2,time:2000});
            }
        }, 'json');
    })

 

    // 表单提交事件
    form.on('submit(categoryEditSubmit)', function (data) {
        console.log(data);
        var loadIndex = layer.load(2);
        $.post('<?php echo url("admin/sem.keyword_category/config"); ?>', data.field, function (res) {
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