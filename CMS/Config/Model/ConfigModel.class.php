<?php 
  /**
   * 配置项模型
   */
  Class ConfigModel extends Model{

  	  public $table="config";

  	  public function get_config(){
        $data = $this->All();
        foreach ($data as $k => $v) {
          $data[$k]['html'] = $this->get_config_html($v);
        };
        // p($data);
        return $data;
      }

      private function get_config_html($c){
            switch ($c['show_type']) {
              case 1:
                $html = "<input type='text' name='{$c['id']}' value='{$c['value']}' class='w200'/>";
                break;
              case 2:
                $option = explode(',', $c['option']);
                $html = "";
                foreach ($option as $v) {
                 $tmp = explode('|', $v);
                 $checked = $c['value'] == $tmp[0]?'checked=""':"";
                 $html .= "<label><input type='radio' name='{$c['id']}' value='{$tmp[0]}' $checked/>{$tmp[1]}</label>&nbsp;&nbsp;&nbsp;&nbsp;";
                };
                break;
              case 3:
                $html = "<textarea name='{$c['id']}' class='w200 h100'>{$c['value']}</textarea>";
                break;
            }
               return $html;
      }

      // 更新配置项
      public function update_config(){
          foreach ($_POST as $k => $v) {
            $this->save(array('id'=>$k,'value'=>$v));
          };
          $config = $this->All();
          $d = array();
          foreach ($config as $v) {
            $d[$v['name']] = $v['value'];
          };
          // 更新配置文件
          $data = "<?php if(!defined('HDPHP_PATH'))exit;\nreturn ".var_export($d,true)."\n?>";
          file_put_contents('Data/Config/config.inc.php', $data);
          return true;
      }

  }


 ?>