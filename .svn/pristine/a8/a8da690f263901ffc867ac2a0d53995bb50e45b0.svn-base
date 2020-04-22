<?php
namespace app\admin\controller\category;
use app\admin\controller\Common;

class Article extends Common
{

    protected $model = null;

    public function initialize(){

        parent::initialize();
        $this->model = model('ArticleCategory');

    }
    /***
     * 渲染主页
     */
    public function index(){
        return view();
    }

    // 数据接口
    public function lists(){
        if ($this->request->isGet()){
            $where=[];
            $key = input('param.keys');

            if($key){
                $where[] = ['category','like',"%$key%"];
            }

            $total = $this->model->where($where)->count();
            $list  = $this->model->where($where)->field('id,parentid,category,urlname,paixu,addtime,target,nofollow,is_check')->order('paixu desc,id asc')->select();
            $tree = new \Category();//实例化category
            $list = $tree->unlimitedForLevel($list,$html='<e>&nbsp;</e>',$pid=0,$level=0);
            foreach ($list as $key => $value) {
                $list[$key]['category'] = $value['html'].$value['category'];
            }
            $result = ["code"=>0,"count" => $total, "data" => $list];
            return json($result);
        }
    }


    // 添加分类
    // param 系统菜单父级id
    public function add(){
        if($this->request->isGet()){
            $id = intval(input('param.id'));
            if($id){
                $nav_list = $this->model->where(['is_check'=>1,'id'=>$id])->find();
            }else{
                $nav_list['id'] = 0;
                $nav_list['category'] = '顶级分类';
            }
            $this->assign('nav_list',$nav_list);
            return view();
        }
        elseif($this->request->isPost()){
            $data = input('param.');
            $res = $this->model->add($data);
            return json($res);
        }
    }

    // 修改分类
    // param 系统菜单父级id
    public function edit(){
        if($this->request->isGet()){
            $id = intval(input('param.id'));
            $data = $this->model->where(['is_check'=>1,'id'=>$id])->find();
            $this->assign('data',$data);

            $cate_list = $this->model->where(['is_check'=>1])->field('id,parentid,category')->order('paixu desc,id asc')->select();

            $tree = new \Category();
            $cate_list = $tree->unlimitedForLevelForEdit($cate_list,$html='--',$pid=0,$level=0,$id);
            $this->assign('cate_list',$cate_list);


            return view();
        }
        elseif($this->request->isPost()){
            $data = input('param.');
            $res = $this->model->edit($data);
            return json($res);
        }
    }

    //删除单条或多条信息
    public function delete(){
        $id = input('param.id');
        $ids = input('param.ids');
        if(!$id && !$ids){
            return json(['status'=>0,'msg'=>'参数为空']);
        }else{
            $ids = $ids ? $ids : $id;
            $res = $this->model->del($ids);
            return json($res);
        }
    }


}