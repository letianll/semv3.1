<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class KeywordCategory extends Validate
{
		//验证器规则
	protected $rule = [
		'product_category_id'	=>	'require|unique:keyword_category',
		'citys'	=>	'require',
		'main_keywords'	=>	'require',
		'after_keywords'	=>	'require',
		'images'	=>	'require',
	];
	//验证器提示消息
	protected $message = [
		'product_category_id.unique'	=>	'同一个产品分类只能添加一次',
		'citys.require'	=>	'标签不能为空',
		'main_keywords.require'	=>	'主词不能为空',
		'after_keywords.require'	=>	'后缀词不能为空',
		'images.require'	=>	'配置图片不能为空',

	];
	//验证场景
	protected $scene = ['configImage'=>['images']];

}