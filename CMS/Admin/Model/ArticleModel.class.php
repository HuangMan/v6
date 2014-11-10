<?php 

   Class ArticleModel extends Model{
           
          public $table='article';

          public $auto = array(
               array('addtime','time','function',2,1),
               array('updatetime','time','function',2,3),
               array('admin_id','_getAdminId','method',2,3),
               array('author','_author','method',2,3)
          	);
          // 获得管理员ID
          public function _getAdminId(){
          	return session('aid');
          }
          // 获得作者信息
          public function _author(){
          	return empty($_POST['author'])?session('username'):$_POST['author'];
          }
          // 添加文章
          public function addArticle(){
          	    if ($this->create()) {
          	    	if (!empty($_FILES['thumb']['name'])) {
          	    		$upload = new Upload('upload/article/'.date('Y/m/d'));
          	    		$file = $upload->upload();
          	    		$this->data['thumb'] =$file[0]['path']; 
          	    	};	
          	    	return $this->add();
          	    }

          }


          public function editArticle(){
               if ($this->create()) {
                    // 如果上传图片不为空，表示有图片上传则进行上传操作
                    if (!empty($_FILES['thumb']['name'])) {
                         $upload = new Upload('upload/article/'.date('Y/m/d'));
                         $file = $upload->upload();
                         $this->data['thumb'] =$file[0]['path']; 
                         // 删除旧的图片
                         $thumb = $this->where(array('id'=>Q('id')))->getField('thumb');
                         if (is_file($thumb)) unlink($thumb);
                    };   
                    return $this->save();
                   }
          }
   }



 ?>