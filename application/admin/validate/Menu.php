<?php
namespace app\admin\validate;
use think\Validate;

/**
* 
*/
class Menu extends Validate
{
		//验证器规则
	protected $rule = [
		'menu'	=>	'require',
		'url'	=>	'require',
		'weigh'	=>	'require|number|egt:0',
	];
	//验证器提示消息
	protected $message = [
		'menu.require'	=>	'菜单名称不能为空',
		'url.require'	=>	'菜单链接不能为空',
		'weigh.require'	=>	'排序编号不能为空',
		'weigh.number'	=>	'排序编号必须为数字',
		'weigh.egt'	=>	'排序编号必须大于等于0',

	];
	//验证场景
	protected $scene = [];

}