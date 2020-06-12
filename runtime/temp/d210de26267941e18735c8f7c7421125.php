<?php /*a:2:{s:82:"D:\webroot\semclientcmsv3.1\application\admin\view\sem\keyword_category\index.html";i:1591422751;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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


<body>
<!-- 页面加载loading -->
<div class="page-loading">
    <div class="ball-loader">
        <span></span><span></span><span></span><span></span>
    </div>
</div>
<!-- 正文开始 -->
</script>

<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-body full-table">           
            <table id="tableDemo" lay-filter="tableDemo"></table>
        </div>
    </div>
</div>
</script>
<!-- 表格操作列 -->
<script type="text/html" id="toolbarTpl">
    <div class="layui-btn-container">
        <button class="layui-btn layui-btn-sm" lay-event="btnAdd" id="btnAdd"><i class="layui-icon">&#xe654;</i>添加</button>
        <button class="layui-btn layui-btn-sm" lay-event="btnDel"><i class="layui-icon">&#xe640;</i>删除</button>
      
    </div>
</script>
 
<script type="text/html" id="rightbarTpl">
    <a class="layui-btn layui-btn-xs" lay-event="config">配置</a>
    <a class="layui-btn layui-btn-xs" lay-event="createKeywrod">生成词库</a>
    <a class="layui-btn layui-btn-xs" lay-event="addArticle">添加软文</a>
    <a class="layui-btn layui-btn-xs" lay-event="configImage">配置图片</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>


<!-- js部分 -->
<script type="text/javascript" src="/assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="/assets/js/common.js?v=316"></script>
<script>
    layui.use(['layer', 'form', 'table', 'util', 'admin', 'index'], function () {
        var $ = layui.jquery;
        var layer = layui.layer;
        var form = layui.form;
        var table = layui.table;
        var util = layui.util;
        var admin = layui.admin;
        var index = layui.index;

       

        // 渲染表格
        var insTb = table.render({
            elem: '#tableDemo',
            url: '/admin/sem.keyword_category/lists',
            page: {  layout: ['limit', 'count', 'prev', 'page', 'next', 'skip'] },
            toolbar: '#toolbarTpl',
            cellMinWidth: 100,
            cols: [[
                {type: 'checkbox', fixed: 'left'},
                {field:'id', title:'ID', width:80, fixed: 'left', unresize: true},
                {field:'category', title: '关联产品分类', align: 'center'}, 
                {field:'keyword_num', title: '关键词数',align: 'center'}, 
                {field:'article_num', title: '软文数', align: 'center'}, 
                {field:'images_num', title: '图片数', align: 'center'},                
                {align: 'center', toolbar: '#rightbarTpl',width:400, title: '操作'}
            ]]
        });


        //监听头部工具栏事件
        table.on('toolbar(tableDemo)', function(obj){
            var checkRows = table.checkStatus('tableDemo');
            switch(obj.event){
                case 'btnAdd':
                    index.openTab({
                        title: '添加关键词分类', 
                        url: '<?php echo url("admin/sem.keyword_category/add"); ?>',
                        end: function() {
                            insTb.reload(); 
                        }
                    });
                break;
                case 'btnDel':
                    var num = checkRows.data.length;
                    if(num>0){
                        var ids = checkRows.data.map(function (d) {
                            return d.id;
                        });
                        doDel(ids.join(','));console.log(ids);//ids是一个数组
                    }else{
                        layer.msg('至少选择一条数据',{icon:2, time:1000 });
                    }                    
                    break;     
            };
        });

        // 工具条点击事件
        table.on('tool(tableDemo)', function (obj) {
            var data = obj.data;
            var layEvent = obj.event;
            if (layEvent === 'config') { // 修改
                config(data);
            } else if (layEvent === 'del') { // 删除
                doDel(data.id, data.nickName);
            } else if (layEvent === 'createKeywrod') { // 生成关键词
                createKeywrod(data);
            }
            else if (layEvent === 'addArticle') { // 生成关键词
                addArticle(data);
            }
            else if (layEvent === 'configImage') { // 生成关键词
                configImage(data);
            }
        });    

        //配置图片
        function configImage(data){
            console.log(data);
            index.openTab({
                        title: '配置图片', 
                        url: '<?php echo url("admin/sem.keyword_category/configImage"); ?>?id='+data.id,
                        end: function() {
                            insTb.reload(); 
                        }
                    });
        }

        //添加软文
        function addArticle(data){
            console.log(data);
            index.openTab({
                        title: '添加软文', 
                        url: '<?php echo url("admin/publish.soft_article/add"); ?>?id='+data.id,
                        end: function() {
                            insTb.reload(); 
                        }
                    });
        }

        //配置
        function config(data){
            console.log(data);
            index.openTab({
                        title: '配置关键词分类', 
                        url: '<?php echo url("admin/sem.keyword_category/config"); ?>?id='+data.id,
                        end: function() {
                            insTb.reload(); 
                        }
                    });
        }

        // 删除
        function doDel(ids, nickName) {
            layer.confirm('确定要删除吗？', {
                skin: 'layui-layer-admin',
                shade: .1
            }, function (i) {
                layer.close(i);
                layer.load(2);
                $.get('/admin/sem.keyword_category/delete', {
                    id: ids
                }, function (res) {
                    layer.closeAll('loading');
                    if (res.status == 1) {
                        layer.msg(res.msg, {icon: 1});
                        insTb.reload({}, 'data');
                    } else {
                        layer.msg(res.msg, {icon: 2});
                    }
                }, 'json');
            });
        }

       
        // 生成词库
        function createKeywrod(data) {
            layer.confirm('确定要生成词库吗？', {
                skin: 'layui-layer-admin',
                shade: .1
            }, function (i) {
                layer.close(i);
                layer.load(2);
                $.get('/admin/sem.keyword_category/createKeywrod', {
                    data: data
                }, function (res) {
                    console.log(res)
                    layer.closeAll('loading');
                    if (res.status == 1) {
                        layer.msg(res.msg, {icon: 1});
                        insTb.reload({}, 'data');
                    } else {
                        layer.msg(res.msg, {icon: 2});
                    }
                }, 'json');
            });
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