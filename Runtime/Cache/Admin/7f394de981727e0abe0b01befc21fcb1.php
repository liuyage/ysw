<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台用户管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='__PUBLIC__/css/admin-style.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/jquery.js"></script>
<script language="JavaScript" type="text/javascript" charset="utf-8" src="__PUBLIC__/js/admin.js"></script>
</head>
<body class="body">
<form action="?s=Admin-Html-Maps" method="post" name="myform" id="myform">
<table border="0" cellpadding="0" cellspacing="0" class="table">
<thead><tr><th colspan="2" style="text-align:left">静态网页生成选项 <?php if(!empty($jumpurl)): ?><a href="<?php echo ($jumpurl); ?>" style="font-weight:bold;color:#FF0000">上一次有生成静态网任务未完成，是否接着生成?</a><?php endif; ?></th></thead>
<tr>
  <td colspan="2" class="tr">
  <?php if(($url_html)  ==  "1"): ?><input type="button" value="生成全站" class="submit" onClick="post('?s=Admin-Create-Vodclass-ids-<?php echo ($list_vod_all); ?>-jump-1');" />
  <input type="button" value="生成首页" class="submit" onClick="post('?s=Admin-Create-Index');"/>
  <input type="button" value="生成网站地图" class="submit" onClick="post('?s=Admin-Create-Maps');"/>
  <input type="button" value="生成自定义模板" class="submit" onClick="post('?s=Admin-Create-Mytpl');"/>
  <input type="button" value="生成专题列表" class="submit" onClick="post('?s=Admin-Create-Speciallist');" />
  <input type="button" value="生成专题内容"  class="submit" onClick="post('?s=Admin-Create-Specialclass');"/>  
  <?php else: ?>
  <input type="button" value="生成全站" class="submit" onClick="post('?s=Admin-Create-Vodclass-ids-<?php echo ($list_vod_all); ?>-jump-1');" disabled/>
  <input type="button" value="生成首页" class="submit" onClick="post('?s=Admin-Create-Index');" disabled/>
  <input type="button" value="生成网站地图" class="submit" onClick="post('?s=Admin-Create-Maps');" disabled/>
  <input type="button" value="生成自定义模板" class="submit" onClick="post('?s=Admin-Create-Mytpl');" disabled/>
  <input type="button" value="生成专题列表" class="submit" onClick="post('?s=Admin-Create-Vodclass-ids-<?php echo ($list_vod_all); ?>-jump-1');" disabled/>
  <input type="button" value="生成专题内容"  class="submit" onClick="post('?s=Admin-Create-Newsclass');" disabled/><?php endif; ?>
  </td>
</tr>
<tr>
  <td colspan="2" class="tr">生成影视列表：
    <select name="ids_list_1"><option value="<?php echo ($list_vod_all); ?>">全部分类</option><?php if(is_array($list_vod)): $i = 0; $__LIST__ = $list_vod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>"><?php echo ($ppvod["list_name"]); ?></option><?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>">├ <?php echo ($ppvod["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>
<?php if(($url_html)  ==  "1"): ?><input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Vodlist');" <?php if(($url_html_list)  !=  "1"): ?>disabled<?php endif; ?>/>
<?php else: ?>
<input type="button" value="生成"  class="submit" onClick="post('?s=Admin-Create-Vodlist');" disabled/><?php endif; ?></td>
</tr>
<tr>
  <td width="40%" class="tr">生成影视内容：
    <select name="ids_1"><option value="<?php echo ($list_vod_all); ?>">全部影片</option><?php if(is_array($list_vod)): $i = 0; $__LIST__ = $list_vod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>"><?php echo ($ppvod["list_name"]); ?></option><?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>">├ <?php echo ($ppvod["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>
    <?php if(($url_html)  ==  "1"): ?><input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Vodclass');" />
  	<?php else: ?>
  	<input type="button" value="生成"  class="submit" onClick="post('?s=Admin-Create-Vodclass');" disabled/><?php endif; ?></td>
  <td width="60%" class="tr">生成影视内容页按时间：
    <select name="mday_1">
      <option value="1">当天</option>
      <option value="2">1天前</option>
      <option value="3">2天前</option>
      <option value="4">3天前</option>
      <option value="5">4天前</option>
      <option value="6">5天前</option>
      <option value="7">7天前</option>
      <option value="30">30天前</option>
      <option value="100">100天前</option>
    </select>
    <?php if(($url_html)  ==  "1"): ?><input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Vodday');" />
  	<?php else: ?>
  	<input type="button" value="生成"  class="submit" onClick="post('?s=Admin-Create-Vodday');" disabled/><?php endif; ?></td>
</tr>
<tr>
  <td colspan="2" class="tr">生成新闻列表：
	<select name="ids_list_2"><option value="<?php echo ($list_news_all); ?>">全部新闻</option><?php if(is_array($list_news)): $i = 0; $__LIST__ = $list_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>"><?php echo ($ppvod["list_name"]); ?></option><?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>">├ <?php echo ($ppvod["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>
    <?php if(($url_html)  ==  "1"): ?><input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Newslist');" />
  	<?php else: ?>
  	<input type="button" value="生成"  class="submit" onClick="post('?s=Admin-Create-Newslist');" disabled/><?php endif; ?></td>
</tr>
<tr>
  <td class="tr">生成新闻内容：
<select name="ids_2"><option value="<?php echo ($list_news_all); ?>">全部新闻</option><?php if(is_array($list_news)): $i = 0; $__LIST__ = $list_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>"><?php echo ($ppvod["list_name"]); ?></option><?php if(is_array($ppvod['son'])): $i = 0; $__LIST__ = $ppvod['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($ppvod["list_id"]); ?>">├ <?php echo ($ppvod["list_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?></select>
    <?php if(($url_html)  ==  "1"): ?><input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Newsclass');" />
  	<?php else: ?>
  	<input type="button" value="生成"  class="submit" onClick="post('?s=Admin-Create-Newsclass');" disabled/><?php endif; ?></td>
  <td class="tr">生成新闻内容页按时间：
	<select name="mday_2">
      <option value="1">当天</option>
      <option value="2">1天前</option>
      <option value="3">2天前</option>
      <option value="4">3天前</option>
      <option value="5">4天前</option>
      <option value="6">5天前</option>
      <option value="7">7天前</option>
      <option value="30">30天前</option>
      <option value="100">100天前</option>
    </select>
    <?php if(($url_html)  ==  "1"): ?><input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Newsday');" />
  	<?php else: ?>
  	<input type="button" value="生成"  class="submit" onClick="post('?s=Admin-Create-Newsday');" disabled/><?php endif; ?></td>
</tr>
<tr >
  <td colspan="2" class="tr">
  	百度SiteMap： 总输出 <input id="baidu" name="baiduall" type="text" size="5" maxlength="5" value="50000" class="ct"> 条 
    每页输出 <input id="baidu" name="baidu" type="text" size="5" maxlength="5" value="10000" class="ct"> 条 
  	<?php if(($url_html)  ==  "1"): ?><input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Baidu');" />
  	<?php else: ?>
  	<input type="button" value="生成"  class="submit" onClick="post('?s=Admin-Create-Baidu');" disabled/><?php endif; ?></td>
</tr>
<tr >
  <td colspan="2" class="tr">
  谷歌SiteMap： 总输出 <input id="google" name="googleall" type="text" size="5" value="5000" maxlength="5" class="ct"> 条 
  每页输出 <input id="google" name="google" type="text" size="5" maxlength="5" value="1000" class="ct"> 条 
  <?php if(($url_html)  ==  "1"): ?><input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Google');" />
  <?php else: ?>
  <input type="button" value="生成"  class="submit" onClick="post('?s=Admin-Create-Google');" disabled/><?php endif; ?></td>
</tr>
<tr >
  <td colspan="2" class="tr">
  RSS订阅文件： 总输出 <input type="text" name="rss" id="rss" size="5" maxlength="5" value="50" class="ct"> 条 
  <?php if(($url_html)  ==  "1"): ?><input type="button" value="生成" class="submit"  onClick="post('?s=Admin-Create-Rss');" />
  <?php else: ?>
  <input type="button" value="生成"  class="submit" onClick="post('?s=Admin-Create-Rss');" disabled/><?php endif; ?>  
  </td>
</tr>
</table>
</form>
<br /><center>Version：<font color="#FF0000"><?php echo L("ppvod_version");?></font></center>
</body>
</html>