<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php $h = "http://".$_SERVER['HTTP_HOST'].$GLOBALS['p']."/"; ?>

<title>Матчэз</title>


<style type="text/css">
.cursor {cursor: pointer;} 

body {height: 100%; margin: 0; background-image:url(<?=$h?>image/StartFon.jpg); background-repeat:no-repeat}

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

<script type="text/javascript">
var brw; //Тип браузера(опеределяется при загрузке страницы)

window.onload = function () {
	brw = browser(); // Присваиваем переменной наименование браузера
	document.getElementById('Log').focus()
} // window.onLoad
function browser(){//alert(123);

	var ua = navigator.userAgent;
	
    
    if (ua.indexOf('MSIE') > -1) return 'ie';
    if (ua.indexOf('Firefox') > -1) return 'ff';
    if (ua.indexOf('Opera') > -1) return 'op';
    if (ua.indexOf('Chrome') > -1) return 'gc';
    /*if (ua.search(/Safari/) > 0) return 'Safari';
    if (ua.search(/Konqueror/) > 0) return 'Konqueror';
    if (ua.search(/Iceweasel/) > 0) return 'Debian Iceweasel';
    if (ua.search(/SeaMonkey/) > 0) return 'SeaMonkey';
    
    // Браузеров очень много, все вписывать смысле нет, Gecko почти везде встречается
    if (ua.search(/Gecko/) > 0) return 'Gecko';

    // а может это вообще поисковый робот
    return 'Search Bot';
	*/
} // Функция определения браузера при загрузке
</script>


</head>

<body style="height:100%">

<table id="mt" width="100%" height="100%" border="0" cellpadding="0" cellspacing="0"><tr id="mtr"><td id="mn">
<img src="<?=$h?>image/stitle.png"/>

<table id="lgt" width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td width="18%"></td><td width="64%" id="lgt1">

<table width="200" border="0" cellpadding="0" cellspacing="0" align="center">
  
<tr height="250px">
  <td></td></tr>

<tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px"><b>Логин:</b></p></td></tr>

<tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left">
<input name="Logn" id="Log" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/>

</td></tr>

<tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px;"><b>Пароль:</b></p></td></tr>


<tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left">
<input name="Pasn" id="Pas" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/></td></tr>


<tr height="50"><td></td></tr>
<tr><td align="center"><input name="en" type="button" value="Вход" style="width:200px; height:27px; font-weight:bold" onclick="sent()"/></td></tr>

</table></td><td id="lgt2" width="18%" align="right" valign="bottom" style="font-style:normal"></td></tr></table>
</td></tr></table>

<!-- <a href="javascript:window.open('inf/123.pdf', '_blank').focus()">New</a> -->








<ul id="myMenu" class="contextMenu">
<li class="cut"><a href="#cut">Вырезать</a></li>
<li class="copy"><a href="#copy">Копировать</a></li>
<li class="paste"><a href="#paste">Вставить</a></li>
<li class="edit separator"><a href="#edit">Добавить ячейки</a></li>
<li class="delete"><a href="#delete">Удалить</a></li>
<li class="quit"><a href="#quit">Очистить содержимое</a></li>
</ul>
</body>
<script type="text/javascript">

</script>
</html>





























