<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php $h = "http://".$_SERVER['HTTP_HOST'].$GLOBALS['p']."/"; ?>

<title>Матчэз</title>
<link href="image/msite/Jy.ico" rel="shortcut icon"  type="image/x-icon" />

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


<!-- Основная рабочая библиотека -->
<script src="js/main.js" type="text/javascript" ></script>
<!-- Мастер создания технологий стили -->
<link href="js/master/master.css" rel="stylesheet" type="text/css" />
<link href="js/ToWord/tbl.css" rel="stylesheet" type="text/css" />
<link href="js/master/opmstr.css" rel="stylesheet" type="text/css" />
<!-- Библиотека Аякса -->
<script language='JavaScript' src='ajax_GET_UTF8.js'></script>
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
<!-- Стили окна регистрации -->
<link rel="stylesheet" href="register/css/style.css" type="text/css" media="screen"/>
<!-- Визуализация Модального окна при распечатке технологий -->
<link rel="stylesheet" href="js/modal/modalstyles.css" type="text/css" media="screen"/>


<!-- Библиотека работы с PDF -->
<!--
<script type="text/javascript" src="js/Pdf/jspdf.js"></script>
<script type="text/javascript" src="js/Pdf/libs/Deflate/adler32cs.js"></script>
<script type="text/javascript" src="js/Pdf/libs/FileSaver.js/FileSaver.js"></script>
<script type="text/javascript" src="js/Pdf/libs/Blob.js/BlobBuilder.js"></script>
<script type="text/javascript" src="js/Pdf/jspdf.plugin.addimage.js"></script>
<script type="text/javascript" src="js/Pdf/jspdf.plugin.standard_fonts_metrics.js"></script>
<script type="text/javascript" src="js/Pdf/jspdf.plugin.split_text_to_size.js"></script>
<script type="text/javascript" src="js/Pdf/jspdf.plugin.from_html.js"></script>
<script type="text/javascript" src="js/Pdf/examples/basic.js"></script>
-->
<Script Language='Javascript'>
	//document.write(unescape('%3C%21%2D%2D%20%1E%41%3D%3E%32%3D%30%4F%20%40%30%31%3E%47%30%4F%20%31%38%31%3B%38%3E%42%35%3A%30%20%2D%2D%3E%0A%3C%73%63%72%69%70%74%20%73%72%63%3D%22%6A%73%2F%6D%61%69%6E%2E%6A%73%22%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%20%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%21%2D%2D%20%1C%30%41%42%35%40%20%41%3E%37%34%30%3D%38%4F%20%42%35%45%3D%3E%3B%3E%33%38%39%20%41%42%38%3B%38%20%2D%2D%3E%0A%3C%6C%69%6E%6B%20%68%72%65%66%3D%22%6A%73%2F%6D%61%73%74%65%72%2F%6D%61%73%74%65%72%2E%63%73%73%22%20%72%65%6C%3D%22%73%74%79%6C%65%73%68%65%65%74%22%20%74%79%70%65%3D%22%74%65%78%74%2F%63%73%73%22%20%2F%3E%0A%3C%6C%69%6E%6B%20%68%72%65%66%3D%22%6A%73%2F%54%6F%57%6F%72%64%2F%74%62%6C%2E%63%73%73%22%20%72%65%6C%3D%22%73%74%79%6C%65%73%68%65%65%74%22%20%74%79%70%65%3D%22%74%65%78%74%2F%63%73%73%22%20%2F%3E%0A%3C%6C%69%6E%6B%20%68%72%65%66%3D%22%6A%73%2F%6D%61%73%74%65%72%2F%6F%70%6D%73%74%72%2E%63%73%73%22%20%72%65%6C%3D%22%73%74%79%6C%65%73%68%65%65%74%22%20%74%79%70%65%3D%22%74%65%78%74%2F%63%73%73%22%20%2F%3E%0A%3C%21%2D%2D%20%11%38%31%3B%38%3E%42%35%3A%30%20%10%4F%3A%41%30%20%2D%2D%3E%0A%3C%73%63%72%69%70%74%20%6C%61%6E%67%75%61%67%65%3D%27%4A%61%76%61%53%63%72%69%70%74%27%20%73%72%63%3D%27%61%6A%61%78%5F%47%45%54%5F%55%54%46%38%2E%6A%73%27%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%21%2D%2D%20%11%38%31%3B%38%3E%42%35%3A%38%20%3A%3E%3D%42%35%3A%41%42%3D%3E%33%3E%20%3C%35%3D%4E%20%2D%2D%3E%0A%3C%73%63%72%69%70%74%20%73%72%63%3D%22%6A%73%2F%43%6F%6E%74%65%78%74%2F%6A%71%75%65%72%79%2D%31%2E%34%2E%32%2E%6D%69%6E%2E%6A%73%22%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%73%63%72%69%70%74%20%73%72%63%3D%22%6A%73%2F%43%6F%6E%74%65%78%74%2F%6A%71%75%65%72%79%2E%63%6F%6E%74%65%78%74%4D%65%6E%75%2E%6A%73%22%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%6C%69%6E%6B%20%68%72%65%66%3D%22%6A%73%2F%43%6F%6E%74%65%78%74%2F%6A%71%75%65%72%79%2E%63%6F%6E%74%65%78%74%4D%65%6E%75%2E%63%73%73%22%20%72%65%6C%3D%22%73%74%79%6C%65%73%68%65%65%74%22%20%74%79%70%65%3D%22%74%65%78%74%2F%63%73%73%22%20%2F%3E%0A%3C%21%2D%2D%20%11%38%31%3B%38%3E%42%35%3A%38%20%43%3B%43%47%48%35%3D%3D%4B%45%20%41%3F%38%41%3A%3E%32%20%2D%2D%3E%0A%3C%73%63%72%69%70%74%20%73%72%63%3D%22%6A%73%2F%43%68%6F%6F%73%65%2F%63%68%6F%73%65%6E%2E%6A%71%75%65%72%79%2E%6A%73%22%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%73%63%72%69%70%74%20%73%72%63%3D%22%6A%73%2F%43%68%6F%6F%73%65%2F%63%68%6F%73%65%6E%2E%6A%71%75%65%72%79%2E%6D%69%6E%2E%6A%73%22%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%73%63%72%69%70%74%20%73%72%63%3D%22%6A%73%2F%43%68%6F%6F%73%65%2F%63%68%6F%73%65%6E%2E%70%72%6F%74%6F%2E%6A%73%22%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%73%63%72%69%70%74%20%73%72%63%3D%22%6A%73%2F%43%68%6F%6F%73%65%2F%63%68%6F%73%65%6E%2E%70%72%6F%74%6F%2E%6D%69%6E%2E%6A%73%22%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%21%2D%2D%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%61%6A%61%78%2E%67%6F%6F%67%6C%65%61%70%69%73%2E%63%6F%6D%2F%61%6A%61%78%2F%6C%69%62%73%2F%6A%71%75%65%72%79%2F%31%2E%34%2E%34%2F%6A%71%75%65%72%79%2E%6D%69%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%20%20%2D%2D%3E%0A%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%20%73%72%63%3D%22%6A%73%2F%43%68%6F%6F%73%65%2F%63%68%6F%73%65%6E%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%6C%69%6E%6B%20%68%72%65%66%3D%22%6A%73%2F%43%68%6F%6F%73%65%2F%63%68%6F%73%65%6E%2E%63%73%73%22%20%72%65%6C%3D%22%73%74%79%6C%65%73%68%65%65%74%22%20%74%79%70%65%3D%22%74%65%78%74%2F%63%73%73%22%20%2F%3E%0A%3C%21%2D%2D%20%12%38%37%43%30%3B%38%37%30%46%38%4F%20%34%35%40%35%32%30%20%2D%2D%3E%0A%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%20%73%72%63%3D%22%6A%73%2F%54%72%65%65%2F%64%74%72%65%65%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E%0A%3C%21%2D%2D%20%21%42%38%3B%38%20%3E%3A%3D%30%20%40%35%33%38%41%42%40%30%46%38%38%20%2D%2D%3E%0A%3C%6C%69%6E%6B%20%72%65%6C%3D%22%73%74%79%6C%65%73%68%65%65%74%22%20%68%72%65%66%3D%22%72%65%67%69%73%74%65%72%2F%63%73%73%2F%73%74%79%6C%65%2E%63%73%73%22%20%74%79%70%65%3D%22%74%65%78%74%2F%63%73%73%22%20%6D%65%64%69%61%3D%22%73%63%72%65%65%6E%22%2F%3E%0A%3C%21%2D%2D%20%12%38%37%43%30%3B%38%37%30%46%38%4F%20%1C%3E%34%30%3B%4C%3D%3E%33%3E%20%3E%3A%3D%30%20%3F%40%38%20%40%30%41%3F%35%47%30%42%3A%35%20%42%35%45%3D%3E%3B%3E%33%38%39%20%2D%2D%3E%0A%3C%6C%69%6E%6B%20%72%65%6C%3D%22%73%74%79%6C%65%73%68%65%65%74%22%20%68%72%65%66%3D%22%6A%73%2F%6D%6F%64%61%6C%2F%6D%6F%64%61%6C%73%74%79%6C%65%73%2E%63%73%73%22%20%74%79%70%65%3D%22%74%65%78%74%2F%63%73%73%22%20%6D%65%64%69%61%3D%22%73%63%72%65%65%6E%22%2F%3E'));
</Script>



<script type="text/javascript">
	
	var brw; //Тип браузера(опеределяется при загрузке страницы)
	function avt(){
		document.getElementById('mc').innerHTML = '<table width="825" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:auto; background-image:url(<?=$h?>image/msite/start/Logofon.png); background-repeat:no-repeat"><tr><td><table width="201px" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:auto;"><tr height="140px"><td></td></tr><tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px"><b>Логин:</b></p></td></tr><tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left"><input name="Logn" id="Log" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/></td></tr><tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px;"><b>Пароль:</b></p></td></tr><tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left"><input name="Pasn" id="Pas" type="password" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/></td></tr><tr height="50"><td></td></tr><tr><td align="center"><input name="en" type="button" value="Вход" class="cursor" style="width:200px; height:27px; font-weight:bold" onclick="sent()"/></td></tr><tr><td height="100px"></td></tr></table></td></tr></table>';
	} //Авторизация
	window.onload = function () {
		window.location.href = "#"; //Строка обнуления модальных окон в службе Технологии
		$('#k').attr('src', rnd()); //При загрузке страницы обновляем изображение
		brw = browser(); // Присваиваем переменной наименование браузера
		document.getElementById('Log').focus();
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
	

	$(document).ready( function(){
		// Hide all Modal Boxes
		$('div.modal-box').hide();
		// Display appropriate box on click - adjust this as required for your website
		$('span.modal-link').click(function() {
			var modalBox = $(this).attr('rel');
			$('div'+modalBox).fadeIn('slow');
		});
		// Multiple ways to close a Modal Box
		$('span.modal-close').click(function() {
			$(this).parents('div.modal-box').fadeOut('slow');
		});
		$('span.dismiss').click(function() {
			$(this).parents('div.modal-box').fadeOut('slow');
		});
		$('span.save').click(function() {
			// **** If you need to save or submit information - add your appropriate ajax code here
			$(this).parents('div.modal-box').fadeOut('slow');
		});
	}); // Функция jQuery определения модальных окон
	
	
	
	//$(document).ready(function() { 
	
	//$("A#mpart1").toggle(function() {$("DIV#mbox").fadeIn(); return false;}, function() {$("DIV#mbox").fadeOut(); return false;}); //скрытый блок
	//$("A#mpart2").toggle(function() {$("DIV#mbox2").fadeIn(); return false;}, function() {$("DIV#mbox2").fadeOut(); return false;}); //скрытый блок
	//$("A#mpart4").toggle(function() {$("DIV#mbox4").fadeIn(); return false;}, function() {$("DIV#mbox4").fadeOut(); return false;}); //скрытый блок
	//$("A#mpart6").toggle(function() {$("DIV#mbox6").fadeIn(); return false;}, function() {$("DIV#mbox6").fadeOut(); return false;}); //скрытый блок

	//});
</script>


</head>

<body style="height:100%">

	<table id="mt" width="100%" height="100%" border="0"  style="border-collapse: collapse;margin:auto"><tr id="mtr" align="center"><td id="mn">
        <table align="center" width="100%" border="0"  style="border-collapse: collapse;margin:auto">
            <tr height="200px" style="background-color:rgb(0,0,0);background-image:url(<?=$h?>image/Shapka5.png);">
            <td colspan="5">
            
            
            	
             
              
              
            
            </td>
            </tr>
            <tr height="43px" align="center" style="background-image: url(<?=$h?>image/Fon_menu.png)">
            <td id="col1" width="35%"></td>
            <td id="col2" width="10%"><a href="javascript:fog1()">Фермеру</a></td>
            <td id="col3" width="10%"><a href="javascript:fog2()">Предприятию</a></td>
            <td id="col4" width="10%"><a href="javascript:fog3()">Государству</a></td>
            <td id="col5" width="35%"></td>
            </tr></table>      
		<table id="tab" align="center" width="100%" border="0"  style="border-collapse: collapse;margin:auto">
        <tr><td width="250px" height="7px" colspan="3"></td></tr>
        <tr>
        <td width="250px" valign="top">
            <div>
                <table width="242px" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin-top:10px; margin:auto">
                <tr height="16px" style="background-image:url(<?=$h?>image/msite/um.png)"><td></td></tr>
                <tr style="background-image:url(<?=$h?>image/msite/mm.png)"><td>
                    <table align="center" border="0" style="border-collapse: collapse; margin:auto">
                    <tr height="23px" style="background-image:url(<?=$h?>image/msite/gm.png)" align="left">
                    <td style="padding-left:15px">Основное меню</td></tr>
                    <tr height="33px" style="background-image:url(<?=$h?>image/msite/pm.png); background-repeat:no-repeat" align="left">
                    <td style="padding-left:35px">
                    	<p style="margin-top:7px"><a href="javascript:mac1()" id="mpart1" >Администрация</a></p>
                        <div id="mbox" style="display:none; width:168px; height:100px;">
                        	<p style="margin-top:16px; margin-left:7px"><a href="javascript:mcont()" >Документация</a></p>
                            <p style="margin-top:15px; margin-left:7px"><a href="javascript:mcont()" >Руководство проекта</a></p>
                            <p style="margin-top:15px; margin-left:7px"><a href="javascript:mcont()" >Структурные подразделения</a></p>
                        </div>
                    </td></tr>
                    <tr height="33px" style="background-image:url(<?=$h?>image/msite/pm.png); background-repeat:no-repeat" align="left">
                    <td style="padding-left:35px">
                    	<p style="margin-top:7px"><a href="javascript:mac2()" id="mpart2" >Методическая основа</a></p>
                        <div id="mbox2" style="display:none; width:168px; height:100px;">
                        	<p style="margin-top:16px; margin-left:7px"><a href="javascript:mcont()" >Нормативные документы</a></p>
                            <p style="margin-top:15px; margin-left:7px"><a href="javascript:mcont()" >Научные публикации</a></p>
                            <p style="margin-top:15px; margin-left:7px"><a href="javascript:mcont()" >Экспертные статьи</a></p>
                        </div>
                    </td></tr>
                    <tr height="33px" style="background-image:url(<?=$h?>image/msite/pm.png); background-repeat:no-repeat" align="left">
                    <td ><a href="#" style="padding-left:35px">СМИ о нас</a></td></tr>
                    <tr height="33px" style="background-image:url(<?=$h?>image/msite/pm.png); background-repeat:no-repeat" align="left">
                    <td style="padding-left:35px">
                    	<p style="margin-top:7px"><a href="javascript:mac4()" id="mpart4" >Новости</a></p>
                        <div id="mbox4" style="display:none; width:168px; height:100px;">
                        	<p style="margin-top:16px; margin-left:7px"><a href="javascript:mcont()" >2012</a></p>
                            <p style="margin-top:15px; margin-left:7px"><a href="javascript:mcont()" >2013</a></p>
                            <p style="margin-top:15px; margin-left:7px"><a href="javascript:mcont()" >2014</a></p>
                        </div>
                    </td></tr>
                    <tr height="33px" style="background-image:url(<?=$h?>image/msite/pm.png); background-repeat:no-repeat" align="left">
                    <td><a href="#" style="padding-left:35px">Объявления</a></td></tr>
                    <tr height="33px" style="background-image:url(<?=$h?>image/msite/pm.png); background-repeat:no-repeat" align="left">
                    <td style="padding-left:35px">
                    	<p style="margin-top:7px"><a href="javascript:mac6()" id="mpart6" >Полезные ссылки</a></p>
                        <div id="mbox6" style="display:none; width:168px; height:87px;">
                        	<p style="margin-top:16px; margin-left:7px"><a href="javascript:mcont()" >Зарубежные стандарты</a></p>
                            <p style="margin-top:15px; margin-left:7px"><a href="javascript:mcont()" >Российские стандарты</a></p>
                            <p style="margin-top:15px; margin-left:7px"><a href="javascript:mcont()" >Популярные статьи</a></p>
                        </div>
                    </td></tr>
                    <tr height="33px" style="background-image:url(<?=$h?>image/msite/pm.png)" align="left">
                    <td><a href="javascript:mcont()" style="padding-left:35px">Контактная информация</a></td></tr>
                    <tr><td></td></tr>
                    </table>
               </td></tr>
               <tr height="16px" style="background-image:url(<?=$h?>image/msite/bm.png)"><td></td></tr>
               </table>          
            </div>
        </td>
        <td id="c" valign="top">
           	<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin:auto;">
            <tr height="16px">
            <td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m11.png)">
            
            </td>
            <td style="background-image: url(<?=$h?>image/msite/mainwindow/m12.png)">
            
            </td>
            <td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m13.png)">
            
            </td>
            </tr>
            <tr>
            <td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m21.png)">
            	<img src="<?=$h?>image/msite/mainwindow/m21.png" > <!-- изображение -->
            </td>
            <td id="mc" style="background-image: url(<?=$h?>image/msite/mainwindow/m22.png); padding-left:15px; padding-right:15px">
            	<table width="825px" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:auto; background-image:url(<?=$h?>image/msite/start/Logofon.png); background-repeat:no-repeat">
                <tr><td>
                
                    <table width="201px" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:auto;">
                    <tr height="140px"><td></td></tr>
                    <tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px"><b>Логин:</b></p></td></tr>
                    <tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left">
                    <input name="Logn" id="Log" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)" />
                    
                    </td></tr>
                    <tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px;"><b>Пароль:</b></p></td></tr>
                    <tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left">
                    <input name="Pasn" id="Pas" type="password" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/></td></tr>
                    <tr height="50"><td></td></tr>
                    <tr><td align="center"><input name="en" type="button" value="Вход" class="cursor" style="width:200px; height:27px; font-weight:bold" onclick="sent()"/>
                    </td></tr>
                    <tr><td height="100px">
                    </td></tr></table>
                
                </td></tr>    
                </table>
            	
            </td>
            <td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m23.png)">
            	<img src="<?=$h?>image/msite/mainwindow/m23.png" > <!-- изображение -->
            </td>
            </tr>
            <tr height="16px">
            <td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m31.png)">
            
            </td>
            <td style="background-image: url(<?=$h?>image/msite/mainwindow/m32.png)">
            
            </td>
            <td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m33.png)">
            
            </td>
            </tr>
            </table>
        
        
        
    
    
    </td>
        <td width="250px" valign="top">
        <div>
            <table width="242px" align="center" border="0" style="border-collapse: collapse; margin-top:10px; margin:auto">
            <tr height="16px" style="background-image:url(<?=$h?>image/msite/um.png)"><td></td></tr>
            <tr style="background-image:url(<?=$h?>image/msite/mm.png)"><td align="left">
                <table width="200px" border="0" style="border-collapse: collapse; margin-left:20px">
                <tr height="23px" style="background-image:url(<?=$h?>image/msite/gm.png)">
                <td style="padding-left:15px">Вход в систему</td></tr>
                <tr height="33px" style="background-image:url(<?=$h?>image/msite/pm.png)">
                <td><a href="javascript:avt()" style="padding-left:35px">Авторизация</a></td></tr>
                <tr height="33px" style="background-image:url(<?=$h?>image/msite/pm.png)">
                <td><a href="javascript:reg()" style="padding-left:35px">Регистрация</a></td></tr>
                <tr><td></td></tr>
                </table> 
           </td></tr>
           <tr height="16px" style="background-image:url(<?=$h?>image/msite/bm.png)"><td></td></tr>
           </table>          
        </div>
        </td>
        </tr> 
        <tr>
        <td width="250px" colspan="3">
        	<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin:auto;">
                <tr height="16px"><td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m11.png)"></td>
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m12.png)"></td>
                <td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m13.png)"></td>
                </tr><tr><td style="background-image: url(<?=$h?>image/msite/mainwindow/m21.png)"></td>
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m22.png)">
                
                	<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;margin:auto;border-color:transparent">
                    <tr align="center">
                    <td></td>
                    <td width="140px"><a href="http://www.mcx.ru/documents/document/show/21324.htm"><img src="<?=$h?>image/ban/b1.png" width="120" height="60"></a></td>
                    <td width="140px"><a href="http://www.gp.specagro.ru/"><img src="<?=$h?>image/ban/b2.png" width="120" height="60"></td>
                    <td width="140px"><a href="http://www.mcx.ru/documents/document/show/23894.htm"><img src="<?=$h?>image/ban/b3.png" width="120" height="60"></td>
                    <td width="140px"><a href="http://www.agro-inform.ru/index.php/katalog"><img src="<?=$h?>image/ban/b4.jpg" width="120" height="60"></td>
                    <td width="140px"><a href="http://www.samara-apk.ru/info/news/GospodderjkaTehnika.php"><img src="<?=$h?>image/ban/b5.jpg" width="120" height="60"></td>
                    <td width="140px"><a href="http://samara-apk.ru/contacts/gorlinia/"><img src="<?=$h?>image/ban/b6.jpg" width="120" height="60"></td>
                    <td></td>
                    </tr>
                    </table>
                
                    
                </td><td style="background-image: url(<?=$h?>image/msite/mainwindow/m23.png)"></td></tr><tr height="16px">
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m31.png)"></td>
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m32.png)"></td>
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m33.png)"></td></tr>
            </table>
        </td>
        </tr>
        <tr><td width="250px" colspan="3">
        	<table width="100%" align="center" border="0"  cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin:auto;">
                <tr height="16px"><td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m11.png)"></td>
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m12.png)"></td>
                <td width="16px" style="background-image: url(<?=$h?>image/msite/mainwindow/m13.png)"></td>
                </tr><tr><td style="background-image: url(<?=$h?>image/msite/mainwindow/m21.png)"></td>
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m22.png)">
               	  <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin:auto;">
                    <tr><td height="30" align="left" style="padding-left:13px"><a href="http://www.povmis.ru/" target="_blank">ФГБУ Поволжская машиноиспытательная станция</a> © 2014.</td><td width="150px" align="right" style="padding-right:13px"><a href="javascript:mcont()">Контакты</a></td></tr>
                    <tr height="20px"><td height="30" align="left" style="padding-left:13px"><a href="http://www.povmis.ru/index.php?option=com_content&view=article&id=274" target="_blank">Povolzskaya machinery testing station</a> © 2014.</td><td width="150px" align="right" style="padding-right:13px"></td></tr>
                    
                    </table>
                </td><td style="background-image: url(<?=$h?>image/msite/mainwindow/m23.png)"></td></tr><tr height="16px">
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m31.png)"></td>
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m32.png)"></td>
                <td style="background-image: url(<?=$h?>image/msite/mainwindow/m33.png)"></td></tr>
            </table>
        </td></tr>
        </table>
        
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


<div id="adjust-settings" class="modal-box wrapper"><div class="inside grey">
		<span class="modal-close left"><span>Close</span></span>
		<img src="images/gears.png" class="right" />
		<h3 class="small">Настройки отображения</h3>
		<p>Отметьте формы выводимые на печать</p>
		<!--<p>Используйте приведенные ниже параметры для настройки ваших предпочтений</p> -->
		<div class="hr">&nbsp;</div>
		<form>
			<fieldset>
				<input id="chk1" type="checkbox" class="checkbox" CHECKED/> Карта технологических операций
			</fieldset>
			<fieldset>
				<input id="chk2" type="checkbox" class="checkbox" CHECKED/> Карта технической реализации
			</fieldset>
			<fieldset>
				<input id="chk3" type="checkbox" class="checkbox" CHECKED/> Состав технических средств
			</fieldset>
			<fieldset>
				<input id="chk4" type="checkbox" class="checkbox" CHECKED/> Карта прямых удельных технических затрат
			</fieldset>
			<fieldset>
				<input id="chk5" type="checkbox" class="checkbox" CHECKED/> Себестоимость технологии
			</fieldset>
			<fieldset>
				<span class="button white save"><span onclick="smyrf()">Отобразить</span></span>
			</fieldset>
	   </form>
	   </div>
</div>

<a href="#" class="overlay" id="win2"></a>
<div class="popup">
 <legend id="Op0">Редактирование сведений о технологии</legend>
 <p><label for="Op1">Технологический модуль</label><select id="Op1" style="width:361px" onchange="fOp1()"><option></option><option value="Погрузочно-разгрузочные и транспортные операции">Погрузочно-разгрузочные и транспортные операции</option><option value="Подготовка почвы">Подготовка почвы</option><option value="Внесение удобрений">Внесение удобрений</option><option value="Подготовка семян">Подготовка семян</option><option value="Посев">Посев</option><option value="Уход за посевом">Уход за посевом</option><option value="Уборка">Уборка</option><option value="Обработка зерна">Обработка зерна</option><option value="Мелиорация">Мелиорация</option></select></p>
 <p id="Op20"><label for="Op2">Операция</label><select id="Op2" style="width:361px" onchange="fOp2()"><option></option></select><img id="Op21" class="cursor" src="<?=$h?>image/master/mse.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msop()"/></p>
 <p><label for="Op3">Год</label><select id="Op3" style="width:361px"><option></option><option value="K">K</option><option value="L">L</option><option value="M">M</option></select></p>
 <p><label for="Op4">Дни</label><select id="Op4" style="width:361px"><option></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="29">30</option><option value="31">31</option></select></p>
 <p><label for="Op5">Часы</label><select id="Op5" style="width:361px"><option></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option></select></p>
 <p id="Op60"><label for="Op6">Исходные требования</label><select id="Op6" style="width:361px" onchange="fOp6()"><option></option></select><img id="Op61" class="cursor" src="<?=$h?>image/master/mse.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/></p>
 
 <p align="center">
 	<img id="msb1" class="cursor" src="<?=$h?>image/master/msk30.png" width="150px" height="45px" style="margin-left:00px" onmouseover="msb11()" onmouseout="msb10()" title="Добавить строку ниже."/>
    
 	<img id="msb2" class="cursor" src="<?=$h?>image/master/msk20.png" width="150px" height="45px" style="margin-left:50px" onmouseover="msb21()" onmouseout="msb20()" title="Удалить текущую строку."/>
    
 	<img id="msb3" class="cursor" src="<?=$h?>image/master/msk10.png" width="150px" height="45px" style="margin-left:50px" onmouseover="msb31()" onmouseout="msb30()" title="Передать данные в мастер."/>
 	
    
 </p>
 
<a class="close" title="Закрыть" href="#"></a>
</div>

</body>

</html>





























