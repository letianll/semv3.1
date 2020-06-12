<?php /*a:1:{s:71:"D:\webroot\semclientcmsv3.1\application\admin\view\index\changepwd.html";i:1584527172;}*/ ?>
<!-- 修改密码表单 -->
<form id="form-changepwd" class="layui-form model-form">
    <!-- 修改密码需要传递修改的网站的域名是哪个 -->
    <input type="hidden" name="domain" value="www.fxlh.cn">

    <div class="layui-form-item">
        <label class="layui-form-label layui-form-required">原始密码:</label>
        <div class="layui-input-block">
            <input type="password" name="oldPsw" placeholder="请输入原始密码" class="layui-input"
                   lay-verType="tips" lay-verify="required" required/>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label layui-form-required">新密码:</label>
        <div class="layui-input-block">
            <input type="password" name="newPsw" placeholder="请输入新密码" class="layui-input"
                   lay-verType="tips" lay-verify="required|psw" required/>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label layui-form-required">确认密码:</label>
        <div class="layui-input-block">
            <input type="password" name="rePsw" placeholder="请再次输入新密码" class="layui-input"
                   lay-verType="tips" lay-verify="required|equalTo" lay-equalTo="input[name=newPsw]" required/>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block text-right">
            <button class="layui-btn layui-btn-primary" type="button" ew-event="closePageDialog">取消</button>
            <button class="layui-btn" lay-filter="submit-psw" lay-submit>保存</button>
        </div>
    </div>
</form>

<!-- js部分 -->
<script>
    layui.use(['layer', 'form', 'admin', 'formX'], function () {
        var $ = layui.jquery;
        var layer = layui.layer;
        var form = layui.form;
        var admin = layui.admin;

        // 监听提交
        form.on('submit(submit-psw)', function (data) {
            // console.log(JSON.stringify(data.field));
            $.ajax({
                type:'POST',
                url:"<?php echo url('admin/index/changepwd'); ?>",
                data:data.field,
                success:function(res){
                    if(res.status=='1'){
                        layer.msg(res.msg, {icon:1, time:1000});
                    }else{
                        layer.msg(res.msg, {icon:2, time:1000});
                    }
                }

            })
            return false;
        });

    });
</script>