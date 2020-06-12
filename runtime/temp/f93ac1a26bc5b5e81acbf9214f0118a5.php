<?php /*a:2:{s:78:"D:\webroot\semclientcmsv3.1\application\admin\view\category\product\index.html";i:1584695012;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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


<link rel="stylesheet" type="text/css" href="/assets/css/my.css">
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
            <!-- 表格搜索栏 -->
            <!-- 数据表格 -->
            <table class="layui-hide" id="dataTable" lay-filter="dataTable"></table>
 
            
        </div>
    </div>
</div>

<!-- 表格操作列 -->
<script type="text/html" id="toolbarTpl">
    <div class="layui-btn-container">
        <button class="layui-btn layui-btn-sm" lay-event="btnAdd">添加</button>
        <button class="layui-btn layui-btn-sm" lay-event="btnDel">删除</button>
    </div>
</script>
 
<script type="text/html" id="rightbarTpl">
  <a class="layui-btn layui-btn-xs" lay-event="add">添加</a>
  <a class="layui-btn layui-btn-xs" lay-event="edit">修改</a>
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>

<script type="text/html" id="ischeckTpl">
    <input type="checkbox" lay-filter="ischeckFilter" value="{{d.id}}" lay-skin="switch" lay-text="启用|禁用" {{d.is_check==1?'checked':''}} />
</script>
<script type="text/html" id="targetTpl">
    {{d.target=='_blank'?'新窗口':'本页'}}
</script>
<script type="text/html" id="nofollowTpl">
    <input type="checkbox" lay-filter="nofollowFilter" value="{{d.id}}" lay-skin="primary" {{d.nofollow=='nofollow'?'checked':''}} />
</script>

<!-- js部分 -->
<script type="text/javascript" src="/assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="/assets/js/common.js?v=317"></script>
<script>
layui.use(['layer', 'form', 'table', 'util', 'admin', 'index'], function(){
    var $ = layui.jquery;
    var layer = layui.layer;
    var form = layui.form;
    var table = layui.table;
    var util = layui.util;
    var admin = layui.admin;
    var index = layui.index;

  
    var insTb = table.render({
        elem: '#dataTable',
        url:'<?php echo url("admin/category.product/lists"); ?>',
        toolbar: '#toolbarTpl',
        defaultToolbar: ['filter'],
        page: false,
        cellMinWidth: 100,
        cols: [[
            {type: 'checkbox', fixed: 'left'},
            {field:'id', title:'ID', width:80, fixed: 'left', unresize: true},
            {field:'category', title:'分类名称'},
            {field:'urlname', title:'分类别名'},
            {field:'paixu', title:'paixu', edit: 'text'},
            {field:'target', title:'打开方式', templet:'#targetTpl'},
            {field:'is_check', title:'启用状态', templet:'#ischeckTpl'},
            {field:'nofollow', title:'nofollow状态', templet:'#nofollowTpl'},
            {fixed: 'right', title:'操作', toolbar: '#rightbarTpl', width:165}
        ]]

    });

    //监听头部工具栏事件
    table.on('toolbar(dataTable)', function(obj){
        var checkRows = table.checkStatus('dataTable');
        switch(obj.event){
            case 'btnAdd':
                index.openTab({
                    title: '添加分类', 
                    url: '<?php echo url("admin/category.product/add"); ?>',
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

    //监听行工具事件
    table.on('tool(dataTable)', function(obj){
        var data = obj.data;console.log(data);
        if(obj.event === 'del'){
            doDel(data.id);
        }else if(obj.event === 'add'){
            index.openTab({
                title: '修改子分类', 
                url: '<?php echo url("admin/category.product/add"); ?>?id='+data.id,
                end: function() {
                    insTb.reload(); 
                }
            });
        }else if(obj.event === 'edit'){
            index.openTab({
                title: '修改分类', 
                url: '<?php echo url("admin/category.product/edit"); ?>?id='+data.id,
                end: function() {
                    insTb.reload(); 
                }
            });
        }
    });

    //监听单元格编辑
    table.on('edit(dataTable)', function(obj){
        var value = obj.value; //得到修改后的值
        var id = obj.data.id; //得到所在行的数据id
        var field = obj.field; //得到修改的字段名
        console.log('id:'+id + ',字段：'+field + ',修改后的值：'+value);
        var loadIndex = layer.load(2);
        $.post('<?php echo url("admin/common/updates"); ?>', {tb:'ProductCategory',id:id,field:field,value:value}, function (res) {
            layer.close(loadIndex);
            if (res.status == '1') {
                layer.msg(res.msg, {icon: 1, time:1000},function(){
                    insTb.reload();// insTb.reload({page: {curr: 1}});//传递page参数会出现分页
                });
            } else {
                layer.msg(res.msg, {icon: 2, time:2000});
            }
        }, 'json');

    });

    /* 监听开关状态 */
    form.on('switch(ischeckFilter)', function (obj) {
        var loadIndex = layer.load(2);// console.log(obj);        
        $.post('<?php echo url("admin/common/updates"); ?>', {
            tb:'ProductCategory',
            id: obj.elem.value,
            field:'is_check',
            value: obj.elem.checked ? 1 : 0
        }, function (res) {
            layer.close(loadIndex);
            if (res.status == '1') {
                layer.msg(res.msg, {icon: 1, time:1000});
            } else {
                layer.msg(res.msg, {icon: 2, time:2000});
            }
        }, 'json');
    });

    /* 监听复选框状态 */
    form.on('checkbox(nofollowFilter)', function (obj) {
        var loadIndex = layer.load(2);console.log(obj);        
        $.post('<?php echo url("admin/common/updates"); ?>', {
            tb:'ProductCategory',
            id: obj.elem.value,
            field:'nofollow',
            value: obj.elem.checked ? 'nofollow' : ''
        }, function (res) {
            layer.close(loadIndex);
            if (res.status == '1') {
                layer.msg(res.msg, {icon: 1, time:1000});
            } else {
                layer.msg(res.msg, {icon: 2, time:2000});
            }
        }, 'json');
    });


    /* 单条和多选删除封装方法 */
    function doDel(ids) {
        layer.confirm('确定要删除选中数据吗？', {skin: 'layui-layer-admin',shade: .1,icon:3}, function (i) {
            layer.close(i);
            var loadIndex = layer.load(2);
            $.post('<?php echo url("admin/category.product/delete"); ?>', {ids:ids}, function (res) {
                layer.close(loadIndex);
                if (res.status == '1') {
                    layer.msg(res.msg, {icon: 1, time:1000},function(){
                        insTb.reload();// insTb.reload({page: {curr: 1}});//传递page参数会出现分页                        
                    });
                } else {
                    layer.msg(res.msg, {icon: 2, time:2000});
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