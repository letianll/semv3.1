<?php /*a:2:{s:75:"D:\webroot\semclientcmsv3.1\application\admin\view\system\config\index.html";i:1587546041;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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
<link href="/static/plug/ueditor/themes/default/css/ueditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/static/plug/ueditor/third-party/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/static/plug/ueditor/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/plug/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/plug/ueditor/ueditor.all.js"></script>
<script src="/static/plug/vue/dist/vue.min.js"></script>
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

    .square{
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 100%; /* padding百分比是相对父元素宽度计算的 */
  margin-bottom: 30px;
}
.square-inner{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%; /* 铺满父元素容器，这时候宽高就始终相等了 */
}
.grid{
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* 相当于 1fr 1fr 1fr */
  grid-template-rows: repeat(3, 1fr); /* fr单位可以将容器分为几等份 */
  grid-gap: 1%; /* grid-column-gap 和 grid-row-gap的简写 */
  grid-auto-flow: row;
  
}
.grid>div{
  color: #595959;
  font-size: 20px;
  cursor: pointer;
  line-height: 3;
  text-align: center;
  /* background: linear-gradient(to bottom, #f5f6f6 0%,#dbdce2 21%,#b8bac6 49%,#dddfe3 80%,#f5f6f6 100%); */
  background-color:#ffffff ;
  border: 1px solid #E1E1E1;
}
.blue{background-color: #1E9FFF!important;}
</style>
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
            <form id="config_form"  class="layui-form" autocomplete="off">
                <div class="layui-tab layui-tab-brief" id="app">
                    <ul class="layui-tab-title">
                        <li class="layui-this">基本信息</li>
                        <li>高级设置</li>
                        <li>META及第三方代码</li>
                        <li>水印设置</li>
                    </ul>
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <fieldset class="layui-elem-field">
                                <legend>企业基本信息</legend>
                                <div class="layui-form-item">                               
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">公司名称</label>
                                        <div class="layui-input-inline">
                                            <input type="text" value="<?php echo htmlentities($config['baseConfig']['base_comname']); ?>" name="base_comname" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">网站联系人</label>
                                        <div class="layui-input-inline">
                                            <input type="text"  value="<?php echo htmlentities($config['baseConfig']['base_contact']); ?>" name="base_contact" class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">                               
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">电话</label>
                                        <div class="layui-input-inline">
                                            <input type="text"  value="<?php echo htmlentities($config['baseConfig']['base_tel']); ?>" name="base_tel" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">传真</label>
                                        <div class="layui-input-inline">
                                            <input type="text" value="<?php echo htmlentities($config['baseConfig']['base_fax']); ?>" name="base_fax"  class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">手机</label>
                                        <div class="layui-input-inline">
                                            <input type="text" value="<?php echo htmlentities($config['baseConfig']['base_mobile']); ?>" name="base_mobile" class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">                               
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">QQ</label>
                                        <div class="layui-input-inline">
                                            <input type="text" value="<?php echo htmlentities($config['baseConfig']['base_qq']); ?>" name="base_qq" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">Email</label>
                                        <div class="layui-input-inline">
                                            <input type="text" value="<?php echo htmlentities($config['baseConfig']['base_email']); ?>" name="base_email" class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">邮政编码</label>
                                        <div class="layui-input-inline">
                                            <input type="text" value="<?php echo htmlentities($config['baseConfig']['base_postcode']); ?>" name="base_postcode" class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                </div> 
                                <div class="layui-form-item">
                                    <div class="layui-inline" style="width: 1200px;">
                                        <label class="layui-form-label layui-form-required">公司地址</label>
                                        <div class="layui-inline">
                                            <select name="base_provice" class="layui-select" lay-ignore>
                                            </select>
                                            <select name="base_city" class="layui-select" lay-ignore>
                                            </select>
                                            <select name="base_area" class="layui-select" lay-ignore>
                                            </select>
                                        </div>
                                        <div class="layui-inline">
                                            <input type="text" value="<?php echo htmlentities($config['baseConfig']['base_address']); ?>" name="base_address" style="width: 300px;" class="layui-input" placeholder="联系地址">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="layui-elem-field">
                                <legend>网站顶部设置</legend>
                                <div class="layui-form-item">
                                    <div class="layui-block">
                                        <label class="layui-form-label">Logo</label>
                                        <div class="layui-input-block pc-max-width50">
                                           <div class="pic-more">
                                            <ul id="" class="layui-upload-priview upload-file-list image_top_logo_url">
                                                <?php if($config['topConfig']['top_logo_url'] != ''): ?>
                                                <li class="item_img">
                                                    <div class="operate">
                                                        <i class="toleft layui-icon layui-icon-left" title="左移"></i>
                                                        <i class="toright layui-icon layui-icon-right" title="右移"></i>
                                                        <i class="close layui-icon layui-icon-delete" title="删除"></i>
                                                    </div>
                                                    <img src="<?php echo htmlentities($config['topConfig']['top_logo_url']); ?>" class="img">
                                                    <input type="hidden" name="top_logo_url" value="<?php echo htmlentities($config['topConfig']['top_logo_url']); ?>" />
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                           </div>
                                           <button type="button" class="layui-btn pull-left upload_top_logo_url" >选择图片</button>
                                        </div>
                                    </div>
                                </div>	
                                <div class="layui-form-item">
                                    <div class="layui-block">
                                        <label class="layui-form-label">Ico</label>
                                        <div class="layui-input-block pc-max-width50">
                                           <div class="pic-more">
                                            <ul id="" class="layui-upload-priview upload-file-list image_top_ico_url">
                                                <?php if($config['topConfig']['top_ico_url'] != ''): ?>
                                                <li class="item_img">
                                                    <div class="operate">
                                                        <i class="toleft layui-icon layui-icon-left" title="左移"></i>
                                                        <i class="toright layui-icon layui-icon-right" title="右移"></i>
                                                        <i class="close layui-icon layui-icon-delete" title="删除"></i>
                                                    </div>
                                                    <img src="<?php echo htmlentities($config['topConfig']['top_ico_url']); ?>" class="img">
                                                    <input type="hidden" name="top_ico_url" value="<?php echo htmlentities($config['topConfig']['top_ico_url']); ?>" />
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                           </div>
                                           <button type="button" class="layui-btn pull-left upload_top_ico_url" >选择图片</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-block">
                                        <label class="layui-form-label">二维码</label>
                                        <div class="layui-input-block pc-max-width50">
                                           <div class="pic-more">
                                            <ul id="" class="layui-upload-priview upload-file-list image_top_qrcode_url">
                                                <?php if($config['topConfig']['top_qrcode_url'] != ''): ?>
                                                <li class="item_img">
                                                    <div class="operate">
                                                        <i class="toleft layui-icon layui-icon-left" title="左移"></i>
                                                        <i class="toright layui-icon layui-icon-right" title="右移"></i>
                                                        <i class="close layui-icon layui-icon-delete" title="删除"></i>
                                                    </div>
                                                    <img src="<?php echo htmlentities($config['topConfig']['top_qrcode_url']); ?>" class="img">
                                                    <input type="hidden" name="top_qrcode_url" value="<?php echo htmlentities($config['topConfig']['top_qrcode_url']); ?>" />
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                           </div>
                                           <button type="button" class="layui-btn pull-left upload_top_qrcode_url" >选择图片</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">                               
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">网站域名</label>
                                        <div class="layui-input-inline">
                                            <input type="text"  value="<?php echo htmlentities($config['topConfig']['top_domain']); ?>" name="top_domain" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">宣传语</label>
                                        <div class="layui-input-inline">
                                            <input type="text"  value="<?php echo htmlentities($config['topConfig']['top_slogan']); ?>" name="top_slogan" name="urlname" class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">营销电话</label>
                                        <div class="layui-input-inline">
                                            <input type="text"  value="<?php echo htmlentities($config['topConfig']['top_saletel']); ?>" name="top_saletel" name="urlname" class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="layui-elem-field">
                                <legend>网站底部设置</legend>
                                <div class="layui-form-item">
                                    <div class="layui-block">
                                        <label class="layui-form-label">营业执照</label>
                                        <div class="layui-input-block pc-max-width50">
                                           <div class="pic-more">
                                            <ul id="" class="layui-upload-priview upload-file-list image_bot_license_url">
                                                <?php if($config['botConfig']['bot_license_url'] != ''): ?>
                                                <li class="item_img">
                                                    <div class="operate">
                                                        <i class="toleft layui-icon layui-icon-left" title="左移"></i>
                                                        <i class="toright layui-icon layui-icon-right" title="右移"></i>
                                                        <i class="close layui-icon layui-icon-delete" title="删除"></i>
                                                    </div>
                                                    <img src="<?php echo htmlentities($config['botConfig']['bot_license_url']); ?>" class="img">
                                                    <input type="hidden" name="bot_license_url" value="<?php echo htmlentities($config['botConfig']['bot_license_url']); ?>" />
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                           </div>
                                           <button type="button" class="layui-btn pull-left upload_bot_license_url" >选择图片</button>
                                        </div>
                                    </div>
                                </div>	
                                <div class="layui-form-item">                               
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">技术支持</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="bot_support" value="<?php echo htmlentities($config['botConfig']['bot_support']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">链接url</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="bot_support_url" value="<?php echo htmlentities($config['botConfig']['bot_support_url']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">                               
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">ICP备案</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="bot_icp" value="<?php echo htmlentities($config['botConfig']['bot_icp']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">链接url</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="bot_icp_url" value="<?php echo htmlentities($config['botConfig']['bot_icp_url']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item">                               
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">公安备案</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="bot_police" value="<?php echo htmlentities($config['botConfig']['bot_police']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">链接url</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="bot_police_url" value="<?php echo htmlentities($config['botConfig']['bot_police_url']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required" >
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item ">   
                                    <button type="button" class="layui-btn layui-btn-normal layui-col-xs12 insert_editor" >一键生成到版权信息</button> 
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-block">										
                                        <label class="layui-form-label">版权信息</label>
                                        <div class="layui-input-block pc-max-width80">
                                           <textarea type="text/plain" id="myEditor" name="bot_copyrights" style="width:100%;"><?php echo htmlentities($config['botConfig']['bot_copyrights']); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">留言短信</label>
                                    <div class="layui-input-inline">
                                        <input  type="checkbox" name="plus_msg_on" value="1"  <?php if($config['plusConfig']['plus_msg_on'] == 1): ?>checked<?php endif; ?> lay-skin="primary">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label">应聘短信</label>
                                    <div class="layui-input-inline">
                                        <input  type="checkbox" name="plus_jobmsg_on" <?php if($config['plusConfig']['plus_jobmsg_on'] == 1): ?>checked<?php endif; ?> lay-skin="primary">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label">接收号码</label>
                                    <div class="layui-input-inline ">
                                        <input type="text" name="plus_receive_phone" value="<?php echo htmlentities($config['plusConfig']['plus_receive_phone']); ?>" style="width:400px" class="layui-input" placeholder="前台留言、应聘提交信息将短信发送到该手机号" />
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">代码防复制</label>
                                    <div class="layui-input-inline">
                                        <input  type="checkbox"  name="plus_copy_on"  <?php if($config['plusConfig']['plus_copy_on'] == 1): ?>checked<?php endif; ?> lay-skin="primary">
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <label class="layui-form-label">留言框启用</label>
                                    <div class="layui-input-inline">
                                        <input type="radio" name="plus_message_on" value="1" <?php if($config['plusConfig']['plus_message_on'] == 1): ?>checked<?php endif; ?> title="开启">
                                        <input type="radio" name="plus_message_on" value="0" <?php if($config['plusConfig']['plus_message_on'] == 0): ?>checked<?php endif; ?> title="关闭">
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-inline" style="width: 500px;">
                                    <label class="layui-form-label">一键导航</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="plus_gps" value="<?php echo htmlentities($config['plusConfig']['plus_gps']); ?>" style="width: 400px;"  class="layui-input" placeholder="手机端一键导航，请填写第三方电子地图url地址" />
                                    </div>
                                </div>
                                <div class="layui-inline" style="width: 500px;">
                                    <label class="layui-form-label">手机端拨号</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="plus_phone_number" value="<?php echo htmlentities($config['plusConfig']['plus_phone_number']); ?>" style="width: 400px;"  class="layui-input" placeholder="手机端一键拨号号码" />
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">                                
                                <div class="layui-inline"  style="width: 1500px;">
                                    <label class="layui-form-label">标题分隔符</label>
                                    <div class="layui-input-inline" style="width: 1200px;">
                                        <input type="radio" name="plus_fgf" value="_" <?php if($config['plusConfig']['plus_fgf'] == '_'): ?>checked<?php endif; ?> title="下划线 _" value="_" >
                                        <input type="radio" name="plus_fgf" value="-" <?php if($config['plusConfig']['plus_fgf'] == '-'): ?>checked<?php endif; ?> title="中短线 -" value="-">
                                        <input type="radio" name="plus_fgf" value="|" <?php if($config['plusConfig']['plus_fgf'] == '|'): ?>checked<?php endif; ?> title="竖线 |"  value="|">
                                        <input type="radio" name="plus_fgf" value="," <?php if($config['plusConfig']['plus_fgf'] == ','): ?>checked<?php endif; ?> title="逗号 ," value=",">
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">                                
                                <div class="layui-inline">
                                    <label class="layui-form-label">数据分页</label>
                                    <div class="layui-input-inline" style="width:100px;">
                                        <input type="number" value="<?php echo htmlentities($config['plusConfig']['plus_article_page']); ?>" name="plus_article_page" class="layui-input" style="width:90px;" placeholder="文章每页"/>
                                    </div>
                                </div>
                                <div class="layui-inline">                                   
                                    <div class="layui-input-inline" style="width:100px;">
                                        <input type="number" value="<?php echo htmlentities($config['plusConfig']['plus_product_page']); ?>" name="plus_product_page" class="layui-input" style="width:90px;" placeholder="文章每页"/>
                                    </div>
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-input-inline" style="width:100px;">
                                        <input type="number" value="<?php echo htmlentities($config['plusConfig']['plus_gallery_page']); ?>" name="plus_gallery_page" class="layui-input" style="width:90px;" placeholder="文章每页"/>
                                    </div>
                                </div>
                                <div class="layui-inline">                                   
                                    <div class="layui-input-inline" style="width:100px;">
                                        <input type="number" value="<?php echo htmlentities($config['plusConfig']['plus_job_page']); ?>" name="plus_job_page" class="layui-input" style="width:90px;" placeholder="文章每页"/>
                                    </div>
                                </div>
                                <div class="layui-inline">                                   
                                    <div class="layui-input-inline" style="width:100px;">
                                        <input type="number" value="<?php echo htmlentities($config['plusConfig']['plus_downloads_page']); ?>" name="plus_downloads_page" class="layui-input" style="width:90px;" placeholder="文章每页"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-tab-item">                           
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">头部Meta</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <textarea name="meta_meta" class="layui-textarea" style="width: 100%;" cows="10"><?php echo htmlentities($config['metaConfig']['meta_meta']); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-block">
                                    <label class="layui-form-label">第三方代码</label>
                                    <div class="layui-input-block pc-max-width50">
                                        <textarea name="meta_js" class="layui-textarea" style="width: 100%;" cows="10"><?php echo htmlentities($config['metaConfig']['meta_js']); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="layui-tab-item"> 
                        <fieldset class="layui-elem-field">
                            <legend>水印设置</legend>
                            <div class="layui-form-item">                       
                                <div class="layui-inline">
                                    <label class="layui-form-label">水印开启</label>
                                    <div class="layui-input-inline">
                                        <input  type="checkbox" name="water_is_on" lay-filter="changeWaterOn"  <?php if($config['waterConfig']['water_is_on'] == 1): ?>checked<?php endif; ?>  lay-skin="primary">
                                    </div>
                                </div>
                            </div> 
                            <div id="showAllWater"  style="display: <?php if($config['waterConfig']['water_is_on'] == 1): else: ?> none<?php endif; ?>;">
                            <div class="layui-form-item" > 
                                <div class="layui-inline">
                                    <label class="layui-form-label layui-form-required">水印位置</label>
                                    <div class="layui-input-inline">     
                                        <input type="hidden" name="water_position" value="<?php echo htmlentities($config['waterConfig']['water_position']); ?>">                           
                                        <div class="square" >
                                            <div class="square-inner grid">
                                              <div @click="getDire" data-dir="0" :class="{'blue':direValue=='0'}">上左</div>
                                              <div @click="getDire" data-dir="2" :class="{'blue':direValue=='2'}">上中</div>
                                              <div @click="getDire" data-dir="3" :class="{'blue':direValue=='3'}">上右</div>
                                              <div @click="getDire" data-dir="4" :class="{'blue':direValue=='4'}">中左</div>
                                              <div @click="getDire" data-dir="5" :class="{'blue':direValue=='5'}">中间</div>
                                              <div @click="getDire" data-dir="6" :class="{'blue':direValue=='6'}">中右</div>
                                              <div @click="getDire" data-dir="7" :class="{'blue':direValue=='7'}">下左</div>
                                              <div @click="getDire" data-dir="8" :class="{'blue':direValue=='8'}">下中</div>
                                              <div @click="getDire" data-dir="9" :class="{'blue':direValue=='9'}">下右</div>
                                            </div>
                                        </div>                                          
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item"> 
                                <div class="layui-inline">
                                    <label class="layui-form-label layui-form-required">水印选项</label>
                                    <input type="hidden"  name="water_type" value="" >
                                    <div class="layui-input-inline">
                                        <select class="layui-select" id="water_type"  v-model="waterTypeActive"   lay-filter="changeWaterTypeList" >
                                            <option  v-for="(item,index) in waterTypeList" :key="index" :value='item.id'>{{item.name}}</option>  
                                        </select>
                                    </div>
                                </div>
                            </div>      
                            <div id="showImg" style="display: <?php if($config['waterConfig']['water_type'] == 1): else: ?> none<?php endif; ?>;" >                      
                                <div class="layui-form-item">
                                    <div class="layui-block">
                                        <label class="layui-form-label">水印图片</label>
                                        <div class="layui-input-block pc-max-width50">
                                        <div class="pic-more">
                                            <ul id="" class="layui-upload-priview upload-file-list image_water_image_imageurl">
                                                <?php if($config['waterConfig']['water_image_imageurl'] != ''): ?>
                                                <li class="item_img">
                                                    <div class="operate">
                                                        <i class="toleft layui-icon layui-icon-left" title="左移"></i>
                                                        <i class="toright layui-icon layui-icon-right" title="右移"></i>
                                                        <i class="close layui-icon layui-icon-delete" title="删除"></i>
                                                    </div>
                                                    <img src="<?php echo htmlentities($config['waterConfig']['water_image_imageurl']); ?>" class="img">
                                                    <input type="hidden" name="water_image_imageurl" value="<?php echo htmlentities($config['waterConfig']['water_image_imageurl']); ?>" />
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                        <button type="button" class="layui-btn pull-left upload_water_image_imageurl" >选择图片</button>
                                        </div>
                                    </div>
                                </div>	
                                <div class="layui-form-item">                               
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">图片透明度</label>
                                        <div class="layui-input-inline">
                                            <input type="number"  onblur="checkInt(this.value,100);" max="100"  name="water_image_opcity" value="<?php echo htmlentities($config['waterConfig']['water_image_opcity']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="showTxt" style="display: <?php if($config['waterConfig']['water_type'] == 0): else: ?> none<?php endif; ?>;"> 
                                <div class="layui-form-item">                               
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">水印文字</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="water_font_txt" value="<?php echo htmlentities($config['waterConfig']['water_font_txt']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                    
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">字体角度</label>
                                        <div class="layui-input-inline">
                                            <input type="number" name="water_font_angle" value="<?php echo htmlentities($config['waterConfig']['water_font_angle']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-form-item"> 
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">水印字体</label>
                                        <div class="layui-input-inline">
                                            <select name="water_font_family" class="layui-select">
                                                <option value="simhei.ttf" <?php if($config['waterConfig']['water_font_family'] == 'simhei.ttf'): ?> selected<?php endif; ?>>黑体</option>
                                                <option value="msyh.ttc" <?php if($config['waterConfig']['water_font_family'] == 'msyh.ttc'): ?> selected<?php endif; ?>>微软雅黑</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">字体大小</label>
                                        <div class="layui-input-inline">
                                            <input type="number" onblur="checkInt(this.value,100);" max="100" name="water_font_size" value="<?php echo htmlentities($config['waterConfig']['water_font_size']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                    <div class="layui-inline">
                                        <label class="layui-form-label layui-form-required">字体颜色</label>
                                        <div class="layui-input-inline">
                                            <input type="text" name="water_font_color" value="<?php echo htmlentities($config['waterConfig']['water_font_color']); ?>" class="layui-input" lay-vertype="tips" lay-verify="required">
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset class="layui-elem-field" id="doImagesAjx" style="display: <?php if($config['waterConfig']['water_is_on'] == 1): else: ?> none<?php endif; ?>;">
                                    <legend>图片批处理</legend>
                                    <div class="layui-form-item">                       
                                        <div class="layui-inline">
                                            <label class="layui-form-label">处理方式</label>
                                            <div class="layui-input-inline">
                                                <select class="layui-select" id="do_image_ajax" lay-filter="do_image_ajax" v-model="doImageActive" >
                                                    <option v-for="(item,index) in doImageList" :key="index" :value='item.id'>{{item.name}}</option>  
                                                </select>
                                            </div>
                                            <button  type="button" class="layui-btn layui-btn-normal btn_do_image_ajax">确定</button><span> 【设置若有更新，先点击下方保存按钮】</span>
                                        </div>
                                    </div> 
                                </fieldset>
                            </div>   
                        </div>                         
                        </div>                        
                    </div>
                </div>
               
                <div class="layui-form-fixed-footer">
                    <div class="layui-form-btn text-center">
                        <button class="layui-btn btn-config"  type="button">保存</button>
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
<script type="text/javascript" src="../../assets/module/city.js"></script>
<script>
    new Vue({
        el: "#app",
        data: {
            direValue:'<?php echo $config['waterConfig']['water_position']; ?>',
            waterTypeList:[{id:0,name:"文字"},{id:1,name:"图片"}],
            waterTypeActive: <?php echo $config['waterConfig']['water_type']; ?>,
            doImageList:[{id:0,name:"去除图库水印"},{id:1,name:"图库生成水印"}],
            doImageActive:1,
        },
        watch:{
        },
        methods:{
            getDire(e){     
                console.log(e) 
                this. direValue = e.target.dataset.dir
                $("input[name='water_position']").val(this.direValue)
            }
        }
    })

    function checkInt(n,max){
    var regex = /^\d+$/;
    if(regex.test(n)){
       if(n<0){
          alert("数字不合法")
       }else if(n>max){
          alert("数字不合法")
       }
    }else{
       alert("数字不合法");
    }
    
}
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

    new PCAS("base_provice","base_city","base_area","<?php echo isset($config['baseConfig']['base_provice'])?$config['baseConfig']['base_provice']:''; ?>",
    "<?php echo isset($config['baseConfig']['base_city'])?$config['baseConfig']['base_city']:''; ?>",
    "<?php echo isset($config['baseConfig']['base_area'])?$config['baseConfig']['base_area']:''; ?>");

    // 表单提交事件
    form.on('submit(categoryEditSubmit)', function (data) {
        var loadIndex = layer.load(2);
        $.post('<?php echo url("admin/category.article/add"); ?>', data.field, function (res) {
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

        form.on('select(changeWaterTypeList)',
            function(data){                   
                $("input[name=water_type]").val($("#water_type").get(0).selectedIndex);
                var val=data.value;
                if(data.value == 1){
                    $("#showImg").show();
                    $("#showTxt").hide();
                }else{
                    $("#showTxt").show();
                    $("#showImg").hide();            
                }
            }
        );
        
        form.on('checkbox(changeWaterOn)',
            function(data){   
                // var val1= $("input[name=water_is_on]").val();
                if(data.elem.checked == true){
                    $("#showAllWater,#doImagesAjx").show();
                }else{
                    $("#showAllWater,#doImagesAjx").hide();            
                }
            }
        );

        editor = UE.getEditor('myEditor', {
            toolbars : [
                ['fullscreen', 'source', 'undo', 'redo'],
                    ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|', ,'insertframe','link','|','seoimage']
            ],
                autoHeightEnabled: true,
                autoFloatEnabled: true
        });


        /**
        * 插入编辑器
        * */
        $('.insert_editor').on('click',function (e) {

            var bot_license = $("input[name=bot_license]").val();
            var bot_support = $("input[name=bot_support]").val();
            var bot_icp = $("input[name=bot_icp]").val();
            var bot_police = $("input[name=bot_police]").val();

            var bot_license_url = $("input[name=bot_license_url]").val();
            var bot_support_url = $("input[name=bot_support_url]").val();
            var bot_icp_url = $("input[name=bot_icp_url]").val();
            var bot_police_url = $("input[name=bot_police_url]").val();
            var content ='';
                content+='<a target="_black" href='+bot_license_url+'>营业执照</a>&nbsp;&nbsp;';
                content+='<a target="_black" href='+bot_support_url+'>'+bot_support+'</a>&nbsp;&nbsp;';
                content+='<a target="_black" href='+bot_icp_url+'>'+bot_icp+'</a>&nbsp;&nbsp;';
                content+='<a target="_black" href='+bot_police_url+'>'+bot_police+'</a>&nbsp;&nbsp;';
            editor.setContent(content);
        })


        /**
        * 上传图片
        * */
        $('.upload_top_logo_url').on('click',function (e) {
            createFrame('选择图片','/admin/content.article/image?fodder=top_logo_url');
        })

        /**
        * 上传图片
        * */
        $('.upload_top_ico_url').on('click',function (e) {
            createFrame('选择图片','/admin/content.article/image?fodder=top_ico_url');
        })
        
        /**
        * 上传图片
        * */
        $('.upload_top_qrcode_url').on('click',function (e) {
            createFrame('选择图片','/admin/content.article/image?fodder=top_qrcode_url');
        })
        
        /**
        * 上传图片
        * */
        $('.upload_bot_license_url').on('click',function (e) {
            createFrame('选择图片','/admin/content.article/image?fodder=bot_license_url');
        })
        
        /**
        * 上传图片
        * */
        $('.upload_water_image_imageurl').on('click',function (e) {
            createFrame('选择图片','/admin/content.article/image?fodder=water_image_imageurl');
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
        var maxNum = 1;
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


    /**
    * 提交图文
    * */
    $('.btn-config').on('click',function(){
        var list = {};
        var list = $("#config_form").serialize(); 
        $.ajax({
            url:"/admin/system.config/",
            data:list,
            type:'post',
            dataType:'json',
            success:function(res){
                if(res.code == 1){
                    layer.msg(res.msg);
                }else{
                    layer.msg(res.msg);
                }
            }
        })
    });


    /**
    * 提交图文
    * */
    $('.btn_do_image_ajax').on('click',function(){
        var do_image_type = $("#do_image_ajax").val();         
        var do_image_url;
        if( '0'== do_image_type){
            do_image_url = "/admin/system.config/doRemoveWater";
        }else{
            do_image_url = "/admin/system.config/doAddWater";
        } 
        console.log(do_image_url)
        $.ajax({
            url:do_image_url,
            data:'',
            type:'post',
            dataType:'json',
            success:function(res){
                if(res.code == 1){
                    layer.msg(res.msg);
                }else{
                    layer.msg(res.msg);
                }
            }
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