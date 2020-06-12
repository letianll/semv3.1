<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class SoftArticle extends Validate
{
		//验证器规则
	protected $rule = [
		'product_category_id'	=>	'require',
		'name'	=>	'require',
		'content'	=>	'require',
	];
	//验证器提示消息
	protected $message = [
		'product_category_id.require'	=>	'关键词分类不能为空',
		'name'	=>	'标题不能为空',
		'content'	=>	'内容不能为空',

	];
	//验证场景
	protected $scene = [];

}