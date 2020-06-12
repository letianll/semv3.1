<?php
namespace app\admin\model;
use app\core\basic\BaseModel;
 
class City extends BaseModel{

	protected $name = 'city';
	

	public static function getCitys(){
		$allCitys = [
			['id'=>1,'name'=>'北京'],
			['id'=>22,'name'=>'天津'],
			['id'=>43,'name'=>'河北'],
			['id'=>44,'name'=>'石家庄'],
		];
		return $allCitys;
	}

	/**
	 * 返回menu数据json 
	 * @return [type] [description]
	 */
	public static function lists(){
		 $system_menu_tmp = self::where(['is_onmenu'=>1])->order('parentid ASC,weigh DESC,id ASC')->select()->toArray()?:[];
			return	 (new \Category())->getJsonTree($system_menu_tmp,0);
	}
	
	/**
	 * 返回menu数据json ,返回带按钮
	 * @return [type] [description]
	 */
	public static function lists1(){
		 $system_menu_tmp = self::order('parentid ASC,weigh DESC')->select()->toArray()?:[];	
			return	 (new \Category())->unlimitedForLevel2($system_menu_tmp,'',0,2);
	}

	//添加系统菜单
	public function add($data){
		$validate = validate('Menu');
		if($validate->check($data)){
			$res = $this->isUpdate(false)->save($data);
			if($res){
				#model('Log')->add('add','添加了菜单：'.$data['menu']);
				return ['status'=>1,'msg'=>'添加成功'];
			}else{
				return ['status'=>0,'msg'=>$validate->getError()];
			}
		}else{
			return ['status'=>0,'msg'=>$validate->getError()];
		}		
	}
	
	//添加系统菜单
	public function edit($data){
		if(intval($data['id'])){
			$res = $this->where(['id'=>$data['id']])->update($data);
			if($res){
				#model('Log')->add('add','添加了菜单：'.$data['menu']);
				return ['status'=>1,'msg'=>'修改成功'];
			}else{
				return ['status'=>0,'msg'=>'修改失败'];
			}	
		}else{
			return ['status'=>0,'msg'=>'参数格式不正确'];
		}		
	}


	//删除系统菜单
	public function del($data){
		if(intval($data['id'])){
			$res = $this->where(['id'=>$data['id']])->delete();
			if($res){
				#model('Log')->add('add','添加了菜单：'.$data['menu']);
				return ['status'=>1,'msg'=>'删除成功'];
			}else{
				return ['status'=>0,'msg'=>'删除失败'];
			}	
		}else{
			return ['status'=>0,'msg'=>'参数格式不正确'];
		}
		
	}







	
}

