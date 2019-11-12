<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
class UserController extends Controller {
    public function login(){
        $this->display();
    }

    public function do_login()
    {
        $name = I("post.username");
        $passwd = I("post.passwd");
        $model_a=new Model('Account');
        $account=$model_a->where("username='%s'",$name)->find();
        if(empty($account)||$account['password']!=$passwd)
        {
            $this->error('账户或密码错误');
        }
        session('account.userId',$account['user_id']);
        session('account.username',$account['username']);
        $this->success("登录成功,3秒后跳转商城!", U('index/shopping'), 3);

    }

    public function logout()
    {
        if (!session('user.userId')) {
            $this->error('你还没登录，请登录');
        }
        session_destroy();
        $this->success('退出登录成功,正在返回主页', U('Index/index'));
    }

    public function register(){
        $this->display();
    }

    public function do_register()
    {
        $name = I("post.username");
        $pw = I('post.password');
        $rpw = I('post.repassword');
        if(empty($name))
            $this->error('用户名不能为空,请重新输入', U('register'), 3);
        if(empty($pw))
            $this->error('密码不能为空,请重新输入', U('register'), 3);
        if(empty($rpw))
            $this->error('确认密码为空,请重新输入', U('register'), 3);
        elseif ($pw != $rpw)
            $this->error("两次密码不同,请重新输入", U('register'), 3);
        #检测账号
        $model=new Model('Account');
        $user=$model->where(array('username'=>$name))->find();
        if(!empty($user))
        {
            $this->error('用户名已经存在');
        }
        $data=array(
            'username'=>$name,
            'password'=>$pw
        );
        if(!($model->create($data)&&$model->add()))
        {
            $this->error('注册失败!'.$model->getDbError());
        }
            $this->success("注册成功,请完善信息后登陆!", U('pinfo'), 3);

    }


        public function pinfo(){
            $this->display();
        }

        public function do_pinfo(){
            $username = I("post.username");
            $name = I("post.name");
            $id_card = I('post.id_card');
            $sex = I('post.sex');
            $phone = I('post.phone');
            $mail = I('post.mail');
            $country = I('post.country');
            $address = I('post.address');

            if(empty($username))
                $this->error("用名为空,请重新输入", U('pinfo'), 3);
            elseif (empty($name))
                $this->error("姓名为空,请重新输入", U('pinfo'), 3);
            elseif (empty($id_card))
                $this->error("身份证为空,请重新输入", U('pinfo'), 3);
            elseif (strlen($id_card)!=18)
                $this->error("请输入正确的18位身份证号码", U('pinfo'), 3);
            elseif (empty($sex))
                $this->error("性别为空,请重新输入", U('pinfo'), 3);
            elseif (empty($phone))
                $this->error("电话为空,请重新输入", U('pinfo'), 3);
            elseif (!is_numeric($phone))
                $this->error("电话号码必须全为数字", U('pinfo'), 3);
//            elseif (!empty($mail)&&!ereg("([0-9A-Za-z]+)([@])([0-9A-Za-z+](.)([0-9A-Za-z]+)",$mail))
//                $this->error("请输入合法的邮箱", U('pinfo'), 3);
            $model=new Model('info');
            $idcard=$model->where(array('id_card'=>$id_card))->find();
            $tel=$model->where(array('phone'=>$phone))->find();
            if(!empty($idcard))
            {
                $this->error('身份证已经存在');
            }
            if(!empty($tel))
            {
                $this->error('电话已经使用过');
            }
            $data=array(
                'username'=>$username,
                'name' => $name,
                'id_card' => $id_card,
                'sex' => $sex,
                'phone' => $phone,
                'mail' => $mail,
                'country' => $country,
                'address' => $address
            );
            if(!($model->create($data)&&$model->add()))
            {
                $this->error('信息填写失败!'.$model->getDbError());
            }
                $this->success("信息完善成功！请重新登录", U('login'), 3);

            }

            function login_info(){
                $this->display();
            }

            function do_login_info(){
                $name = I("post.username");
                $passwd = I("post.passwd");
                $model_a=new Model('Account');
                $account=$model_a->where("username='%s'",$name)->find();
                if(empty($account)||$account['username']!='xdc')
                {
                    $this->error('账户错误');
                }
                elseif ($account['password']!=$passwd)
                {
                    $this->error('密码错误');
                }
                session('account.userId',$account['user_id']);
                session('account.username',$account['username']);
                $this->success("登录成功,3秒后跳转信息页面!", U('index/account'), 3);
            }

}