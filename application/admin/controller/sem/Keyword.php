<?php
namespace app\admin\controller\sem;
use think\Controller;
use app\admin\model\sem\KeywordCategory as KeywordCategoryModel;
use app\admin\model\Keyword as KeywordModel;
use app\admin\model\ProductCategory;
use app\admin\model\City;
use app\core\lib\Json;
use app\core\lib\Util;

class Keyword extends Controller{
	
	/**
	 * keywordcategory首页
	 */
	public function index(){
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
			"count"=> count(KeywordModel::lists($data)[1]),
			"data"=>KeywordModel::lists($data)[0]
		]);
	}

	//删除单条或多条信息
	public function delete(){
		$data = $this->request->param();
		if(empty($data['id'])){
			return json(['status'=>0,'msg'=>'参数为空']);
		}else{
			$res = (new KeywordModel())->del($data['id']);
			return json($res);
		}
	}

	//添加搜索
	public function search(){
		$data = $this->request->param();
		//查keyword表判断
		if(empty($data['keyword'])){
			return json(['status'=>0,'msg'=>'参数为空']);
		}else{
			$res = (new KeywordModel())->search($data['keyword']);
			return json($res);
		}
	}

	/**
	 * 新增关键词
	 */
	public function add(){
		if($this->request->isPost()){			
			$data = $this->request->param();
			//编辑
			if($data['id']){
				//插入数据表
				$res = (new KeywordModel())->edit($data);
				return json($res);
			}else{
				//插入数据表
				$res = (new KeywordModel())->add($data);
				return json($res);
			}
		}
	}

	//更新使用次数
	public function updatenum(){
		$data = $this->request->param();
		// if(empty($data['id'])){
		// 	return json(['status'=>0,'msg'=>'参数为空']);
		// }else{
			$res = (new KeywordModel())->updatenum($data['id']);
			return json($res);
		// }
	}
	
}

