<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>
<!-- Библиотека Аякса -->
<SCRIPT LANGUAGE='JavaScript' src='ajax_GET_UTF8.js'></script>
<!-- Библиотеки контекстного меню -->
<script src="js/Context/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/Context/jquery.contextMenu.js" type="text/javascript"></script>
<link href="js/Context/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
<!-- Библиотеки улучшенных списков -->
<script src="js/Choose/chosen.jquery.js" type="text/javascript"></script>
<script src="js/Choose/chosen.jquery.min.js" type="text/javascript"></script>
<script src="js/Choose/chosen.proto.js" type="text/javascript"></script>
<script src="js/Choose/chosen.proto.min.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>  -->
<script type="text/javascript" src="js/Choose/chosen.js"></script>
<link href="js/Choose/chosen.css" rel="stylesheet" type="text/css" />
<!-- Визуализация дерева -->
<script type="text/javascript" src="js/Tree/dtree.js"></script>
<!-- Основная рабочая библиотека -->
<script type="text/javascript" src="js/main.js"></script>

<style type="text/css">
.dtree {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 11px;
	color: #666;
	white-space: nowrap;
}
.dtree img {
	border: 0px;
	vertical-align: middle;
}
.dtree a {
	color: #333;
	text-decoration: none;
}
.dtree a.node, .dtree a.nodeSel {
	white-space: nowrap;
	padding: 1px 2px 1px 2px;
}
.dtree a.node:hover, .dtree a.nodeSel:hover {
	color: #333;
	text-decoration: underline;
}
.dtree a.nodeSel {
	background-color: #c0d2ec;
}
.dtree .clip {
	overflow: hidden;
}


a:hover {text-decoration:underline;}
a {text-decoration:none;}
</style>

<body>


</body>

<div id="t" class="dtree"><script type="text/javascript">


		
	d = new dTree('d');
	
	
	
	d.add(0,-1,'Выбор культуры');
	d.add(1,0,'Node 1');
	d.add(2,0,'Node 2','index6.php');
	d.add(3,1,'<a href="javascript: aj()">open all</a>');
	d.add(13,0,'Node 1.2','index6.php');
	d.add(4,0,'Node 3','index6.php');
	d.add(5,3,'Node 1.1.1','index6.php');
	d.add(6,5,'Node 1.1.1.1','index6.php');
	d.add(7,0,'Node 4','index6.php');
	d.add(8,1,'Node 1.2','index6.php');
	d.add(9,0,'My Pictures','index6.php','Pictures I\'ve taken over the years','','','img/imgfolder.gif');
	d.add(10,9,'The trip to Iceland','index6.php','Pictures of Gullfoss and Geysir');
	d.add(11,9,'Mom\'s birthday','index6.php');
	d.add(12,0,'Recycle Bin','index6.php','','','img/trash.gif');

	var n = document.getElementById('t');
	
	alert(d)
	document.getElementById('t').innerHTML = d;
	//document.write(d);


</script></div>



<div id="t2" style="margin-top:300px; border-width:1px"></div>

<script type="text/javascript">
window.onload = function(){
	var n = document.getElementById('t').innerHTML;
	//var s = n.split('</scrip`>'.replace('`','t'));
	//alert(s[1]);
	document.getElementById('t').innerHTML = '';
	document.getElementById('t2').innerHTML = n;
}
function aj(){alert(123);
	var url = 'Cb0.php';getAjax(url,fn);
}
function fn(k){//alert(123);
	var r = k.split('|'); alert(r[0]);
}

</script>


</html>