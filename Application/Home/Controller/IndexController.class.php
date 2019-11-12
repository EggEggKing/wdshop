<?php
namespace Home\Controller;
use Home\Model\InfoViewModel;
use Think\Controller;
use Think\Model;
use Think\Page;
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
class IndexController extends Controller {
    public function checkLogin_root()
    {
        if(session('account.username')!='xdc'){
            $this->error('请使用管理员用户登录后再尝试',U("User/login_info"));
        }
    }

    public function index()
    {
        $this->display();
    }

    public function shopping()
    {
        $this->display();
    }

    public function shopping_car()
    {
        $m=M('car');
        $num=$m->count();
        echo $num;
        $p=new Page($num,3);
        $show=$p->show();
        $list=$m->order('buy_id desc')->limit($p->firstRow.','.$p->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
    }

    public function account()
    {
        $this->checkLogin_root();
        $m=M('info');
        $num=$m->count();
        echo $num;
        $p=new Page($num,3);
        $show=$p->show();
        $list=$m->order('info_id desc')->limit($p->firstRow.','.$p->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();

    }

    public function shoes_db()
    {
        $m=M('shoes');
        $num=$m->count();
        echo $num;
        $p=new Page($num,3);
        $show=$p->show();
        $list=$m->order('s_id desc')->limit($p->firstRow.','.$p->listRows)->select();
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
    }

    public function shoes_add()
    {
        $this->display();
    }

    public function do_add()
    {
        $s_id=I('post.s_id');
        $s_name=I('post.s_name');
        $size=I('post.size');
        $price=I('post.price');
        $stock=I('post.stock');
        if(empty($s_id))
            $this->error('编号不能为空');
        elseif(empty($s_name))
            $this->error('鞋名不能为空');
        elseif(mb_strlen($s_name,'utf-8')>50)
            $this->error("鞋名最多50字");
        elseif(empty($size))
                $this->error('尺码不能为空');
        elseif(empty($price))
                $this->error('价格不能为空');
        elseif(empty($stock))
            $this->error('库存不能为空');

        $n=new Model('Shoes');
        $data=array(
            's_id'=>$s_id,
            's_name'=>$s_name,
            'size'=>$size,
            'price'=>$price,
            'stock'=>$stock,
        );
        if(!($n->create($data)&&$n->add())){
            $this->error('添加失败');
        }
        $this->success('添加成功',U('shoes_db'));
    }

    public function delete()
    {
        $id=I('id');
        if(empty($id)){
            $this->error('缺少参数');
        }
        $m=new Model('shoes');
        if(!$m->where(array('s_id'=>$id,'user_id'=>session('user.userId')))->delete()){
            $this->error('删除失败');
        }
        $this->success('删除成功,删错了工资里扣哈',U('shoes_db'));
    }

    public function pay()
    {
        $this->display();
    }
}