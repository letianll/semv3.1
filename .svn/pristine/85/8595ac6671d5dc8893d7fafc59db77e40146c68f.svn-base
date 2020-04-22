<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class Log extends Validate
{
		//验证器规则
	protected $rule = [
		'log_user'	=>	'require',
		'log_action'	=>	'require',
		'log_content'	=>	'require',
	];
	//验证器提示消息
	protected $message = [
		'log_user.require'	=>	'记录日志时当前操作用户为空',
		'log_action.require'	=>	'日志类型为空',
		'log_content.require'	=>	'日志描述内容为空',

	];
	//验证场景
	protected $scene = [];

}