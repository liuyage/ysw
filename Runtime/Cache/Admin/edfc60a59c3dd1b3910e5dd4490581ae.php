<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>静态缓存管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<script language="javascript">
$(document).ready(function(){
	$("a").click(function(){
		$(this).after(" <a id='loading' style='display:none;cursor: hand;'>loading...</a>");
		$ajaxurl = $(this).attr('href');
		$(this).ajaxStart(function(){
			$('#loading').show();
		});
		$.get($ajaxurl,null,function(data){
			$("#loading").html(' <font color=#ff6600>'+data+'</font> ');
			window.setTimeout(function(){
				$("#loading").remove();
			},2000);
		});	
		$("#loading").click(function(){
			$("#loading").remove();
			return false;
		});
		return false;
	});	
});
</script>
</head>
<body class="body">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead><tr><th colspan="2" class="r" style="text-align:left">数据缓存管理</th></tr></thead>
  <tbody> 
  <tr>
    <td class="tl"><span>全站</span>所有数据缓存：</td>
    <td class="tr"><a href="?s=Admin-Cache-Dataclear">一键清空</a></td>
  </tr>
  </tbody>
  <tbody> 
  <tr>
    <td class="tl"><span>模板循环标签</span>数据：</td>
    <td class="tr"><a href="?s=Admin-Cache-Dataforeach">点此清除</a></td>
  </tr>
  </tbody>  
  <tbody> 
  <tr>
    <td class="tl"><span>今日更新的</span>视频数据：</td>
    <td class="tr"><a href="?s=Admin-Cache-Datadayvod">点此清除</a></td>
  </tr>
  </tbody>   
  <tbody> 
  <tr>
    <td class="tl"><span>今日更新的</span>新闻数据：</td>
    <td class="tr"><a href="?s=Admin-Cache-Datadaynews">点此清除</a></td>
  </tr>
  </tbody>
  <tbody> 
  <tr>
    <td class="tl"><span>今日更新的</span>专题数据：</td>
    <td class="tr"><a href="?s=Admin-Cache-Datadayspecial">点此清除</a></td>
  </tr>
  </tbody>             
</table>
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead><tr><th colspan="2" class="r" style="text-align:left">网站页面缓存管理</th></tr></thead>
  <tbody> 
  <tr>
    <td class="tl">一键删除所有页面缓存：</td>
    <td class="tr"><a href="?s=Admin-Cache-Delhtml-id-all">点此清除</a></td>
  </tr>
  </tbody>
  <tbody> 
  <tr>
    <td class="tl"><span>当天视频</span>缓存文件：</td>
    <td class="tr"><a href="?s=Admin-Cache-Delhtml-id-day">点此清除</a></td>
  </tr>
  </tbody>   
  <tbody> 
  <tr>
    <td class="tl"><span>网站首页</span>缓存文件：</td>
    <td class="tr"><a href="?s=Admin-Cache-Delhtml-id-index">点此清除</a></td>
  </tr>
  </tbody>
  <tbody> 
  <tr>
    <td class="tl"><span>视频栏目页</span>缓存文件：</td>
    <td class="tr"><a href="?s=Admin-Cache-Delhtml-id-vodlist">点此清除</a></td>
  </tr>
  </tbody>
  <tbody> 
  <tr>
    <td class="tl"><span>视频内容页</span>缓存文件：</td>
    <td class="tr"><a href="?s=Admin-Cache-Delhtml-id-vodread">点此清除</a></td>
  </tr>
  </tbody>
  <tbody> 
  <tr>
    <td class="tl"><span>视频播放页</span>缓存文件：</td>
    <td class="tr"><a href="?s=Admin-Cache-Delhtml-id-vodplay">点此清除</a></td>
  </tr>
  </tbody> 
  <tbody> 
  <tr>
    <td class="tl"><span>新闻栏目页</span>缓存文件：</td>
    <td class="tr"><a href="?s=Admin-Cache-Delhtml-id-newslist">点此清除</a></td>
  </tr>
  </tbody>
  <tbody> 
  <tr>
    <td class="tl"><span>新闻内容页</span>缓存文件：</td>
    <td class="tr"><a href="?s=Admin-Cache-Delhtml-id-newsread">点此清除</a></td>
  </tr>
  </tbody> 
  <tbody> 
  <tr>
    <td class="tl"><span>数据调用列表</span>缓存文件：</td>
    <td class="tr"><a href="?s=Admin-Cache-Delhtml-id-ajax">点此清除</a></td>
  </tr>
  </tbody>               
</table>
<br /><center>Version：<font color="#FF0000"><?php echo L("ppvod_version");?></font></center>
</body>
</html>