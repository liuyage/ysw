<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>自定义菜单管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
</head>
<body class="body">
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<div class="title">
	<div class="left">自定义快捷菜单</div>
</div>
<div class="add">
<form action="?s=Admin-Nav-Update" method="post" name="myform" id="myform"> 
<ul style="padding:10px 0px">
 <textarea name="content" style="width:98%;height:320px"><?php if(is_array($array_nav)): $i = 0; $__LIST__ = $array_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><?php echo (htmlspecialchars($key)); ?>|<?php echo (htmlspecialchars($ppvod)); ?><?php echo(chr(13)); ?><?php endforeach; endif; else: echo "" ;endif; ?></textarea>
</ul>  
<ul class="footer"><input type="submit" name="submit" value="提交"> <input type="reset" name="reset" value="重置"></ul>
</form>
</div>
<?php if(($_GET['reload'])  ==  "1"): ?><script>window.parent.left.location.reload();</script><?php endif; ?>
<br /><center>Version：<font color="#FF0000"><?php echo L("ppvod_version");?></font></center>
</body>
</html>