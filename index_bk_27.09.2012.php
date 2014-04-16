<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php $h = "http://".$_SERVER['HTTP_HOST'].$GLOBALS['p']."/"; ?>

<title>Матчэз</title>


<style type="text/css">
body {
	background-image: url(file:///C|/Users/Yaner/Documents/MSite/image001.png);
}

#sp3, #sp3 option {
width: 200px;
}





</style>
<SCRIPT LANGUAGE='JavaScript' src='ajax_GET_UTF8.js'></script>


</head>

<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-image: url(image/fon.png)"><tr><td id="mn">

<div>
<table width="999" style="border-collapse: collapse; border-color: rgb(242,242,241); margin-top:0pt"  cellpadding="0" cellspacing="0" align="center" border="0" >
  <tr>
    <td align="left" class='MsoNormal' style='font-size:12.0pt;font-family:Microsoft Sans Serif; padding-left: 6pt'>ФГБУ Поволжская МИС - Аграрная информационная система МАТЧЭЗ</td>
  </tr>
  <tr>
    <td height="30" style="background-image:url(<?=$h?>image/tbg.png)">
    <table width="997" border="0" style="border-collapse: collapse;">
  <tr>
    <td width="75px"><img id="mm1" src="<?=$h?>image/m11.png" style="margin-left:15px; margin-top:3px" onmouseover="rm11(this)" onmouseout="rm12(this)" onclick="M()"/></td>
    <td width="75px"><img id="mm2" src="<?=$h?>image/m21.png" style="margin-top:3px" onmouseover="rm21(this)" onmouseout="rm22(this)" onclick="A()"/></td>
    <td width="75px"><img id="mm3" src="<?=$h?>image/m31.png" style="margin-top:3px" onmouseover="rm31(this)" onmouseout="rm32(this)"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
</table>


</div>



<table width="999" height="708" style="border-collapse: collapse; border-color: rgb(242,242,241);"  cellpadding="0" cellspacing="0" align="center" border="1" >
  <tr valign="top">
    <td width="208" style="background-color: rgb(242,242,241)">
    <div id="Pic" style="width:156pt">
    <img id="p1" src="<?=$h?>image/Pic02.png" alt="Pic02" width="52" height="42" onclick="Pic1(this)" /><img id="p2" src="<?=$h?>image/Pic13.png" alt="Pic13" width="52" height="42" onclick="Pic2(this)" /><img id="p3" src="<?=$h?>image/Pic20.png" width="52" height="42" onclick="Pic3(this)" /><img id="p4" src="<?=$h?>image/Pic30.png" width="52" height="42" onclick="Pic4(this)" />
    </div>
    <p id="nl" style="padding: 7pt 5.4pt 9pt 11pt; ">Инструменты расчета</p>
    <div id="Pi">
    <img src="<?=$h?>image/Pi00.png" width="205" height="37" onclick="addrow()" onmouseover="f00a(this)" onmouseout="f00b(this)" />
    <img src="<?=$h?>image/Pi10.png" width="205" height="37" onmouseover="f10a(this)" onmouseout="f10b(this)" onclick="prt()"/>
    <img src="<?=$h?>image/Pi20.png" width="205" height="37" onclick="DelRows()" onmouseover="f20a(this)" onmouseout="f20b(this)" />
	</div>
    


    
    
    
    
    </td>
<td id="u" width="785" align="left" valign="top" bgcolor="#FFFFFF">
    
    <p style="padding: 0pt 9pt 0pt 13pt; ">Информационно-консультативная служба "МАШИНЫ"</p>
    
<div style="background-image:url(<?=$h?>image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt">
<table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td>
    <td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus="">
      </select></td>
    <td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td>
  </tr>
</table>

      
</div>
      
<div id="Q" style="padding-bottom:7px"><p style=" margin-top:150px;padding-left:27pt; font-family:Microsoft Sans Serif; font-size:16px">Начало работы</p><p style="padding-left:27pt; font-family:Microsoft Sans Serif; font-size:14px;"><font color="#0066CC">1. Сформируйте запрос на предоствление сведений по технике в панели выбора сельскохозяйственных машин </font></p>
<p style="padding-left:27pt; font-family:Microsoft Sans Serif; font-size:14px"><font color="#0066CC">2. Нажатие кнопки "Найти" осуществляет отображение результатов </font></p>
<p style="padding-left:27pt; font-family:Microsoft Sans Serif; font-size:14px"><font color="#0066CC">3. В последующей работе с ИКС "Машины" руководствуйтесь подсказками и инструкциями </font>

</p></div>


     
      
      
</td></tr></table>

</td></tr></table>




</body>
<script language="javascript">
// Глобальные переменные 
var v =  new Array(); // Массив строки S
var g = new Array(); // Массив списка техники с параметрами
var j = new Array(); // Массив настроек
var z = 'm'; // Режимы приложения ()
var ag = new Array(); // Массив машин в агрегате службы агрегатов

var pc1 = '<p style="padding: 0pt 9pt 0pt 13pt; ">Информационно-консультативаная служба "МАШИНЫ"</p><div style="background-image:url(<?=$h?>image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';var pc2='\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\';var pc3;var pc4; // Переменные хранения параметров
var m1 = '<p style="padding: 0pt 9pt 0pt 13pt; ">Информационно-консультативаная служба "МАШИНЫ"</p><div style="background-image:url(<?=$h?>image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';var a1 = '<p style="padding: 0pt 9pt 0pt 13pt; ">Информационно-консультативная служба "АГРЕГАТЫ"</p><div style="background-image:url(<?=$h?>image/pn2.png); height:213px; width:578pt; margin-left:6pt; padding-top:38pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="367" contextmenu="return false;"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:356px" onchange="Cb1()"></select></td><td width="161"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="131"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:120px; " ></select></td><td width="61"><select id="sp4" style="margin:0pt 0pt 0pt 8pt; width:50px; " ></select></td><td width="41"><input name="" type="button" style="background-image: url(image/bot2.png); margin-left:8pt;width:23px" onclick="dn()" /></td></tr></table><table id="agr" width="745px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); margin: 10px 0px 0px 11px;font-size:9.0pt;font-family:Microsoft Sans Serif" border="1"><tr height="30px" style="background-image:url(image/tbg.png);"><td width="25" align="center">№</td><td width="173" align="center">Тип техники</td><td width="55" align="center">Тяг класс</td><td width="269" align="center">Название машины</td><td width="44" align="center">Кол-во</td><td width="70" align="center">ЧЭЗ, р./ч</td><td width="63" align="center">Доля, %</td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">1.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">2.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">3.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">4.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">5.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" style="background-color:rgb(255,222,173)"><td></td><td align="left" style="padding-left:5px">Всего:</td><td></td><td></td><td align="center"></td><td align="center"></td><td align="center"></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';var t1; // Переменные для хранения титульных страниц служб

window.onload = function () {aCb0();ns();resz()}; // window.onLoad
function gw(){return document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientWidth:document.body.clientWidth;}
function gh(){return document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientHeight:document.body.clientHeight;} // Ширина и высота клиентской области браузера
function resz(){var w = gw();var h = gh();}


//Меню
function rm11(e){e.src = "<?=$h?>image/m12.png"};function rm12(e){e.src = "<?=$h?>image/m11.png"};function rm21(e){e.src = "<?=$h?>image/m22.png"};function rm22(e){e.src = "<?=$h?>image/m21.png"};function rm31(e){e.src = "<?=$h?>image/m32.png"};function rm32(e){e.src = "<?=$h?>image/m31.png"} //Смена иконок
function M(){z = 'm';Pic1();document.getElementById('u').innerHTML = m1;aCb0();} //M()
function A(){z = 'a';Pic1();
var u = document.getElementById('u');u.innerHTML = '<p style="padding: 0pt 9pt 0pt 13pt; ">Информационно-консультативная служба "АГРЕГАТЫ"</p><div style="background-image:url(<?=$h?>image/pn2.png); height:213px; width:578pt; margin-left:6pt; padding-top:38pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="367" contextmenu="return false;"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:356px" onchange="Cb1()"></select></td><td width="161"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="131"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:120px; " ></select></td><td width="61"><select id="sp4" style="margin:0pt 0pt 0pt 8pt; width:50px; " ></select></td><td width="41"><input name="" type="button" style="background-image: url(image/bot2.png); margin-left:8pt;width:23px" onclick="dn()" /></td></tr></table><table id="agr" width="745px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); margin: 10px 0px 0px 11px;font-size:9.0pt;font-family:Microsoft Sans Serif" border="1"><tr height="30px" style="background-image:url(image/tbg.png);"><td width="25" align="center">№</td><td width="173" align="center">Тип техники</td><td width="55" align="center">Тяг класс</td><td width="269" align="center">Название машины</td><td width="44" align="center">Кол-во</td><td width="70" align="center">ЧЭЗ, р./ч</td><td width="63" align="center">Доля, %</td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">1.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">2.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">3.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">4.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">5.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" style="background-color:rgb(255,222,173)"><td></td><td align="left" style="padding-left:5px">Всего:</td><td></td><td></td><td align="center"></td><td align="center"></td><td align="center"></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';
aCb0(); sp = document.getElementById('sp4'); for (var i = 0; i < 30; i++){sp.options[i] = new Option(i + 1)}
} //A()


//Группы
function Pic1(e){//alert(e.alt);
var q1 = document.getElementById('p1'); q1.src = "<?=$h?>image/Pic02.png";
var q2 = document.getElementById('p2');if(q2.src == '<?=$h?>image/Pic12.png'){pc2 = ReOne();}; q2.src = "<?=$h?>image/Pic13.png";
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic20.png";
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic30.png";

t = document.getElementById('nl');t.innerHTML = 'Инструменты расчета';
t = document.getElementById('u'); t.innerHTML = '<p style="padding: 0pt 9pt 0pt 13pt; ">Информационно-консультативная служба "МАШИНЫ"</p><div style="background-image:url(<?=$h?>image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';
t.innerHTML = pc1;
t = document.getElementById('Pi');t.innerHTML = '<img src="<?=$h?>image/Pi00.png" width="205" height="37" onclick="addrow()" onmouseover="f00a(this)" onmouseout="f00b(this)" /><img src="<?=$h?>image/Pi10.png" width="205" height="37" onmouseover="f10a(this)" onmouseout="f10b(this)" onclick=""/><img src="<?=$h?>image/Pi20.png" width="205" height="37" onclick="DelRows()" onmouseover="f20a(this)" onmouseout="f20b(this)"/>';
}//Инструменты пересчета
function Pic2(e){
var q1 = document.getElementById('p1');if(q1.src == '<?=$h?>image/Pic02.png'){t = document.getElementById('u');pc1 = t.innerHTML;};q1.src = "<?=$h?>image/Pic00.png";
var q2 = document.getElementById('p2'); q2.src = "<?=$h?>image/Pic12.png";
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic23.png";
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic30.png";
t = document.getElementById('nl');t.innerHTML = 'Инструменты пересчета';
//Таблицы
t = document.getElementById('u');t.innerHTML = "<p style='padding: 0pt 9pt 0pt 13pt;'>Параметры машины</p><table width='400' border='0'  style='margin-left:370px'><tr><td width='114' class='MsoNormal' style='font-family: sans-serif; font-size:13px'><p>Данные на дату:</p></td><td width='144' align='center'><input type='text' id='dt' maxlength='10' value='' align='middle' /></td><td width='128'><input type='button' id='mf' value='Найти' width='20' height='20' style='margin-left:8px' onclick='findm()'/></td></tr></table><div id='t1' style='padding-left:8pt; padding-top:18pt; height:147pt; background-image:url(<?=$h?>image/par1.png)'><table id='b1' width='700px' style='border-collapse: collapse;'  cellpadding='0' cellspacing='0' align='left' border='1'><tr height='22' style='background-color:rgb(235,235,235)'><td width='377' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>1.  Вид техники</td><td width='317'><select id='a1' style='width:239pt;  background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt'      onfocus='Spt2(this)'  onchange='Spt2(this)'><OPTION ></OPTION><OPTION >1.0 Тракторы (Все)</OPTION><OPTION >2.0 Почвообрабатывающие машины</OPTION><OPTION >3.0 Машины для внесения удобрений</OPTION><OPTION >4.0 Машины для подготовки семян</OPTION><OPTION >5.0 Сеялки</OPTION><OPTION >6.0 Машины для ухода за посевами</OPTION><OPTION >7.0 Зерноуборочные машины</OPTION><OPTION>8.0 Машины для обработки зерна на току</OPTION><OPTION>9.0 Мелиорационные машины</OPTION><OPTION>10.0 Погрузочно-разгрузочные машины</OPTION><OPTION>11.0 Транспортные машины</OPTION><OPTION>12.0 Силосоуборочные машины</OPTION><OPTION>13.0 Сеноуборочные машины</OPTION><OPTION>14.0 Свеклоуборочные машины</OPTION><OPTION>15.0 Машины для возделывания и уборки картофеля</OPTION><OPTION>16.0 Сцепки</OPTION></select></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt; background-color:'>2.  Тип машины</td><td><select id='a2' style='width:239pt; background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt' onchange='tm(this)'></select></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>3.  Страна изготовитель</td><td><select id='a3' style='width:239pt;background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt' onchange='sj(this)'><OPTION></OPTION><OPTION >Дальнее зарубежье</OPTION><OPTION >Россия</OPTION><OPTION  value=''>Ближнее зарубежье</OPTION></select></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>4.  Количество машин в агрегате, шт</td><td><select id='a4' style='width:239pt;background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt'><OPTION></OPTION><OPTION>1</OPTION><OPTION >2</OPTION><OPTION >3</OPTION><OPTION >4</OPTION><OPTION>5</OPTION><OPTION >6</OPTION><OPTION >7</OPTION><OPTION >8</OPTION><OPTION >9</OPTION><OPTION >10</OPTION><OPTION >11</OPTION><OPTION >12</OPTION><OPTION >13</OPTION><OPTION >14</OPTION><OPTION >15</OPTION></select></td></tr><tr height='22pt' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>5.  Название машины</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a5' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22pt' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>6.  Марка машины</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a6' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22pt'  style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>7.  Мощность, л.с.</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a7' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22pt' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>8.  Тяговый класс</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a8' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr></table></div><div id='t2' style='padding-left:8pt; padding-top:18pt; height:165pt; background-image:url(<?=$h?>image/par2.png)'><table id='b2' width='700px' style='border-collapse: collapse;'  cellpadding='0' cellspacing='0' align='left' border='1'><tr height='22' style='background-color:rgb(235,235,235)'><td width='377px' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>1. Цена машины, руб</td><td width='317' align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a9' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>2. Ширина захвата, м</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a10' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>3. Расход топлива, кг/ч</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a11' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>4. Рабочая скорость, км/ч</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a12' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>5. Цена топлива, руб/кг</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a13' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>6. Часовая заработная плата, руб/ч</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a14' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>7. Кред. политика банка, %</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a15' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>8. Срок кредита, год</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a16' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>9. Персонал, чел</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a17' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr></table></div><div id='t3' style='padding-left:8pt; padding-top:18pt; margin-bottom:13px;height:113pt; background-image:url(<?=$h?>image/par3.png)'><table id='b3' width='700' style='border-collapse: collapse;'  cellpadding='0' cellspacing='0' align='left' border='1'><tr height='22' style='background-color:rgb(235,235,235)'><td width='377' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>1.  Коэффициент ремонта и ПТО, %</td><td width='317' align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a18' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>2. Коэф эффективного использования рабочего времени, kэ</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a19' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>3. Амортизационный ресурс, час</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a20' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>4. Амортизационный коэффициент, µт</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a21' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>5. Ремонтный коэффициент, µр</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a22' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>6. Топливно-эксплуатационный коэффициент, µs</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a23' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>7. Годовой амортизационный ресурс, год</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a24' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr></table></div>"; //Основная рабочая часть
//Условие заполнения таблицы
var a = pc2.split('\\');var b; for(var i = 0; i < 22; i++){if(a[i] != ''){b=1}};if(b==1){onil(pc2);}

//document.getElementById('a1').focus();
t = document.getElementById('Pi');t.innerHTML = '<img src="<?=$h?>image/Pi100.png" width="205" height="37" onclick="Cr()" onmouseover="f100a(this)" onmouseout="f100b(this)"/><img src="<?=$h?>image/Pi110.png" width="205" height="37" onmouseover="f110a(this)" onmouseout="f110b(this)" onclick="msave()"/><img src="<?=$h?>image/Pi120.png" width="205" height="37" onclick="cnm()" onmouseover="f120a(this)" onmouseout="f120b(this)"/><img src="<?=$h?>image/Pi130.png" width="205" height="37" onclick="delp()" onmouseover="f130a(this)" onmouseout="f130b(this)"/><img src="<?=$h?>image/Pi140.png" width="205" height="37" onclick="infl()" onmouseover="f140a(this)" onmouseout="f140b(this)"/>';

}//Параметры
function Pic3(e){
var q1 = document.getElementById('p1'); if(q1.src == "<?=$h?>image/Pic02.png"){t = document.getElementById('u');pc1 = t.innerHTML;}; q1.src = "<?=$h?>image/Pic00.png"; 
var q2 = document.getElementById('p2'); if(q2.src == '<?=$h?>image/Pic12.png'){pc2 = ReOne();}; q2.src = "<?=$h?>image/Pic10.png"; 
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic22.png"; 
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic33.png";
t = document.getElementById('nl');t.innerHTML = 'Настройка';
t = document.getElementById('u');
t.innerHTML = "<p style='padding: 0pt 9pt 0pt 13pt;'>Настройки</p><div style='height:100pt; background-image:url(<?=$h?>image/npar.png); padding-top:20pt; margin-top:15pt' ><table width='500' style='border-collapse: collapse; margin-left:8pt'  cellpadding='0' cellspacing='0' border='1' ><tr style='background-image:url(<?=$h?>image/tbg.png); height:16pt' ><td width='25' align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>№</span></td><td width='337' align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Параметр</span></td><td width='130' align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Значение</span></td></tr><tr style='height:15pt'><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>1</span></td><td align='left' style='padding-left:6pt' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Цена топлива, р./кг</span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='130' align='middle' id='k1' type='text' value='17' style='border-style:hidden' onchange='chj()'/></span></td></tr><tr style='height:15pt'><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>2</span></td><td align='left' style='padding-left:6pt' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Часовая заработная плата, р./час</span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='130' align='middle' id='k2' type='text' value='122.1' style='border-style:hidden' onchange='chj()'/></span></td></tr><tr style='height:15pt'><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>3</span></td><td align='left' style='padding-left:6pt' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Кредитная политика банка, %</span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='130' align='middle' id='k3' type='text' value='10' style='border-style:hidden' onchange='chj()'/></span></td></tr><tr style='height:15pt'><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>4</span></td><td align='left' style='padding-left:6pt' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Срок кредита, год</span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='130' align='middle' id='k4' type='text' value='5' style='border-style:hidden' onchange='chj()'/></span></td></tr><tr style='height:15pt'><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>5</span></td><td align='left' style='padding-left:6pt' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Топливно - эксплуатационный коэффициент, µs</span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='130' align='middle' id='k5' type='text' value='0.85' style='border-style:hidden' onchange='chj()'/></span></td></tr></table></div><div style='padding-top:20pt; background-image:url(<?=$h?>image/npar2.png); margin-top:20pt'><table width='500pt' style='border-collapse: collapse; margin-left:8pt'  cellpadding='0' cellspacing='0' border='1' ><tr style='background-image:url(<?=$h?>image/tbg.png); height:16pt' ><td width='25' align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>№</span></td><td width='155' align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Страны</span></td><td width='155' align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Амортизацион. коэф., µт</span></td><td width='155' align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Ремонтный. коэф., µр</span></td></tr><tr style='height:15pt'><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>1</span></td><td align='left' style='padding-left:6pt' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Дальнее зарубежье</span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='155' align='middle' id='k11' type='text' value='1' style='border-style:hidden' onchange='chj()'/></span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='155' align='middle' id='k12' type='text' value='1' style='border-style:hidden' onchange='chj()'/></span></td></tr><tr style='height:15pt'><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>2</span></td><td align='left' style='padding-left:6pt' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Россия</span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='155' align='middle' id='k21' type='text' value='0.8' style='border-style:hidden' onchange='chj()'/></span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='155' align='middle' id='k22' type='text' value='1.2' style='border-style:hidden' onchange='chj()'/></span></td></tr><tr style='height:15pt'><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>3</span></td><td align='left' style='padding-left:6pt' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'>Ближнее зарубежье</span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='155' align='middle' id='k31' type='text' value='0.85' style='border-style:hidden' onchange='chj()'/></span></td><td align='center' class=MsoNormal><span style='font-size:9.0pt;font-family:Microsoft Sans Serif'><input width='155' align='middle' id='k32' type='text' value='1.13' style='border-style:hidden' onchange='chj()'/></span></td></tr></table></div>";
t = document.getElementById('Pi');t.innerHTML = "<img src='<?=$h?>image/Pi200.png' width='205' height='37' onclick='vz()' onmouseover='f200a(this)' onmouseout='f200b(this)'/>"
nj();
}//Настройки
function Pic4(e){
var q1 = document.getElementById('p1');if(q1.src == "<?=$h?>image/Pic02.png"){t = document.getElementById('u');pc1 = t.innerHTML;} q1.src = "<?=$h?>image/Pic00.png"; 
var q2 = document.getElementById('p2');if(q2.src == '<?=$h?>image/Pic12.png'){pc2 = ReOne();}; q2.src = "<?=$h?>image/Pic10.png"; 
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic20.png"; 
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic32.png";
t = document.getElementById('nl');t.innerHTML = 'Графики'; 
t = document.getElementById('u');t.innerHTML = '<p style="padding: 0pt 9pt 0pt 13pt; ">Графики</p>';t = document.getElementById('Pi');t.innerHTML = '';
}//Графики


//Иниструменты расчета//
function ajax() {
var fv = document.getElementById('sp1').value;var m = fv.split([' ']); var b = m[0]; 
if (b.indexOf('.0') > 0){a = b.split('.');m[0] = a[0] + '.'}
var t = document.getElementById('sp2').value;if(t != ''){b = t.split([' ']); m[1] = b[2]}else{m[1] = ''}
var d = document.getElementById('sp3').value;if(d != ''){if(d != 'Все марки'){m[2]=d}else{m[2]=''};}else{m[2] = ''}
if(m[0] == '' && m[1] == '' && m[2] == ''){return};if(m[1] == undefined){m[1] = ''}
var url = 'ajax.php?ge='+encodeURIComponent(m[0] + '|' + m[1] + '|' + m[2]);//alert(m[0] + '|' + m[1] + '|' + m[2]);
getAjax(url,showResult);
}  function showResult(d){var a = d.split('|'); var u = document.getElementById('Q');
if (v.length != 0){var s = a[a.length - 1].split('\\'); s = s[0].split('.');
var m = v[v.length - 1].split('\\'); m = m[0].split('.');
if (s[0] == m[0]){if(u.innerHTML == ''){t = document.getElementById('Q'); t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="295pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table>';v = new Array();}}
else if (s[0] != m[0]){t = document.getElementById('Q'); t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="295pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table>';v = new Array();}}
else {t = document.getElementById('Q'); t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="295pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table>';v = new Array();}
for (var i = 0; i < a.length; i++){adRow(d);v.push(up(a[i]));title(a[i]+'||||');tai(ai(up(a[i])));};}  function addrow(){if(z=='a'){calk();return}
ajax(); //Вызов процедуры расчетов
}  //Рачет
function prt(){window.print();}  //Печать
function DelRows(){
t = document.getElementById('Q');t.innerHTML = '';//<table width="670" style="border-collapse: collapse;border-color: rgb(242,242,241); margin: 5pt 0pt 0pt 7pt"cellpadding="0" cellspacing="0" border="1" ><tr height="30pt"style="background-image:url(<?=$h?>image/tbg.png)"><td width="25" style="padding: 0pt 0pt 0pt 6pt">№</td><td style="font: Tahoma, Geneva, sans-serif; padding:0pt 0pt 0pt 6pt;" width="295pt">Название машины</td><td  align="center" width="80pt">Wэ, га/ч</td><td align="center" width="80pt">ГСМ, кг/га</td><td align="center" width="80pt">ЧЭЗ, руб./час</td><td align="center" width="80pt">Сс, руб./га</td></tr></table>';
t = document.getElementById('sp1'); t.value = t.options[0].value;
t = document.getElementById('sp2'); t.value = t.options[0].value;
t = document.getElementById('sp3'); t.value = t.options[0].value;
}  //Очистить

function dn(){var u = document.getElementById('sp3');
if(u.value == ''){alert('Для передачи в агрегат необходимо выбрать марку машины.');return;}
var url = 'Bdn.php?u='+encodeURIComponent(u.value);getAjax(url,redn);
}function redn(d){var k;var a = d.split('\\');var R = document.getElementById('agr').rows;var r = R[1];var n;
for(var i = 1; i < 6; i++){r = R[i]; 
if(r.style.backgroundImage == 'url("<?=$h?>image/v1.png")'){
if(a[0].indexOf('1.') > -1 || a[0].indexOf('7.2') > -1){r = R[1];if((document.getElementById('sp1').value).length > 23){
		k = (document.getElementById('sp1').value).substr(0, 23) + '...';}
		else{k = document.getElementById('sp1').value}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		if(a[1].length > 38){k = a[1].substr(0,38) + '...';} else {k = a[1];}
		r.cells[3].innerHTML = k;
		r.cells[4].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[5].innerHTML = c[3]; sum();ag[0] = d+'\\'+document.getElementById('sp4').value;return}
else{n = r.rowIndex;if(r.rowIndex == 1){n = 2};r = R[n];if((document.getElementById('sp1').value).length > 23){
		k = (document.getElementById('sp1').value).substr(0, 23) + '...';}
		else{k = document.getElementById('sp1').value}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		if(a[1].length > 38){k = a[1].substr(0,38) + '...';} else {k = a[1];}
		r.cells[3].innerHTML = k;
		r.cells[4].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[5].innerHTML = c[3]; sum();ag[n-1] = d+'\\'+document.getElementById('sp4').value;return}}}
r = R[1];if(a[0].indexOf('1.') > -1 || a[0].indexOf('7.2') > -1){if((document.getElementById('sp1').value).length > 23){
		k = (document.getElementById('sp1').value).substr(0, 23) + '...';}
		else{k = document.getElementById('sp1').value}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		if(a[1].length > 38){k = a[1].substr(0,38) + '...';} else {k = a[1];}
		r.cells[3].innerHTML = k;
		r.cells[4].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[5].innerHTML = c[3]; sum();ag[0] = d+'\\'+document.getElementById('sp4').value;}
else {for(var i = 2; i < 6; i++){r = R[i];
	  if(r.cells[1].innerHTML == ''){
		
		if((document.getElementById('sp1').value).length > 23){
		k = (document.getElementById('sp1').value).substr(0, 23) + '...';}
		else{k = document.getElementById('sp1').value}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		if(a[1].length > 38){k = a[1].substr(0,38) + '...';} else {k = a[1];}
		r.cells[3].innerHTML = k;
		r.cells[4].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[5].innerHTML = c[3]; sum();ag[i-1] = d+'\\'+document.getElementById('sp4').value;break;
	  }
	};if(i == 6){r = R[2];
		if((document.getElementById('sp1').value).length > 23){
		k = (document.getElementById('sp1').value).substr(0, 23) + '...';}
		else{k = document.getElementById('sp1').value}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		if(a[1].length > 38){k = a[1].substr(0,38) + '...';} else {k = a[1];}
		r.cells[3].innerHTML = k;
		r.cells[4].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[5].innerHTML = c[3]; sum();ag[1] = d+'\\'+document.getElementById('sp4').value;
};}} //Кнопка добавить машину в агрегат
function sum(){
var R = document.getElementById('agr').rows;var r;var k = 0;var n=0;
//Сумма столбца чезов
for(var i = 1; i < R.length - 1; i++){r = R[i];
if(r.cells[5].innerHTML != ''){k = k + parseFloat(r.cells[5].innerHTML); n = n + parseFloat(r.cells[4].innerHTML);}}
//Проставление процентов
for(var i = 1; i < R.length - 1; i++){r = R[i];if(r.cells[5].innerHTML != ''){r.cells[6].innerHTML = (parseFloat(r.cells[5].innerHTML) / k * 100).toFixed(2) + ' %'}}
//Итоги
r = R[6];r.cells[4].innerHTML = n;r.cells[5].innerHTML = k.toFixed(2);r.cells[6].innerHTML = '100 %';
} //Функция итогов и процентов в таблице агрегатов

function arc(e){var r;var R = document.getElementById('agr').rows;
for(var i = 1; i < 7; i++){r = R[i];r.style.backgroundImage = '';}
if(e.style.backgroundImage == ''){e.style.backgroundImage = 'url("<?=$h?>image/v1.png")';}
} //На клик по таблице агрегатов
function ard(e){for(var i = 1; i < 7; i++){e.cells[i].innerHTML = ''}; sum();} //Удаление по клику на строку в таблице агрегатов agr
function calk(){var f='';var w;var q; var h=0; var c;var a;var m
	//if(ag[0] != '' && ag[1] != ''){alert(123);}	else {alert(lkj);}
	
	for(var i = 0; i < ag.length; i++){if(ag[i] != ''){a = ag[i].split('\\');f += a[2] + '(' + a[23] + ') '}}  //F
	for(var i = 0; i < ag.length; i++){if(ag[i] != ''){a = ai(up(ag[i])).split('\\'); h += parseFloat(a[3]);}} //Чэз
	
	if(ag[0] != ''){a = ai(up(ag[0])).split('\\');w = a[1]; q = a[2]; c = a[4]}
	for(var i = ag.length - 1; i > 0; i--){if(ag[i] != ''){a = ai(up(ag[i])).split('\\');w = a[1];
	if(ag[0] != ''){m = ai(up(ag[0])).split('\\');q = m[2];}if(q != 0){q = q / w} else{q = a[2]}; 
	c = h / a[1];}}
	
	w = parseFloat(w).toFixed(2);q = parseFloat(q).toFixed(2);h = h.toFixed(2);c = parseFloat(c).toFixed(2);
	//alert(f + '---' + w + '---' + q + '---' + h + '---' + c);
	
	t = document.getElementById('Q');if(t.innerHTML == ''){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="295pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table>'};adRow();
	tai(f + '\\' + w + '\\' + q + '\\' + h + '\\' + c);
	
	var R = document.getElementById('qt').rows;var r = R[0];
	if(ag[0] != '' && ag[1] != ''){if(r.cells[3].innerHTML != 'ГСМ, кг/га'){r.cells[2].innerHTML = 'Wэ, га/час';r.cells[3].innerHTML = 'ГСМ, кг/га';r.cells[5].innerHTML = 'СС, руб./га';}}
	
	//if(ag[0] != '' && ag[1] == ''){if(r.cells[3].innerHTML != 'ГСМ, кг/га'){}}
	
	
} //Расчет в агрегатах



//Параметры//
function Cr(e){if (ons() == true){var s = ReOne();Pic1();t = document.getElementById('Q');
if (t.innerHTML == ''){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="295pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table>'}
var h = t.innerHTML.split('</table>');var tg = h[0] + '<tr height="20pt" onclick="goPr(this)" onmouseover="selStr(this)" onmouseout="unselStr(this)" style="background-image:url(<?=$h?>image/st2.png)"><td align="center">&nbsp;</td><td style="padding-left:6pt">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>' + '</table>';
t.innerHTML = tg; tai(ai(s)); v.push(s);window.scrollTo(0,999999);}else{alert('Проверьте правильность заполнения всех полей.');}}  //Пересчет
function msave(){
if (ons() == true){var s = ReOne(); var m = s.split('\\'); m.length = 23; s = m.join('\\');
var url = 'Msave.php?s='+encodeURIComponent(s);getAjax(url,ReMsave);	
} else {alert('Проверьте правильность заполнения всех полей.');}
}  //Сохранить данные
function cnm(){var a = j[0].split('!');
var m = a[0].split('\\'); document.getElementById('a13').value = m[1];
m = a[1].split('\\'); document.getElementById('a14').value = m[1];
m = a[2].split('\\'); document.getElementById('a15').value = m[1];
m = a[3].split('\\'); document.getElementById('a16').value = m[1];
m = a[4].split('\\'); document.getElementById('a23').value = m[1];

var d = new Date(); var t   = ((String(d.getDate()).length == 1) ? "0" + d.getDate() : d.getDate()) + "." + ((String(d.getMonth()).length == 1) ? "0" + d.getMonth() : d.getMonth()) + "." + d.getFullYear();
document.getElementById('dt').value = t;

}  //Создать новую машину
function delp(){
document.getElementById('a1').selectedIndex = 0;
document.getElementById('a2').selectedIndex = 0;
document.getElementById('a3').selectedIndex = 0;
document.getElementById('a4').selectedIndex = 0;

document.getElementById('a5').value = '';
document.getElementById('a6').value = '';
document.getElementById('a7').value = '';
document.getElementById('a8').value = '';
document.getElementById('a9').value = '';
document.getElementById('a10').value = '';
document.getElementById('a11').value = '';
document.getElementById('a12').value = '';
document.getElementById('a13').value = '';
document.getElementById('a14').value = '';
document.getElementById('a15').value = '';
document.getElementById('a16').value = '';
document.getElementById('a17').value = '';
document.getElementById('a18').value = '';
document.getElementById('a19').value = '';
document.getElementById('a20').value = '';
document.getElementById('a21').value = '';
document.getElementById('a22').value = '';
document.getElementById('a23').value = '';
document.getElementById('a24').value = '';
document.getElementById('dt').value = '';
}  //Удалить текущие данные
function infl(){window.open("<?=$h?>inf.php?re=" + document.getElementById('a5').value, "_blank");}  //Информация

function Spt2(e){var b = e.value.split(' ');b=b[0].split('.');//alert(b[0])
	var u = document.getElementById('a2');u.innerHTML = '';
	var n = 0; var c;u.options[0] = new Option('');
	for(var i = 0;i < g.length ;i++){c = g[i].split('!');
	if((c[0].indexOf(b[0] + '.') < 1) && (c[0].indexOf(b[0] + '.') > -1) && (c[0].indexOf(b[0] + '.0') < 0))
	{n++;	u.options[n] = new Option(c[0] + " " + c[1]);}}
}  //Функция заполнения подсписка техники
function ReOne(){var a = new Array(); var s;
	var u = document.getElementById('a2').value.split(' ');
	
	a[0] = u[0];
	a[1] = document.getElementById('a5').value;
	a[2] = document.getElementById('a6').value;
	a[3] = document.getElementById('a7').value;
	a[4] = document.getElementById('a8').value;
	
	a[5] = document.getElementById('a9').value;
	a[6] = document.getElementById('a20').value;
	a[7] = document.getElementById('a18').value; if(document.getElementById('a3').selectedIndex != 0){
	a[8] = document.getElementById('a3').selectedIndex - 1;}
	a[9] = document.getElementById('a11').value;
	a[10] = document.getElementById('a10').value;
	a[11] = document.getElementById('a12').value;
	a[12] = document.getElementById('a19').value;
	a[13] = document.getElementById('a17').value;
	a[14] = document.getElementById('a24').value;
	a[15] = document.getElementById('a13').value;
	
	a[16] = document.getElementById('a14').value;
	a[17] = document.getElementById('a15').value;
	a[18] = document.getElementById('a16').value;
	a[19] = document.getElementById('a23').value;
	a[20] = document.getElementById('a21').value;
	a[21] = document.getElementById('a22').value;
	a[22] = document.getElementById('dt').value;
	a[23] = document.getElementById('a4').value;
	
	s = a.join('\\');return s;
} //Функция сбора значений из параметров
function onil(s){var a = s.split('\\');var m = a[0].split('.');
document.getElementById('a1').selectedIndex = parseInt(m[0]);
document.getElementById('a1').focus();document.getElementById('a5').focus();
setTimeout( function(){document.getElementById('a2').options[parseInt(m[1])].selected=true;}, 1 );
document.getElementById('a3').selectedIndex = parseInt(a[8]) + 1;
document.getElementById('a4').selectedIndex = 1;
document.getElementById('a5').value = a[1];
document.getElementById('a6').value = a[2];
document.getElementById('a7').value = a[3];
document.getElementById('a8').value = a[4];

document.getElementById('a9').value = a[5];
document.getElementById('a10').value = a[10];
document.getElementById('a11').value = a[9];
document.getElementById('a12').value = a[11];
document.getElementById('a13').value = a[15];
document.getElementById('a14').value = a[16];
document.getElementById('a15').value = a[17];
document.getElementById('a16').value = a[18];
document.getElementById('a17').value = a[13];

document.getElementById('a18').value = a[7];
document.getElementById('a19').value = a[12];
document.getElementById('a20').value = a[6];
document.getElementById('a21').value = a[20];
document.getElementById('a22').value = a[21];
document.getElementById('a23').value = a[19];
document.getElementById('a24').value = a[14];
document.getElementById('dt').value = a[22];
} //Функция развертывания параметров
function tm(e){//alert(e.value);	
	var s = e.value.split(' ');var a;
	for (var i = 0; i < g.length; i++){a = g[i].split('!');
	if (s[0] == a[0]){document.getElementById('a18').value = a[8];
	document.getElementById('a19').value = parseFloat(a[3]) / 100;
	document.getElementById('a20').value = a[6];document.getElementById('a24').value = a[11];return}}
} //Функция изменения параметров от изименения типа техники
function ons(){var s = ReOne(); a = s.split('\\');
	for (var i = 0; i < a.length; i++){if (a[i] == ''){return false;}}
	for (i = 3; i < 22; i++){if(a[i] / 9999 > -9999999999999999999999999){}else{return false}}
	return true;
} //Проверка на заполненность всех данных параметров
function ReMsave(d){alert(d);} //Ответ от функции сохранения машин
function findm(){var s = document.getElementById('a5').value + '|' + document.getElementById('dt').value;
	var url = 'Mfind.php?j='+encodeURIComponent(s);
	getAjax(url,Refindm);
} //Функция поиска цен от указанной даты
function Refindm(d){var a = d.split('|');
	alert('Данные на ближайшую дату  " ' + a[0] + ' "  успешно найдены.');
	document.getElementById('dt').value = a[0];
	document.getElementById('a9').value = a[1];
} //Ответ от функции поиска указанной даты
//Настройки//
function vz(){ns();setTimeout( function(){nj();}, 300);}  //Восстановить значения из базы настроек

function chj(e){var a = j[1].split('!');
//Матрица стран и их коэффициентов
var m = a[0].split('\\');m[2] = document.getElementById('k11').value;
m[3] = document.getElementById('k12').value;a[0] = m.join('\\');
m = a[1].split('\\');m[2] = document.getElementById('k21').value;
m[3] = document.getElementById('k22').value;a[1] = m.join('\\');
m = a[2].split('\\');m[2] = document.getElementById('k31').value;
m[3] = document.getElementById('k32').value;a[2] = m.join('\\');j[1] = a.join('!');
//Матрица экономических настроек
a = j[0].split('!');
m = a[0].split('\\');m[1] = document.getElementById('k1').value;a[0] = m.join('\\');
m = a[1].split('\\');m[1] = document.getElementById('k2').value;a[1] = m.join('\\');
m = a[2].split('\\');m[1] = document.getElementById('k3').value;a[2] = m.join('\\');
m = a[3].split('\\');m[1] = document.getElementById('k4').value;a[3] = m.join('\\');
m = a[4].split('\\');m[1] = document.getElementById('k5').value;a[4] = m.join('\\');j[0] = a.join('!');
}  //Renj Сбор настроек
function nj(){var a = j[0].split('!');
var m = a[0].split('\\');document.getElementById('k1').value = m[1];
m = a[1].split('\\');document.getElementById('k2').value = m[1];
m = a[2].split('\\');document.getElementById('k3').value = m[1];
m = a[3].split('\\');document.getElementById('k4').value = m[1];
m = a[4].split('\\');document.getElementById('k5').value = m[1];

a = j[1].split('!');
m = a[0].split('\\');document.getElementById('k11').value = m[2];document.getElementById('k12').value = m[3];
m = a[1].split('\\');document.getElementById('k21').value = m[2];document.getElementById('k22').value = m[3];
m = a[2].split('\\');document.getElementById('k31').value = m[2];document.getElementById('k32').value = m[3];

}  //nj Развертывание настроек
function sj(e){var a = j[1].split('!');var m = new Array();
if (e.selectedIndex == 1){m = a[0].split('\\');
	var u = document.getElementById('a21');u.value = m[2];
	var u = document.getElementById('a22');u.value = m[3];}
else if (e.selectedIndex == 2){m = a[1].split('\\');
	var u = document.getElementById('a21');u.value = m[2];
	var u = document.getElementById('a22');u.value = m[3];}
else if (e.selectedIndex == 3){m = a[2].split('\\');
	var u = document.getElementById('a21');u.value = m[2];
	var u = document.getElementById('a22');u.value = m[3];}
}  // при изменении страны выбор коэффициентов


function ai(s){
		
	var a = s.split('\\'); //Массив строки S
	var f;var w;var q;var c;var k; //Объявление переменных
	var Mp = a[21];var k2 = a[7] / 100;
	var I = a[17] / 100;var N = parseInt(a[18]) + 1;
	var k0 = 1.15 + Mp * k2 + I * N / 2;
	var Pr = a[5] * k0; var T0 = Pr / a[6];
	var Mt = T0 / a[20];var Gsm = a[15] * a[9] * a[19];
	var W = a[16] * a[13]; 
	
	var c = Mt + Gsm + W;c = c.toFixed(2); //Расчет ЧЭЗ
	
	//1. Блок формирования форумулы агрегатов
	f = a[1];
	//2. Расчет производительности
	if (a[0].indexOf('1.') == 0) {w = a[4]}
	else {w = 0.1 * a[10] * a[11] * a[12]; w = w.toFixed(2)};
	//3. Расход топлива для тракторов и тяговых устройств
	if (a[0].indexOf('1.') == 0) {q = parseFloat(a[9]).toFixed(1);}
	else if (a[0].indexOf('7.2') == 0){q = parseFloat(a[9]).toFixed(1); q = parseFloat(q / w).toFixed(1);}
	else if (a[0].indexOf('1.') < 0 && a[0].indexOf('7.2') < 0){q = parseFloat(a[4]);}
	else {if (w != 0){q = parseFloat(q / w).toFixed(1);}};
	//4. Расчет ЧЭЗ
	if(a.length == 24){c = (c * a[23]).toFixed(2);} else{c = c;}
	//5. Расчет себестоимости
	if (a[0].indexOf('1.') == 0) {k = a[3]}
	else {if (w!=0){k = parseFloat(c / w).toFixed(1);} else {k = 0;}}  
	 //Обработка результатов
	  
	s = f + "\\" + w + "\\" + q + "\\" + c + "\\" + k;  

	return s;
} //ai
function tai(e){var a = e.split('\\');//alert(a[0])
	//Заполнение ячеек таблицы
	var r = document.getElementById('qt').rows;	var Row = r[r.length - 1];
	
	Row.cells[0].innerHTML = r.length - 1;
	Row.cells[1].innerHTML = a[0];
	Row.cells[2].innerHTML = a[1];
	Row.cells[3].innerHTML = a[2];
	Row.cells[4].innerHTML = a[3];	
	Row.cells[5].innerHTML = a[4];
} //Вывод результатов расчета функции ai
function title(e){var a = e.split('|');var s = new Array();
var u = document.getElementById('qt').rows; var r = u[0];
r.cells[2].innerHTML = 'Wэ, га/час';r.cells[3].innerHTML = 'ГСМ, кг/га';
r.cells[4].innerHTML = 'ЧЭЗ, руб./час';r.cells[5].innerHTML = 'СС, руб./га';

for (var i = 0; i < a.length; i++ ){s = a[i].split('\\');if (a[i] != ''){
if (s[0].indexOf('1.') == 0){r.cells[2].innerHTML = 'Тяговый класс';r.cells[3].innerHTML = 'ГСМ, кг/ч';r.cells[5].innerHTML = 'Мощность л.с.';}
else if (s[0].indexOf('7.2') == 0){r.cells[2].innerHTML = 'Wэ, га/час';r.cells[3].innerHTML = 'ГСМ, кг/га';r.cells[5].innerHTML = 'СС, руб./га';}
else {r.cells[2].innerHTML = 'Wэ, га/час';r.cells[3].innerHTML = 'Тяговый класс';r.cells[5].innerHTML = 'СС, руб./га';}
}}


} //Анализ заголовков выходной таблицы и их запись
function up(e){var a = e.split('\\'); var s = j[0].split('!');var m = s[0].split('\\');a[15] = m[1];
m = s[1].split('\\');a[16] = m[1];
m = s[2].split('\\');a[17] = m[1];
m = s[3].split('\\');a[18] = m[1];
m = s[4].split('\\');a[19] = m[1];

s = j[1].split('!');
if (a[8] != ''){m = s[parseInt(a[8])].split('\\'); a[20] = m[2]; a[21] = m[3];}
s = a.join('\\'); return s;
} //функция обновления показателей настроек

function adRow(){t = document.getElementById('Q');var s = t.innerHTML.split('</table>');var tg = s[0] + '<tr height="20pt" onclick="goPr(this)" onmouseover="selStr(this)" onmouseout="unselStr(this)" style="background-image:url(<?=$h?>image/ust.png)"><td align="center">&nbsp;</td><td style="padding-left:6pt">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td></tr>' + '</table>';t.innerHTML = tg;}//Добавление строки в таблицу qt
function goPr(e){var s = v[e.rowIndex - 1];Pic2();onil(s);}// функция добавления строк в таблицу))

function selStr(e){	
//alert(e.style.backgroundImage)
if(e.style.backgroundImage=='url("<?=$h?>image/ust.png")'){e.style.backgroundImage = 'url("<?=$h?>image/st.png")';}
if(e.style.backgroundImage=='url("<?=$h?>image/st2.png")'){e.style.backgroundImage = 'url("<?=$h?>image/st1.png")';}
}
function unselStr(e){
if(e.style.backgroundImage=='url("<?=$h?>image/st.png")'){e.style.backgroundImage = 'url("<?=$h?>image/ust.png")';}
if(e.style.backgroundImage=='url("<?=$h?>image/st1.png")'){e.style.backgroundImage = 'url("<?=$h?>image/st2.png")';}
}// выделение и снятие выделения строк

function Spt3(e){

	//alert(123);
	
	
}





function f00a(e){e.src = "<?=$h?>image/Pi01.png"};function f00b(e){e.src = "<?=$h?>image/Pi00.png"};function f10a(e){e.src = "<?=$h?>image/Pi11.png"};function f10b(e){e.src = "<?=$h?>image/Pi10.png"};function f20a(e){e.src = "<?=$h?>image/Pi21.png"};function f20b(e){e.src = "<?=$h?>image/Pi20.png"};

function f100a(e){e.src = "<?=$h?>image/Pi101.png"};function f100b(e){e.src = "<?=$h?>image/Pi100.png"};function f110a(e){e.src = "<?=$h?>image/Pi111.png"};function f110b(e){e.src = "<?=$h?>image/Pi110.png"};function f120a(e){e.src = "<?=$h?>image/Pi121.png"};function f120b(e){e.src = "<?=$h?>image/Pi120.png"};function f130a(e){e.src = "<?=$h?>image/Pi131.png"};function f130b(e){e.src = "<?=$h?>image/Pi130.png"};function f140a(e){e.src = "<?=$h?>image/Pi141.png"};function f140b(e){e.src = "<?=$h?>image/Pi140.png"};

function f200a(e){e.src = "<?=$h?>image/Pi201.png"};function f200b(e){e.src = "<?=$h?>image/Pi200.png"};function f210a(e){e.src = "<?=$h?>image/Pi211.png"};function f210b(e){e.src = "<?=$h?>image/Pi210.png"}; // Группа смены кнопок функций


//sql запросы
function aCb0(){var url = 'Cb0.php';getAjax(url,aReCb0);}
function aReCb0(d){g = d.split('|');var sp = document.getElementById('sp1');var m = d.split('|');
sp.options[0] = new Option('');
for(var i=0; i<m.length; i++) {var a = m[i].split('!'); 
sp.options[i+1] = new Option(a[0] + ' ' + a[1]);}
} // Список тип техники -- заполнение
function Cb1(e){var fv = document.getElementById('sp1').value;var m = fv.split([' ']);var b = m[0]; 
	if (b.indexOf('.0') > 0){a = b.split('.');m[0] = a[0] + '.';}; 
	var url = 'Cb1.php?ge='+encodeURIComponent(m[0]);
	getAjax(url,aReCb1);} // отображение списка тяговых классов
function aReCb1(d){var m = d.split('|');
var sp3 = document.getElementById('sp3');for (var i = 0; i < 30; i++){sp3.options[0] = null;}
sp2 = document.getElementById('sp2');for (var i = 0; i < 30; i++){sp2.options[0] = null;}//удаляем предыдущие элементы списка
sp2.options[0] = new Option(''); sp2.options[1] = new Option('Все классы');
sp1 = document.getElementById('sp1'); var a = sp1.value.split(' ');
if(a[0].indexOf('.0') > -1){ sp2.selectedIndex = 1 }
for(var i=0; i<m.length; i++) {sp2.options[i+2] = new Option('Тяговый класс ' + m[i]);}
//setTimeout( function(){Cb2();}, 400);
Cb2();} // вывод тяговых классов в комбобокс //Cb1
function Cb2(){
var s1 = document.getElementById('sp1').value;var s2 = document.getElementById('sp2').value;
var m = s1.split([' ']);var b = m[0]; if (b.indexOf('.0') > -1){a = b.split('.');m[0] = a[0] + '.';};
b = s2.split([' ']); var a = b[2]; if(a == 'классы'){a = ''; }
var url = 'Cb2.php?ge='+encodeURIComponent(m[0] + '|' + a);
getAjax(url,aReCb2);
} // отображение списка марок машин
function aReCb2(d){var m = d.split('|');//alert(m[0]);
var sp = document.getElementById('sp3'); var n = sp.options.length + 1;
for (var i = 0; i < n; i++){sp.options[0] = null;}
sp.options[0] = new Option('');sp.options[1] = new Option('Все марки');
if(document.getElementById('sp2').value == 'Все классы'){sp.selectedIndex = 1}
for(i=0; i<m.length; i++) {var a = m[i].split('\\');sp.options[i+2] = new Option(a[2]);}
} // вывод списка марок машин  //Списки Cb
function ns(){getAjax('Ns.php',nsk);} // функция подачи запроса на выбор параметров
function nsk(d){j = new Array();j = d.split('|');} // обнуление параметров в настройках


function fni(){
//var inf = 
window.open("<?=$h?>tst.php", "_blank");
//inf.document.write('<div>123</div>');

}

</script>
</html>





























