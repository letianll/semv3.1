<?php
namespace app\admin\model;
use app\core\basic\BaseModel;
use think\Db;
 
class Keyword extends BaseModel{

	protected $name = 'Keyword';
	
	/**
	 * 返回关键词数据json 
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
	 * 返回全部数组
	 */
	public static function getAllKeyword(){ 
		return db('keyword')->field('id,keyword,product_category_id,usecount')->select();
	}


	//添加关键词
	public function add($data){
		$validate = validate('Keyword');
		if($validate->check($data)){
			//判断是否存在
			$r = $this->where('keyword',$data['keyword'])->select()->toArray();
			if($r){
				return ['status'=>0,'msg'=>'该关键词已存在'];
			}
			$res = $this->isUpdate(false)->save($data);
			if($res){
				#model('Log')->add('add','添加了菜单：'.$data['menu']);
				return ['status'=>1,'msg'=>'添加成功'];
			}else{
				return ['status'=>0,'msg'=>$validate->getError()];
			}
		}else{
			return ['status'=>0,'msg'=>$validate->getError()];
		}		
	}

	//修改关键词
	public function edit($data){
		if(intval($data['id'])){
			//判断是否存在
			$r = $this->where('keyword',$data['keyword'])->select()->toArray();
			if($r){
				return ['status'=>0,'msg'=>'该关键词已存在'];
			}
			$res = $this->where(['id'=>$data['id']])->update($data);
			if($res){
				#model('Log')->add('add','添加了菜单：'.$data['menu']);
				return ['status'=>1,'msg'=>'修改成功'];
			}else{
				return ['status'=>0,'msg'=>'修改失败'];
			}	
		}else{
			return ['status'=>0,'msg'=>'参数格式不正确'];
		}		
	}

	//删除词库
    public function del($ids){
        $map[] = ['id','IN',$ids];
        $res = $this->where($map)->delete();
        if($res){
            model('Log')->add('delete','删除了词库：'.$ids);
            return ['status'=>1,'msg'=>'删除成功'];
        }else{
            return ['status'=>0,'msg'=>$this->getError()];
        }
    }

    //更新次数
    public function updatenum($ids)
    {
    	//$map[] = ['id','IN',$ids];
    	//关键词数组
    	//$keyword_array = self::order('id ASC')->where($map)->select()->toArray()?:[];
    	//$keyword_array = self::order('id DESC')->select()->toArray()?:[];
    	//查找所有相关表的seo_title seo_keywords字段
 
    	$GLOBALS['flag'] = false;//更新成功与否标识
    	Db::table("hope_keyword")->field('id,keyword')->chunk(5,function($keyword_array) {
    		$hope_article_category = self::selecttable('hope_article_category');
			$hope_article = self::selecttable('hope_article');
			$str_array = array_merge($hope_article_category, $hope_article);
		   foreach ($keyword_array as $k => $v) {
	    		$usecount = 0;
	    		foreach ($str_array as $key => $value) {
	    			$usecount += substr_count($value,$v['keyword']);
	    		}
	    		//update keyword表中的该条数据 where($v['id'])
				$res = $this->where(['id'=>$v['id']])->update(['usecount'=>$usecount]);
				if($res){
					$GLOBALS['flag'] = true;
				}
    		}
		});

    	if($GLOBALS['flag']){
    		return ['status'=>1,'msg'=>'更新成功'];
    	}else{
    		return ['status'=>0,'msg'=>'暂无更新'];
    	}
    }

    //添加时查询
    public function search($keyword){
		//查找所有相关表的seo_title seo_keywords字段
		$hope_article_category = self::selecttable('hope_article_category');
		$hope_article = self::selecttable('hope_article');
		$str_array = array_merge($hope_article_category, $hope_article);
		$usecount = 0;
		foreach ($str_array as $k => $v) {
			$usecount += substr_count($v,$keyword);
		}
		$data['status'] = 1;
		$data['msg'] = "成功";
		$data['usecount'] = $usecount;
		//查询url
		$url = self::selecturl($keyword);
		$data['url'] = $url;
		return $data;
    }

	//批量出入
	public static function insertAllKeyword($catid, $arr,$flag){
		if($arr){
			$data = [];
			foreach($arr as $k=>$v){
				$data[$k]['keyword'] = $v;
				$data[$k]['product_category_id'] = $catid;
			}
			$res = db('keyword')->insertAll($data);
			if($res){
				if($flag) return ['code'=>1,'msg'=>count($data)];
				return ['code'=>1,'msg'=>$res];
			}else{
				return ['code'=>0,'msg'=>'批量插入失败'];
			}
		}
		return $seo_title_array;
    }

    public function selecturl($keyword){
    	//暂定优先查询文章内容表
    	$res = Db::table('hope_article')->field('seo_title,seo_keywords,urlname')->select();
    	foreach ($res as $k => $v) {
    		if(strpos($v['seo_title'],$keyword) !== false || strpos($v['seo_keywords'],$keyword) !== false){
				$url = '/art/'.$v['urlname'].'.html';
				return $url;
			}
    	}
    }
}

