<?php /*a:2:{s:70:"D:\webroot\semclientcmsv3.1\application\admin\view\sem\base\index.html";i:1591681920;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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
                        <li class="layui-this">SEO基础配置</li>
                        <li>404及重定向配置</li>
                        <li>收录推送配置</li>
                    </ul>
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">robots文件</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <textarea name="base_robots" id="btn_do_robots_ajax" class="layui-textarea" cols="30" rows="10"><?php echo htmlentities($config['baseConfig']['base_robots']); ?></textarea>
                                    </div>
                                    <label class="layui-form-label"></label>
                                    <div class="">注：你可以通过修改robots文件的配置来开放/禁用搜索引擎蜘蛛抓取本站指定目录或文件。</div>
                                    <label class="layui-form-label"></label>
                                    <button  type="button" class="layui-btn layui-btn-normal btn_do_robots_ajax" lay-filter="formSearch" lay-submit>重新生成 robots</button>
                                    浏览：<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/robots.txt" style="color: #1E9FFF;">http://<?php echo $_SERVER['HTTP_HOST']; ?>/robots.txt</a>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">生成Sitemap</label>
                                    <button  type="button" class="layui-btn layui-btn-normal btn_do_sitemap_ajax">生成 Sitemap.xml</button>
                                    浏览：<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/sitemap.xml" style="color: #1E9FFF;">http://<?php echo $_SERVER['HTTP_HOST']; ?>/sitemap.xml</a>
                                </div>
                            </div>
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-form-item">                       
                                <div class="layui-inline">
                                    <label class="layui-form-label">开启404</label>
                                    <div class="layui-input-inline">
                                        <input  type="checkbox" <?php if($config['redirectConfig']['redirect_on'] == '1'): ?>checked<?php endif; ?> name="redirect_on"  lay-skin="primary">
                                    </div>
                                </div>
                            </div> 
                            <div id="redirectDiv">
                                <?php if($config['redirectConfig']['redirect_config'] != ''): ?>
                                    <div class="layui-form-item redirectDiv" >                                
                                        <label class="layui-form-label">重定向</label>
                                        <div class="layui-inline" style="width: 300px;">
                                            <div class="layui-input-inline">
                                                <input type="text" name="redirect_from_url[]" value="" style="width: 300px;"  class="layui-input" placeholder="源地址" />
                                            </div>
                                        </div>
                                        <div class="layui-inline" style="width: 100px;">
                                            <select name="redirect_type[]" class="layui-select" >
                                                <option >302</option>  
                                                <option >301</option>  
                                            </select>
                                        </div>
                                        <div class="layui-inline" style="width: 300px;">
                                            <div class="layui-input-inline">
                                                <input type="text" name="redirect_to_url[]" value="" style="width: 300px;"  class="layui-input" placeholder="目标地址" />
                                            </div>
                                        </div>
                                        <button type="button" class="layui-btn btn-add" ><i class="layui-icon">&#xe624;</i></button>
                                        <button type="button" class="layui-btn btn-dec" ><i class="layui-icon">&#xe67e;</i></button>                              
                                    </div>
                                <?php else: if(is_array($config['redirectConfig']['redirect_config']) || $config['redirectConfig']['redirect_config'] instanceof \think\Collection || $config['redirectConfig']['redirect_config'] instanceof \think\Paginator): if( count($config['redirectConfig']['redirect_config'])==0 ) : echo "" ;else: foreach($config['redirectConfig']['redirect_config'] as $key=>$data): ?>
                                        <div class="layui-form-item redirectDiv" >                                
                                            <label class="layui-form-label">重定向</label>
                                            <div class="layui-inline" style="width: 300px;">
                                                <div class="layui-input-inline">
                                                    <input type="text" ame="redirect_from_url" value="" style="width: 300px;"  class="layui-input" placeholder="源地址" />
                                                </div>
                                            </div>
                                            <div class="layui-inline" style="width: 100px;">
                                                <select name="redirect_type" class="layui-select" >
                                                    <option >302</option>  
                                                    <option >301</option>  
                                                </select>
                                            </div>
                                            <div class="layui-inline" style="width: 300px;">
                                                <div class="layui-input-inline">
                                                    <input type="text" name="redirect_to_url" value="" style="width: 300px;"  class="layui-input" placeholder="目标地址" />
                                                </div>
                                            </div>
                                            <button type="button" class="layui-btn btn-add" ><i class="layui-icon">&#xe624;</i></button>
                                            <button type="button" class="layui-btn btn-dec" ><i class="layui-icon">&#xe67e;</i></button>                              
                                        </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </div>  
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">开启推送</label>
                                    <div class="">
                                        <input  type="checkbox" name="push_on" lay-filter="changeWaterOn"   lay-skin="primary">                                                
                                        <span> 注：目前仅百度、360平台支持主动推送，开启后当用户访问页面时将会自动推送，请填写自动推送代码。</span> 
                                    </div>   
                
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">百度推送代码</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <textarea name="push_baidu" class="layui-textarea" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">360推送代码</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <textarea name="push_360" class="layui-textarea" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">百度API推送</label>
                                    <div class="">
                                        <input  type="checkbox" name="push_baidu_api" lay-filter="changeWaterOn"   lay-skin="primary">                                                
                                        <span> 目前仅百度平台提供API推送，开启后管理员可实时推送，请确保以下API参数正确。</span> 
                                    </div>  
                                </div>
                            </div>
                            <div class="layui-form-item">                       
                                <div class="layui-inline">
                                    <label class="layui-form-label"></label>
                                    <div class="layui-input-inline">
                                        <input  type="input" name="push_baidu_site" lay-filter="changeWaterOn" placeholder="API site"   class="layui-input">
                                    </div>
                                    <div class="layui-input-inline">
                                        <input  type="input" name="push_baidu_token" lay-filter="changeWaterOn" placeholder="API token"  class="layui-input">
                                    </div>
                                    <button  type="button" class="layui-btn layui-btn-normal btn_do_image_ajax">立即推送</button><span> 【设置若有更新，先点击下方保存按钮】</span>
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


    // 搜索
    form.on('submit(formSearch)', function (data) {
        var loadIndex = layer.load(2);
        var data = $("#btn_do_robots_ajax").val();
        $.post('<?php echo url("admin/sem.base/doRobotsAjax"); ?>', {'data':data}, function (res) {
            console.log(res);
            layer.close(loadIndex);
            if (res.status == '1') {
                layer.msg(res.msg, {icon: 1,time:1000}, function(){
                });

            } else {
                layer.msg(res.msg, {icon: 2,time:2000});
            }
        }, 'json');
        return false;
    });

    // 表单提交事件
    form.on('submit(categoryEditSubmit)', function (data) {
        var loadIndex = layer.load(2);
        $.post('<?php echo url("admin/sem.base/index"); ?>', data.field, function (res) {
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

    var str = ''
        str += '<div class="layui-form-item redirectDiv" >'                            
            str += '<label class="layui-form-label">重定向</label>'
            str += '<div class="layui-inline" style="width: 300px;">'
                str += '<div class="layui-input-inline">'
                    str += '<input type="text" name="redirect_from_url[]" value="" style="width: 300px;"  class="layui-input" placeholder="源地址" />'
                str += '</div>'
            str += '</div>'
            str += '<div class="layui-inline" style="width: 100px;">'
                str += '<select name="redirect_type[]"  class="layui-select" >'
                    str += '<option >302</option>'
                    str += '<option >301</option>'
                str += '</select>'
            str += '</div>'
            str += '<div class="layui-inline" style="width: 300px;">'
                str += '<div class="layui-input-inline">'
                    str += '<input type="text" name="redirect_to_url[]" value="" style="width: 300px;"  class="layui-input" placeholder="目标地址" />'
                str += '</div>'
            str += '</div>'
            str += '<button type="button" class="layui-btn btn-add" ><i class="layui-icon">&#xe624;</i></button>'
            str += '<button type="button" class="layui-btn btn-dec" ><i class="layui-icon">&#xe67e;</i></button> '                             
        str += '</div>'        
    $(document).on("click",".btn-add",function(){
        $("#redirectDiv").append(str)
        form.render();
    })
    $(document).on("click",".btn-dec",function(){
        var num =  $("#redirectDiv").children().length;
        if(num>1){
            this.closest('.redirectDiv').remove() 
        } 
        form.render();
    })    

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