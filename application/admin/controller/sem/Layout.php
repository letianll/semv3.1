<?php
namespace app\admin\controller\sem;
use think\Controller;
use app\admin\model\sem\Layout as LayoutModel;
use app\core\lib\Json;
use app\core\lib\Util;
use app\core\lib\Upload;

class Layout extends Controller{
	

	/**
	 * sem基础配置首页
	 */
	public function index(){	
		return view();	
	}
	
	public function doLayout(){
		$data  = $this->request->post();
		if($data['param']=='check'){
			return $this->check();
		}
		return $this->doLayoutSig($data['param']);
	}

	/**
	 * 优化第一步
	 * 检测
	 */
	public function check(){
		return json(LayoutModel::check());
	}


	/**
	 * 其余优化方式
	 * databaseName 入参 数据库名
	 */
	public function doLayoutSig($databaseName){
		if($databaseName=='check'){
			return json(LayoutModel::check());
		}
		$list_all = LayoutModel::getAllKeywrod($databaseName);
		foreach($list_all as $k=>$v){
			if(empty($list_all[$k]['seo_title'])){
				$list_all[$k]['seo_title'] = (new LayoutModel()) ->doLayoutSeoTitle($list_all[$k]);
			}
			if(empty($list_all[$k]['seo_keywords'])){
				$list_all[$k]['seo_keywords'] = (new LayoutModel()) ->doLayoutSeoKeywords($list_all[$k]);
			}			
			if(empty($list_all[$k]['seo_description'])){
				$list_all[$k]['seo_description'] = (new LayoutModel()) ->doLayoutSeoDescription($list_all[$k], $databaseName);
			}
		}
		$res = (new LayoutModel()) ->updateAllKeywrod($list_all, $databaseName);
		if(isset($res['code'])){
			return json(['status'=>1,'msg'=>$res['msg']]);
		}else{
			return json(['status'=>0,'msg'=>'优化'.$databaseName.'产生错误']);
		}


		
	}




	
}

