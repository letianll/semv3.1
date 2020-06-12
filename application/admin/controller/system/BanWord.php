<?php
namespace app\admin\controller\system;
use think\Controller;
use app\admin\model\BanWord as BanWordModel;
use app\core\lib\Json;
use app\core\lib\Util;

class BanWord extends Controller{

    /**
	 * 扩展标签列表
	 */
	public function lists(){
		$data = $this->request->param();
		return json([
			"code"=> 0,
			"msg"=> "成功获取数据",
			"count"=> count(BanWordModel::lists($data)[1]),
			"data"=>BanWordModel::lists($data)[0]
		]);
	}

	/**
	 * excel所有数据列表
	 */
	public function listsExcel(){
		return json([
			"code"=> 0,
			"msg"=> "成功获取数据",
			"data"=>BanWordModel::listsExcel()
		]);
	}
	
	/**
	 * add 扩展字段
	 */
	public function add(){
		if(request()->isPost()){			
			$data = $this->request->param();
			return json( (new BanWordModel())->add($data));	
		}				
	}
	
	/**
	 * excel 导入数据
	 */
	public function ajaxAddMulti(){
		if(request()->isPost()){			
			$data = $this->request->param();
			if(isset($data['data'][0]['sheet1']) && count($data['data'][0]['sheet1'])>=2 ){
				return json( (new BanWordModel())->ajaxAddMulti($data['data'][0]['sheet1']));
			}else{
				return json(['status'=>0,'msg'=>'excel不合法']);
			}							
		}				
	}

	/**
	 * edit 扩展字段
	 */
	public function edit(){
		if(request()->isPost()){			
			$data = $this->request->param();
			return json( (new BanWordModel())->edit($data));	
		}				
	}
		
	/**
	 * edit 扩展字段
	 */
	public function ajaxChange(){
		if(request()->isGet()){			
			$data = $this->request->param();
			return json( (new BanWordModel())->ajaxChange($data));	
		}				
	}

	//删除单条或多条信息
	public function delete(){
		$data = $this->request->param();
		if(empty($data['id'])){
			return json(['status'=>0,'msg'=>'参数为空']);
		}else{
			$res = (new BanWordModel())->del($data['id']);
			return json($res);
		}
	}
	
	/**
	 * 首页
	 * @return [type] [description]
	 */
	public function index(){	
		return view();		
	}
	


	
}

