<?php 
    /**
     * 文章管理控制器
     */
    Class ArticleController extends Controller{

        private $_category;
        private $db;

        public function __init(){
        	$this->_category = S('category',false,0,array('dir'=>CACHE_PATH));
            $this->db = K('article');
        }
        // 文章首页
    	public function index(){
            $article = $this->db->All();
            $this->assign('article',$article);
    		$this->display();
    	}
        // 添加文章
    	public function add(){
    		if (IS_POST) {
    			if ($this->db->addArticle()) {
                    $this->success('添加文章成功！','index');
                }else{
                    $this->error($this->db->error);
                }
    		}
    		$this->assign('category',$this->_category);
    		$this->display();
    	}

        public function edit(){
            $id = Q('cid',NULL,'intval');
            if (!isset($id)) {
               $this->error('参数传递错误');
            };
            if (IS_POST) {
               if ($this->db->editArticle()) {
                    $this->success('编辑文章成功！','index');
                }else{
                    $this->error($this->db->error);
                }
            }
            $data = $this->db->find($id);
            // p($data);
            $cate = S('category',false,0,array('dir'=>CACHE_PATH));
            $this->category = $cate;
            $this->field = $data;
            $this->display();
        }
    }




 ?>