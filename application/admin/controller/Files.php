<?php
namespace app\admin\controller;
use app\admin\controller\Common;

class Files extends Common{


	public function lists(){
		$filetype = input('filetype',0,'intval');
		$groupid = input('groupid');

		$map = [];
		$map[] = ['filetype','=',$filetype];
		if(is_numeric($groupid)){
			$map[] = ['groupid','=',$groupid];
		}
		
		$res = db('Files')->where($map)->field('name,ext as type,url')->order('addtime desc,id desc')->select();
		$json['msg'] = '请求成功';
		$json['code'] = 200;

		foreach ($res as $key => $value) {
			$res[$key]['smUrl'] = $value['url'];
			$res[$key]['hasSm'] = false;
			$res[$key]['isDir'] = false;
		}
		$json['data'] = $res;

		return json($json);
		
	}




	
}

