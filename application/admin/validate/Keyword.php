<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class Keyword extends Validate
{
		//验证器规则
	protected $rule = [
		'keyword'	=>	'require',
	];
	//验证器提示消息
	protected $message = [
		'keyword.require'	=>	'关键词不能为空',
	];
	//验证场景
	protected $scene = [];

}