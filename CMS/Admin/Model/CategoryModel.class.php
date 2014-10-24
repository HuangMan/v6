<?php 

  Class CategoryModel extends Model{

  	  public $table="category";

  	  public $validate = array(
          array('cname','nonull','请填写栏目名称',2,3),
          array('keywords','nonull','请填写栏目关键字',2,3),
          array('description','nonull','请填写栏目描述',2,3)
  	  	);


      // 获得全部数据
  	  public function getAllCate(){
  	  	  return $this->All();
  	  }
      // 获得单个数据
      public function getData($cid){
          return $this->where(array('cid'=>$cid))->find();
      }
      
      public function delCate($cid){
          $this->where(array('cid'=>$cid))->del();
          return true;
      }

  }


 ?>