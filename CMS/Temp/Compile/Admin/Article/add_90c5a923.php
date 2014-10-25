<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加文章</title>
	<script type='text/javascript' src='http://localhost/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/hdphp/hdphp/Extend/Org/hdjs/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://localhost/hdphp/hdphp/Extend/Org/hdjs/hdui/js/hdui.js'></script>
<link href='http://localhost/hdphp/hdphp/Extend/Org/hdjs/hdvalidate/css/hdvalidate.css' rel='stylesheet' media='screen'>
<script src='http://localhost/hdphp/hdphp/Extend/Org/hdjs/hdvalidate/js/hdvalidate.js'></script>
<script src='http://localhost/hdphp/hdphp/Extend/Org/cal/lhgcalendar.min.js'></script>
<script src='http://localhost/hdphp/hdphp/Extend/Org/hdjs/hdslide/js/hdslide.js'></script>
<script type='text/javascript'>
HOST = 'http://localhost';
ROOT = 'http://localhost/v6';
WEB = 'http://localhost/v6/index.php';
URL = 'http://localhost/v6/index.php/Admin/Article/add';
APP = 'http://localhost/v6/CMS';
COMMON = 'http://localhost/v6/CMS/Common';
HDPHP = 'http://localhost/hdphp/hdphp';
HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
MODULE = 'http://localhost/v6/index.php/Admin';
CONTROLLER = 'http://localhost/v6/index.php/Admin/Article';
ACTION = 'http://localhost/v6/index.php/Admin/Article/add';
STATIC = 'http://localhost/v6/Static';
HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/v6/CMS/Admin/View';
PUBLIC = 'http://localhost/v6/CMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/v6/CMS/Admin/View/Article';
</script>
    <script type="text/javascript" src="http://localhost/v6/CMS/Admin/View/Public/js/category.js"></script>
</head>
<body>
<div class="wrap">
 <div class="menu_list">
     <ul>
        <li><a href="<?php echo U('index');?>" > 文章列表 </a></li>
        <li><a href="javascript:update_cache();"> 更新文章缓存 </a></li>
     </ul>
 </div>
 <div class='title-header'>添加文章</div>
 <form action="" method='post' class='hd-form' enctype='multipart/form-data'>
         <div class="tab">
             <ul class="tab_menu">
                 <li lab="base">
                     <a> 基本设置 </a>
                 </li>
                 <li lab="ext" class="action">
                     <a> 其他设置 </a>
                 </li>
             </ul>
     <div class="tab_content">
         <div id="base">
             <table class="table1"> 
                <tr>
                     <th class='w100'> 标题 </th>
                     <td>
                         <input type="text" name="title" class='w300'/>
                     </td>
                 </tr>
                  <tr>
                     <th class='w100'> 栏目 </th>
                     <td>
                        <select name="catid">
                        <?php $hd["list"]["n"]["total"]=0;if(isset($category) && !empty($category)):$_id_n=0;$_index_n=0;$lastn=min(1000,count($category));
$hd["list"]["n"]["first"]=true;
$hd["list"]["n"]["last"]=false;
$_total_n=ceil($lastn/1);$hd["list"]["n"]["total"]=$_total_n;
$_data_n = array_slice($category,0,$lastn);
if(count($_data_n)==0):echo "";
else:
foreach($_data_n as $key=>$n):
if(($_id_n)%1==0):$_id_n++;else:$_id_n++;continue;endif;
$hd["list"]["n"]["index"]=++$_index_n;
if($_index_n>=$_total_n):$hd["list"]["n"]["last"]=true;endif;?>

                            <option value="<?php echo $n['cid'];?>"><?php echo $n['_name'];?></option>
                        <?php $hd["list"]["n"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                        </select>
                     </td>
                 </tr>
                <tr>
                     <th class='w100'> 文件上传 </th>
                     <td>
                         <input type="file" name="thumb" class='w300'/>
                     </td>
                 </tr>
                  <tr>
                     <th class='w100'> 正文 </th>
                     <td>
                         <script type="text/javascript" charset="utf-8" src="http://localhost/hdphp/hdphp/Extend/Org/Ueditor/ueditor.config.js"></script><script type="text/javascript" charset="utf-8" src="http://localhost/hdphp/hdphp/Extend/Org/Ueditor/ueditor.all.min.js"></script><script type="text/javascript">UEDITOR_HOME_URL="http://localhost/hdphp/hdphp/Extend/Org/Ueditor/"</script><script id="hd_content" name="content" type="text/plain"></script>
        <script type='text/javascript'>
        $(function(){
                var ue = UE.getEditor('hd_content',{
                serverUrl:'http://localhost/v6/index.php?m=Admin&c=Article&a=ueditor_upload&water='//图片上传脚本
                ,zIndex : 1000
                ,initialFrameWidth:"100%" //宽度1000
                ,initialFrameHeight:"300" //宽度1000
                ,imagePath:''//图片修正地址
                ,autoHeightEnabled:false //是否自动长高,默认true
                ,autoFloatEnabled:false //是否保持toolbar的位置不动,默认true
                ,toolbars:[
            ['fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'removeformat', 'formatmatch', 'autotypeset',
            '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', '|',
            'lineheight', '|','paragraph', 'fontfamily', 'fontsize', '|',
             'indent','justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
            'link', 'unlink', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'insertimage', 'emotion',   'map',  'insertcode',  'pagebreak','horizontal', '|',
            'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow',  'insertcol',  'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols']
            ]//工具按钮
//                ,enableAutoSave: false//关闭自动保存
                ,initialStyle:'p{line-height:1em; font-size: 14px; }'
            });
        })
        </script>
                     </td>
                 </tr>
             </table>
         </div>
         <div id="ext">
            <table class='table1'>
                <tr>
                     <th class='w100'> 关键字 </th>
                     <td>
                         <input type="text" name="keywords" class='w300'/>
                     </td>
                 </tr>
                 <tr>
                     <th class='w100'> 描述 </th>
                     <td>
                         <textarea name="description" class='w300 h100'>
                             
                         </textarea>
                     </td>
                 </tr>
                  <tr>
                     <th class='w100'> 点击次数 </th>
                     <td>
                         <input type="text" name="click" class='w300' value="100"/>
                     </td>
                 </tr>
                  <tr>
                     <th class='w100'> 来源 </th>
                     <td>
                         <input type="text" name="source" class='w300'/>
                     </td>
                 </tr>
                  <tr>
                     <th class='w100'> 作者 </th>
                     <td>
                         <input type="text" name="author" class='w300'/>
                     </td>
                 </tr>
                  <tr>
                     <th class='w100'> 添加时间 </th>
                     <td>
                        <input type="text" readonly="readonly" id="updatetime" name="updatetime" value="<?php echo date('Y/m/d h:i:s');?>" class="w150"/>
                        <script>
                        $('#updatetime').calendar({format: 'yyyy/MM/dd HH:mm:ss'});
                         </script>
                     </td>
                 </tr>
            </table>
         </div>
     </div>
 </div>
 	<div class="position-bottom">
        <input type="submit" class="hd-success" value=" 确定 "/>
    </div>
 </form>
 </div>
</body>
</html>