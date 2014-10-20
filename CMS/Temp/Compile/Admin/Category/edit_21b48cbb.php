<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>编辑栏目</title>
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
URL = 'http://localhost/v6/index.php/Admin/Category/edit/cid/7';
APP = 'http://localhost/v6/CMS';
COMMON = 'http://localhost/v6/CMS/Common';
HDPHP = 'http://localhost/hdphp/hdphp';
HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
MODULE = 'http://localhost/v6/index.php/Admin';
CONTROLLER = 'http://localhost/v6/index.php/Admin/Category';
ACTION = 'http://localhost/v6/index.php/Admin/Category/edit';
STATIC = 'http://localhost/v6/Static';
HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/v6/CMS/Admin/View';
PUBLIC = 'http://localhost/v6/CMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/v6/CMS/Admin/View/Category';
HISTORY = 'http://localhost/v6/index.php/Category/Category/index';
</script>
    <script type="text/javascript" src="http://localhost/v6/CMS/Admin/View/Public/js/ajax.js"></script>
    <link type="text/css" rel="stylesheet" href="http://localhost/v6/CMS/Admin/View/Public/css/css.css"/>
</head>
<body>
 <div class="menu_list">
     <ul>
        <li><a href="<?php echo U('index');?>" > 栏目列表 </a></li>

        <li><a href="javascript:update_cache();"> 更新栏目缓存 </a></li>
     </ul>
 </div>
 <div class='title-header'>编辑栏目</div>
 <form action="" method='post' class='hd-form' onsubmit="return hd_submit_confirm(this,'<?php echo U('index');?>')">
 	<table class='table1'>
 		<tr>
 			<th class='w100'>栏目名称</th>
 			<td><input type="text" name='cname' class='w200' value="<?php echo $cate['cname'];?>"/></td>
 		</tr>
        <tr>
            <th class="w100">父级栏目</th>
            <td>
               <select name='pid'>
                <option value="0">==一级栏目==</option>
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

                    <option value="<?php echo $n['cid'];?>" <?php echo $n['select'];?> <?php echo $n['disabled'];?>><?php echo $n['_name'];?></option>
                <?php $hd["list"]["n"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
            </select> 
            <span class='message'>灰色栏目不可选择</span>
            </td> 
        </tr>
 		<tr>
 			<th class='w100'>关键字</th>
 			<td><input type="text" name='keywords' class='w200' value="<?php echo $cate['keywords'];?>"/></td>
 		</tr>
 		<tr>
 			<th class='w100'>栏目描述</th>
 			<td>
 			<textarea name="description" class='w300 h150'><?php echo $cate['description'];?></textarea>	
 			</td> 
 		</tr>
 	</table>
 	<div class="position-bottom">
        <input type="submit" class="hd-success" value=" 确定 "/>
    </div>
 </form>
</body>
</html>