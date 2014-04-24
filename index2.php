<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php $h = "http://".$_SERVER['HTTP_HOST'].$GLOBALS['p']."/"; ?>

<title>Матчэз</title>


<style type="text/css"></style>
<SCRIPT LANGUAGE='JavaScript' src='ajax_GET_UTF8.js'></script>


</head>

<body style="height:100%">

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0"><tr><td align="center">


<table id="main" width="640" border="0" cellpadding="0" cellspacing="0">
<tr height="100"><td><p>Информация о ценах на сельскохозяйственную технику </p>

<div style="background-image:url(<?=$h?>image/pn3n.png); height:30pt; width:454pt; margin-left:11pt; padding-top:34pt"><table width="550" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px" onchange="rs()"onfocus=""></select></td></tr></table></div>

</td></tr>



<tr height="500"><td id="tbl" valign="top"><p style="padding-left:27pt; padding-top:150pt; font-family:Microsoft Sans Serif; font-size:14px;"><font color="#0066CC">Сформируйте запрос на предоствление сведений по технике в панели выбора сельскохозяйственных машин </font></p></td></tr>

</table>

</td></tr></table>


</body>
<script language="javascript">
window.onload = function () {aCb0()}// window.onLoad
function aCb0(){var url = 'Cb0.php';getAjax(url,aReCb0);}
function aReCb0(d){g = d.split('|');var sp = document.getElementById('sp1');var m = d.split('|');
sp.options[0] = new Option('');
for(var i=0; i<m.length; i++) {var a = m[i].split('!'); 
sp.options[i+1] = new Option(a[0] + ' ' + a[1]);}
}// Список тип техники -- заполнение
function Cb1(e){
	var fv = document.getElementById('sp1').value;var m = fv.split([' ']);var b = m[0]; 
	if (b.indexOf('.0') > 0){a = b.split('.');m[0] = a[0] + '.';}; 
	var url = 'Cb1.php?ge='+encodeURIComponent(m[0]);
	getAjax(url,aReCb1);
}// отображение списка тяговых классов
function aReCb1(d){var m = d.split('|');
var sp2 = document.getElementById('sp2');for (var i = 0; i < 30; i++){sp2.options[0] = null;}//удаляем предыдущие элементы списка
sp2.options[0] = new Option(''); sp2.options[1] = new Option('Все классы');
sp1 = document.getElementById('sp1'); var a = sp1.value.split(' ');
if(a[0].indexOf('.0') > -1){ sp2.selectedIndex = 1 }
for(var i=0; i<m.length; i++) {sp2.options[i+2] = new Option('Тяговый класс ' + m[i]);}
rs();//Создание таблицы результатов

}
function rs(){
	var t = document.getElementById('tbl');var sp = document.getElementById('sp1').value;
	if(sp.length > 5){
		t.innerHTML = '<table id="qt" width="642" class="MsoNormal" style="border-collapse: collapse; margin: 5pt 0pt 0pt 0pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="35pt" style="background-image:url(<?=$h?>image/tbg2.png)"><td width="15pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 3pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="260pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="50pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="62pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Цена, руб.</td><td align="center" width="63pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Дата</td><td align="left" width="40pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left:4pt">Информация</td></tr></table><div style="width:642px; display:block; height:600px; overflow-y:scroll"><table id="q" width="625" class="MsoNormal" style="border-collapse: collapse; margin: 0pt 0pt 0pt 0pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';

		var s1 = document.getElementById('sp1').value;var s2 = document.getElementById('sp2').value;
		var m = s1.split([' ']); b = m[0]; 
		if (b.indexOf('.0') > -1){a = b.split('.');m[0] = a[0] + '.';};
		b = s2.split([' ']); if(b[2] == undefined){b[2] = '';}
		var url = 'Cb2.php?ge='+encodeURIComponent(m[0] + '|' + b[2]);
		getAjax(url,aReCb2);
	
	}
	else{
		t.innerHTML = '<p style="padding-left:27pt; padding-top:150pt; font-family:Microsoft Sans Serif; font-size:14px;"><font color="#0066CC">Сформируйте запрос на предоствление сведений по технике в панели выбора сельскохозяйственных машин </font></p>'; document.getElementById('sp2').innerHTML = ''; 
		//for(var i = 0; i < s2.options.lenght; i++){s2.options[i] = null}
	}

}//Функция отображения результатов фильтра
function aReCb2(d){var m = d.split('|');//alert(m[0]);
	for(var i=0; i<m.length; i++) {
		var a = m[i].split('\\'); addrow(); var R = document.getElementById('q').rows; var r = R[i];
		r.cells[1].innerHTML = a[1];
		r.cells[2].innerHTML = a[4];
		r.cells[3].innerHTML = a[5];
		r.cells[4].innerHTML = a[22];
		r.cells[5].innerHTML = '<a href="#">info</a>';
		
	}
}//Функция записи значений в ячейки строки
function gs(o){
	//alert(document.getElementById('q').width);
	var i = o.parentNode.rowIndex;
	var t = document.getElementById('q');
	var R = t.rows;
	var r = R[i];
	var s = r.cells[1].innerHTML;
	//alert(s);
	window.open("<?=$h?>inf.php?re=" + s, "_blank");

}//Функция вызовы информационного листа
function addrow(){
	var t = document.getElementById('q');var i = t.rows.length;
	t.insertRow(i);
	t.rows[i].setAttribute('height','27');
	t.rows[i].setAttribute('align','center');
	t.rows[i].innerHTML = '<td width="22" class="MsoNormal" style="padding: 0pt 0pt 0pt 0pt; font-size:9.0pt; font-family: Microsoft Sans Serif" align="center">№</td><td width="304" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif" align="left">Название машины</td><td  align="center" width="58" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="72" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Цена, руб.</td><td align="center" width="74" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Дата</td><td align="center" width="74" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left:4pt" onclick="gs(this)">Информация</td>';
	no();
}//Функция добавления строк в таблицу
function no(){
	var t = document.getElementById('q');
	for(var i = 0; i < t.rows.length; i++){var R = t.rows; var r = R[i]; r.cells[0].innerHTML = i+1;}
}//Функция нумерации строк
</script>
</html>





























