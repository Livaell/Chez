<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php $h = "http://".$_SERVER['HTTP_HOST'].$GLOBALS['p']."/"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Печать машин</title>
<style type="text/css">
body {
	background-color: #f2f2f2;
}
</style>
<link href="js/ToWord/tbl.css" rel="stylesheet" type="text/css" />
<!-- Библиотека Аякса -->
<SCRIPT LANGUAGE='JavaScript' src='ajax_GET_UTF8.js'></script>



</head>
<script type="text/javascript">

var main = '<table width="1120" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin: auto;"><tr height="16px"><td width="16px" style="background-image: url(image/msite/mainwindow/m11.png)"></td><td style="background-image: url(image/msite/mainwindow/m12.png)"></td><td width="16px" style="background-image: url(image/msite/mainwindow/m13.png)"></td></tr><tr><td style="background-image: url(image/msite/mainwindow/m21.png)"></td><td id="mc" style="background-image: url(image/msite/mainwindow/m22.png)"><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr height="100px"><td width="5%" style="padding:20px 60px 30px 40px"><img src="image/gerb.jpeg" width="91" height="100" /></td><td width="95%"><p class="MsoNormal" style="text-align:left; font-size:14pt;font-family:Microsoft Sans Serif;">Самарская аграрная информационно-консультативная система МАТЧЭЗ</p><p align="left" style="margin-left:75px">Министерство сельского хозяйства и продовольствия Самарской области</p></td></tr></table></td><td style="background-image: url(image/msite/mainwindow/m23.png)"></td></tr><tr height="16px"><td style="background-image: url(image/msite/mainwindow/m31.png)"></td><td style="background-image: url(image/msite/mainwindow/m32.png)"></td><td style="background-image: url(image/msite/mainwindow/m33.png)"></td></tr></table><table width="1120" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin:auto;"><tr height="16px"><td width="16px" style="background-image: url(image/msite/mainwindow/m11.png)"></td><td style="background-image: url(image/msite/mainwindow/m12.png)"></td><td width="16px" style="background-image: url(image/msite/mainwindow/m13.png)"></td></tr><tr><td style="background-image: url(image/msite/mainwindow/m21.png)"></td><td id="mc" style="background-image: url(image/msite/mainwindow/m22.png)" align="center"><div id="kifa1"><p style="margin-left:20px" align="left">Форма ИТК-1</p><p id="itp1" align="center"></p><p align="center"><b>Карта технологических операций</b></p><table id="i1" width="959" border="3" cellspacing="0" cellpadding="0" style="border-collapse:collapse; border-style:double"></table></div><p>&nbsp;</p></td><td style="background-image: url(image/msite/mainwindow/m23.png)"></td></tr><tr height="16px"><td style="background-image: url(image/msite/mainwindow/m31.png)"></td><td style="background-image: url(image/msite/mainwindow/m32.png)"></td><td style="background-image: url(image/msite/mainwindow/m33.png)"></td></tr></table><table width="1120" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin: auto;"><tr height="16px"><td width="16px" style="background-image: url(image/msite/mainwindow/m11.png)"></td><td style="background-image: url(image/msite/mainwindow/m12.png)"></td><td width="16px" style="background-image: url(image/msite/mainwindow/m13.png)"></td></tr><tr><td style="background-image: url(image/msite/mainwindow/m21.png)"></td><td id="mc" style="background-image: url(image/msite/mainwindow/m22.png)"><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr height="100px"><td width="5%" style="padding:20px 40px 30px 40px"><img src="image/gerb2.png" width="80" height="100" /></td><td width="95%"><p style="text-align:left; padding-left:13px">Информационно - аналитический центр</p><p style="text-align:left; padding-left:13px">© <a href="http://www.povmis.ru/" target="_blank">ФГБУ "Поволжская МИС"</a>  2014.</p></td></tr></table></td><td style="background-image: url(image/msite/mainwindow/m23.png)"></td></tr><tr height="16px"><td style="background-image: url(image/msite/mainwindow/m31.png)"></td><td style="background-image: url(image/msite/mainwindow/m32.png)"></td><td style="background-image: url(image/msite/mainwindow/m33.png)"></td></tr></table>';

setTimeout(function (){start()}, 2000); //Запуск всего этого дела)

function param(Name){
	 var Params = location.search.substring(1).split("&");
	 var variable = "";
	 for (var i = 0; i < Params.length; i++){
		 if(Params[i].split("=")[0] == Name){
			 if (Params[i].split("=").length > 1){
			 variable = Params[i].split("=")[1];
			 variable = decodeURIComponent(variable);
			 return variable;
			 }
		 }
	 }
	 return "";
} //Функция получения данных из предыдущей странцы для запроса
function start(){
	document.getElementById('load').innerHTML = main;
	var k = param("r");	//alert(k);
	getAjax('qqq.php?s='+encodeURIComponent(k), spp);
} //Аякс запрос в базу данных

function spp(d){
	var a = d.split('|'); var c = a[0].split('$');
	var R = document.getElementById('i1').rows;	var r = R[R.length-1]; add1();
	
	
	
	
	
	for(var i = 0; i < a.length; i++){c = a[i].split('$'); 
		add1();
		R = document.getElementById('i1').rows;	r = R[R.length-1];
		r.cells[0].innerHTML = R.length + 1;
		r.cells[1].innerHTML = c[1];
		r.cells[2].innerHTML = c[2];
		r.cells[3].innerHTML = c[3];
		r.cells[4].innerHTML = c[4];
		r.cells[5].innerHTML = c[5];
	}
	
}

function add1(){
	var q = document.getElementById('i1');	var e = q.rows.length;
	
	if(parseFloat(e%2) / parseInt(e%2) != 1){
		q.insertRow(q.rows.length);
		q.rows[q.rows.length-1].innerHTML = '<td width="25px" align="center">N</td><td width="300px" align="left"  style="padding-left:7px">Операция</td><td width="158px" align="center">Год</td><td width="158px" align="center">Дни</td><td width="158px" align="left" style="padding-left:7px">Исходные требования</td><td width="158px" align="center">Тип техники</td>';
		q.rows[q.rows.length-1].cells[1].setAttribute('align','left');
		q.rows[q.rows.length-1].cells[4].setAttribute('align','left');
	}
	else{
		q.insertRow(q.rows.length);
		//q.rows[q.rows.length-1].setAttribute('class','even');
		q.rows[q.rows.length-1].innerHTML = '<td width="25px" align="center">N</td><td width="300px" align="left"  style="padding-left:7px">Операция</td><td width="37px" align="center">Год</td><td width="37px" align="center">Дни</td><td width="425px" align="left" style="padding-left:7px">Исходные требования</td><td width="135px" align="center">Тип техники</td>';
		q.rows[q.rows.length-1].cells[1].setAttribute('align','left');
		q.rows[q.rows.length-1].cells[4].setAttribute('align','left');
	}
	
} //Функция добавления одной строки в ИТК-1

</script>

<body>
<div id="load" align="center">
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p align="center"><font size="+2">Загрузка результатов для печати ...</font></p>
<p>&nbsp;</p>
<!--<p align="center">Система МАТЧЭЗ</p>-->

</div>
</body>
</html>






















