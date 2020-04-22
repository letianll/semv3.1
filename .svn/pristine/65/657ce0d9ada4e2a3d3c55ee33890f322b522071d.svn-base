<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use app\admin\model\Menu as MenuModel;
class Index extends Common{

	/**
	 * 登陆成功后跳转到的首页
	 * @return [type] [description]
	 */
	public function index(){
		//获取nav，支持最多3级
		$this->assign([
			'system_menu'=>MenuModel::lists(),
		]);
		return view();
	}

	// 后台首页控制台
	public function console(){
		return view();
	}


	//后台退出登录
	public function logout(){
		session(null);
		$this->redirect('admin/Login/index');
	}

	//后台登录页面
	public function changepwd(){
		if(request()->isPost()){
			$data = input('post.');
			$changepwdApi = 'http://seo.ahxwkj.com/index.php/index/api/changepwd?domain='.$data['domain'] . '&oldPsw=' . $data['oldPsw'] . '&newPsw=' . $data['newPsw'];
			$res = file_get_contents($changepwdApi);
			if($res == '1'){
				return json(['status'=>1,'msg'=>'密码修改成功']);
			}else if($res == '2'){
				return json(['status'=>0,'msg'=>'旧密码不正确']);
			}else{
				return json(['status'=>0,'msg'=>'密码修改失败']);
			}
			
		}else{
			return view();
		}
		
	}

	// 侧边主题栏
	public function tpltheme(){
		return view();
	}
	// 后台锁屏界面
	public function tpllockscreen(){
		return view();
	}
	// 后台便签页面
	public function tplnote(){
		return view();
	}
	// 后台消息页面
	public function tplmessage(){
		return view();
	}






	
}

