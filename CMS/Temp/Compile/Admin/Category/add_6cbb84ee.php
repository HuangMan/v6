<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加栏目</title>
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
URL = 'http://localhost/v6/index.php/Admin/Category/add';
APP = 'http://localhost/v6/CMS';
COMMON = 'http://localhost/v6/CMS/Common';
HDPHP = 'http://localhost/hdphp/hdphp';
HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
MODULE = 'http://localhost/v6/index.php/Admin';
CONTROLLER = 'http://localhost/v6/index.php/Admin/Category';
ACTION = 'http://localhost/v6/index.php/Admin/Category/add';
STATIC = 'http://localhost/v6/Static';
HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/v6/CMS/Admin/View';
PUBLIC = 'http://localhost/v6/CMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/v6/CMS/Admin/View/Category';
HISTORY = 'http://localhost/v6/index.php/Admin/Category/index';
</script>
    <script type="text/javascript" src="http://localhost/v6/CMS/Admin/View/Public/js/ajax.js"></script>
</head>
<body>
 <div class="menu_list">
     <ul>
        <li><a href="<?php echo U('index');?>" > 栏目列表 </a></li>
        <li><a href="javascript:;" class="action"> 添加栏目 </a></li>
        <li><a href="javascript:update_cache();"> 更新栏目缓存 </a></li>
     </ul>
 </div>
 <div class='title-header'>添加栏目</div>
 <form action="" method='post' class='hd-form' onsubmit="return hd_submit(this,'<?php echo U(index);?>')">
    <input type="hidden" name="pid" value='<?php echo _default($_GET['pid'],0);?>'>
 	<table class='table1'>
 		<tr>
 			<th class='w100'>栏目名称</th>
 			<td><input type="text" name='cname' class='w200'/></td>
 		</tr>
 		<tr>
 			<th class='w100'>关键字</th>
 			<td><input type="text" name='keywords' class='w200'/></td>
 		</tr>
 		<tr>
 			<th class='w100'>栏目描述</th>
 			<td>
 			<textarea name="description" class='w300 h150'></textarea>	
 			</td> 
 		</tr>
 	</table>
 	<div class="position-bottom">
        <input type="submit" class="hd-success" value=" 确定 "/>
    </div>
 </form>
</body>
</html>