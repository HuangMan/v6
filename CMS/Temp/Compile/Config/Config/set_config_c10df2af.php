<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>网站配置</title>
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
URL = 'http://localhost/v6/index.php/Config/Config/set_config';
APP = 'http://localhost/v6/CMS';
COMMON = 'http://localhost/v6/CMS/Common';
HDPHP = 'http://localhost/hdphp/hdphp';
HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
MODULE = 'http://localhost/v6/index.php/Config';
CONTROLLER = 'http://localhost/v6/index.php/Config/Config';
ACTION = 'http://localhost/v6/index.php/Config/Config/set_config';
STATIC = 'http://localhost/v6/Static';
HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/v6/CMS/Config/View';
PUBLIC = 'http://localhost/v6/CMS/Config/View/Public';
CONTROLLERVIEW = 'http://localhost/v6/CMS/Config/View/Config';
HISTORY = 'http://localhost/v6/index.php/Config/Config/set_config';
</script>
</head>
<body>
	 <div class="wrap">
	 	<div class="title_header">
	 		网站配置
	 	</div>
       <form action="" method='post'>
       	<table class="table1">
          <?php $hd["list"]["n"]["total"]=0;if(isset($config) && !empty($config)):$_id_n=0;$_index_n=0;$lastn=min(1000,count($config));
$hd["list"]["n"]["first"]=true;
$hd["list"]["n"]["last"]=false;
$_total_n=ceil($lastn/1);$hd["list"]["n"]["total"]=$_total_n;
$_data_n = array_slice($config,0,$lastn);
if(count($_data_n)==0):echo "";
else:
foreach($_data_n as $key=>$n):
if(($_id_n)%1==0):$_id_n++;else:$_id_n++;continue;endif;
$hd["list"]["n"]["index"]=++$_index_n;
if($_index_n>=$_total_n):$hd["list"]["n"]["last"]=true;endif;?>

       		<tr>
       			<th class='w100'><?php echo $n['title'];?></th>
       			<td class='w300'>
       			   <?php echo $n['html'];?> 
       			</td>
       			<td>
       			   <?php echo $n['message'];?>
       			</td>
            <td>
               { $hd.config.<?php echo $n['name'];?>}
            </td>
       		</tr>
           <?php $hd["list"]["n"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
       	</table>
        <div class="position-bottom">
         <input type="submit" value="确定" class='hd-success'/> 
        </div> 
       </form>

	 </div>
</body>
</html>