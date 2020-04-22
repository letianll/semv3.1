<?php
namespace app\admin\controller\system;
use think\Controller;
use app\admin\model\Menu as MenuModel;
use app\core\lib\Json;

class Menu extends Controller{
	
  //     protected $request;
  
  //     public function __construct(Request $request)
  //     {
  //         $this->request = $request;
  //     }
	  
	/**
	 * 菜单管理首页
	 * @return [type] [description]
	 */
	public function index(){
		// 系统菜单图标
		$data_icon = db('MenuIcon')->select();
		$icon = '';
		for ($i=0; $i < sizeof($data_icon); $i++) { 
			$icon .= '<li class="'. $data_icon[$i]['icon'] .'"></li>';
		}
		$this->assign('icon',$icon);
		return view();
	}
	
	/**
	 * menu 列表
	 */
	public function lists(){
		return json([
			"code"=> 0,
			"msg"=> "",
			"count"=> count(MenuModel::lists()),
			"data"=>MenuModel::lists()
		]);
	}
	
	/**
	 * menu 列表，带按钮
	 */
	public function lists1(){
		return json([
			"code"=> 0,
			"msg"=> "",
			"count"=> count(MenuModel::lists1()),
			"data"=>MenuModel::lists1()
		]);
	}
	
	public function add(){
		if(request()->isPost()){			
			$data = $this->request->param();
			return json( (new MenuModel())->add($data));	
		}				
	}

	public function edit(){
		if(request()->isPost()){			
			$data = $this->request->param();
			return json( (new MenuModel())->edit($data));	
		}				
	}
	
	public function del(){
		if(request()->isGet()){			
			$data = $this->request->param();
			#halt($data);
			return json( (new MenuModel())->del($data));	
		}				
	}



	
}

