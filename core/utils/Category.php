<?php
namespace app\core\utils;

class Category{

	//无限级分类树状显示使用
	public function unlimitedForLevel($cate_list,$html='--',$pid=0,$level=0){
		$arr=array();
		foreach($cate_list as $v){
			if($v['parentid']==$pid){
				$v['level']=$level+1;
				$v['html']='<e class="catelist_bg"></e>'.str_repeat($html,$level);
				$arr[]=$v;
				$arr=array_merge($arr,self::unlimitedForLevel($cate_list,$html,$v['id'],$level+1));
			}
		}
		return $arr;
	}

	//无限级分类树状显示，适合select使用
	public function unlimitedForLevel2($cate_list,$html='--',$pid=0,$level=0){
		$arr=array();
		foreach($cate_list as $v){
			if($v['parentid']==$pid){
				$v['level']=$level+1;
				$v['html']='|—'.str_repeat($html,$level);
				$arr[]=$v;
				$arr=array_merge($arr,self::unlimitedForLevel2($cate_list,$html,$v['id'],$level+1));
			}
		}
		return $arr;
	}


	/*
	$request_id,当前修改的分类的主键id,即url请求的参数id
	如果当前遍历的数据的id与request_id相等,则跳过该条数据继续遍历
	 */
    public function unlimitedForLevelForEdit($cate_list,$html='--',$pid=0,$level=0,$request_id){
        $arr=array();
        foreach($cate_list as $v){
            if($v['id']  == $request_id){
                continue;
            }
            if($v['parentid']==$pid){
                $v['level']=$level+1;
                $v['html']='|—'.str_repeat($html,$level);
                $arr[]=$v;
                $arr=array_merge($arr,self::unlimitedForLevelForEdit($cate_list,$html,$v['id'],$level+1,$request_id));
            }
        }
        //exit;
        return $arr;
    }
	
	//传递一个子分类的id获取所有的父级分类
	public function getParentCatelist($cate_list,$id=0){
		$arr=array();
		foreach($cate_list as $v){
			if($v['id']==$id){
				$arr[]=$v;
				$arr=array_merge(self::getParentCatelist($cate_list,$v['parentid']),$arr);
			}
		}
		return $arr;
	}
	//传递一个父级分类的id获取所有的子级分类id，查看某一分类及其子分类下的所有文章时很有用,where (cate_id=1 or cate_id in (2,4,5))
	public function getChildCatelist($cate_list,$pid=0){
		$arr=array();
		foreach($cate_list as $v){
			if($v['parentid']==$pid){
				$arr[]=$v['id'];
				$arr=array_merge($arr,self::getChildCatelist($cate_list,$v['id']));
			}
		}
		return $arr;
	}

    //传递一个父级分类的id获取所有的子级分类id，查看某一分类及其子分类下的所有文章时很有用,where (cate_id=1 or cate_id in (2,4,5))
    public function getChildCatelist1($cate_list,$pid=0){
        $arr=array();
        foreach($cate_list as $v){
            if($v['parentid']==$pid){
                $arr[]=$v['id'];
                $arr=array_merge($arr,self::getChildCatelist($cate_list,$v['id']));
            }
        }
        return array_merge([$pid],$arr);
    }

    public function findChild(&$arr,$id){
        $childs=array();
        foreach ($arr as $k => $v){
            if($v['parentid']== $id){
                $childs[]=$v;
            }
        }

        return $childs;
    }

    public function getJsonTree($rows,$root_id){
        $childs=$this->findChild($rows,$root_id);
        if(empty($childs)){
            return null;
        }else{
            foreach ($childs as $k => $v){
                $rescurTree=$this->getJsonTree($rows,$v['id']);
                if( null != $rescurTree){
                    $childs[$k]['children']=$rescurTree;
                }
            }
        }
        return $childs;
    }

    public function cutField($arr=[]){
        foreach ($arr as $k=>$v){
            unset($arr[$k]['parentid']);
            if(!empty($arr[$k['children']])){
                $this->cutField($arr[$k['children']]);
            }
        }
    }


    public function dealMenuTagDelete(&$menuData, $tag_id)   {
        if (!is_array($menuData)) {
            return false;
        }
        foreach ($menuData as $key => $val) {
            if ($key === 'old_tags_id') {
                foreach ($val as $tagKey => $tagVaule) {
                    if ($tagVaule == $tag_id) {
                        unset($menuData['old_tags_id'][$tagKey]);
                        unset($menuData['old_tags'][$tagKey]);
                    }
                }
            }
            if (is_array($val)) {
                self::dealMenuTagDelete($menuData[$key], $tag_id);
            }
        }
        return $menuData;
    }


}
?>