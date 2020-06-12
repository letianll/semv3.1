<?php /*a:2:{s:73:"D:\webroot\semclientcmsv3.1\application\admin\view\sem\keyword\index.html";i:1591783384;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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
        <button class="layui-btn layui-btn-sm" lay-event="btnAdd" id="btnAdd"><i class="layui-icon">&#xe654;</i>添加关键词</button>
        <button class="layui-btn layui-btn-sm" lay-event="btnUpdate">更新使用次数</button>
        <button class="layui-btn layui-btn-sm" lay-event="btnDel"><i class="layui-icon">&#xe640;</i>删除</button>
      
    </div>
</script>
 
<script type="text/html" id="rightbarTpl">
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>

<!-- 表单弹窗 -->
<script type="text/html" id="userEditDialog">
     <!-- 添加和修改公用的表单 -->
            <form id="categoryEditForm" lay-filter="categoryEditForm" class="layui-form">
                <input name="id" type="hidden"/>
                <div class="layui-tab layui-tab-brief"> 
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">

                            <div class="layui-form-item">
                                <label class="layui-form-label">关键词</label>
                                <div class="layui-inline" style="max-width: 140px;">
                                    <input name="keyword" class="layui-input" placeholder="输入关键词">
                                </div>
                                <div class="layui-inline">
                                    <button class="layui-btn icon-btn" lay-filter="dictTbSearch" lay-submit="">
                                        <i class="layui-icon"></i>获取改词的使用次数和URL
                                    </button>
                                </div>
                            </div>

                            <div class="layui-form-item" id="usecount">
                                <label class="layui-form-label">使用次数</label>
                                <div class="layui-inline" style="max-width: 140px;">
                                    <input name="usecount" class="layui-input" placeholder="0" readonly="readonly">
                                </div>
                                <div class="layui-inline">
                                    <span>（注意：使用次数和页面URL不可手填，可通过以上方式获取）</span>
                                </div>
                            </div>
                        
                            <div class="layui-form-item" id="url">
                                <label class="layui-form-label">URL</label>
                                <div class="layui-inline">
                                    <input name="url" class="layui-input" readonly="readonly">
                                </div>
                                <div class="layui-inline">
                                    <span>（注：若关键词在多个页面中被使用到，系统默认取产品详情页URL）</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            
                <div class="layui-form-item text-center">
                    <button class="layui-btn" lay-filter="KeywordSubmit" lay-submit>保存</button>
                    <!-- <button class="layui-btn layui-btn-primary" type="button" ew-event="closeDialog">取消</button> -->
                </div>
        </form>

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
            url: '/admin/sem.keyword/lists',
            page: {  layout: ['limit', 'count', 'prev', 'page', 'next', 'skip'] },
            toolbar: '#toolbarTpl',
            cellMinWidth: 100,
            cols: [[
                {type: 'checkbox', fixed: 'left'},
                {field:'id', title:'ID', width:80, fixed: 'left', unresize: true},
                {field:'keyword', title: '关键词', align: 'center'}, 
                {field:'usecount', title: '使用次数',align: 'center', ellipsis: true,}, 
                {field:'addtime', title: '创建时间', align: 'center'},               
                {align: 'center', toolbar: '#rightbarTpl',width:400, title: '操作'}
            ]]
        });

        //监听头部工具栏事件
        table.on('toolbar(tableDemo)', function(obj){
            var checkRows = table.checkStatus('tableDemo');
            switch(obj.event){
                case 'btnAdd':
                    //弹框
                    showEditModel();
                break;
                case 'btnUpdate':
                    updateNum(checkRows);
                break;
                case 'btnDel':
                    var num = checkRows.data.length;
                    if(num>0){
                        var ids = checkRows.data.map(function (d) {
                            return d.id;
                        });
                        doDel(ids.join(','));//ids是一个数组
                    }else{
                        layer.msg('至少选择一条数据',{icon:2, time:1000 });
                    }                    
                    break;
            };
        });

        /* 显示表单弹窗 */
        function showEditModel(mData) {
            admin.open({
                type: 1,
                title: (mData ? '修改' : '添加') + '关键词',
                content: $('#userEditDialog').html(),
                area: ['800px', '350px'],
                success: function (layero, dIndex) {
                    form.val('categoryEditForm', mData);
                    // 表单提交事件
                    form.on('submit(KeywordSubmit)', function (data) {
                        var loadIndex = layer.load(2);
                        $.post('<?php echo url("admin/sem.keyword/add"); ?>',data.field,function(res){
                            layer.close(loadIndex);
                            if (res.status === 1) {
                                layer.close(dIndex);
                                layer.msg(res.msg, {icon: 1});
                                insTb.reload({}, 'data');
                            } else {
                                layer.msg(res.msg, {icon: 2});
                            }
                        },'json');
                        return false;
                    });
                    // 禁止弹窗出现滚动条
                    $(layero).children('.layui-layer-content').css('overflow', 'visible');
                }
            });
        }

        // 工具条点击事件
        table.on('tool(tableDemo)', function (obj) {
            var data = obj.data;
            var layEvent = obj.event;
            if (layEvent === 'del') { //删除
                doDel(data.id, data.keyword);
            }else if (layEvent === 'edit') { // 删除
                showEditModel(obj.data);
            }
        });

        // 删除
        function doDel(ids, doDel) {
            layer.confirm('确定要删除吗？', {
                skin: 'layui-layer-admin',
                shade: .1
            }, function (i) {
                layer.close(i);
                layer.load(2);
                $.get('/admin/sem.keyword/delete', {
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

        //更新使用次数
        function updateNum(checkRows) {
            // var num = checkRows.data.length;
            // if(num>0){
                var ids = checkRows.data.map(function (d) {
                            return d.id;
                    });
                layer.load(2);
                $.post('<?php echo url("admin/sem.keyword/updatenum"); ?>', {'id':ids.join(',')}, function (res) {
                        layer.closeAll('loading');
                        if(res.status == 1){
                            layer.msg(res.msg, {icon: 1});
                            insTb.reload({}, 'data');
                        }else{
                            layer.msg(res.msg, {icon: 2});
                        }
                }, 'json');
                return false;
            // }else{
            //     layer.msg('至少选择一条数据',{icon:2, time:1000 });
            // }   
        }

        //弹框搜索
        form.on('submit(dictTbSearch)', function (data) {
            var loadIndex = layer.load(2);
            var keyword = $('input[name="keyword"]').val();
            if(keyword == ""){
                layer.msg('请填写关键词', {icon: 2,time:2000}, function(){

                });
                
            }else{
                $.post('<?php echo url("admin/sem.keyword/search"); ?>', {'keyword':keyword}, function (res) {
                    if (res.status == 1) {
                        layer.msg(res.msg, {icon: 1});
                        //查到的值写入input框中
                        $('input[name="usecount"]').val(res.usecount);
                        $('input[name="url"]').val(res.url);
                    }else{
                        layer.msg(res.msg, {icon: 2});
                    }
                }, 'json');
        
            }
            layer.close(loadIndex);
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