<?php
namespace app\admin\controller\sem;
use think\Controller;
use app\admin\model\Menu as MenuModel;
use app\core\lib\Json;
use app\core\lib\Util;
use app\core\lib\Upload;

class Base extends Controller{
	
	public function doRobotsAjax(){
		$filename = 'robots.txt';
		$data  = $this->request->post();
		$res = (new Util())->editFile($filename,$data['data']);
		if($res =='success'){
			return json(['status'=>1,'msg'=>'修改成功']);
		}else{
			return json(['status'=>0,'msg'=>'修改失败']);
		}
	}

	/**
	 * sem基础配置首页
	 */
	public function index(){	
		if($this->request->isPost()){
			$data  = $this->request->post();
			$data_res = [
				'baseConfig'=>[
					'base_robots' => $data['base_robots'],
				],
				'redirectConfig'=>[
					'redirect_on' => $data['redirect_on'],
					'redirect_config' => [
						$data['redirect_from_url'],
						$data['redirect_type'],
						$data['redirect_to_url']
					],
				],
				'pushConfig'=>[
					'push_on' => !empty($data['push_on'])?1:0,
					'push_baidu' => $data['push_baidu'],
					'push_360' => $data['push_360'],
					'push_baidu_api' => !empty($data['push_baidu_api'])?1:0, 
					'push_baidu_site' => $data['push_baidu_site'],
					'push_baidu_token' => $data['push_baidu_token'],
				],
			];
			(new Util())->editConfig('config.php',$data_res,'王猛');
			return json(['code'=>1,'msg'=>'修改成功']);
        }else{
			$config = config('sembase.');	
			if(is_array($config)){
				$config['baseConfig']['base_robots'] = 	 (new Util())->getRobotsTxt();
			}
			if(!empty($config['redirectConfig']['redirect_config'])){
				$tmp_arr = json_decode($config['redirectConfig']['redirect_config'],true);
				
			}
			$this->assign([
				'config'=>$config
			]);
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

