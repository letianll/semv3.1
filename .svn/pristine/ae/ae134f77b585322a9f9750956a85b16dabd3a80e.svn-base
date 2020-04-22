<?php /*a:2:{s:67:"D:\webroot\semclientcmsv3.1\application\admin\view\index\index.html";i:1584695012;s:62:"D:\webroot\semclientcmsv3.1\application\admin\view\layout.html";i:1584695012;}*/ ?>
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


<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <!-- 头部 -->
    <div class="layui-header">
        <div class="layui-logo">
            <img src="/assets/images/minilogo.png"/>
            <cite>&nbsp;希望SEM v3.2</cite>
        </div>
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="flexible" title="侧边伸缩"><i class="layui-icon layui-icon-shrink-right"></i></a>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="refresh" title="刷新"><i class="layui-icon layui-icon-refresh-3"></i></a>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="message" title="消息" data-url="<?php echo url('admin/index/tplmessage'); ?>">
                    <i class="layui-icon layui-icon-notice"></i>
                    <span class="layui-badge-dot"></span>
                </a>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="note" title="便签" data-url="<?php echo url('admin/index/tplnote'); ?>"><i class="layui-icon layui-icon-note"></i></a>
            </li>
            <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <a ew-event="fullScreen" title="全屏"><i class="layui-icon layui-icon-screen-full"></i></a>
            </li>
            <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <a ew-event="lockScreen" title="锁屏" data-url="<?php echo url('admin/index/tpllockscreen'); ?>"><i class="layui-icon layui-icon-password"></i></a>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a>
                    <img src="/assets/images/head.png" class="layui-nav-img">
                    <cite><?php echo session('admin.username'); ?></cite>
                </a>
                <dl class="layui-nav-child">
                    <dd lay-unselect><a ew-event="psw" data-url="<?php echo url('admin/index/changepwd'); ?>">修改密码</a></dd>
                    <hr>
                    <dd lay-unselect><a ew-event="logout" data-url="<?php echo url('admin/index/logout'); ?>">退出登录</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="theme" data-url="<?php echo url('admin/index/tpltheme'); ?>" title="主题"><i class="layui-icon layui-icon-more-vertical"></i></a>
            </li>
        </ul>
    </div>

    <!-- 侧边栏 -->
    <div class="layui-side">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree arrow2" lay-filter="admin-side-nav" lay-shrink="all">
				<?php if(is_array($system_menu) || $system_menu instanceof \think\Collection || $system_menu instanceof \think\Paginator): if( count($system_menu)==0 ) : echo "" ;else: foreach($system_menu as $key=>$data): ?>
                <li class="layui-nav-item">
                    <a><i class="layui-icon <?php echo htmlentities($data['icon']); ?>"></i>&emsp;<cite><?php echo htmlentities($data['menu']); ?></cite></a>
					<dl class="layui-nav-child">
                        <?php if(array_key_exists('children',$data)): if(is_array($data['children']) || $data['children'] instanceof \think\Collection || $data['children'] instanceof \think\Paginator): if( count($data['children'])==0 ) : echo "" ;else: foreach($data['children'] as $key=>$data1): ?><dd><a lay-href="<?php echo htmlentities($data1['url']); ?>"><?php echo htmlentities($data1['menu']); ?></a>
							<?php if(array_key_exists('children',$data1)): if(is_array($data1['children']) || $data1['children'] instanceof \think\Collection || $data1['children'] instanceof \think\Paginator): if( count($data1['children'])==0 ) : echo "" ;else: foreach($data1['children'] as $key=>$data2): ?>
                            <dl class="layui-nav-child">
                                <dd><a lay-href="<?php echo url($data2['url']); ?>"><?php echo htmlentities($data2['menu']); ?></a></dd>                                
                            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
							<?php endif; ?></dd>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php endif; ?>
                    </dl>
                </li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>

    <!-- 主体部分 -->
    <div class="layui-body"></div>
    <!-- 底部 -->
    <div class="layui-footer layui-text">
        copyright © 2020 <a href="http://www.ahxwkj.com" target="_blank">ahxwkj.com</a> all rights reserved.
        <span class="pull-right">Version 3.2</span>
    </div>
</div>

<!-- 加载动画 -->
<div class="page-loading">
    <div class="ball-loader">
        <span></span><span></span><span></span><span></span>
    </div>
</div>

<!-- js部分 -->
<script type="text/javascript" src="/assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="/assets/js/common.js?v=316"></script>
<script>
    layui.use(['index'], function () {
        var $ = layui.jquery;
        var index = layui.index;

        // 默认加载主页
        index.loadHome({
            menuPath: '<?php echo url("admin/index/console"); ?>',
            menuName: '<i class="layui-icon layui-icon-home"></i>'
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