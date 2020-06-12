<?php
namespace app\admin\controller\system;
use think\Controller;
use app\core\lib\Json;
use app\core\lib\Backup as BackupLib;

class Backup extends Controller{

	private $path = ROOT_PATH.'/../backup/';

	/**
	 * 扩展标签列表
	 */
	public function lists(){
		$file_list = [];
		$handler = '';
		if(is_dir($this->path)){
			$handler = opendir($this->path);
			while( ($filename = readdir($handler)) !== false ) {
				if($filename != "." && $filename != ".."){
					$file_list[] = $filename;
				}
			}
			closedir($handler);
		}
		foreach($file_list as $k=>$v){
			$data[$k]['db'] = $v;
			$data[$k]['id'] = $k;
			$data[$k]['addtime'] = explode('-',$v)[0];
		}
		return json([
			"code"=> 0,
			"msg"=> "成功获取数据",
			"count"=> count($data),
			"data"=>$data
		]);
	}

	/**
	 * 
	 */
	public function backup(){
		(new BackupLib())->backupAll();
		return json([
			"status"=> 1,
			"msg"=> "数据库备份成功",
		]);
	}

	/**
	 * 首页
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
			$res = (new BackupLib())->del($data['id']);
			return json($res);
		}
	}
	
	//下载数据库
	public function doDown(){
		$data = $this->request->param();
		if(empty($data)){
			return json(['status'=>0,'msg'=>'参数为空']);
		}else{
			$res = (new BackupLib())->doDown($data);
			return json($res);
		}
	}
	
}

