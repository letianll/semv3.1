<?php /*a:2:{s:77:"D:\webroot\semclientcmsv3.1\application\admin\view\content\article\index.html";i:1585118845;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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



	<link href="/static/plug/ueditor/themes/default/css/ueditor.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="/static/plug/ueditor/third-party/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/static/plug/ueditor/third-party/template.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="/static/plug/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="/static/plug/ueditor/ueditor.all.js"></script>
	<style>
		/*后台多图异步远程上传接口样式*/
		.layui-upload-priview {width:100%;margin: 10px 0px 0px 0px;}
		.layui-upload-priview .item_img img{ width:100%; height:88px;border-radius: 5px;background-color: #00bcd4;box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.1) inset;}	
		.layui-upload-priview li{position:relative;width:90px;float:left; margin-right:5px;background-color:#f5f5f5;overflow: hidden;}
		.layui-upload-priview li .layui-input { display: initial; }
		.layui-upload-priview li .operate{display: none;}
		.layui-upload-priview li .toleft{opacity: 0.8;font-weight: 300; position:absolute;top:36px;left:0px;background-color: #FFFFFF;color:#ff0000;line-height:21px;height:20px;cursor:pointer;}
		.layui-upload-priview li .toright{opacity: 0.8;font-weight: 300; position:absolute;top:36px;right:0px;background-color: #FFFFFF;color:#ff0000;line-height:21px;height:20px;cursor:pointer;}
		.layui-upload-priview li .close{opacity: 0.8;font-weight: 300;position:absolute;top:0px; right:0px;cursor:pointer;background-color: #FFFFFF;color:#ff0000;line-height:20px;height:20px;width:20px;border-radius:50%;text-align:center;font-size:18px;}
		.layui-upload-priview li:hover .operate{ display: block;}
		.layui-upload-priview:after {display: block;content:'';clear: both;}
		.layui-upload-priview li input.imgalt {width:100%;height: 20px;border:none;border-top:1px solid #ddd;box-sizing: border-box;font-size: 12px;} 
		
/* 		.layui-upload-priview-file {width:100%;}
		.layui-upload-priview-file .item_file {line-height:32px;position:relative;}
		.layui-upload-priview-file li .toleft{ background:#f00;color:#fff;line-height:21px;width:20px;height:20px;cursor:pointer;margin-right:5px;border-radius: 10px;font-size: 14px;display: inline-block;text-align: center;}
		.layui-upload-priview-file li .toright{ background:#f00;color:#fff;line-height:21px;width:20px;height:20px;cursor:pointer;margin-right:5px;border-radius: 10px;font-size: 14px;display: inline-block;text-align: center;}
		.layui-upload-priview-file li .close{cursor:pointer;background:#f00;color:#fff;line-height:20px;height:20px;width:20px;border-radius:50%;text-align:center;font-size:16px; margin-right: 5px;display: inline-block;}
		.layui-upload-priview-file:after {display: block;content:'';clear: both;}
		.layui-upload-priview-file li input.imgalt {height: 20px;border:1px solid #ddd;box-sizing: border-box;font-size: 12px;} */
	</style>
	<body>
		
		<div class="layui-fluid">
		    <div class="layui-card">
		        <div class="layui-card-body">
		            <!-- 添加和修改公用的表单 -->
		            <form id="categoryEditForm" lay-filter="categoryEditForm" class="layui-form" autocomplete="off">
		               
						<div class="layui-form-item">
							<div class="layui-block">
								<label class="layui-form-label">产品主图：</label>
								<div class="layui-input-block pc-max-width50">
								   <div class="pic-more">
									<ul id="" class="layui-upload-priview upload-file-list image_images">
									</ul>
								   </div>
								   <button type="button" class="layui-btn pull-left upload_images" >选择多图</button>
								</div>
							</div>
						</div>		
													
						<div class="layui-form-item">
							<div class="layui-block">
								<label class="layui-form-label">其他图：</label>
								<div class="layui-input-block pc-max-width50">
								   <div class="pic-more">
									<ul id="" class="layui-upload-priview upload-file-list image_image">
									</ul>
								   </div>
								   <button type="button" class="layui-btn pull-left upload_image" >选择多图</button>
								</div>
							</div>
						</div>
						
						<div class="layui-form-item">
							<div class="layui-block">										
								<label class="layui-form-label">文章内容：</label>
								<div class="layui-input-block pc-max-width80">
								   <textarea type="text/plain" id="myEditor" style="width:100%;"></textarea>
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

	</body>

<!-- js部分 -->
<script type="text/javascript" src="/assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="/assets/js/common.js?v=316"></script>

<script>
	function showImages(res){
		let resImages={}
		imgaes = resImages.data
		if(imgaes.length>0){
			html=''
			for(var ii=0;ii<imgaes.length;ii++){
				html+='<li class="item_img"><div class="operate"><i class="toleft layui-icon layui-icon-left" title="左移"></i><i class="toright layui-icon layui-icon-right" title="右移"></i><i class="close layui-icon layui-icon-delete" title="删除"></i></div><img src="' + imgaes[ii].src + '" class="img"><input type="hidden" name="img_thumb[]" value="' + imgaes[ii].src + '" /><input type="hidden" name="img_src[]" value="' + imgaes[ii].src + '" /></li>'
			}
			$('#layui-upload-priview').append(html);
		}
	}
	
	$("#btn-layui-upload").click(function(){
		showImages()
	})
	//点击多图上传的X,删除当前的图片    
	$("body").on("click",".close",function(){
		$(this).closest("li").remove();
	});
	//多图上传点击<>左右移动图片
	$("body").on("click",".upload-file-list li .toleft",function(){
		var li_index=$(this).closest("li").index();
		if(li_index>=1){
			$(this).closest("li").insertBefore($(this).closest("ul").find("li").eq(Number(li_index)-1));
		}
	});
	$("body").on("click",".upload-file-list li .toright",function(){
		var li_index=$(this).closest("li").index();
		$(this).closest("li").insertAfter($(this).closest("ul").find("li").eq(Number(li_index)+1));
	});

</script>

<script>
	var editor ;
layui.use(['layer', 'form', 'admin', 'treeTable', 'util','cascader'], function () {
	var $ = layui.jquery;
	var layer = layui.layer;
	var form = layui.form;
	var admin = layui.admin;
	var treeTable = layui.treeTable;
	var util = layui.util;


	editor = UE.getEditor('myEditor', {
		toolbars : [
			 ['fullscreen', 'source', 'undo', 'redo'],
				['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|', ,'insertframe','link','|','seoimage']
		],
			autoHeightEnabled: true,
			autoFloatEnabled: true
	});


/**
 * 上传图片
 * */
$('.upload_image').on('click',function (e) {
	createFrame('选择图片','/admin/content.article/image?fodder=image');
})

/**
 * 上传图片
 * */
$('.upload_images').on('click',function (e) {
	createFrame('选择图片','/admin/content.article/image?fodder=images');
})

function getContent() {
	return (editor.getEditor('myEditor').getContent());
}
function hasContent() {
	return (editor.getEditor('myEditor').hasContents());
}
function createFrame(title,src,opt){
	opt === undefined && (opt = {});
	return layer.open({
		type: 2,
		title:title,
		area: [(opt.w || 800)+'px', (opt.h || 550)+'px'],
		fixed: false, //不固定
		maxmin: true,
		moveOut:false,//true  可以拖出窗外  false 只能在窗内拖
		anim:5,//出场动画 isOutAnim bool 关闭动画
		offset:'auto',//['100px','100px'],//'auto',//初始位置  ['100px','100px'] t[ 上 左]
		shade:0,//遮罩
		resize:true,//是否允许拉伸
		content: src,//内容
		move:'.layui-layer-title'
	});
}


	
	});
	
//选择图片插入到编辑器中
function insertEditor(list){
	console.log(list);
	editor.execCommand('insertimage', list);
}


	//选择图片
	function changeIMG(index,pic){	
		console.log(index,pic)
		var images=pic
		var maxNum = 5;
		var currNum = $('.image_'+index).children().length;		
		if(currNum>=maxNum){
			return layer.msg('最多只能使用 '+ maxNum +' 张');
		}
		if(currNum<maxNum){
			canInserNum = maxNum-currNum
			canInserNum = images.length<=canInserNum?images.length:canInserNum
		}			
			console.log(canInserNum)
		if(canInserNum>0){
			html=''
			for(var ii=0;ii<(canInserNum);ii++){
				html+='<li class="item_img"><div class="operate"><i class="toleft layui-icon layui-icon-left" title="左移"></i><i class="toright layui-icon layui-icon-right" title="右移"></i><i class="close layui-icon layui-icon-delete" title="删除"></i></div><img src="' + images[ii] + '" class="img"><input type="hidden" name="'+index+'[]" value="' + images[ii] + '" /></li>'
			}
			$('.image_'+index).append(html);				
		}else{
			 return layer.msg('最多只能使用 '+ maxNum +' 张');
		}
	}
</script>

<script>
	


            /**
             * 编辑器上传图片
             * */
//             $('#edui-for-simpleupload').on('click',function (e) {
// //                $('.upload').trigger('click');
// console.log('2222222222222222')
//                 createFrame('选择图片','<?php echo Url('widget.images/index'); ?>?fodder=image');
//             })
			
			//  editor.execCommand( 'seoimage', createFrame('选择图片','<?php echo Url('widget.images/index'); ?>?fodder=image'));
			 
			// function createFrame(title,src,opt){
			// 	opt === undefined && (opt = {});
			// 	return layer.open({
			// 		type: 2,
			// 		title:title,
			// 		area: [(opt.w || 800)+'px', (opt.h || 550)+'px'],
			// 		fixed: false, //不固定
			// 		maxmin: true,
			// 		moveOut:false,//true  可以拖出窗外  false 只能在窗内拖
			// 		anim:5,//出场动画 isOutAnim bool 关闭动画
			// 		offset:'auto',//['100px','100px'],//'auto',//初始位置  ['100px','100px'] t[ 上 左]
			// 		shade:0,//遮罩
			// 		resize:true,//是否允许拉伸
			// 		content: src,//内容
			// 		move:'.layui-layer-title'
			// 	});
			// }


	// editor.registerUI('selectimgs',function(name){
	// 		var me = this;
	// 		var $btn = $.eduibutton({
	// 			icon : 'image',
	// 			click : function(){
	// 				createFrame('选择图片','/admin/content.article/image?fodder=editor');
	// 			},
	// 			title: '选择图片'
	// 		});

	// 		this.addListener('selectionchange',function(){
	// 			//切换为不可编辑时，把自己变灰
	// 			var state = this.queryCommandState(name);
	// 			$btn.edui().disabled(state == -1).active(state == 1)
	// 		});
	// 		return $btn;

	// });
	// //实例化编辑器
	// var um = UM.getEditor('myEditor');
	// /**
	// * 获取编辑器内的内容
	// * */
	// function getContent() {
	// 	return (UM.getEditor('myEditor').getContent());
	// }
	// function hasContent() {
	// 	return (UM.getEditor('myEditor').hasContents());
	// }
	// function createFrame(title,src,opt){
	// 	opt === undefined && (opt = {});
	// 	return layer.open({
	// 		type: 2,
	// 		title:title,
	// 		area: [(opt.w || 800)+'px', (opt.h || 550)+'px'],
	// 		fixed: false, //不固定
	// 		maxmin: true,
	// 		moveOut:false,//true  可以拖出窗外  false 只能在窗内拖
	// 		anim:5,//出场动画 isOutAnim bool 关闭动画
	// 		offset:'auto',//['100px','100px'],//'auto',//初始位置  ['100px','100px'] t[ 上 左]
	// 		shade:0,//遮罩
	// 		resize:true,//是否允许拉伸
	// 		content: src,//内容
	// 		move:'.layui-layer-title'
	// 	});
	// }
	// //选择图片
	// function changeIMG1(index,pic){
	// 	$(".image_img").css('background-image',"url("+pic+")");
	// 	$(".active").css('background-image',"url("+pic+")");
	// 	$('#image_input').val(pic);
	// }
	// function changeIMG(index,pic){	
	// 	console.log(index,pic)
	// 	var images=pic
	// 	var maxNum = 5;
	// 	var currNum = $('.image_'+index).children().length;		
	// 	if(currNum>=maxNum){
	// 		return layer.msg('最多只能使用 '+ maxNum +' 张');
	// 	}
	// 	if(currNum<maxNum){
	// 		canInserNum = maxNum-currNum
	// 		canInserNum = images.length<=canInserNum?images.length:canInserNum
	// 	}			
	// 		console.log(canInserNum)
	// 	if(canInserNum>0){
	// 		html=''
	// 		for(var ii=0;ii<(canInserNum);ii++){
	// 			html+='<li class="item_img"><div class="operate"><i class="toleft layui-icon layui-icon-left" title="左移"></i><i class="toright layui-icon layui-icon-right" title="右移"></i><i class="close layui-icon layui-icon-delete" title="删除"></i></div><img src="' + images[ii] + '" class="img"><input type="hidden" name="'+index+'[]" value="' + images[ii] + '" /></li>'
	// 		}
	// 		$('.image_'+index).append(html);				
	// 	}else{
	// 		 return layer.msg('最多只能使用 '+ maxNum +' 张');
	// 	}
	// }
	// //选择图片插入到编辑器中
	// function insertEditor(list){
	// 	console.log(list);
	// 	um.execCommand('insertimage', list);
	// }
	// /**
	//  * 上传图片
	//  * */
	// $('.upload_images').on('click',function (e) {
	// 	createFrame('选择图片','/admin/content.article/image?fodder=images');
	// })

	// /**
	//  * 上传图片
	//  * */
	// $('.upload_image').on('click',function (e) {
	// 	createFrame('选择图片','/admin/content.article/image?fodder=image');
	// })
	
	// /**
	//  * 编辑器上传图片
	//  * */
	// $('.edui-icon-image').on('click',function (e) {
	// //                $('.upload').trigger('click');
	// 	createFrame('选择图片','/admin/content.article/image?fodder=image');
	// })



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