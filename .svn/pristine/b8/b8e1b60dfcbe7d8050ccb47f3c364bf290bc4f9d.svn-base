<?php
namespace app\admin\controller\publish;
use think\Controller;
use app\admin\model\publish\SoftArticle as SoftArticleModel;
use app\admin\model\ProductCategory;
use app\admin\model\City;
use app\core\lib\Json;
use app\core\lib\Util;
// use think\cache\driver\Redis;
class SoftArticle extends Controller{
	
	/**
	 * SoftArticle首页
	 */
	public function index(){
		
		
		return view();	
	}

	
	/**
	 * 新增关键词分类
	 */
	public function add(){
		if($this->request->isPost()){			
			$data = $this->request->param();
			return json( (new SoftArticleModel())->add($data) );	

		}else{
			$productCategory = ProductCategory::getProductCategory();
			$data = $this->request->param();
			if(isset($data['id'])){
				$product_category_id = $data['id'];
				$this->assign([
					'productCategory'=>$productCategory,
					'product_category_id'=>$product_category_id
				]);
			}else{
				$this->assign([
					'productCategory'=>$productCategory,
				]);
			}
			
			
		}
		return view();
	}

	/**
	 * 数据列表
	 */
	public function lists(){
		$data = $this->request->param();
		return json([
			"code"=> 0,
			"msg"=> "成功获取数据",
			"count"=> count(SoftArticleModel::lists($data)[1]),
			"data"=>SoftArticleModel::lists($data)[0]
		]);
	}



	
}

