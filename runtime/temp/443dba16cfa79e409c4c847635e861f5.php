<?php /*a:2:{s:73:"D:\webroot\semclientcmsv3.1\application\admin\view\system\menu\index.html";i:1587633847;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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
<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-body">
            <div class="layui-form toolbar">
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label w-auto">搜索：</label>
                        <div class="layui-input-inline mr0">
                            <input id="edtSearchAuth" class="layui-input" placeholder="输入关键字"/>
                        </div>
                    </div>
                    <div class="layui-inline">
                        <button id="btnSearchAuth" class="layui-btn icon-btn"><i class="layui-icon">&#xe615;</i>搜索
                        </button>
                        <button id="btnAddAuth" class="layui-btn icon-btn"><i class="layui-icon">&#xe654;</i>添加</button>
                    </div>
                </div>
            </div>

            <table id="tableAuth"></table>
        </div>
    </div>
</div>

<!-- 表格操作列 -->
<script type="text/html" id="tableBarAuth">
    <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="edit">修改</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
<!-- 表单弹窗 -->
<script type="text/html" id="modelAuth">
    <form id="modelAuthForm" lay-filter="modelAuthForm" class="layui-form model-form">
        <input name="id" type="hidden" value=""/>
        <div class="layui-form-item">			
            <label class="layui-form-label layui-form-required">上级菜单</label>
            <div class="layui-input-block">
                <select id="boards" name="parentid" lay-search  >
              
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label layui-form-required">菜单名称</label>
            <div class="layui-input-block">
                <input name="menu" placeholder="请输入菜单名称" type="text" class="layui-input" maxlength="50"
                       lay-verType="tips" lay-verify="required" required/>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label layui-form-required">类型</label>
            <div class="layui-input-block">
                <input name="is_onmenu" type="radio" value="0" title="按钮" checked/>
                <input name="is_onmenu" type="radio" value="1" title="菜单"/>
            </div>
        </div>
		<div class="layui-form-item">
		    <label class="layui-form-label layui-form-required">状态</label>
		    <div class="layui-input-block">
		        <input name="is_check" type="radio" value="0" title="禁用" checked/>
		        <input name="is_check" type="radio" value="1" title="开启"/>
		    </div>
		</div>
        <div class="layui-form-item">
            <label class="layui-form-label">菜单url</label>
            <div class="layui-input-block">
                <input name="url" placeholder="请输入菜单url" type="text" class="layui-input"/>
            </div>
        </div>
 <!--       <div class="layui-form-item">
            <label class="layui-form-label">菜单标识</label>
            <div class="layui-input-block">
                <input name="authority" placeholder="请输入菜单标识" type="text" class="layui-input"/>
            </div>
        </div> -->
     
		
		<div class="layui-form-item">
			<label class="layui-form-label">菜单图标</label>
			<div class="layui-input-inline">
				<input name="icon" type="hidden" id="icon" value="icon-list" />
				<div id="menu_icon_box">
					<button id="btn_select_icon" type="button" class="layui-btn layui-btn-primary">
						<span id="icon_show" class="icon-list"></span> &nbsp; 选择<span class="downward"></span>
					</button>
					<div id="icon_list">
						<ul>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		
        <div class="layui-form-item">
            <label class="layui-form-label layui-form-required">排序</label>
            <div class="layui-input-block">
                <input name="weigh" placeholder="请输入排序号" type="number" class="layui-input" min="0" max="1000"
                       lay-verType="tips" lay-verify="required|number" required/>
            </div>
        </div>
        <div class="layui-form-item text-right">
            <button class="layui-btn layui-btn-primary" type="button" ew-event="closePageDialog">取消</button>
            <button class="layui-btn" lay-filter="modelSubmitAuth" lay-submit>保存</button>
        </div>
    </form>
</script>
<!-- js部分 -->
<script type="text/javascript" src="/assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="/assets/js/common.js?v=316"></script>

<script>
    layui.use(['layer', 'form', 'admin', 'treeTable', 'util','cascader'], function () {
        var $ = layui.jquery;
        var layer = layui.layer;
        var form = layui.form;
        var admin = layui.admin;
        var treeTable = layui.treeTable;
        var util = layui.util;
        var cascader = layui.cascader;
		
        // 渲染表格
        var insTb = treeTable.render({
            elem: '#tableAuth',
            defaultToolbar: ['filter'],
            tree: {
                iconIndex: 1,  // 折叠图标显示在第几列
                idName: 'id',  // 自定义id字段的名称
                pidName: 'parentid',  // 自定义标识是否还有子节点的字段名称
                isPidData: true  // 是否是pid形式数据
            },
            cellMinWidth: 100,
            cols: [
                {type: 'numbers'},
                {field: 'menu', title: '菜单名称', width: 260},
                {field: 'url', title: '菜单url'},
                {field: 'weigh', title: '排序号', align: 'center', width: 100},
                {
                    title: '类型', templet: function (d) {
                        var strs = [
                            '<span class="layui-badge layui-badge-blue">按钮</span>',
							'<span class="layui-badge layui-badge-green">菜单</span>'
                        ];
                        return strs[d.is_onmenu];
                    }, align: 'center', width: 100
                },
                {
                    templet: function (d) {
                        return util.toDateString(d.createtime);
                    }, title: '创建时间', align: 'center'
                },
                {templet: '#tableBarAuth', title: '操作', align: 'center', width: 160}
            ],
            reqData: function (data, callback) {
                $.get('/admin/system.menu/lists1', function (res) {				
                    callback(res.data);
                });
				

				
            }
        });

		

	
        // 搜索
        $('#btnSearchAuth').click(function () {
            var keyword = $('#edtSearchAuth').val();
            if (keyword) {
                insTb.filterData(keyword);
            } else {
                insTb.clearFilter();
            }
        });

        // 添加按钮点击事件
        $('#btnAddAuth').click(function () {
            showEditModel();
        });

        // 工具条点击事件
        treeTable.on('tool(tableAuth)', function (obj) {
            var data = obj.data;
            var layEvent = obj.event;
            if (layEvent === 'edit') { // 修改			
                showEditModel(data);
            } else if (layEvent === 'del') { // 删除
			console.log(data)
                doDel(data.id, data.menu);
            }
        });

        // 显示表单弹窗
        function showEditModel(mAuth) {
            admin.open({
                type: 1,
                title: (mAuth ? '修改' : '添加') + '菜单',
                content: $('#modelAuth').html(),
                success: function (layero, dIndex) {
                    $(layero).children('.layui-layer-content').css('overflow', 'visible');
                    var url = mAuth ? '/admin/system.menu/edit' : '/admin/system.menu/add';
                    if (mAuth && mAuth.is_onmenu == '1') {
                        $('#modelAuthForm input[name="is_onmenu"][value="1"]').prop("checked", true);
                        $('#modelAuthForm input[name="id"]').prop("value", 1);
                    }	
					
					
					$.ajax({
					    url:"/admin/system.menu/lists1",
					    type:"POST",
					    dataType:"json",
					    success:function(res){
							boards = res.data
							var optionStr = "";
							if(mAuth && mAuth.parentid == 0){
								optionStr = '<option  selected="selected" value="0">---根目录---<option>';
							}else{
								optionStr = '<option  value="0">---根目录---<option>';
							}
							if(mAuth){
								$(boards).each(
									function(index) {
										var boardres = boards[index];
										if(boardres.parentid==0){
											if(boardres.id == mAuth.parentid ){
												optionStr += '<option selected="'+'selected"' +"value='" + boardres.id + "'>"
														+ boardres.menu + "</option>";
											}else{
												optionStr += "<option value='" + boardres.id + "'>"
														+ boardres.menu + "</option>";
											}														
										}else{
											if(boardres.id == mAuth.parentid ){
												optionStr += '<option selected="'+'selected"' +"value='" + boardres.id + "'>"
														+"&nbsp&nbsp丨---"+ boardres.menu + "</option>";
											}else{
												optionStr += "<option value='" + boardres.id + "'>"
														+"&nbsp&nbsp丨---"+ boardres.menu + "</option>";
											}														
										}
								});
								
							}else{
								
								$(boards).each(
									function(index) {
										var boardres = boards[index];
										if(boardres.parentid==0){
											optionStr += "<option value='" + boardres.id + "'>"
													+ boardres.menu + "</option>";														
										}else{
											optionStr += "<option value='" + boardres.id + "'>"
													+"&nbsp&nbsp丨---"+ boardres.menu + "</option>";													
										}
								});
								
								
							}
							$("#boards").append(optionStr);
							form.render();
						}							
							
					 })
					 
                    form.val('modelAuthForm', mAuth);  // 回显数据
                    // 表单提交事件
                    form.on('submit(modelSubmitAuth)', function (data) {
                        // if (data.field.paremtid == '') {
                        //     data.field.paremtid = '-1';
                        // }
						console.log(data)
                        layer.load(2);
                        $.post(url, data.field, function (res) {
                            layer.closeAll('loading');
							console.log(res)
                            if (res.status == 1) {
                                layer.close(dIndex);
                                layer.msg(res.msg, {icon: 1});
                                insTb.refresh();
                            } else {
                                layer.msg(res.msg, {icon: 2});
                            }
                        }, 'json');
                        return false;
                    });
                }
            });
        }

        // 删除
        function doDel(id, menu) {
            layer.confirm('确定要删除“' + menu + '”吗？', {
                skin: 'layui-layer-admin',
                shade: .1
            }, function (index) {
                layer.close(index);
                layer.load(2);
                $.get('/admin/system.menu/del', {
                    id: id
                }, function (res) {
                    layer.closeAll('loading');
                    if (res.status == 1) {
                        layer.msg(res.msg, {icon: 1});
                        insTb.refresh();
                    } else {
                        layer.msg(res.msg, {icon: 2});
                    }
                }, 'json');
            });
        }


		$('#btn_select_icon').click(function(event) {
			alert('aaa');
			// event.stopPropagation();
			$('#icon_list').show();
		});

		$('#icon_list').find('li').click(function(event) {
			  // event.stopPropagation();
			  $('#icon_show').removeClass().addClass($(this).attr('class'));
			  $('#icon').val($(this).attr('class'));
			  $('#icon_list').hide();
			  //alert('aaa');
		});

		$(document).click(
		  function(event){
			  $('#icon_list').hide();
		  }
		);
	
	});
	



</script>
</body>
</html>

<style>
	/*后台系统管理菜单的图标选择弹层样式*/
	#menu_icon_box {position: relative;}
	#icon_list {display:none;position: absolute;left: 0px; background-color: #fff;border: 1px solid #ddd;z-index: 99;width: 800px;height: 240px;overflow: auto;}
	#icon_list ul li{float: left !important;width: 50px; text-align: center;height: 50px;line-height:50px;font-size: 24px;}
	#icon_list ul li:hover {background-color: #f7f7f7;color:#009688;}
</style>

<style type="text/css">
.layui-form-fixed-footer:before {content:''; display: block; height: 76px;}
.layui-form-fixed-footer .layui-form-btn {position: fixed;left: 0;right:0;bottom: 0;background: #fff;padding: 10px 0;border-top: 1px solid #eee;box-shadow: 0px -5px 10px rgba(0,0,0,.05);}
.pc-max-width50 {max-width: 50%;}

@media only screen and (min-width: 320px) and (max-width: 640px){
	.pc-max-width50 {max-width: 100%;}
}
</style>