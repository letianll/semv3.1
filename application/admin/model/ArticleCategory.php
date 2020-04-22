<?php
namespace app\admin\model;
use think\Model;


class ArticleCategory extends Model
{
    //指明当前模型对应的数据库完整表名
    protected $table = 'hope_article_category';

    public function add($data){
        if($data['seo_keywords']){
            $data['seo_keywords'] = array_filter($data['seo_keywords']);
            $data['seo_keywords'] = implode(',',$data['seo_keywords']);
        }
        $validate = validate('ArticleCategory');
        if($validate->check($data)){
            $res = $this->allowField(true)->save($data);
            if($res){
                model('Log')->add('add','添加了文章分类：'.$data['category']);
                return ['status'=>1,'msg'=>'添加成功'];
            }else{
                return ['status'=>0,'msg'=>$this->getError()];
            }
        }else{
            return ['status'=>0,'msg'=>$validate->getError()];
        }
    }

	public function edit($data){
        if($data['seo_keywords']){
            $data['seo_keywords'] = array_filter($data['seo_keywords']);
            $data['seo_keywords'] = implode(',',$data['seo_keywords']);
        }
        $validate = validate('ArticleCategory');
        if($validate->check($data)){        
            $res = $this->allowField(true)->save($data, ['id' => $data['id']]);
            if($res){
                model('Log')->add('edit','修改了文章分类：'.$data['category']);
                return ['status'=>1,'msg'=>'修改成功'];
            }else{
                return ['status'=>0,'msg'=>$this->getError()];
            }
        }else{
            return ['status'=>0,'msg'=>$validate->getError()];
        }
	}

    public function del($ids){
        $map[] = ['id','IN',$ids];
        $res = $this->where($map)->delete();
        if($res){
            model('Log')->add('delete','删除了文章分类：'.$ids);
            return ['status'=>1,'msg'=>'删除成功'];
        }else{
            return ['status'=>0,'msg'=>$this->getError()];
        }
    }

}