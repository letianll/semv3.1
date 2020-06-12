<?php
namespace app\admin\controller\sem;
use think\Controller;
use app\admin\model\sem\KeywordCategory as KeywordCategoryModel;
use app\admin\model\ProductCategory;
use app\admin\model\City;
use app\core\lib\Json;
use app\core\lib\Util;

class KeywordCategory extends Controller{
	
	/**
	 * keywordcategory首页
	 */
	public function index(){
		return view();	
	}

	//删除单条或多条信息
	public function delete(){
		$data = $this->request->param();
		if(empty($data['id'])){
			return json(['status'=>0,'msg'=>'参数为空']);
		}else{
			$res = (new KeywordCategoryModel())->del($data['id']);
			return json($res);
		}
	}

	//异步生成词库
	public function createKeywrod(){
		$data = $this->request->param();
		$data = $data['data'];
		$data['city'] = KeywordCategoryModel::getCitysByIdStr($data['citys']);
		//组装词库，过滤重复词以及入库，返回数量
		$res_arr = KeywordCategoryModel::getKeywordsDif($data['city'], $data['main_keywords'], $data['after_keywords']);
		if(empty($res_arr)){
			return json(['status'=>0,'msg'=>'关键词未配置完整']); 
		}
		if($res_arr['code']==1){
			return json(['status'=>1,'msg'=>"本次生成关键词数：".$res_arr['msg']]); 
		}else{
			return json(['status'=>0,'msg'=>$res_arr['msg']]); 
		}
	}

	//预计组词数量，未过滤
	public function getKeywords(){
		$data = $this->request->param();
		$data['city'] = KeywordCategoryModel::getCitysByIdStr($data['city']);
		$res_arr = KeywordCategoryModel::getKeywords($data['city'], $data['main_keywords'], $data['after_keywords']);
		if($res_arr){
			return json(['status'=>1,'msg'=>"预计生成关键词数：".count($res_arr)]); 
		}else{
			return json(['status'=>0,'msg'=>'组词失败']); 
		}
	}

	/**
	 * 新增关键词分类
	 */
	public function add(){
		if($this->request->isPost()){			
			$data = $this->request->param();
			unset($data['citys_text']);
			return json( (new KeywordCategoryModel())->add($data) );	

		}else{
			$productCategory = ProductCategory::getProductCategory();
			
			$this->assign([
				'productCategory'=>$productCategory,
				
			]);
		}
		return view();
	}

	/**
	 * 配置关键词分类图片
	 */
	public function configImage(){
		if($this->request->isPost()){			
			$data = $this->request->param();
			return json( (new KeywordCategoryModel())->configImage($data) );	

		}else{
			$params = $this->request->param();
			$details = KeywordCategoryModel::getOne($params['id']); 
			if(!empty($details['images'])){
				$details['images'] = explode(',',$details['images']);
			}
			$this->assign([
				'details'=>$details
			]);
		}
		return view();
	}

	/**
	 * 配置关键词分类
	 */
	public function config(){
		if($this->request->isPost()){			
			$data = $this->request->param();
			unset($data['citys_text']);
			return json( (new KeywordCategoryModel())->config($data) );	

		}else{
			$params = $this->request->param();
			$productCategory = ProductCategory::getProductCategory();
			$details = KeywordCategoryModel::getOne($params['id']); 
			$this->assign([
				'productCategory'=>$productCategory,
				'details'=>$details
			]);
		}
		return view();
	}

	public function getCitys(){
		$allCitys = city::getCitys();
		return json($allCitys);
	}

	/**
	 * 数据列表
	 */
	public function lists(){
		$data = $this->request->param();
		return json([
			"code"=> 0,
			"msg"=> "成功获取数据",
			"count"=> count(KeywordCategoryModel::lists($data)[1]),
			"data"=>KeywordCategoryModel::lists($data)[0]
		]);
	}

	
	private function ayyToStr($arr)
	{
		if(is_array($arr)){
			return implode(',',$arr);
		}else{
			return $arr;
		}
	}

	public function doRemoveWater(){
		$data = Upload::doRemoveWater();
		return json($data);
	}

	public function doAddWater(){
		$data = Upload::doAddWater();
		return json($data);
	}


	
}

