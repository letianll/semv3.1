<?php
namespace app\admin\model\sem;
use app\core\basic\BaseModel;
 
class System extends BaseModel{

	protected $name = 'system';
	
	//系统信息
	public static function sysInfo($flag,$data){
		if($flag && $flag==1){
			$res = self::where(['id'=>1])->update($data);
			if($res){
				model('Log')->add('edit','编辑了首页tdk');
				return ['status'=>1,'msg'=>'修改成功'];
			}else{
				return ['status'=>0,'msg'=>'修改失败'];
			}	
		}else{
			$res = self::field('title,keywords,description')->find(1);
			if($res){				
				return ['status'=>1,'msg'=>'查找成功','data'=>$res];
			}else{
				return ['status'=>0,'msg'=>'查找失败','data'=>[]];
			}	
		}	
			
	}

	public static function getSysInfo($str){
		return self::where(['id'=>1])->value($str);
	}









	
}

