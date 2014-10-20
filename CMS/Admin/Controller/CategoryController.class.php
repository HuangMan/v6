<?php 

   /**
    * 分类控制器
    */
   Class CategoryController extends Controller{
        private $db;

        public function __init(){
        	$this->db = K('category');
        }

         // 分类首页显示
   	     public function index(){
   	     	$cate = K('category')->getAllCate();
          $data = Data::tree($cate,'cname');
          // p($cate);
   	     	$this->assign('category',$data);
   	     	$this->display();
   	     }

         /**
          * 分类添加方法
          */
         public function add(){
          if (IS_POST) {
            if (!$this->db->create()){
              $this->ajax(array('state'=>0,'message'=>'添加分类失败'));
            }else{
              $this->db->add();
              $this->ajax(array('state'=>1,'message'=>'添加分类成功'));
            }
            
          }
          $this->display();
         }


         public function edit(){
          $cid = Q('cid',0,'intval');

          if (IS_POST) {
           if (!$this->db->create()){
              $this->ajax(array('state'=>0,'message'=>'栏目修改失败'));
            }else{
              $this->db->where(array('cid'=>$cid))->save();
              $this->ajax(array('state'=>1,'message'=>'栏目修改成功'));
            }
          }
           print_const();
          $cate = K('category')->getData($cid);
          $category = K('category')->getAllCate();
          $data = Data::tree($category,'cname');
          foreach ($data as $k => $v) {
            // 将父级栏目定义为选中状态
            if ($v['cid'] == $cate['pid']) {
              $data[$k]['select'] = "selected='selected'"; 
            };
            // 将自身与子集定义为禁止选择状态
            if ($v['cid'] == $cid || Data::isChild($data,$v['cid'],$cid)) {
              $data[$k]['disabled'] = "disabled='disabled' class='disabled'";
            }
          }
          // p($data);
          $this->assign('cate',$cate);
          $this->assign('category',$data);
          $this->display();
         }
   }

 ?>