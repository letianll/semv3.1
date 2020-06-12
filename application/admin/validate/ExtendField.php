<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class ExtendField extends Validate
{
		//验证器规则
	protected $rule = [
		'name'	=>	'require',
		'tags'	=>	'require',
	];
	//验证器提示消息
	protected $message = [
		'name.require'	=>	'名称不能为空',
		'tags.require'	=>	'标签不能为空',

	];
	//验证场景
	protected $scene = [];

}