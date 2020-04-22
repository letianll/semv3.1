<?php
namespace app\admin\controller;
use think\Controller;

class Common extends Controller{

	public function initialize(){//控制器若使用该方法，需要继承系统的Controller
		if(session('admin.username')==''){
			$this->error('请先登录！',url('Login/index'),1);
		}
		
	}

	//公共的更新指定数据表、指定记录的字段内容
	public function updates(){
		$data = input('param.');
		if($data['tb'] && $data['id'] && $data['field']){
			$map[] = ['id','=',$data['id']];
			$res = db($data['tb'])->where($map)->update([$data['field']=>$data['value']]);
			if($res){
				return json(['status'=>1,'msg'=>'修改成功']);
			}else{
				return json(['status'=>0,'msg'=>'修改失败']);
			}
		}else{
			return json(['status'=>0,'msg'=>'参数传递错误']);
		}
		
	}

}