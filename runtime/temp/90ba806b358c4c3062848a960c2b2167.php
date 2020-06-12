<?php /*a:2:{s:71:"D:\webroot\semclientcmsv3.1\application\admin\view\sem\index\index.html";i:1591088502;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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


<script type="text/javascript" src="/static/plug/ueditor/third-party/jquery-1.10.2.min.js"></script>
<script src="/static/plug/vue/dist/vue.min.js"></script>

<style type="text/css">.layui-form-required:before {font-size: 12px;}</style>

<body>
<!-- 页面加载loading -->
<div class="page-loading">
    <div class="ball-loader">
        <span></span><span></span><span></span><span></span>
    </div>
</div>

<!-- 正文开始 -->
<div class="layui-fluid" id="app">
    <div class="layui-card">
        <div class="layui-card-body">
            <!-- 添加和修改公用的表单 -->
            <form id="categoryEditForm" lay-filter="categoryEditForm" class="layui-form" autocomplete="off">
                <div class="layui-tab layui-tab-brief">
                    <ul class="layui-tab-title">
                        <li class="layui-this">SEO基础配置</li>
                    </ul>
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <div class="layui-form-item" >                                
                                <label class="layui-form-label">标题</label>
                                <div class="layui-inline">
                                    <div class="">
                                        <input type="text" v-model="txt"  id="title" name="title" value=""  class="layui-input" placeholder="请输入首页标题" />
                                        <span> 注：当前长度：{{computedCharLen}}，<button  type="button" class="layui-btn layui-btn-normal" @click="insertDq">插入地区标签</button></span> 
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">关键词</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <textarea  name="keywords"  class="layui-textarea" placeholder="请输入首页关键词"  cols="30" rows="10"><?php echo htmlentities($data['keywords']); ?></textarea>
                                    </div>
                                    <label class="layui-form-label"></label>
                                    <div class="">注：（注：每行一个关键词，支持中、英文逗号自动识别并替换，其它标点符号请勿使用）。</div>                                 
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">描述</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <textarea name="description"class="layui-textarea" placeholder="请输入首页描述"  cols="30" rows="10"><?php echo htmlentities($data['description']); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="layui-form-fixed-footer">
                    <div class="layui-form-btn text-center">
                        <button class="layui-btn" lay-filter="indexConfig" lay-submit>保存</button>
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
    new Vue({
        el: "#app",
        data() {
            return {
                txt: "<?php echo htmlentities($data['title']); ?>"
            }
        },
    
        methods: {
            insertDq(){
                console.log($('#title').val())
                this.txt = '[dq]'+this.txt
                $('#title').val( this.txt);
            },
            methodGetByteLen(str, len) {
                if (this.computedByteLen <= len) {
                    $('#title').val( this.txt);
                    return str
                }
                for (let i = Math.floor(len / 2); i < str.length; i++) {
                    if (str.substr(0, i).replace(/[^\x00-\xff]/g, '01').length >= len) {
                        $('#title').val( this.txt);
                        return str.substr(0, Math.floor(i / 2) * 2) + '...'
                    }
                }
            }
        },
        computed: {
            // 获取字符的个数
            computedCharLen() {
                return this.txt.length
            },
            // 获取字节的个数
            computedByteLen() {
                return this.txt.replace(/[^\x00-\xff]/g, '01').length
            },
            // 控制显示的内容
            computedTxt() {
               
                return this.methodGetByteLen(this.txt, 10)
            }
        }
    })
 
</script>

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
    form.on('submit(indexConfig)', function (data) {
        var loadIndex = layer.load(2);
        $.post('<?php echo url("admin/sem.index/index"); ?>', data.field, function (res) {
            console.log(res);
            layer.close(loadIndex);
            if (res.code == '1') {
                layer.msg(res.msg, {icon: 1,time:1000}, function(){
                });

            } else {
                layer.msg(res.msg, {icon: 2,time:2000});
            }
        }, 'json');
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