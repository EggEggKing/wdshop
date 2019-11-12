<?php
namespace Home\Model;
use Think\Model\ViewModel;

class InfoViewModel extends ViewModel{
    public $viewFields=array(
        'Info'=>array('info_id','id_card','name','sex','phone','mail','country','address'),
        "Account"=>array('user_id','username','password','_on'=>'Account.user_id=Info.user_id'),
        "Shoes"=>array('s_name','size','price','stock','s_id'),
        "Car"=>array('buy_id','s_name','b_num','price','sales')
    );
}