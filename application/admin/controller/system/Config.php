<?php
namespace app\admin\controller\system;
use think\Controller;
use app\admin\model\Menu as MenuModel;
use app\core\lib\Json;
use app\core\lib\Util;
use app\core\lib\Upload;

class Config extends Controller{
	  
	/**
	 * 站点配置首页
	 * @return [type] [description]
	 */
	public function index(){	
		if($this->request->isPost()){
			$data  = $this->request->post();#halt($data);
			$data_res = [
				'baseConfig'=>[
					'base_comname' => $data['base_comname'],
					'base_contact' => $data['base_contact'],
					'base_tel' => $data['base_tel'],
					'base_fax' => $data['base_fax'],
					'base_mobile' => $data['base_mobile'],
					'base_qq' => $data['base_qq'],
					'base_email' => $data['base_email'],
					'base_postcode' => $data['base_postcode'],
					'base_provice' => $data['base_provice'],
					'base_city' => $data['base_city'],
					'base_area' => $data['base_area'],
					'base_address' => $data['base_address'],
				],
				'topConfig'=>[
					'top_logo_url' => $this->ayyToStr($data['top_logo_url']),
					'top_ico_url' => $this->ayyToStr($data['top_ico_url']),
					'top_qrcode_url' => $this->ayyToStr($data['top_qrcode_url']),
					'top_domain' => $data['top_domain'],
					'top_slogan' => $data['top_slogan'],
					'top_saletel' => $data['top_saletel'],
				],
				'botConfig'=>[
					'bot_license_url' => $this->ayyToStr($data['bot_license_url']),
					'bot_support' => $data['bot_support'],
					'bot_support_url' => $data['bot_support_url'],
					'bot_icp' => $data['base_comname'],
					'bot_icp_url' => $data['bot_icp_url'],
					'bot_police' => $data['bot_police'],
					'bot_police_url' => $data['bot_police_url'],
					'bot_copyrights' => $data['bot_copyrights'],
				],
				'plusConfig'=>[
					'plus_msg_on' => isset($data['plus_msg_on'])?1:0,
					'plus_jobmsg_on' => isset($data['plus_jobmsg_on'])?1:0,
					'plus_receive_phone' => $data['plus_receive_phone'],
					'plus_copy_on' => isset($data['plus_copy_on'])?1:0,
					'plus_message_on' => $data['plus_message_on'],
					'plus_gps' => $data['plus_gps'],
					'plus_phone_number' => $data['plus_phone_number'],
					'plus_fgf' =>$data['plus_fgf'],
					'plus_article_page' => $data['plus_article_page'],
					'plus_product_page' => $data['plus_product_page'],
					'plus_gallery_page' => $data['plus_gallery_page'],
					'plus_job_page' => $data['plus_job_page'],
					'plus_downloads_page' => $data['plus_downloads_page'],
				],
				'metaConfig'=>[
					'meta_meta' => $data['meta_meta'],
					'meta_js' => $data['meta_js'],
				],
				'waterConfig'=>[
					'water_is_on' => !empty($data['water_is_on'])?1:0,
					'water_type' =>!empty($data['water_type'])?$data['water_type']:0,
					'water_position' => $data['water_position'],
					'water_image_imageurl' => $this->ayyToStr($data['water_image_imageurl']),
					'water_image_opcity' => $data['water_image_opcity'],
					'water_font_family' => $data['water_font_family'],
					'water_font_txt' => $data['water_font_txt'],
					'water_font_size' => $data['water_font_size'],
					'water_font_angle' => $data['water_font_angle'],
					'water_font_color' => $data['water_font_color'],
				],
			];
			(new Util())->editConfig('config.php',$data_res,'王猛');
			return json(['code'=>1,'msg'=>'修改成功']);
        }else{
			$config = config('config.');			
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

