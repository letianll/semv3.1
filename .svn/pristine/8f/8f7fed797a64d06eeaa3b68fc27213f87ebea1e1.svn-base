<?php
namespace app\admin\model;
use app\core\basic\BaseModel;
 
class BanWord extends BaseModel{

	protected $name = 'ban_word';
	
	/**
	 * 返回menu数据json 
	 * @return [type] [description]
	 */
	public static function lists($data){ 
		if(empty($data)){
			return self::order('id ASC')->select()->toArray()?:[];
		}
		$where = [];
		$page =  $data['page'];
		$limit = $data['limit'] ?  $data['limit'] : 10;

		if(!empty($data['keyword'])){
			$where[] = ['name','like',"%".$data['keyword']."%"];
		} 

		return [self::order('id DESC,addtime DESC')->where($where)->limit(($page-1)*$limit,$limit)->select()->toArray()?:[],
				self::where($where)->select()->toArray()?:[]
		];
	}
	
	/**
	 * 返回所有数据json 
	 */
	public static function listsExcel(){ 
		return self::order('id ASC,addtime DESC')->select()->toArray()?:[];		
	}

	//添加违禁词
	public function add($data){
		$validate = validate('BanWord');
		if($validate->check($data)){
			$res = $this->isUpdate(false)->save($data);
			if($res){
				model('Log')->add('add','添加了违禁词：'.$data['name']);
				return ['status'=>1,'msg'=>'添加成功'];
			}else{
				return ['status'=>0,'msg'=>$validate->getError()];
			}
		}else{
			return ['status'=>0,'msg'=>$validate->getError()];
		}		
	}
	
	//导入excel
	public function ajaxAddMulti($data){
		if(!is_array($data)){
			return ['status'=>0,'msg'=>'excel不合法'];
		}else{
			array_shift($data); 
			$res = $this->isUpdate(false)->saveALL($data);
			if($res){
				model('Log')->add('add','导入了excel');
				return ['status'=>1,'msg'=>'excel导入成功'];
			}else{
				return ['status'=>0,'msg'=>'excel导入失败'];
			}
		}			
	}

	//添加违禁词
	public function edit($data){
		$validate = validate('BanWord');
		if($validate->check($data)){
			if(intval($data['id'])){
				$data['is_check'] = isset($data['is_check']) ? $data['is_check'] : 0 ;
				$res = $this->where(['id'=>$data['id']])->update($data);
				if($res){
					model('Log')->add('edit','编辑了违禁词：'.$data['name']);
					return ['status'=>1,'msg'=>'修改成功'];
				}else{
					return ['status'=>0,'msg'=>'修改失败'];
				}	
			}else{
				return ['status'=>0,'msg'=>'参数格式不正确'];
			}
		}else{
			return ['status'=>0,'msg'=>$validate->getError()];
		}		
	}

	//异步违禁词状态切换
	public function ajaxChange($data){
		if(intval($data['id'])){
			$res = $this->isUpdate(true)->save($data);
			if($res){
				model('Log')->add('edit','切换了违禁词状态，id为：'.$data['id']);
				return ['status'=>1,'msg'=>'切换成功'];
			}else{
				return ['status'=>0,'msg'=>'切换失败'];
			}	
		}else{
			return ['status'=>0,'msg'=>'切换失败'];
		}
	}

	//删除违禁词
    public function del($ids){
        $map[] = ['id','IN',$ids];
        $res = $this->where($map)->delete();
        if($res){
            model('Log')->add('delete','删除了违禁词：'.$ids);
            return ['status'=>1,'msg'=>'删除成功'];
        }else{
            return ['status'=>0,'msg'=>$this->getError()];
        }
    }







	
}

