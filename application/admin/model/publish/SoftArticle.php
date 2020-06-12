<?php
namespace app\admin\model\publish;
use app\core\basic\BaseModel;
use app\admin\model\Keyword;
 
class SoftArticle extends BaseModel{

	protected $name = 'soft_article';
	
	

	/**
	 * 返回menu数据json 
	 * @return [type] [description]
	 */
	public static function lists($data){ 
		if(empty($data)){
			return self::order('id ASC')->select()->toArray()?:[];
		}
		$page =  $data['page'];
		$limit = $data['limit'] ?  $data['limit'] : 10;
		$res = self::order('id DESC')->limit(($page-1)*$limit,$limit)->select()->toArray()?:[];
		foreach($res as &$v){
			$v['category'] = db('product_category')->where(['id'=>$v['product_category_id']])->value('category');
		}
		return [$res,
				self::select()->toArray()?:[]
				];
	}
	
	/**
	 * 返回所有数据json 
	 */
	public static function listsExcel(){ 
		return self::order('id ASC,addtime DESC')->select()->toArray()?:[];		
	}

	//添加软文
	public function add($data){
		$validate = validate('SoftArticle');
		if($validate->check($data)){
			$res = $this->isUpdate(false)->save($data);
			if($res){
				model('Log')->add('add','添加了软文');
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
	
	//删除扩展字段
    public function del($ids){
        $map[] = ['id','IN',$ids];
        $res = $this->where($map)->delete();
        if($res){
            model('Log')->add('delete','删除了扩展字段：'.$ids);
            return ['status'=>1,'msg'=>'删除成功'];
        }else{
            return ['status'=>0,'msg'=>$this->getError()];
        }
    }







	
}

