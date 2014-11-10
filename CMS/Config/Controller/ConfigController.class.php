<?php 

  Class ConfigController extends Controller{

  	    private $_db;

  	    public function __init(){
  	    	$this->_db = K('config');
  	    }


  	   public function set_config(){
           if (IS_POST) {
             if ($this->_db->update_config()) {
               go('set_config');
             }
           };
            $this->config = $this->_db->get_config();
  	   	    $this->display();
  	   }
  }



 ?>