<?php if (!defined('THINK_PATH')) exit();?><table border='0' cellpadding='0' cellspacing='0' width='760' height='100%' align='center' style="border:1px solid #CCCCCC; font-size:12px">
<tr><td valign='top' id='caiji' height='25%'>定时采集等侍中...</td></tr>
<tr><td valign='top' height='1' style="background:#e8e8e8"></td></tr>
<tr><td valign='top' id='data' height='25%'>生成内容页等侍中...</td></tr>
<tr><td valign='top' height='1' style="background:#e8e8e8"></td></tr>
<tr><td valign='top' id='index' height='25%'>生成首页等侍中...</td></tr>
<tr><td valign='top' height='1' style="background:#e8e8e8"></td></tr>
<tr><td valign='top' id='listhtml' height='25%'>生成栏目页等侍中...</td></tr>
</table>
<span id="session"></span>
<script>
var $time = new Array();
$time['caiji'] = <?php echo ($caiji); ?>;
$time['data'] = <?php echo ($min); ?>;//采集时间间隔+生成时间间隔
$time['index'] = <?php echo ($index); ?>;
$time['list'] = <?php echo ($list); ?>;
if($time['caiji'] > 0){
	setInterval('$caiji()',1000*60*<?php echo ($caiji); ?>);
}
if($time['data'] > $time['caiji']){
	setInterval('$data()',1000*60*<?php echo ($min); ?>);
}
if($time['index'] > 0){
	setInterval('$index()',1000*60*<?php echo ($index); ?>);
}
if($time['list'] > 0){
	setInterval('$listhtml()',1000*60*<?php echo ($list); ?>);
}
var urln = 0;
var array_url = new Array();<?php if(is_array($url)): $i = 0; $__LIST__ = $url;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppvod): ++$i;$mod = ($i % 2 )?>array_url[<?php echo ($key); ?>]='<?php echo ($ppvod); ?>';<?php endforeach; endif; else: echo "" ;endif; ?>
function $caiji(){
	if(urln < array_url.length-1){
		urln++;
	}else{
		urln=0;
	}
	if(array_url[urln]){
	document.getElementById("caiji").innerHTML = "<iframe width='100%' height='200' src='"+array_url[urln]+"' scrolling='auto'></iframe>";
	}
}
function $data(){
	document.getElementById("data").innerHTML = "<iframe width='100%' height='200' src='index.php?s=Admin-Create-Vodday-min-<?php echo ($min); ?>' scrolling='auto'></iframe>";
}
function $index(){
	document.getElementById("index").innerHTML = "<iframe width='100%' height='200' src='index.php?s=Admin-Create-Index-jump-1' scrolling='auto'></iframe>";
}
function $listhtml(){
	document.getElementById("listhtml").innerHTML = "<iframe width='100%' height='200' src='index.php?s=Admin-Create-Vodlist-ids_list_1-<?php echo ($list_vod_all); ?>' scrolling='auto'></iframe>";
}
function $session(){
	document.getElementById("session").innerHTML = "<iframe width='100%' height='100' src='index.php?s=Admin-Index-Right' scrolling='auto' style='display:none'></iframe>";
}
setInterval('$session()',1000*60*5);//防止后台超时
</script>