<?php 

    Class ArticleController extends Controller{

        private $_category;

        public function __init(){
        	$this->_category = S('category',false,0,array('dir'=>CACHE_PATH));
        }

    	public function index(){
    		$this->display();
    	}

    	public function add(){
    		if (IS_POST) {
    			
    		}
    		$this->assign('category',$this->_category);
    		$this->display();
    	}
    }




 ?>