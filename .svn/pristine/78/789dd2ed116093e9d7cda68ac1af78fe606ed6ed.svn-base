<?php
namespace app\admin\validate;
use think\Validate;

class Login extends Validate
{
	//验证规则
	protected $rule = [
		'username'	=>	'require',
		'password'	=>	'require',
		'vcode'		=>	'require|captcha',
	];

	//验证提示信息
	protected $message = [
		'username.require'	=>	'用户名不能为空',
		'password.require'	=>	'密码不能为空',
		'vcode.require'	=>	'验证码不能为空',
		'vcode.captcha'	=>	'验证码不正确',

	];

	//验证场景
	protected $scene = [
        'login'	=>	['username','password','vcode'],
    ];
}