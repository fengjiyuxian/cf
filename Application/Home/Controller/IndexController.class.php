<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$U=M('user');
    	$P=M('project');
    	$oproj=$P->where('id=2')->select();
    	$fproj=$P->where('id=1')->select();    	
    	$this->assign('ongoing_list',$oproj);
    	$this->assign('finished_list',$fproj);
    	$this->name = 'thinkphp'; // 进行模板变量赋值
        $this->display();
    }
    public function projdetail($id=0){
    	echo $id;
    	exit();
    	$this->name = 'thinkphp'; // 进行模板变量赋值
        $this->display();
    }
    public function investlists(){
    	$this->name = 'thinkphp'; // 进行模板变量赋值
        $this->display();
    }
}