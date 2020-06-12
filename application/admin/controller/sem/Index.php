<?php
namespace app\admin\controller\sem;
use think\Controller;
use app\admin\model\sem\System as SystemModel;
use app\core\lib\Json;
use app\core\lib\Util;
use app\core\lib\Upload;

class Index extends Controller{
	
	/**
	 * sem基础配置首页
	 */
	public function index(){	
		if($this->request->isPost()){
			$data  = $this->request->post();
			if(!empty($data)){
				$res = SystemModel::sysInfo($flag =1,$data);
				if($res['status']==1){
					return json(['code'=>1,'msg'=>'修改成功']);
				}
				return json(['code'=>0,'msg'=>'修改失败']);
				
			}else{
				return json(['code'=>0,'msg'=>'修改失败，参数不合法']);
			}
			
        }else{	
			$res = SystemModel::sysInfo($flag =0,$data = []);
			if($res['status'] == 1){
				$this->assign([
					'data'=>$res['data'] ,
				]);
			}
			return view();
		}
		
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

