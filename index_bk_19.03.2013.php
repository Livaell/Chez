<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php $h = "http://".$_SERVER['HTTP_HOST'].$GLOBALS['p']."/"; ?>

<title>Матчэз</title>


<style type="text/css">
body {height: 100%; margin: 0; background-image:url(<?=$h?>image/StartFon.jpg); background-repeat:no-repeat}
#sp3, #sp3 option {width: 200px;}
</style>
<SCRIPT LANGUAGE='JavaScript' src='ajax_GET_UTF8.js'></script>
<script src="js/Context/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/Context/jquery.contextMenu.js" type="text/javascript"></script>
<link href="js/Context/jquery.contextMenu.css" rel="stylesheet" type="text/css" />


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

</table></td><td id="lgt2" width="18%" align="right" valign="bottom"></td></tr></table>
</td></tr></table>


<ul id="myMenu" class="contextMenu">
<li class="cut"><a href="#cut">Вырезать</a></li>
<li class="copy"><a href="#copy">Копировать</a></li>
<li class="paste"><a href="#paste">Вставить</a></li>
<li class="edit separator"><a href="#edit">Добавить ячейки</a></li>
<li class="delete"><a href="#delete">Удалить</a></li>
<li class="quit"><a href="#quit">Очистить содержимое</a></li>
</ul>
</body>
<script language="javascript">
// Глобальные переменные 
var v =  new Array(); // Массив строки S
var g = new Array(); // Массив списка техники с параметрами
var j = new Array(); // Массив настроек
var z = 'm'; // Режимы приложения (m, a, t)
var ag = new Array(); // Массив машин в агрегате службы агрегатов
var cz = new Array(); //Массив машин строки таблицы результатов при передаче во вкладку параметры
var tip; //Индекс строки с столбца в технологиях в панели выбора сх машин и агрегатов
var brw; //Тип браузера(опеределяется при загрузке страницы)

var pc1 = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "МАШИНЫ"</p><div style="background-image:url(<?=$h?>image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';var pc2='\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\';var pc3;var pc4;var pc5;var pc6;var pc7;var pc8; // Переменные хранения параметров
var m1 = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "МАШИНЫ"</p><div style="background-image:url(<?=$h?>image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';var a1 = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "АГРЕГАТЫ"</p><div style="background-image:url(<?=$h?>image/pn2.png); height:213px; width:578pt; margin-left:6pt; padding-top:38pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="367" contextmenu="return false;"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:356px" onchange="Cb1()"></select></td><td width="161"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="131"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:120px; " ></select></td><td width="61"><select id="sp4" style="margin:0pt 0pt 0pt 8pt; width:50px; " ></select></td><td width="41"><input name="" type="button" style="background-image: url(image/bot2.png); margin-left:8pt;width:23px" onclick="dn()" /></td></tr></table><table id="agr" width="745px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); margin: 10px 0px 0px 11px;font-size:9.0pt;font-family:Microsoft Sans Serif" border="1"><tr height="30px" style="background-image:url(image/tbg.png);"><td width="25" align="center">№</td><td width="173" align="center">Тип техники</td><td width="55" align="center">Тяг класс</td><td width="269" align="center">Название машины</td><td width="44" align="center">Кол-во</td><td width="70" align="center">ЧЭЗ, р./ч</td><td width="63" align="center">Доля, %</td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">1.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">2.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">3.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">4.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">5.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" style="background-color:rgb(255,222,173)"><td></td><td align="left" style="padding-left:5px">Всего:</td><td></td><td></td><td align="center"></td><td align="center"></td><td align="center"></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';var t1; // Переменные для хранения титульных страниц служб



//Start
var start = '<div><table width="999" style="border-collapse: collapse; border-color: rgb(242,242,241); margin-top:0pt"  cellpadding="0" cellspacing="0" align="center" border="0" ><tr><td align="left" class="MsoNormal" style="font-size:12.0pt;font-family:Microsoft Sans Serif; padding-left: 6pt">ФГБУ Поволжская МИС - Аграрная информационная система МАТЧЭЗ</td></tr><tr><td height="30" style="background-image:url(<?=$h?>image/tbg.png)"><table width="997" border="0" style="border-collapse: collapse;"><tr><td width="75px"><img id="mm1" src="<?=$h?>image/m11.png" style="margin-left:15px; margin-top:3px" onmouseover="rm11(this)" onmouseout="rm12(this)" onclick="M()"/></td><td width="75px"><img id="mm2" src="<?=$h?>image/m21.png" style="margin-top:3px" onmouseover="rm21(this)" onmouseout="rm22(this)" onclick="A()"/></td><td width="75px"><img id="mm3" src="<?=$h?>image/m31.png" style="margin-top:3px" onmouseover="rm31(this)" onmouseout="rm32(this)" onclick="T()"/></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table></td></tr></table></div><table width="999" height="708" style="border-collapse: collapse; border-color: rgb(242,242,241);"  cellpadding="0" cellspacing="0" align="center" border="1" ><tr valign="top"><td width="208" style="background-color: rgb(242,242,241)"><div id="Pic" style="width:156pt"><img id="p1" src="<?=$h?>image/Pic02.png" alt="Pic02" width="52" height="42" onclick="Pic1(this)" /><img id="p2" src="<?=$h?>image/Pic13.png" alt="Pic13" width="52" height="42" onclick="Pic2(this)" /><img id="p3" src="<?=$h?>image/Pic20.png" width="52" height="42" onclick="Pic3(this)" /><img id="p4" src="<?=$h?>image/Pic30.png" width="52" height="42" onclick="Pic4(this)" /></div><p id="nl" style="padding: 7pt 5.4pt 9pt 11pt; ">Инструменты расчета</p><div id="Pi"><img src="<?=$h?>image/Pi00.png" width="205" height="37" onclick="addrow()" onmouseover="f00a(this)" onmouseout="f00b(this)" /><img src="<?=$h?>image/Pi10.png" width="205" height="37" onmouseover="f10a(this)" onmouseout="f10b(this)" onclick="prt()"/><img src="<?=$h?>image/Pi20.png" width="205" height="37" onclick="DelRows()" onmouseover="f20a(this)" onmouseout="f20b(this)" /></div></td><td id="u" width="785" align="left" valign="top" bgcolor="#FFFFFF"><p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "МАШИНЫ"</p><div style="background-image:url(<?=$h?>image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px;"><p style=" margin-top:150px;padding-left:27pt; font-family:Microsoft Sans Serif; font-size:16px">Начало работы</p><p style="padding-left:27pt; font-family:Microsoft Sans Serif; font-size:14px;"><font color="#0066CC">1. Сформируйте запрос на предоствление сведений по технике в панели выбора сельскохозяйственных машин </font></p><p style="padding-left:27pt; font-family:Microsoft Sans Serif; font-size:14px"><font color="#0066CC">2. Нажатие кнопки "Найти" осуществляет отображение результатов </font></p><p style="padding-left:27pt; font-family:Microsoft Sans Serif; font-size:14px"><font color="#0066CC">3. В последующей работе с ИКС "Машины" руководствуйтесь подсказками и инструкциями </font></p></div></td></tr></table>'; // переменная хранения начальной страницы
function sent(){var l = document.getElementById("Log").value; var p = document.getElementById("Pas").value;
var url = 'Enter.php?s='+encodeURIComponent(l + "|" + p); getAjax(url,ent);} // Функция проверки логина и пароля
function ent(s){if(s != ''){
document.body.style.backgroundRepeat = 'repeat';	
document.body.style.backgroundImage = 'url("<?=$h?>image/fon.png")'
document.getElementById('mn').innerHTML = start;aCb0();ns();resz();}} // функция загрузки программы после проверки логина и пароля
function kp(e){if (e.keyCode == 13) {sent();}} // Функция по логина и пароля по нажатию ентер

window.onload = function () {brw = browser(); // Присваиваем переменной наименование браузера
//document.getElementById('mt').height = gh();
//document.getElementById('mtr').height = gh();
//document.getElementById('mn').height = gh();
document.getElementById('Log').focus()} // window.onLoad
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
} //Функция определения браузера при загрузке
function gw(){return (window.innerWidth)?window.innerWidth:((document.all)?document.body.offsetWidth:null);}
function gh(){return (window.innerHeight)?window.innerHeight:((document.all)?document.body.offsetHeight:null);} // Ширина и высота клиентской области браузера
function resz(){var w = gw();var h = gh();}


//Меню
function rm11(e){e.src = "<?=$h?>image/m12.png"};function rm12(e){e.src = "<?=$h?>image/m11.png"};function rm21(e){e.src = "<?=$h?>image/m22.png"};function rm22(e){e.src = "<?=$h?>image/m21.png"};function rm31(e){e.src = "<?=$h?>image/m32.png"};function rm32(e){e.src = "<?=$h?>image/m31.png"} //Смена иконок
function M(){z = 'm';document.getElementById('Pic').innerHTML = '<img id="p1" src="<?=$h?>image/Pic02.png" width="52" height="42" onclick="Pic1(this)" /><img id="p2" src="<?=$h?>image/Pic53.png" width="52" height="42" onclick="Pic2(this)" /><img id="p3" src="<?=$h?>image/Pic20.png" width="52" height="42" onclick="Pic3(this)" /><img id="p4" src="<?=$h?>image/Pic30.png" width="52" height="42" onclick="Pic4(this)" />';Pic1();document.getElementById('u').innerHTML = m1;aCb0();} //M()
function A(){ag = new Array();z = 'a';document.getElementById('Pic').innerHTML = '<img id="p1" src="<?=$h?>image/Pic02.png" width="52" height="42" onclick="Pic1(this)" /><img id="p2" src="<?=$h?>image/Pic53.png" width="52" height="42" onclick="Pic2(this)" /><img id="p3" src="<?=$h?>image/Pic20.png" width="52" height="42" onclick="Pic3(this)" /><img id="p4" src="<?=$h?>image/Pic30.png" width="52" height="42" onclick="Pic4(this)" />';Pic1();
var u = document.getElementById('u');u.innerHTML = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "АГРЕГАТЫ"</p><div style="background-image:url(<?=$h?>image/pn2.png); height:213px; width:578pt; margin-left:6pt; padding-top:38pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="367" contextmenu="return false;"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:356px" onchange="Cb1()"></select></td><td width="161"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="131"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:120px; " ></select></td><td width="61"><select id="sp4" style="margin:0pt 0pt 0pt 8pt; width:50px; " ></select></td><td width="41"><input name="" type="button" style="background-image: url(image/bot2.png); margin-left:8pt;width:23px" onclick="dn()" /></td></tr></table><table id="agr" width="745px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); margin: 10px 0px 0px 11px;font-size:9.0pt;font-family:Microsoft Sans Serif" border="1"><tr height="30px" style="background-image:url(image/tbg.png);"><td width="25" align="center">№</td><td width="298" align="center">Название машины</td><td width="94" align="center">Тяг класс</td><td width="94" align="center">Кол-во</td><td width="94" align="center">ЧЭЗ, р./ч</td><td width="94" align="center">Доля, %</td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">1.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">2.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">3.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">4.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">5.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" style="background-color:rgb(255,222,173)"><td></td><td align="left" style="padding-left:5px">Всего:</td><td></td><td align="center"></td><td align="center"></td><td align="center"></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';
aCb0(); sp = document.getElementById('sp4'); for (var i = 0; i < 30; i++){sp.options[i] = new Option(i + 1)}
} //A()
function T(){z = 't';
document.getElementById('Pic').innerHTML = '<img id="p1" src="<?=$h?>image/Pic42.png" width="52" height="42" onclick="Pic5(this)" /><img id="p2" src="<?=$h?>image/Pic53.png" width="52" height="42" onclick="Pic6(this)" /><img id="p3" src="<?=$h?>image/Pic60.png" width="52" height="42" onclick="Pic7(this)" /><img id="p4" src="<?=$h?>image/Pic70.png" width="52" height="42" onclick="Pic8(this)" />';

Pic6();

//Блок работы с контекстным меню в технлогиях
// Show menu when #myDiv is clicked
$("#ctm").contextMenu({menu: 'myMenu'},	function (action, el, pos) {
					    /*alert(
						'Action: ' + action + '\n\n' +
						'Element ID: ' + $(el).attr('id') + '\n\n' +
						'X: ' + pos.x + '  Y: ' + pos.y + ' (relative to element)\n\n' +
						'X: ' + pos.docX + '  Y: ' + pos.docY + ' (relative to document)'
						);*/
						
	if(action == 'cut'){tcut()}
	if(action == 'copy'){tcopy()}
	if(action == 'paste'){tpaste()}
	if(action == 'edit'){tedit()}
	if(action == 'delete'){tdelete()}
	if(action == 'quit'){tquit()}					
						
					});
// Show menu when a list item is clicked
$("#myList UL LI").contextMenu({menu: 'myMenu'}, function (action, el, pos) {
                alert(
						'Action: ' + action + '\n\n' +
						'Element text: ' + $(el).text() + '\n\n' +
						'X: ' + pos.x + '  Y: ' + pos.y + ' (relative to element)\n\n' +
						'X: ' + pos.docX + '  Y: ' + pos.docY + ' (relative to document)'
						);
				
            });

} //T()

//Группы
function Pic1(e){//alert(e.alt);
var q1 = document.getElementById('p1'); q1.src = "<?=$h?>image/Pic02.png";
var q2 = document.getElementById('p2');if(q2.src == '<?=$h?>image/Pic12.png'){pc2 = ReOne();}; q2.src = "<?=$h?>image/Pic13.png";
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic20.png";
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic30.png";

t = document.getElementById('nl');t.innerHTML = 'Инструменты расчета';
t = document.getElementById('u'); t.innerHTML = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "МАШИНЫ"</p><div style="background-image:url(<?=$h?>image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';
t.innerHTML = pc1;
t = document.getElementById('Pi');t.innerHTML = '<img src="<?=$h?>image/Pi00.png" width="205" height="37" onclick="addrow()" onmouseover="f00a(this)" onmouseout="f00b(this)" /><img src="<?=$h?>image/Pi10.png" width="205" height="37" onmouseover="f10a(this)" onmouseout="f10b(this)" onclick=""/><img src="<?=$h?>image/Pi20.png" width="205" height="37" onclick="DelRows()" onmouseover="f20a(this)" onmouseout="f20b(this)"/>';
}//Инструменты пересчета
function Pic2(e){
var q1 = document.getElementById('p1');if(q1.src == '<?=$h?>image/Pic02.png'){t = document.getElementById('u');pc1 = t.innerHTML;};q1.src = "<?=$h?>image/Pic00.png";
var q2 = document.getElementById('p2'); q2.src = "<?=$h?>image/Pic12.png";
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic23.png";
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic30.png";
t = document.getElementById('nl');t.innerHTML = 'Инструменты пересчета';

if(z == 'm'){
//Таблицы
t = document.getElementById('u');
t.innerHTML = "<p style='padding: 0pt 9pt 0pt 13pt;'>Параметры машины</p><table width='400' border='0'  style='margin-left:370px'><tr><td width='114' class='MsoNormal' style='font-family: sans-serif; font-size:13px'><p>Данные на дату:</p></td><td width='144' align='center'><input type='text' id='dt' maxlength='10' value='' align='middle' /></td><td width='128'><input type='button' id='mf' value='Найти' width='20' height='20' style='margin-left:8px' onclick='findm()'/></td></tr></table><div id='t1' style='padding-left:8pt; padding-top:18pt; height:147pt; background-image:url(<?=$h?>image/par1.png)'><table id='b1' width='700px' style='border-collapse: collapse;'  cellpadding='0' cellspacing='0' align='left' border='1'><tr height='22' style='background-color:rgb(235,235,235)'><td width='377' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>1.  Вид техники</td><td width='317'><select id='a1' style='width:239pt;  background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt'      onfocus='Spt2(this)'  onchange='Spt2(this)'><OPTION ></OPTION><OPTION >1.0 Тракторы (Все)</OPTION><OPTION >2.0 Почвообрабатывающие машины</OPTION><OPTION >3.0 Машины для внесения удобрений</OPTION><OPTION >4.0 Машины для подготовки семян</OPTION><OPTION >5.0 Сеялки</OPTION><OPTION >6.0 Машины для ухода за посевами</OPTION><OPTION >7.0 Зерноуборочные машины</OPTION><OPTION>8.0 Машины для обработки зерна на току</OPTION><OPTION>9.0 Мелиорационные машины</OPTION><OPTION>10.0 Погрузочно-разгрузочные машины</OPTION><OPTION>11.0 Транспортные машины</OPTION><OPTION>12.0 Силосоуборочные машины</OPTION><OPTION>13.0 Сеноуборочные машины</OPTION><OPTION>14.0 Свеклоуборочные машины</OPTION><OPTION>15.0 Машины для возделывания и уборки картофеля</OPTION><OPTION>16.0 Сцепки</OPTION></select></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt; background-color:'>2.  Тип машины</td><td><select id='a2' style='width:239pt; background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt' onchange='tm(this)'></select></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>3.  Страна изготовитель</td><td><select id='a3' style='width:239pt;background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt' onchange='sj(this)'><OPTION></OPTION><OPTION >Дальнее зарубежье</OPTION><OPTION >Россия</OPTION><OPTION  value=''>Ближнее зарубежье</OPTION></select></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>4.  Количество машин в агрегате, шт</td><td><select id='a4' style='width:239pt;background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt'><OPTION></OPTION><OPTION>1</OPTION><OPTION >2</OPTION><OPTION >3</OPTION><OPTION >4</OPTION><OPTION>5</OPTION><OPTION >6</OPTION><OPTION >7</OPTION><OPTION >8</OPTION><OPTION >9</OPTION><OPTION >10</OPTION><OPTION >11</OPTION><OPTION >12</OPTION><OPTION >13</OPTION><OPTION >14</OPTION><OPTION >15</OPTION></select></td></tr><tr height='22pt' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>5.  Название машины</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a5' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22pt' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>6.  Марка машины</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a6' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22pt'  style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>7.  Мощность, л.с.</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a7' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22pt' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>8.  Тяговый класс</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a8' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr></table></div><div id='t2' style='padding-left:8pt; padding-top:18pt; height:165pt; background-image:url(<?=$h?>image/par2.png)'><table id='b2' width='700px' style='border-collapse: collapse;'  cellpadding='0' cellspacing='0' align='left' border='1'><tr height='22' style='background-color:rgb(235,235,235)'><td width='377px' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>1. Цена машины, руб</td><td width='317' align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a9' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>2. Ширина захвата, м</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a10' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>3. Расход топлива, кг/ч</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a11' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>4. Рабочая скорость, км/ч</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a12' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>5. Цена топлива, руб/кг</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a13' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>6. Часовая заработная плата, руб/ч</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a14' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>7. Кред. политика банка, %</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a15' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>8. Срок кредита, год</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a16' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>9. Персонал, чел</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a17' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr></table></div><div id='t3' style='padding-left:8pt; padding-top:18pt; margin-bottom:13px;height:113pt; background-image:url(<?=$h?>image/par3.png)'><table id='b3' width='700' style='border-collapse: collapse;'  cellpadding='0' cellspacing='0' align='left' border='1'><tr height='22' style='background-color:rgb(235,235,235)'><td width='377' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>1.  Коэффициент ремонта и ПТО, %</td><td width='317' align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a18' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>2. Коэф эффективного использования рабочего времени, kэ</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a19' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>3. Амортизационный ресурс, час</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a20' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>4. Амортизационный коэффициент, µт</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a21' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>5. Ремонтный коэффициент, µр</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a22' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>6. Топливно-эксплуатационный коэффициент, µs</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a23' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>7. Годовой амортизационный ресурс, год</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a24' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr></table></div>"; //Основная рабочая часть
//Условие заполнения таблицы
var a = pc2.split('\\');var b; for(var i = 0; i < 22; i++){if(a[i] != ''){b=1}};if(b==1){onil(pc2);}
t = document.getElementById('Pi');t.innerHTML = '<img src="<?=$h?>image/Pi100.png" width="205" height="37" onclick="Cr()" onmouseover="f100a(this)" onmouseout="f100b(this)"/><img src="<?=$h?>image/Pi110.png" width="205" height="37" onmouseover="f110a(this)" onmouseout="f110b(this)" onclick="msave()"/><img src="<?=$h?>image/Pi120.png" width="205" height="37" onclick="cnm()" onmouseover="f120a(this)" onmouseout="f120b(this)"/><img src="<?=$h?>image/Pi130.png" width="205" height="37" onclick="delp()" onmouseover="f130a(this)" onmouseout="f130b(this)"/><img src="<?=$h?>image/Pi140.png" width="205" height="37" onclick="infl()" onmouseover="f140a(this)" onmouseout="f140b(this)"/>';}
else if(z == 'a'){
//Таблицы
t = document.getElementById('u'); 
t.innerHTML = "<p style='padding: 0pt 9pt 0pt 13pt;'>Параметры машины</p><table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' style='background-image:url(<?=$h?>image/czi.jpg)'><tr height='22'><td><table border='0' cellpadding='0' cellspacing='0' align='center' style='margin-left:20pt'><tr height='22'><td width='125'><img id='cp1' src='<?=$h?>image/H13.png' onclick='fp1(this)'/></td><td width='99pt'><img id='cp2' src='<?=$h?>image/H22.png' onclick='fp2(this)'/></td><td width='99pt'><img id='cp3' src='<?=$h?>image/H22.png' onclick='fp3(this)'/></td><td width='99pt'><img id='cp4' src='<?=$h?>image/H22.png' onclick='fp4(this)'/></td><td width='99pt'><img id='cp5' src='<?=$h?>image/H22.png' onclick='fp5(this)'/></td></tr></table></tr></table><table width='400' border='0'  style='margin-left:370px'><tr><td width='114' class='MsoNormal' style='font-family: sans-serif; font-size:13px'><p>Данные на дату:</p></td><td width='144' align='center'><input type='text' id='dt' maxlength='10' value='' align='middle' /></td><td width='128'><input type='button' id='mf' value='Найти' width='20' height='20' style='margin-left:8px' onclick='findm()'/></td></tr></table><div id='t1' onmouseout='repar()' style='padding-left:8pt; padding-top:18pt; height:147pt; background-image:url(<?=$h?>image/par1.png)'><table id='b1' width='700px' style='border-collapse: collapse;'  cellpadding='0' cellspacing='0' align='left' border='1'><tr height='22' style='background-color:rgb(235,235,235)'><td width='377' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>1.  Вид техники</td><td width='317'><select id='a1' style='width:239pt;  background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt'      onfocus='Spt2(this)'  onchange='Spt2(this)'><OPTION ></OPTION><OPTION >1.0 Тракторы (Все)</OPTION><OPTION >2.0 Почвообрабатывающие машины</OPTION><OPTION >3.0 Машины для внесения удобрений</OPTION><OPTION >4.0 Машины для подготовки семян</OPTION><OPTION >5.0 Сеялки</OPTION><OPTION >6.0 Машины для ухода за посевами</OPTION><OPTION >7.0 Зерноуборочные машины</OPTION><OPTION>8.0 Машины для обработки зерна на току</OPTION><OPTION>9.0 Мелиорационные машины</OPTION><OPTION>10.0 Погрузочно-разгрузочные машины</OPTION><OPTION>11.0 Транспортные машины</OPTION><OPTION>12.0 Силосоуборочные машины</OPTION><OPTION>13.0 Сеноуборочные машины</OPTION><OPTION>14.0 Свеклоуборочные машины</OPTION><OPTION>15.0 Машины для возделывания и уборки картофеля</OPTION><OPTION>16.0 Сцепки</OPTION></select></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt; background-color:'>2.  Тип машины</td><td><select id='a2' style='width:239pt; background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt' onchange='tm(this)'></select></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>3.  Страна изготовитель</td><td><select id='a3' style='width:239pt;background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt' onchange='sj(this)'><OPTION></OPTION><OPTION >Дальнее зарубежье</OPTION><OPTION >Россия</OPTION><OPTION  value=''>Ближнее зарубежье</OPTION></select></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>4.  Количество машин в агрегате, шт</td><td><select id='a4' style='width:239pt;background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt'><OPTION></OPTION><OPTION>1</OPTION><OPTION >2</OPTION><OPTION >3</OPTION><OPTION >4</OPTION><OPTION>5</OPTION><OPTION >6</OPTION><OPTION >7</OPTION><OPTION >8</OPTION><OPTION >9</OPTION><OPTION >10</OPTION><OPTION >11</OPTION><OPTION >12</OPTION><OPTION >13</OPTION><OPTION >14</OPTION><OPTION >15</OPTION></select></td></tr><tr height='22pt' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>5.  Название машины</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a5' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22pt' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>6.  Марка машины</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a6' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22pt'  style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>7.  Мощность, л.с.</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a7' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22pt' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>8.  Тяговый класс</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a8' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr></table></div><div id='t2' onmouseout='repar()' style='padding-left:8pt; padding-top:18pt; height:165pt; background-image:url(<?=$h?>image/par2.png)'><table id='b2' width='700px' style='border-collapse: collapse;'  cellpadding='0' cellspacing='0' align='left' border='1'><tr height='22' style='background-color:rgb(235,235,235)'><td width='377px' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>1. Цена машины, руб</td><td width='317' align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a9' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>2. Ширина захвата, м</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a10' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>3. Расход топлива, кг/ч</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a11' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>4. Рабочая скорость, км/ч</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a12' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>5. Цена топлива, руб/кг</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a13' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>6. Часовая заработная плата, руб/ч</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a14' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>7. Кред. политика банка, %</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a15' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>8. Срок кредита, год</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a16' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>9. Персонал, чел</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a17' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr></table></div><div id='t3' onmouseout='repar()' style='padding-left:8pt; padding-top:18pt; margin-bottom:13px;height:113pt; background-image:url(<?=$h?>image/par3.png)'><table id='b3' width='700' style='border-collapse: collapse;'  cellpadding='0' cellspacing='0' align='left' border='1'><tr height='22' style='background-color:rgb(235,235,235)'><td width='377' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>1.  Коэффициент ремонта и ПТО, %</td><td width='317' align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a18' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>2. Коэф эффективного использования рабочего времени, kэ</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a19' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>3. Амортизационный ресурс, час</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a20' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>4. Амортизационный коэффициент, µт</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a21' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>5. Ремонтный коэффициент, µр</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a22' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(245,245,245)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>6. Топливно-эксплуатационный коэффициент, µs</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a23' style='width:230pt;background-color:rgb(245,245,245); border-style:hidden' align='middle' value='' type='text' /></td></tr><tr height='22' style='background-color:rgb(235,235,235)'><td class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt'>7. Годовой амортизационный ресурс, год</td><td align='center' class='MsoNormal' style='font-size:9.0pt;font-family:Microsoft Sans Serif;'><input id='a24' style='width:230pt;background-color:rgb(235,235,235); border-style:hidden' align='middle' value='' type='text' /></td></tr></table></div>"; //Основная рабочая часть
t = document.getElementById('Pi');t.innerHTML = '<img src="<?=$h?>image/Pi100.png" width="205" height="37" onclick="Cr()" onmouseover="f100a(this)" onmouseout="f100b(this)"/><img src="<?=$h?>image/Pi110.png" width="205" height="37" onmouseover="f110a(this)" onmouseout="f110b(this)" onclick="msave()"/><img src="<?=$h?>image/Pi120.png" width="205" height="37" onclick="cnm()" onmouseover="f120a(this)" onmouseout="f120b(this)"/><img src="<?=$h?>image/Pi130.png" width="205" height="37" onclick="delp()" onmouseover="f130a(this)" onmouseout="f130b(this)"/><img src="<?=$h?>image/Pi140.png" width="205" height="37" onclick="infl()" onmouseover="f140a(this)" onmouseout="f140b(this)"/>'; //Кнопки левая панель
var a = pc2.split('\\');var b; for(var i = 0; i < 22; i++){if(a[i] != ''){b=1}};if(b==1){onil(pc2);}
//delp(); onil(ag[0]);//Загружаем данные в таблицу
}
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

function Pic5(e){
var q1 = document.getElementById('p1');q1.src = "<?=$h?>image/Pic42.png";
var q2 = document.getElementById('p2');if(q2.src == '<?=$h?>image/Pic52.png'){t = document.getElementById('u');pc5 = t.innerHTML;}; q2.src = "<?=$h?>image/Pic53.png";
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic60.png";
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic70.png";
t = document.getElementById('nl');t.innerHTML = 'Севооборот';

t = document.getElementById('Pi');t.innerHTML = '<img src="<?=$h?>image/Pi400.png" width="205" height="37" onclick="" onmouseover="" onmouseout=""/><img src="<?=$h?>image/Pi410.png" width="205" height="37" onclick="" onmouseover="" onmouseout=""/><img src="<?=$h?>image/Pi420.png" width="205" height="37" onclick="" onmouseover="" onmouseout=""/>'; //Кнопки левая панель

}//Севооборот
function Pic6(e){
var q1 = document.getElementById('p1');if(q1.src == '<?=$h?>image/Pic42.png'){t = document.getElementById('u');pc5 = t.innerHTML;};q1.src = "<?=$h?>image/Pic40.png";
var q2 = document.getElementById('p2'); q2.src = "<?=$h?>image/Pic52.png";
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic63.png";
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic70.png";
t = document.getElementById('nl');t.innerHTML = 'Технологии';

t = document.getElementById('Pi');t.innerHTML = '<img src="<?=$h?>image/Ti00.png" id="tf0" width="205" height="37" onclick="fn100c(this)" onmouseover="fn100a(this)" onmouseout="fn100b(this)"/><img src="<?=$h?>image/Ti10.png" id="tf1" width="205" height="37" onclick="fn110c(this)" onmouseover="fn110a(this)" onmouseout="fn110b(this)"/><img src="<?=$h?>image/Ti20.png" id="tf2" width="205" height="37" onclick="fn120c(this)" onmouseover="fn120a(this)" onmouseout="fn120b(this)"/><img src="<?=$h?>image/Ti30.png" id="tf3" width="205" height="37" onclick="fn130c(this)" onmouseover="fn130a(this)" onmouseout="fn130b(this)"/><img src="<?=$h?>image/Ti40.png" id="tf4" width="205" height="37" onclick="fn140c(this)" onmouseover="fn140a(this)" onmouseout="fn140b(this)"/><img src="<?=$h?>image/Ti50.png" id="tf5" width="205" height="37" onclick="fn150c(this)" onmouseover="fn150a(this)" onmouseout="fn150b(this)"/><img src="<?=$h?>image/Ti60.png" id="tf6" width="205" height="37" onclick="fn160c(this)" onmouseover="fn160a(this)" onmouseout="fn160b(this)"/>'; //Кнопки левая панель

var u = document.getElementById('u');u.innerHTML = '<table id="menu" width="100%" border="0" cellpadding="0" cellspacing="0" style="height:24px"><tr><td id="menu1" style="background-image:url(<?=$h?>image/menu.png); width:186px; height:24px"><img id="w1" src="<?=$h?>image/j0.png" title="Загрузить технологию" width="23px" height="22px" style="margin: 0px 0px 0px 20px" onmouseover="fp1a(this)" onmouseout="fp1b(this)" onclick="fp1c(this)"/><img id="w2" src="<?=$h?>image/j1.png"  title="Расчитать технологию" width="23px" height="22px" style="margin: 0px 0px 0px 7px" onmouseover="fp2a(this)" onmouseout="fp2b(this)" onclick="fp2c(this)"/><img id="w3" src="<?=$h?>image/j2.png" title="Удалить технологию" width="23px" height="22px" style="margin: 0px 0px 0px 9px" onmouseover="fp3a(this)" onmouseout="fp3b(this)" onclick="fp3c(this)"/><img id="w4" src="<?=$h?>image/j3.png" title="Передать технологию в Ms Word" width="23px" height="22px" style="margin: 0px 0px 0px 10px"  onmouseover="fp4a(this)" onmouseout="fp4b(this)" onclick="fp4c(this)"/><img id="w5" src="<?=$h?>image/j4.png" title="Сохранить технологию" width="23px" height="22px" style="margin: 0px 0px 0px 11px" onmouseover="fp5a(this)" onmouseout="fp5b(this)" onclick="fp5c(this)"/></td><td id="menu2" align="left" style="height:24px; margin-left:5px"><input id="b2" type="button" value="." style="border-style:hidden; background-image:url(<?=$h?>image/Pl0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)"/><input type="button" value="Технология 1" style="border-style:hidden; background-image:url(<?=$h?>image/Pbp3.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 2" style="border-style:hidden; background-image:url(<?=$h?>image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 3" style="border-style:hidden; background-image:url(<?=$h?>image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 4" style="border-style:hidden; background-image:url(<?=$h?>image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 5" style="border-style:hidden; background-image:url(<?=$h?>image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="." style="border-style:hidden; background-image:url(<?=$h?>image/Cr0.png); width:26px; height:24px; font-size:10px; color:rgba(255,255,255,0)"/><input type="button" value="." style="border-style:hidden; background-image:url(<?=$h?>image/Pr0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)"/></td></tr></table><p style="padding: 0pt 9pt 0pt 33pt; ">Операционная матрица технологий</p><div id="tn" style="background-image:url(<?=$h?>image/pnt.png); height:30pt; padding-top:35pt"><table width="761pt" style="border-collapse: collapse; margin-left:6pt" cellpadding="0" cellspacing="0" border="0"><tr><td width="363"><input type="text" id="tx1" style="border-style:hidden; margin:2pt 0pt 0pt 9pt; width:348px; height:15px"/></td><td width="167"><select id="tx2" style="margin:0pt 0pt 0pt 4pt; width:165px" ></select></td><td width="103"><input type="text" id="tx3" style="border-style:hidden; margin:2pt 0pt 0pt 5pt; width:87px; height:15px"/></td><td width="97"><input type="text" id="tx4" style="border-style:hidden; margin:2pt 0pt 0pt 7pt; width:85px; height:15px"/></td></tr></table></div><div id="qt" style="margin: 0px 10px 10px 10px; height:531px; width:766px; display:block; overflow:auto"><table id="Q1" width="1550px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(<?=$h?>image/tbgz.png);"><td width="30px" align="center"></td><td width="25px" align="center">№</td><td width="250" align="center">Операция</td><td width="74" align="center">Год</td><td width="74" align="center">Дни</td><td width="74" align="center">Часы</td><td width="248" align="center">Исходные требования</td><td width="150" align="center">Тип техники</td><td width="120" align="center">Энергосредство</td><td width="20" align="center">№</td><td width="120" align="center">Машина 2</td><td width="20" align="center">№</td><td width="120" align="center">Машина 3</td><td width="20" align="center">№</td><td width="120" align="center">Машина 4</td><td width="20" align="center">№</td><td width="120" align="center">Машина 5</td><td width="20" align="center">№</td></tr><tr height="25px" align="center" onclick="selectrow(this)"><td id="ctm" style="background-image:url(<?=$h?>image/Aq3.png)" onclick="taddrow(this)"></td><td>44</td><td align="left"><input style=" width:242px; height:16px; border-width:0" /></td><td><select style="width:71px"></select></td><td><select style="width:71px"></select></td><td><select style="width:71px"></select></td><td><input style=" width:238px; height:16px; border-width:0" /></td><td><input style="width:142px; height:16px; border-width:0" /></td><td onclick="jk(this)">Энергосредство</td><td></td><td onclick="jk(this)">Машина 1</td><td></td><td onclick="jk(this)">Машина 2</td><td></td><td onclick="jk(this)">Машина 3</td><td></td><td onclick="jk(this)">Машина 4</td><td></td></tr></tbody></table></div>'; //Основное рабочее пространство

var t = document.getElementById('Q1');
}//Технологии
function Pic7(e){
var q1 = document.getElementById('p1');if(q1.src == '<?=$h?>image/Pic42.png'){t = document.getElementById('u');pc5 = t.innerHTML;};q1.src = "<?=$h?>image/Pic40.png";
var q2 = document.getElementById('p2');if(q2.src == '<?=$h?>image/Pic52.png'){t = document.getElementById('u');pc6 = t.innerHTML;}; q2.src = "<?=$h?>image/Pic50.png";
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic62.png";
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic73.png";
t = document.getElementById('nl');t.innerHTML = 'Экспорт';

t = document.getElementById('Pi');t.innerHTML = ''; //Кнопки левая панель

}//Экспорт
function Pic8(e){
var q1 = document.getElementById('p1');if(q1.src == '<?=$h?>image/Pic42.png'){t = document.getElementById('u');pc5 = t.innerHTML;};q1.src = "<?=$h?>image/Pic40.png";
var q2 = document.getElementById('p2');if(q2.src == '<?=$h?>image/Pic52.png'){t = document.getElementById('u');pc6 = t.innerHTML;}; q2.src = "<?=$h?>image/Pic50.png";
var q3 = document.getElementById('p3'); q3.src = "<?=$h?>image/Pic60.png";
var q4 = document.getElementById('p4'); q4.src = "<?=$h?>image/Pic72.png";
t = document.getElementById('nl');t.innerHTML = 'Экономика';

t = document.getElementById('Pi');t.innerHTML = ''; //Кнопки левая панель

}//Графики технологии


//Функции контекстного меню
function tcut(){alert('cut')} //Вырезать
function tcopy(){alert('copy')} //Копировать
function tpaste(){alert('paste')} //Вставить
function tedit(){alert('edit')} //Добавить ячейки
function tdelete(){alert('delete')} //Удалить
function tquit(){alert('quit')} //Очистить содержимое

function taddrow(e){
	var i = e.parentNode.rowIndex;
	zeroing();//Обнуляем все строки
	
	var t = document.getElementById('Q1').innerHTML;
	var s = t.split(['</tr>']);
	s[i] = '<tr height="25px" align="center" onmousedown="selectrow(this)"><td id="ctm" style="background-image:url(<?=$h?>image/Aq2.png)" onmousedown="mdown(this)" onmouseup="mup(this)"></td><td>44</td><td align="left"><input style=" width:242px; height:16px; border-width:0" /></td><td><select style="width:71px"></select></td><td><select style="width:71px"></select></td><td><select style="width:71px"></select></td><td><input style=" width:238px; height:16px; border-width:0" /></td><td><input style="width:142px; height:16px; border-width:0" /></td><td onclick="jk(this)">Энергосредство</td><td></td><td onclick="jk(this)">Машина 1</td><td></td><td onclick="jk(this)">Машина 2</td><td></td><td onclick="jk(this)">Машина 3</td><td></td><td onclick="jk(this)">Машина 4</td><td></td></tr>' + s[i];
	
	document.getElementById('Q1').innerHTML = s.join('</tr>');
	upQ1(); //Присваиваем каждой первой ячейке контекстное меню
	
}//Добавить строку в оперционную матрицу технологий
function upQ1(){
	
for(var i = 1; i < document.getElementById('Q1').rows.length; i++){
	var R = document.getElementById('Q1').rows;
	var r = R[i];
	var o = r.cells[0];
	//Блок работы с контекстным меню в технлогиях
// Show menu when #myDiv is clicked
$(o).contextMenu({menu: 'myMenu'},	function (action, el, pos) {
					    /*alert(
						'Action: ' + action + '\n\n' +
						'Element ID: ' + $(el).attr('id') + '\n\n' +
						'X: ' + pos.x + '  Y: ' + pos.y + ' (relative to element)\n\n' +
						'X: ' + pos.docX + '  Y: ' + pos.docY + ' (relative to document)'
						);*/
						
	if(action == 'cut'){tcut()}
	if(action == 'copy'){tcopy()}
	if(action == 'paste'){tpaste()}
	if(action == 'edit'){tedit()}
	if(action == 'delete'){tdelete()}
	if(action == 'quit'){tquit()}					
						
					});
// Show menu when a list item is clicked
$("#myList UL LI").contextMenu({menu: 'myMenu'}, function (action, el, pos) {
                alert(
						'Action: ' + action + '\n\n' +
						'Element text: ' + $(el).text() + '\n\n' +
						'X: ' + pos.x + '  Y: ' + pos.y + ' (relative to element)\n\n' +
						'X: ' + pos.docX + '  Y: ' + pos.docY + ' (relative to document)'
						);
				
            });
}	
}//Функция обновления контекстного меню при добавлении или изменении строк таблицы Q1
function zeroing(){
	//Обнуляем все строки кроме последней на пустые ячейки
	for(var k = 1; k < document.getElementById('Q1').rows.length; k++)
	{
		var R = document.getElementById('Q1').rows;	var r = R[k];
		if(r.cells[0].style.backgroundImage == 'url("<?=$h?>image/Aq2.png")')
		{r.cells[0].style.backgroundImage = 'url("<?=$h?>image/Aq.png")'}
	}
	//Обнуляем последнюю строку на звездочку
	R = document.getElementById('Q1').rows;	r = R[document.getElementById('Q1').rows.length - 1];
	r.cells[0].style.backgroundImage = 'url("<?=$h?>image/Aq4.png")';
}//Функция обнуления стрелок
function zerowing(){
	//Обнуляем все строки кроме последней на пустые ячейки
	for(var k = 1; k < document.getElementById('Q1').rows.length; k++)
	{
		var R = document.getElementById('Q1').rows;	var r = R[k]; r.style.backgroundImage = '';
		//r.cells[2].all[0].style.backgroundColor = '';

	}
}//Функция обнуления выделенных строк
function selectrow(o){var i = o.rowIndex;
	if(ri[0] < 1){zerowing()}//Проверка на обнуление выделенных строк;)
	if(i > 0)
	{zeroing();
	var R = document.getElementById('Q1').rows;	var r = R[i];
	r.style.backgroundImage = 'url("<?=$h?>image/sto4.png")';
	//r.cells[2].all[0].style.backgroundColor = '#F90';
	
	if(i == R.length - 1){r.cells[0].style.backgroundImage = 'url("<?=$h?>image/Aq3.png")';}
	else{r.cells[0].style.backgroundImage = 'url("<?=$h?>image/Aq2.png")';}
	}
	//alert(ri[0]);alert(ri[1]);
}//Выделение строк в Q1
function mdown(o){ri[0] = o.parentNode.rowIndex;}//На нажатие мыши по управляющей ячейке таблицы Q1
function mup(o){ri[1] = o.parentNode.rowIndex; //alert(ri[0] + "   " + ri[1]);

for(var i = parseInt(ri[0]); i < parseInt(ri[1]) + 1; i++){selectrow(document.getElementById('Q1').rows[i])}
ri = new Array([0],[0]);//Обнуление массива
}//На отпускание кнопки мыши на управляющей ячейке Q1
var ri = new Array([0],[0]);//Массив индексов начальной выделенной строки и конечной выделенной строки
function fn00a(e){e.src = "<?=$h?>image/Pi01.png"};function fn00b(e){e.src = "<?=$h?>image/Pi00.png"};
function fn10a(e){e.src = "<?=$h?>image/Pi11.png"};function fn10b(e){e.src = "<?=$h?>image/Pi10.png"};
function fn20a(e){e.src = "<?=$h?>image/Pi21.png"};function fn20b(e){e.src = "<?=$h?>image/Pi20.png"};

function fn100a(e){if(e.src != "<?=$h?>image/Ti02.png"){e.src = "<?=$h?>image/Ti01.png"}};
function fn100b(e){if(e.src != "<?=$h?>image/Ti02.png"){e.src = "<?=$h?>image/Ti00.png"}};
function fn100c(e){tiz(); e.src = "<?=$h?>image/Ti02.png"};
function fn110a(e){if(e.src != "<?=$h?>image/Ti12.png"){e.src = "<?=$h?>image/Ti11.png"}};
function fn110b(e){if(e.src != "<?=$h?>image/Ti12.png"){e.src = "<?=$h?>image/Ti10.png"}};
function fn110c(e){tiz(); e.src = "<?=$h?>image/Ti12.png"};
function fn120a(e){if(e.src != "<?=$h?>image/Ti22.png"){e.src = "<?=$h?>image/Ti21.png"}};
function fn120b(e){if(e.src != "<?=$h?>image/Ti22.png"){e.src = "<?=$h?>image/Ti20.png"}};
function fn120c(e){tiz(); e.src = "<?=$h?>image/Ti22.png"};
function fn130a(e){if(e.src != "<?=$h?>image/Ti32.png"){e.src = "<?=$h?>image/Ti31.png"}};
function fn130b(e){if(e.src != "<?=$h?>image/Ti32.png"){e.src = "<?=$h?>image/Ti30.png"}};
function fn130c(e){tiz(); e.src = "<?=$h?>image/Ti32.png"};
function fn140a(e){if(e.src != "<?=$h?>image/Ti42.png"){e.src = "<?=$h?>image/Ti41.png"}};
function fn140b(e){if(e.src != "<?=$h?>image/Ti42.png"){e.src = "<?=$h?>image/Ti40.png"}};
function fn140c(e){tiz(); e.src = "<?=$h?>image/Ti42.png"};
function fn150a(e){if(e.src != "<?=$h?>image/Ti52.png"){e.src = "<?=$h?>image/Ti51.png"}};
function fn150b(e){if(e.src != "<?=$h?>image/Ti52.png"){e.src = "<?=$h?>image/Ti50.png"}};
function fn150c(e){tiz(); e.src = "<?=$h?>image/Ti52.png"};
function fn160a(e){if(e.src != "<?=$h?>image/Ti62.png"){e.src = "<?=$h?>image/Ti61.png"}};
function fn160b(e){if(e.src != "<?=$h?>image/Ti62.png"){e.src = "<?=$h?>image/Ti60.png"}};
function fn160c(e){tiz(); e.src = "<?=$h?>image/Ti62.png"};
function tiz(){
document.getElementById('tf0').src = "<?=$h?>image/Ti00.png";
document.getElementById('tf1').src = "<?=$h?>image/Ti10.png";
document.getElementById('tf2').src = "<?=$h?>image/Ti20.png";
document.getElementById('tf3').src = "<?=$h?>image/Ti30.png";
document.getElementById('tf4').src = "<?=$h?>image/Ti40.png";
document.getElementById('tf5').src = "<?=$h?>image/Ti50.png";
document.getElementById('tf6').src = "<?=$h?>image/Ti60.png";
} //Обнуление изображений кнопок

function fn200a(e){e.src = "<?=$h?>image/Pi201.png"};function fn200b(e){e.src = "<?=$h?>image/Pi200.png"};function fn210a(e){e.src = "<?=$h?>image/Pi211.png"};function fn210b(e){e.src = "<?=$h?>image/Pi210.png"}; //Группа смены изображений кнопок технологий
function fp1a(e){e.src = "<?=$h?>image/j01.png"};function fp1b(e){e.src = "<?=$h?>image/j0.png"};function fp1c(e){};function fp2a(e){e.src = "<?=$h?>image/j11.png"};function fp2b(e){e.src = "<?=$h?>image/j1.png"};function fp2c(e){};function fp3a(e){e.src = "<?=$h?>image/j21.png"};function fp3b(e){e.src = "<?=$h?>image/j2.png"};function fp3c(e){};function fp4a(e){e.src = "<?=$h?>image/j31.png"};function fp4b(e){e.src = "<?=$h?>image/j3.png"};function fp4c(e){};function fp5a(e){e.src = "<?=$h?>image/j41.png"};function fp5b(e){e.src = "<?=$h?>image/j4.png"};function fp5c(e){}; //Группа смены изображений кнопок панели инструментов

function jk(e){tip = new Array([e.parentNode.rowIndex], [e.cellIndex]);

var t = document.getElementById('tn');
t.style.backgroundImage = 'url("<?=$h?>image/fds.png")';
t.style.paddingTop = "1pt";
t.style.height = "64pt";
t.innerHTML = '<img src="<?=$h?>image/btn21.png" width="36" height="15" style="margin-left:735px; margin-top:12px" onmouseover="ft01(this)" onmouseout="ft02(this)" onclick="ft03()"/><table width="764pt" style="border-collapse: collapse; margin-left:6pt; margin-top:13pt" cellpadding="0" cellspacing="0" border="0"><tr height="25px"><td width="296"><select id="sp1" style="margin:1pt 0pt 0pt 7pt; width:301px" onchange="Cb1()"></select></td><td width="170"><select id="sp2" style="margin:1pt 0pt 0pt 1pt; width:166px" onchange="Cb2()"></select></td><td width="105"><select id="sp3" style="margin:1pt 0pt 0pt 1pt; width:101px"></select></td><td width="103"><select id="sp4" style="border-color:rgb(255,255,255); margin:1pt 0pt 0pt 1pt; width:101px"></select></td><td width="31"><img src="<?=$h?>image/btn01.png"  width="24px" height="24px" style="margin: 0px 0px 0px 3px" onmouseover="ft11(this)" onmouseout="ft12(this)" onclick="ft13()"/></td><td width="27"><img src="<?=$h?>image/btn11.png"  width="24px" height="24px" style="margin: 0px 0px 0px 1px" onmouseover="ft21(this)" onmouseout="ft22(this)" onclick="ft14()"/></td></tr></table>';

aCb0();
crsp4();
} //Функция показа панели выбора сх машин и агрегатов

function crsp4(){var sp = document.getElementById('sp4');
//sp.options[0] = new Option('');
for(var i=0; i<31; i++){sp.options[i+1] = new Option(i+1)}
sp.selectedIndex = 1;
} //Функция заполнения списка сп4 количества машин в технологиях
function ft01(e){e.src = "<?=$h?>image/btn22.png"} //На наведение кусора мыши на кнопку закрыть в наборной панели машин
function ft02(e){e.src = "<?=$h?>image/btn21.png"} //На отведение кусора мыши на кнопку закрыть в наборной панели машин
function ft03(){
var t = document.getElementById('tn');
t.style.backgroundImage = 'url("<?=$h?>image/pnt.png")';
t.style.paddingTop = "35pt";
t.style.height = "30pt";
t.innerHTML = '<table width="761pt" style="border-collapse: collapse; margin-left:6pt" cellpadding="0" cellspacing="0" border="0"><tr><td width="363"><input type="text" id="tx1" style="border-style:hidden; margin:2pt 0pt 0pt 9pt; width:348px; height:15px"/></td><td width="167"><select id="tx2" style="margin:0pt 0pt 0pt 4pt; width:165px" ></select></td><td width="103"><input type="text" id="tx3" style="border-style:hidden; margin:2pt 0pt 0pt 5pt; width:87px; height:15px"/></td><td width="97"><input type="text" id="tx4" style="border-style:hidden; margin:2pt 0pt 0pt 7pt; width:85px; height:15px"/></td></tr></table>';
	
} //Кнопочка закрыть наборную панель элементов

function ft11(e){e.src = "<?=$h?>image/btn02.png"} //На наведение курсора мыши на удалить набранную машину
function ft12(e){e.src = "<?=$h?>image/btn01.png"} //На отведение курсора мыши от удалить набранную машину
function ft21(e){e.src = "<?=$h?>image/btn12.png"} //На наведение курсора мыши на передать
function ft22(e){e.src = "<?=$h?>image/btn11.png"} //На отведение курсора мыши от передать

function ft13(){
var sp = document.getElementById('sp1'); sp.selectedIndex = 0;
var sp = document.getElementById('sp2'); sp.selectedIndex = 0;
var sp = document.getElementById('sp3'); sp.selectedIndex = 0;
var sp = document.getElementById('sp4'); sp.selectedIndex = 0;
	
} //Функция удаления выбранной сх машины из наборной панели машин и агрегатов в технлогиях
function ft14(){
var R = document.getElementById('Q1').rows;
var r = R[tip[0]];
r.cells[tip[1]].innerHTML = document.getElementById('sp3').value;
r.cells[parseInt(tip[1]) + 1].innerHTML = document.getElementById('sp4').value;
ft03();
} //Функция передачи набранной машины в операционную матрицу технологий



//Инструменты расчета//
function addrow(){if(z=='a'){calk(ag);return};
ajax(); //Вызов процедуры расчетов
}  function ajax() {
var fv = document.getElementById('sp1').value;
var m = fv.split([' ']); var b = m[0]; 
if (b.indexOf('.0') > 0){a = b.split('.');m[0] = a[0] + '.'};//alert(fv);
var t = document.getElementById('sp2').value;
if(t != ''){b = t.split([' ']); m[1] = b[2]} else {m[1] = ''}
var d = document.getElementById('sp3').value;
if(d != ''){ if(d != 'Все марки'){m[2]=d} else{m[2]=''};} else {m[2] = ''};
if(m[0] == '' && m[1] == '' && m[2] == ''){return};if(m[1] == undefined){m[1] = ''};
var url = 'ajax.php?ge='+encodeURIComponent(m[0] + '|' + m[1] + '|' + m[2]);//alert(m[0] + '|' + m[1] + '|' + m[2]);
getAjax(url,showResult);
}  function showResult(d){var a = d.split('|'); var u = document.getElementById('Q');
if (v.length != 0){var s = a[a.length - 1].split('\\'); s = s[0].split('.');
var m = v[v.length - 1].split('\\'); m = m[0].split('.');
if (s[0] == m[0]){if(u.innerHTML == ''){t = document.getElementById('Q'); t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:522px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';v = new Array();}}
else if (s[0] != m[0]){t = document.getElementById('Q'); t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:522px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';v = new Array();}}
else {t = document.getElementById('Q'); t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:522px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';v = new Array();}
for (var i = 0; i < a.length; i++){adRow(d);v.push(up(a[i]));title(a[i]+'||||');tai(ai(up(a[i])));};}   //Рачет
function prt(){window.print();}  //Печать
function DelRows(){
t = document.getElementById('Q');t.innerHTML = '';//<table width="670" style="border-collapse: collapse;border-color: rgb(242,242,241); margin: 5pt 0pt 0pt 7pt"cellpadding="0" cellspacing="0" border="1" ><tr height="30pt"style="background-image:url(<?=$h?>image/tbg.png)"><td width="25" style="padding: 0pt 0pt 0pt 6pt">№</td><td style="font: Tahoma, Geneva, sans-serif; padding:0pt 0pt 0pt 6pt;" width="295pt">Название машины</td><td  align="center" width="80pt">Wэ, га/ч</td><td align="center" width="80pt">ГСМ, кг/га</td><td align="center" width="80pt">ЧЭЗ, руб./час</td><td align="center" width="80pt">Сс, руб./га</td></tr></table>';
t = document.getElementById('sp1'); t.value = t.options[0].value;
t = document.getElementById('sp2'); t.value = t.options[0].value;
t = document.getElementById('sp3'); t.value = t.options[0].value;
 agrdel();
}  //Очистить

function dn(){var u = document.getElementById('sp3');
if(u.value == ''){alert('Для передачи в агрегат необходимо выбрать марку машины.');return;}
var url = 'Bdn.php?u='+encodeURIComponent(u.value);getAjax(url,redn);
}   function redn(d){var k;var a = d.split('\\');var R = document.getElementById('agr').rows;var r = R[1];var n;
for(var i = 1; i < 6; i++){r = R[i]; 
if(r.style.backgroundImage == 'url("<?=$h?>image/v1.png")'){
if(a[0].indexOf('1.') > -1 || a[0].indexOf('7.2') > -1){r = R[1];
	
		if(a[1].length > 40){k = a[1].substr(0,40) + '...';} else {k = a[1];}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		r.cells[3].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[4].innerHTML = c[3]; sum();
		ag[0] = up(d)+'\\'+document.getElementById('sp4').value;return
		
		}
		
else{n = r.rowIndex;if(r.rowIndex == 1){n = 2};r = R[n];
		
		if(a[1].length > 40){k = a[1].substr(0,40) + '...';} else {k = a[1];}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		r.cells[3].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[4].innerHTML = c[3]; sum();
		ag[n-1] = up(d)+'\\'+document.getElementById('sp4').value;return;}}}
		
r = R[1];if(a[0].indexOf('1.') > -1 || a[0].indexOf('7.2') > -1){
		if(a[1].length > 40){k = a[1].substr(0,40) + '...';} else {k = a[1];}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		r.cells[3].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[4].innerHTML = c[3]; sum();
		ag[0] = up(d)+'\\'+document.getElementById('sp4').value}
else {for(var i = 2; i < 6; i++){r = R[i];
	  if(r.cells[1].innerHTML == ''){
		
		if(a[1].length > 48){k = a[1].substr(0,48) + '...';} else {k = a[1];}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		r.cells[3].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[4].innerHTML = c[3]; sum();
		ag[i-1] = up(d)+'\\'+document.getElementById('sp4').value;return;break;
	  }
	};if(i == 6){r = R[2];
		if(a[1].length > 48){k = a[1].substr(0,48) + '...';} else {k = a[1];}
		r.cells[1].innerHTML = k;
		r.cells[2].innerHTML = a[4];
		r.cells[3].innerHTML = document.getElementById('sp4').value;
		var c = ai(up(d + "\\" + document.getElementById('sp4').value));c=c.split('\\');
		r.cells[4].innerHTML = c[3]; sum();
		ag[1] = up(d)+'\\'+document.getElementById('sp4').value;return;
}}} //Кнопка добавить машину в агрегат
function sum(){
var R = document.getElementById('agr').rows;var r;var k = 0;var n=0;
//Сумма столбца чезов
for(var i = 1; i < R.length - 1; i++){r = R[i];
if(r.cells[4].innerHTML != ''){k = k + parseFloat(r.cells[4].innerHTML); n = n + parseFloat(r.cells[3].innerHTML);}}
//Проставление процентов
for(var i = 1; i < R.length - 1; i++){r = R[i];if(r.cells[4].innerHTML != ''){r.cells[5].innerHTML = (parseFloat(r.cells[4].innerHTML) / k * 100).toFixed(2) + ' %'}}
//Итоги
r = R[6];r.cells[3].innerHTML = n;r.cells[4].innerHTML = k.toFixed(2);r.cells[5].innerHTML = '100 %';
} //Функция итогов и процентов в таблице агрегатов
function agrdel(){ag = new Array();
var R = document.getElementById('agr').rows; var r;
for (var i = 1; i < 6; i++){r = R[i]; 
for (var j = 1; j < 6; j++){r.cells[j].innerHTML = '';}}	
} //Функция очистки наборной таблицы агрегатов
function oagr(){
	var R = document.getElementById('agr').rows; var r; var S = document.getElementById('agr').rows; var s;
	for(var i = 2; i < 6; i++){r = R[i];
		if(r.cells[1].innerHTML == ''){
			for(var j = i + 1; j < 6; j++){s = S[j];
				if(s.cells[1].innerHTML != ''){
				r.cells[1].innerHTML = s.cells[1].innerHTML;
				r.cells[2].innerHTML = s.cells[2].innerHTML;
				r.cells[3].innerHTML = s.cells[3].innerHTML;
				r.cells[4].innerHTML = s.cells[4].innerHTML;
				r.cells[5].innerHTML = s.cells[5].innerHTML;
				s.cells[1].innerHTML = '';
				s.cells[2].innerHTML = '';
				s.cells[3].innerHTML = '';
				s.cells[4].innerHTML = '';
				s.cells[5].innerHTML = '';
				break;
				}
			}
		}
	}
	for(var j = 1; j < 5; j++){for(i = 1; i < 5; i++){if(ag[i] == undefined){ag.splice(i, 1); break;}}}
} //Функция оптимизации таблицы агрегатов
function arc(e){var r;var R = document.getElementById('agr').rows;
if(e.style.backgroundImage == 'url("<?=$h?>image/v1.png")'){e.style.backgroundImage = '';return}
for(var i = 1; i < 7; i++){r = R[i];r.style.backgroundImage = '';}
if(e.style.backgroundImage == ''){e.style.backgroundImage = 'url("<?=$h?>image/v1.png")';}
} //На клик по таблице агрегатов
function ard(e){for(var i = 1; i < 6; i++){e.cells[i].innerHTML = '';}; ag.splice(e.rowIndex-1, 1);
if(e.rowIndex - 1 == 0){ag.unshift(undefined);}; sum();} //Удаление по клику на строку в таблице агрегатов agr
function calk(k){oagr();var f='';var w;var q; var h=0; var c;var a;var m;
	if(k[0] == undefined && ag[1] == undefined){return}
	
for(var i = 0; i < 4; i++){if(k[i] != undefined){a = k[i].split('\\');f += a[2] + '(' + a[23] + ') '}}//F
for(var i = 0; i < 4; i++){if(k[i] != undefined){a = ai(up(k[i])).split('\\'); h += parseFloat(a[3]);}}//Чэз
	
	if(k[0] != undefined){a = ai(up(k[0])).split('\\');w = a[1]; q = a[2]; c = a[4]}
	for(var i = 4; i > 0; i--){if(k[i] != undefined){a = ai(up(k[i])).split('\\');w = a[1];
	if(k[0] != undefined){m = ai(up(k[0])).split('\\');q = m[2];}; if(q > 0){q = q / w} else{q = a[2]}; 
	c = h / parseFloat(a[1]);}}; a = k[0]
	if(k[0] != undefined){a = k[0].split('\\');}else{a = '123'.split('');}
	if(a[0].indexOf('7.2') > -1){m = ai(up(k[0])).split('\\'); w = m[1]; q = m[2]; c = h / parseFloat(m[1]);}
	
	w = parseFloat(w).toFixed(2);q = parseFloat(q).toFixed(2);h = h.toFixed(2);c = parseFloat(c).toFixed(2);
	//alert(f + '---' + w + '---' + q + '---' + h + '---' + c);
	
	//Вывод данных в таблицу
t = document.getElementById('Q');if(t.innerHTML == ''){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';v = new Array()};
	var R = document.getElementById('qt').rows; var r = R[0]; 
	if(k[0] != undefined){a = k[0].split('\\');}else{a = '123'.split('');}//!
	if(k[0] != undefined && k[1] != undefined || a[0].indexOf('7.2') > -1)
	{if(r.cells[3].innerHTML != 'ГСМ, кг/га'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	else if(k[0] != undefined && k[1] == undefined)
	{if(r.cells[3].innerHTML != 'ГСМ, кг/ч'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Мощность, л.с.</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	else if(k[0] == undefined && k[1] != undefined)
	{if(r.cells[3].innerHTML != 'Тяговый класс'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">СС, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	
	v.push(k[0]+'|'+k[1]+'|'+k[2]+'|'+k[3]+'|'+k[4]);/*Кладем массив техники в список v*/
	adRow(); tai(f + '\\' + w + '\\' + q + '\\' + h + '\\' + c);
	
} //Расчет в агрегатах
function recalk(k){oagr();var f='';var w;var q; var h=0; var c;var a;var m;
	if(k[0] == undefined && ag[1] == undefined){return}
	
for(var i = 0; i < 4; i++){if(k[i] != undefined){a = k[i].split('\\');f += a[2] + '(' + a[23] + ') '}}//F
for(var i = 0; i < 4; i++){if(k[i] != undefined){a = ai(k[i]).split('\\'); h += parseFloat(a[3]);}}//Чэз
	
	if(k[0] != undefined){a = ai(k[0]).split('\\');w = a[1]; q = a[2]; c = a[4]}
	for(var i = 4; i > 0; i--){if(k[i] != undefined){a = ai(k[i]).split('\\');w = a[1];
	if(k[0] != undefined){m = ai(k[0]).split('\\');q = m[2];}; if(q > 0){q = q / w} else{q = a[2]}; 
	c = h / parseFloat(a[1]);}}; a = k[0]
	if(k[0] != undefined){a = k[0].split('\\');}else{a = '123'.split('');}
	if(a[0].indexOf('7.2') > -1){m = ai(k[0]).split('\\'); w = m[1]; q = m[2]; c = h / parseFloat(m[1]);}
	
	w = parseFloat(w).toFixed(2);q = parseFloat(q).toFixed(2);h = h.toFixed(2);c = parseFloat(c).toFixed(2);
	//alert(f + '---' + w + '---' + q + '---' + h + '---' + c);
	
	//Вывод данных в таблицу
t = document.getElementById('Q');if(t.innerHTML == ''){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';v = new Array()};
	var R = document.getElementById('qt').rows; var r = R[0]; 
	if(k[0] != undefined){a = k[0].split('\\');}else{a = '123'.split('');}//!
	if(k[0] != undefined && k[1] != undefined || a[0].indexOf('7.2') > -1)
	{if(r.cells[3].innerHTML != 'ГСМ, кг/га'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	else if(k[0] != undefined && k[1] == undefined)
	{if(r.cells[3].innerHTML != 'ГСМ, кг/ч'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Мощность, л.с.</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	else if(k[0] == undefined && k[1] != undefined)
	{if(r.cells[3].innerHTML != 'Тяговый класс'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">СС, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	
	v.push(k[0]+'|'+k[1]+'|'+k[2]+'|'+k[3]+'|'+k[4]);/*Кладем массив техники в список v*/
	adRow(); tai(f + '\\' + w + '\\' + q + '\\' + h + '\\' + c);
	
} //Пересчет в агрегатах


//Параметры//
function Cr(){if(z=='m'){if (ons(ReOne()) == true){var s = ReOne();Pic1();t = document.getElementById('Q');
if (t.innerHTML == ''){ t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(<?=$h?>image/tbg.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:522px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'}
adRow(); // Добавляем новую чистую строку
var R = document.getElementById('qq').rows; var r = R[R.length - 1];
r.style.backgroundImage = 'url(<?=$h?>image/st2.png)'; // Окрашиваем строку в пересчетную
tai(ai(s)); v.push(s);
document.getElementById('qq').scrollIntoView(false);} // Прокрутка вниз
else{alert('Проверьте правильность заполнения всех полей.');}}
if(z=='a'){
for(var i = 0; i < 5; i++){if(ons(cz[i]) == false){cz[i] = undefined}}//Обнуляем пустые элементы массива cz
Pic1(); recalk(cz);
var R = document.getElementById('qq').rows; var r = R[R.length - 1];
r.style.backgroundImage = 'url(<?=$h?>image/st2.png)'; // Окрашиваем строку в пересчетную
document.getElementById('qq').scrollIntoView(false);
}}  //Пересчет
function msave(){
if (ons(ReOne()) == true){var s = ReOne(); var m = s.split('\\'); m.length = 23; s = m.join('\\');
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
{n++;	u.options[n] = new Option(c[0] + " " + c[1]);}}}  //Функция заполнения подсписка техники
function ReOne(){var a = new Array(); var s;
	var u = document.getElementById('a2').value.split(' ');
	
	a[0] = u[0];
	a[1] = document.getElementById('a5').value.trim();
	a[2] = document.getElementById('a6').value.trim();
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
function onil(s){if(s == 'undefined'){return};var a = s.split('\\');var m = a[0].split('.');
document.getElementById('a1').selectedIndex = parseInt(m[0]);
document.getElementById('a1').focus();document.getElementById('a5').focus();
setTimeout( function(){document.getElementById('a2').options[parseInt(m[1])].selected=true;}, 1 );
document.getElementById('a3').selectedIndex = parseInt(a[8]) + 1;
document.getElementById('a4').selectedIndex = 1;
document.getElementById('a5').value = a[1].trim();
document.getElementById('a6').value = a[2].trim();
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
function ons(s){a = s.split('\\');
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
function fp(){
	document.getElementById('cp1').src = '<?=$h?>image/H12.png';
	document.getElementById('cp2').src = '<?=$h?>image/H22.png';
	document.getElementById('cp3').src = '<?=$h?>image/H22.png';
	document.getElementById('cp4').src = '<?=$h?>image/H22.png';
	document.getElementById('cp5').src = '<?=$h?>image/H22.png';
} //Функция назначения базовых изображений на вкладках параметров
function fp1(e){fp(); e.src='<?=$h?>image/H13.png'; delp(); onil(cz[0]);}
function fp2(e){fp(); e.src='<?=$h?>image/H23.png'; delp(); onil(cz[1]);}
function fp3(e){fp(); e.src='<?=$h?>image/H23.png'; delp(); onil(cz[2]);}
function fp4(e){fp(); e.src='<?=$h?>image/H23.png'; delp(); onil(cz[3]);}
function fp5(e){fp(); e.src='<?=$h?>image/H23.png'; delp(); onil(cz[4]);} //Группа функций на клик по вкладкам агрегатов
function repar(){var s = ReOne()
if(document.getElementById('cp1').src == '<?=$h?>image/H13.png'){cz[0] = s}
if(document.getElementById('cp2').src == '<?=$h?>image/H23.png'){cz[1] = s}
if(document.getElementById('cp3').src == '<?=$h?>image/H23.png'){cz[2] = s}
if(document.getElementById('cp4').src == '<?=$h?>image/H23.png'){cz[3] = s}
if(document.getElementById('cp5').src == '<?=$h?>image/H23.png'){cz[4] = s};//alert(cz[0]);
} //Функция сбора всех параметров в массив cz

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
}  //при изменении страны выбор коэффициентов

//Расчетные функции//
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
	var r = document.getElementById('qq').rows;	var Row = r[r.length - 1];
	
	Row.cells[0].innerHTML = r.length;
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

function adRow(){t = document.getElementById('Q');
var s = t.innerHTML.split('</table>');
var str = s[0] + '</table>' + s[1] + '<tr height="20" onclick="goPr(this)" onmouseover="selStr(this)" onmouseout="unselStr(this)" style="background-image:url(<?=$h?>image/ust.png)"><td width="39pt" align="center">&nbsp;</td><td width="333" style="padding:0pt 0pt 0pt 6px;">&nbsp;</td><td align="center" width="96pt">&nbsp;</td><td align="center" width="96">&nbsp;</td><td align="center" width="96">&nbsp;</td><td id="col" align="center" width="77">&nbsp;</td></tr>' + '</table>';
t.innerHTML = str;
} // Добавление строки в таблицу qq
function goPr(e){
if(z == 'm'){var s = v[e.rowIndex];Pic2();onil(s);}
if(z == 'a'){cz = new Array(); cz = v[e.rowIndex].split('|'); Pic2(); delp(); onil(cz[0]);}
} // функция добавления строк в таблицу результатов))
function selStr(e){	
//alert(e.style.backgroundImage)
if(e.style.backgroundImage=='url("<?=$h?>image/ust.png")'){e.style.backgroundImage = 'url("<?=$h?>image/st.png")';}
if(e.style.backgroundImage=='url("<?=$h?>image/st2.png")'){e.style.backgroundImage = 'url("<?=$h?>image/st1.png")';}
}
function unselStr(e){
if(e.style.backgroundImage=='url("<?=$h?>image/st.png")'){e.style.backgroundImage = 'url("<?=$h?>image/ust.png")';}
if(e.style.backgroundImage=='url("<?=$h?>image/st1.png")'){e.style.backgroundImage = 'url("<?=$h?>image/st2.png")';}
} // выделение и снятие выделения строк
function Spt3(e){

	//alert(123);
	
	
}





function f00a(e){e.src = "<?=$h?>image/Pi01.png"};function f00b(e){e.src = "<?=$h?>image/Pi00.png"};
function f10a(e){e.src = "<?=$h?>image/Pi11.png"};function f10b(e){e.src = "<?=$h?>image/Pi10.png"};
function f20a(e){e.src = "<?=$h?>image/Pi21.png"};function f20b(e){e.src = "<?=$h?>image/Pi20.png"};

function f100a(e){e.src = "<?=$h?>image/Pi101.png"};function f100b(e){e.src = "<?=$h?>image/Pi100.png"};function f110a(e){e.src = "<?=$h?>image/Pi111.png"};function f110b(e){e.src = "<?=$h?>image/Pi110.png"};function f120a(e){e.src = "<?=$h?>image/Pi121.png"};function f120b(e){e.src = "<?=$h?>image/Pi120.png"};function f130a(e){e.src = "<?=$h?>image/Pi131.png"};function f130b(e){e.src = "<?=$h?>image/Pi130.png"};function f140a(e){e.src = "<?=$h?>image/Pi141.png"};function f140b(e){e.src = "<?=$h?>image/Pi140.png"};

function f200a(e){e.src = "<?=$h?>image/Pi201.png"};function f200b(e){e.src = "<?=$h?>image/Pi200.png"};function f210a(e){e.src = "<?=$h?>image/Pi211.png"};function f210b(e){e.src = "<?=$h?>image/Pi210.png"} // Группа смены кнопок функций


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
function Cb2(){var a; var b;
var s1 = document.getElementById('sp1').value;var s2 = document.getElementById('sp2').value;
var m = s1.split([' ']); b = m[0]; if (b.indexOf('.0') > -1){a = b.split('.');m[0] = a[0] + '.';};
b = s2.split([' ']); if(b[2] == undefined){b[2] = '';}
var url = 'Cb2.php?ge='+encodeURIComponent(m[0] + '|' + b[2]);
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





























