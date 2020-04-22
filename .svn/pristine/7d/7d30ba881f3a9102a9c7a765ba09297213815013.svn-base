<?php
namespace app\admin\model;
use think\Model;

class Log extends Model
{
	//指明当前模型对应的数据库完整表名
	protected $table = 'hope_log';

	//添加系统菜单
	public function add($log_action,$log_content){
		$data['log_user'] = session('admin.username');
		$data['log_action'] = $log_action;
		$data['log_content'] = $log_content;
		$data['log_ip'] = request()->ip();
		$data['addtime'] = date('Y-m-d H:i:s');
		$validate = validate('Log');
		if($validate->check($data)){
			$res = $this->isUpdate(false)->save($data);
		}
		
	}

	//从数据表删除数据
	public function del($id){
		if(!$id){
			return ['status'=>0,'msg'=>'请求数据有误'];
		}
		if(is_array($id)){//为数组类型，说明是post提交的批量数据
			$map[] = array('id','in',$id);
			$del_id_str = implode(',',$id);
		}else{//字符串类型，转为数组
			$map[] = array('id','in',explode(',',$id));
			$del_id_str = $id;
		}

		$res=$this->where($map)->delete();
		if($res){
			$this->add('delete','删除日志：'.$del_id_str);
			return ['status'=>1,'msg'=>'删除成功'];
		}else{
			return ['status'=>0,'msg'=>$this->getError()];
		}
	}

	//清空所有信息
	public function clear(){
		$res=$this->where('id','>','0')->delete();
		if($res){
			$this->add('delete','清空了所有日志');
			return ['status'=>1,'msg'=>'删除成功'];
		}else{
			return ['status'=>0,'msg'=>$this->getError()];
		}
	}


	
}