<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class ArticleCategory extends Validate
{
		//验证器规则
	protected $rule = [
		'category'	=>	'require',
		'urlname'   => 'require|alpha|unique:ArticleCategory',
		'paixu'	=>	'require|number|egt:0',
		'keyword'	=>	'require',
	];
	//验证器提示消息
	protected $message = [
		'category.require'	=>	'分类名称不能为空',
		'urlname.require'	=>	'别名不能为空',
		'urlname.unique'   =>  '别名不能重复',
		'urlname.alpha'   =>  '别名必须为字母',
		'paixu.require'	=>	'排序数字不能为空',
		'paixu.number'	=>	'排序编号必须为数字',
		'paixu.egt'	=>	'排序编号必须大于等于0',
		'keyword.require'	=>	'优化词不能为空',
	];
	//验证场景
	protected $scene = [];

}