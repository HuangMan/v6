<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><html>
<head>
	<title>栏目列表</title>
	<meta charset='utf-8'/>
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
URL = 'http://localhost/v6/index.php/Category/Category/index';
APP = 'http://localhost/v6/CMS';
COMMON = 'http://localhost/v6/CMS/Common';
HDPHP = 'http://localhost/hdphp/hdphp';
HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
MODULE = 'http://localhost/v6/index.php/Admin';
CONTROLLER = 'http://localhost/v6/index.php/Admin/Category';
ACTION = 'http://localhost/v6/index.php/Admin/Category/index';
STATIC = 'http://localhost/v6/Static';
HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/v6/CMS/Admin/View';
PUBLIC = 'http://localhost/v6/CMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/v6/CMS/Admin/View/Category';
HISTORY = 'http://localhost/v6/';
</script>
</head>
<body>
<div class="menu_list">
	<ul>
		 <li><a href="<?php echo U('index');?>"  class="action"> 栏目列表 </a></li>
		 <li><a href="<?php echo U('add');?>"> 添加顶级栏目 </a></li>
		 <li><a href="<?php echo U('update_cache');?>"> 更新栏目缓存 </a></li>
	</ul>
</div>
<div>
	<table class='table2'>
		<thead>
			<tr>
				<td class='w50'>CID</td>
				<td>栏目名称</td>
				<td class='w150'>操作</td>
			</tr>
		</thead>
		<?php $hd["list"]["c"]["total"]=0;if(isset($category) && !empty($category)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($category));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($category,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

		<tr>
				<td><?php echo $c['cid'];?></td>
				<td><?php echo $c['_name'];?></td>
				<td>
					<a href="<?php echo U('add',array('pid'=>$c['cid']));?>">添加子栏目</a> |
					<a href="<?php echo U('edit',array('cid'=>$c['cid']));?>">编辑</a> |
					<a href="javascript:hd_ajax('<?php echo U(del);?>',{cid:<?php echo $c['cid'];?>});">删除</a>
				</td>
			</tr>
		<?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
	</table>
</div>
</body>
</html>