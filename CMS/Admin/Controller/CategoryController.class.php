<?php 

   /**
    * 分类控制器
    */
   Class CategoryController extends Controller{
        private $db;
        private $category;

        public function __init(){
        	$this->db = K('category');
          $this->category = S('category',false,0,array('dir'=>CACHE_PATH));
        }

         // 分类首页显示
   	     public function index(){
   	     	$cate = $this->category;
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

        // ajax方法删除栏目
         public function del(){
          $cid = Q('cid',0,'intval');
            // 判断当前栏目下是否有子栏目
           $son = $this->db->where(array('pid'=>$cid))->All();
            if ($son) {
              $this->error('请先删除子栏目');
            }else{
              if ($this->db->delCate($cid)) {
                $this->ajax(array('state'=>1,'message'=>'删除栏目成功！'));
              }else{
                $this->ajax(array('state'=>0,'message'=>'删除栏目失败！'));
              }
              ;
            }
         }

         /**
          * [update_cache 更新缓存]
          * @return [type] [description]
          */
         public function update_cache(){
               $cate = Data::tree($this->db->getAllCate(),'cname');
             if (S('category',$cate,0,array('dir'=>CACHE_PATH))) {
               $this->success('更新缓存成功！',U('index'));
             }else{
               $this->error('更新缓存失败!');
             }
             
         }
   }

 ?>