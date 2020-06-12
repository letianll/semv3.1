<?php
namespace app\admin\model\sem;
use app\core\basic\BaseModel;
use app\admin\model\Keyword;
 
class KeywordCategory extends BaseModel{

	protected $name = 'keyword_category';
	
	public static function getCitysByIdStr($str){
		if(empty($str)){
			return false;
		}
		$arrIds = self::strToArray($str);
		$arrCity = db('City')->where('id in('. $str.')')->column('city');
		return implode(',',$arrCity);
	}
		

	/**
	 *处理生成关键词，去重复
	   * 主词；
       * 城市+主词；
       * 主词+后缀；
       * 城市+主词+后缀；
	 */
	public static function getKeywordsDif($data, $isReturnList=1){ 
		$city = $data['city'];
		$mainKeyword = $data['main_keywords'];
		$afterKeyword = $data['after_keywords'];
		if( empty($city) || empty($mainKeyword) || empty($afterKeyword) ){
			return [];
		}
		$city = self::strToArray($city);
		$mainKeyword = self::strToArray($mainKeyword);
		$afterKeyword = self::strToArray($afterKeyword);
		$res1 = self::makeKeywords($city,$mainKeyword);
		$res2 = self::makeKeywords($mainKeyword,$afterKeyword);
		$res3 = self::makeKeywords($res1,$afterKeyword);
		$allWords = array_merge($mainKeyword,$res1,$res2,$res3);
		$allWords = empty($allWords) ? [] : $allWords; 
		$resTmp = self::doCheckSameArr($allWords); 
		if(empty($resTmp)){
			return (['status'=>0,'msg'=>'检测正常，本次未生成新词']);
		}
		if($resTmp){
			if($isReturnList==1){
				$res = Keyword::insertAllKeyword($data['product_category_id'], $resTmp, $isReturnList);
				if($res['code']==1){
					return (['status'=>1,'msg'=>$res['msg']]);
				}else{
					return (['status'=>0,'msg'=>'关键词批量插入失败']);
				}
			}
			$res = Keyword::insertAllKeyword($data['product_category_id'], $resTmp, 0);
			if($res['status']==1){
				return (['status'=>1,'msg'=>$res['msg']]);
			}else{
				return (['status'=>0,'msg'=>'关键词批量插入失败']);
			}
		}else{
			return (['status'=>0,'msg'=>'生成关键词失败']);
		}

	}

	//去重复
	private static function doCheckSameArr($arr)
    {
        $all_arr = db('keyword')->column('keyword');
        foreach($arr as  $k=>$v){
            if( in_array($arr[$k],$all_arr) ) unset ($arr[$k]);
        }
        return $arr;
    }


	/**
	 *处理生成关键词
	   * 主词；
       * 城市+主词；
       * 主词+后缀；
       * 城市+主词+后缀；
	 */
	public static function getKeywords($city, $mainKeyword, $afterKeyword){
		
		if( empty($city) || empty($mainKeyword) || empty($afterKeyword) ){
			return [];
		}
		$city = self::strToArray($city);
		$mainKeyword = self::strToArray($mainKeyword);
		$afterKeyword = self::strToArray($afterKeyword);
		$res1 = self::makeKeywords($city,$mainKeyword);
		$res2 = self::makeKeywords($mainKeyword,$afterKeyword);
		$res3 = self::makeKeywords($res1,$afterKeyword);
		$allWords = array_merge($mainKeyword,$res1,$res2,$res3);
		$allWords = empty($allWords) ? [] : $allWords;
		return $allWords;

	}

	/**
     * 数组元素组合
     * @param $karr1 组词参数1
     * @param $karr2 组词参数2
     * @return string 组词结果
     */
    private static function makeKeywords($karr1,$karr2)    {
        $keywords = '';
        foreach ((array)$karr1 as $k1 => $v1) {
            foreach ((array)$karr2 as $k2 => $v2) {
                if(strpos($v1,$v2) !==false || strpos($v2,$v1) !==false){

                }else{
                    $keywords .= trim($v1).trim($v2).',';
                }
            }
        }
        $keywordss = explode(',',$keywords);
        $keywordss = array_unique(array_filter($keywordss));
        return $keywordss;
    }

	public static function getOne($id){
		return self::get($id);
	}

	/**
	 * 处理字符，字符串转数组
	 */
	public static function strToArray($str){
        if(!empty($str)){
            $str = trim($str);
            $str = trim($str,',');
            $str = trim($str,'，');
            $str = str_replace('，',',',$str);
            $keyword_arr = explode(",", $str);
            $arr = [];
            for($i=0;$i<count($keyword_arr);$i++){
                if(!empty($keyword_arr[$i]) && !in_array($keyword_arr[$i], $arr)){
                    $arr = array_merge($arr,[$keyword_arr[$i]]);
                }
            }         
            return $arr;
        }
    }

	/**
	 * 返回menu数据json 
	 * @return [type] [description]
	 */
	public static function lists($data){ 
		if(empty($data)){
			return self::order('id ASC')->select()->toArray()?:[];
		}
		$page =  $data['page'];
		$limit = $data['limit'] ?  $data['limit'] : 10;
		$res = self::order('id DESC')->limit(($page-1)*$limit,$limit)->select()->toArray()?:[];
		foreach($res as &$v){
			$v['category'] = db('product_category')->where(['id'=>$v['product_category_id']])->value('category');
		}
		return [$res,
				self::select()->toArray()?:[]
				];
	}
	
	/**
	 * 返回所有数据json 
	 */
	public static function listsExcel(){ 
		return self::order('id ASC')->select()->toArray()?:[];		
	}

	//添加关键词分类
	public function add($data){
		$validate = validate('KeywordCategory');
		if($validate->check($data)){
			$res = $this->isUpdate(false)->save($data);
			if($res){
				model('Log')->add('add','添加了关键词分类');
				return ['status'=>1,'msg'=>'添加成功'];
			}else{
				return ['status'=>0,'msg'=>$validate->getError()];
			}
		}else{
			return ['status'=>0,'msg'=>$validate->getError()];
		}		
	}
		
	//配置关键词分类
	public function config($data){
		$validate = validate('KeywordCategory');
		if($validate->check($data)){
			$res = $this->where(['id'=>$data['id']])->update($data);				
			if($res){
				model('Log')->add('add','配置关键词分类');
				return ['status'=>1,'msg'=>'配置成功'];
			}else{
				return ['status'=>0,'msg'=>$validate->getError()];
			}
		}else{
			return ['status'=>0,'msg'=>$validate->getError()];
		}				
	}
	
	//配置关键词分类
	public function configImage($data){		
		if(!isset($data['images'])){
			$data['images'] = '';
		}else{
			$data['images'] = implode(',',$data['images']);
		}
		$validate = validate('KeywordCategory');
		$validate->scene('configImage', ['images']);
		if($validate->check($data)){
			$res = $this->where(['id'=>$data['id']])->update($data);				
			if($res){
				model('Log')->add('add','配置关键词分类图片');
				return ['status'=>1,'msg'=>'配置成功'];
			}else{
				return ['status'=>0,'msg'=>'配置失败'];
			}
		}else{
			return ['status'=>0,'msg'=>$validate->getError()];
		}				
	}
	
	//导入excel
	public function ajaxAddMulti($data){
		if(!is_array($data)){
			return ['status'=>0,'msg'=>'excel不合法'];
		}else{
			array_shift($data); 
			$res = $this->isUpdate(false)->saveALL($data);
			if($res){
				model('Log')->add('add','导入了excel');
				return ['status'=>1,'msg'=>'excel导入成功'];
			}else{
				return ['status'=>0,'msg'=>'excel导入失败'];
			}
		}			
	}
	
	//删除扩展字段
    public function del($ids){
        $map[] = ['id','IN',$ids];
        $res = $this->where($map)->delete();
        if($res){
            model('Log')->add('delete','删除了扩展字段：'.$ids);
            return ['status'=>1,'msg'=>'删除成功'];
        }else{
            return ['status'=>0,'msg'=>$this->getError()];
        }
    }







	
}
