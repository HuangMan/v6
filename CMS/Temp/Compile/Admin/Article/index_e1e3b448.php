<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><html>
<head>
	<title>文章列表</title>
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
URL = 'http://localhost/v6/index.php/Admin/Article/index';
APP = 'http://localhost/v6/CMS';
COMMON = 'http://localhost/v6/CMS/Common';
HDPHP = 'http://localhost/hdphp/hdphp';
HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
MODULE = 'http://localhost/v6/index.php/Admin';
CONTROLLER = 'http://localhost/v6/index.php/Admin/Article';
ACTION = 'http://localhost/v6/index.php/Admin/Article/index';
STATIC = 'http://localhost/v6/Static';
HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
VIEW = 'http://localhost/v6/CMS/Admin/View';
PUBLIC = 'http://localhost/v6/CMS/Admin/View/Public';
CONTROLLERVIEW = 'http://localhost/v6/CMS/Admin/View/Article';
HISTORY = 'http://localhost/v6/index.php/Admin/Article/edit/cid/15';
</script>
</head>
<body>
<div class="menu_list">
	<ul>
		 <li><a href="<?php echo U('index');?>"  class="action"> 文章列表 </a></li>
		 <li><a href="<?php echo U('add');?>"> 添加文章 </a></li>
	</ul>
</div>
<div>
	<table class='table2'>
		<thead>
			<tr>
				<th class='w50'>CID</th>
				<th>栏目名称</th>
				<th>作者</th>
				<th>点击次数</th>
				<th class='w150'>操作</th>
			</tr>
		</thead>
		<?php $hd["list"]["c"]["total"]=0;if(isset($article) && !empty($article)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($article));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($article,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

		<tr>
				<td><?php echo $c['id'];?></td>
				<td><?php echo $c['title'];?></td>
				<td><?php echo $c['author'];?></td>
				<td><?php echo $c['click'];?></td>
				<td>
					<a href="<?php echo U('add',array('pid'=>$c['id']));?>">查看</a> |
					<a href="<?php echo U('edit',array('cid'=>$c['id']));?>">编辑</a> |
					<a href="javascript:hd_ajax('<?php echo U(del);?>',{cid:<?php echo $c['id'];?>});">删除</a>
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