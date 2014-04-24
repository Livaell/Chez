// Глобальные переменные 
var urlx = "http://chez.ru/";
var v =  new Array(); // Массив строки S
var g = new Array(); // Массив списка техники с параметрами
var sj = new Array(); // Массив настроек
var z = 'm'; // Режимы приложения (m, a, t)
var ag = new Array(); // Массив машин в агрегате службы агрегатов
var cz = new Array(); //Массив машин строки таблицы результатов при передаче во вкладку параметры
var tip; //Индекс строки с столбца в технологиях в панели выбора сх машин и агрегатов
var brw; //Тип браузера(опеределяется при загрузке страницы)
var tre; //Дерево культур
var uin = 2; //Идентификационный номер пользователя(Базовый вариант -- гость = 2)
var captcha=''; //Код с изображения при регистрации
var registr='<div id="content"><h1>Регистрация</h1><div id="wrapper"><div id="steps"><form id="formElem" name="formElem" action="" method="post"><fieldset class="step"><legend>Аккаунт</legend><p><label for="username">Логин</label><input id="username" name="username" /></p><p><label for="email">Email</label><input id="email" name="email" placeholder="info@mail.ru" type="email" AUTOCOMPLETE=OFF /></p><p><label for="password">Пароль</label><input id="password" name="password" type="password" AUTOCOMPLETE=OFF /></p></fieldset><fieldset class="step"><legend>Сведения</legend><p><label for="name">Полное имя (ФИО)</label><input id="name" name="name" type="text" AUTOCOMPLETE=OFF /></p><p><label for="city">Город</label><input id="city" name="city" type="text" AUTOCOMPLETE=OFF /></p></fieldset><fieldset class="step"><legend>Роль</legend><p><label for="role">Роль пользователя</label><select id="role" name="role"><option>Фермер</option><option>Организация</option><option>Государство</option></select></p><p><label for="company">Организация</label><input id="company" name="company" placeholder="ООО Заря" type="tel" AUTOCOMPLETE=OFF /></p><p><label for="address">Адрес организации</label><input id="address" name="address" placeholder="" type="tel" AUTOCOMPLETE=OFF /></p></fieldset><fieldset class="step"><legend>Проверка</legend><p><label for="newsletter">Введите код с изображения</label><img id="k" src="javascript:rnd()" onClick="rek()"/></p> <p><label for="tagname">Поле кода</label><input id="tagname" name="tagname" type="text" AUTOCOMPLETE=OFF /></p></fieldset><fieldset class="step"><legend>Подтвердить</legend><p>Для успешной регистрации необходимо проследить за тем, что все вкладки должны иметь зеленый индикатор, свидетельствующий о верном заполнении этого блока. В том случае, если индикатор красный, поле заполнено неверными сведениями либо не заполнено вовсе. На заключительном шаге пользователь подтверждает сведения заполненные в предыдущих частях.</p><p class="submit"><button type="button" id="registerButton" value="Регистрация" />Зарегистрировать</button></p></fieldset></form></div><div id="navigation" style="display:none;"><ul><li class="selected"><a href="#">Аккаунт</a></li><li><a href="#">Сведения</a></li><li><a href="#">Роль</a></li><li><a href="#">Проверка</a></li><li><a href="#">Подтвердить</a></li></ul></div></div></div>'; // Модуль регистрации
var start = '<div id="msn"><table width="999" style="border-collapse: collapse; margin:auto"  cellpadding="0" cellspacing="0" border="0" ><tr><td class="MsoNormal" style="font-size:12.0pt;font-family:Microsoft Sans Serif; padding-left: 6pt"><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;"><tr><td width="600">ФГБУ Поволжская МИС - Аграрная информационная система МАТЧЭЗ</td><td id="ulin" width="399" align="right" valign="middle" style="font-size:9.0pt;font-family:Microsoft Sans Serif;padding-right:20px">Вы вошли как: User</td></tr></table></td></tr><tr><td height="30" style="background-image:url(image/tbg.png)"><table width="997" border="0" style="border-collapse:collapse;"><tr><td width="75px"><img id="mm1" class="cursor" src="image/m11.png" style="margin-left:15px; margin-top:3px" onmouseover="rm11(this)" onmouseout="rm12(this)" onclick="M()"/></td><td width="75px"><img id="mm2" class="cursor" src="image/m21.png" style="margin-top:3px" onmouseover="rm21(this)" onmouseout="rm22(this)" onclick="A()"/></td><td width="75px"><img id="mm3" class="cursor" src="image/m31.png" style="margin-top:3px" onmouseover="rm31(this)" onmouseout="rm32(this)" onclick="T()"/></td><td align="left"><img id="mm4" class="cursor" src="image/m41.png" style="margin-top:3px" onmouseover="rm41(this)" onmouseout="rm42(this)" onclick="frm()"/></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table></td></tr></table></div><table width="999" height="708" style="border-collapse: collapse; border-color: rgb(0,0,0);"  cellpadding="0" cellspacing="0" align="center" border="1" ><tr valign="top"><td width="208" style="background-color: rgb(242,242,241)"><div id="Pic" style="width:156pt"><img id="p1" src="image/Pic02.png" alt="Pic02" width="52" height="42" onclick="Pic1(this)" /><img id="p2" src="image/Pic13.png" alt="Pic13" width="52" height="42" onclick="Pic2(this)" /><img id="p3" src="image/Pic20.png" width="52" height="42" onclick="Pic3(this)" /><img id="p4" src="image/Pic30.png" width="52" height="42" onclick="Pic4(this)" /></div><p id="nl" style="padding: 7pt 5.4pt 9pt 11pt; ">Инструменты расчета</p><div id="Pi"><img src="image/Pi00.png" width="205" height="37" onclick="addrow()" onmouseover="f00a(this)" onmouseout="f00b(this)" /><img src="image/Pi10.png" width="205" height="37" onmouseover="f10a(this)" onmouseout="f10b(this)" onclick="prt()"/><img src="image/Pi20.png" width="205" height="37" onclick="DelRows()" onmouseover="f20a(this)" onmouseout="f20b(this)" /></div></td><td id="u" width="785" align="left" valign="top" bgcolor="#FFFFFF"><p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "МАШИНЫ"</p><div style="background-image:url(image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px;"><p style=" margin-top:100px;padding-left:27pt; font-family:Microsoft Sans Serif; font-size:16px">Начало работы</p><p style="padding-left:27pt; font-family:Microsoft Sans Serif; font-size:14px;"><font color="#0066CC">1. Сформируйте запрос на предоствление сведений по технике в панели выбора сельскохозяйственных машин </font></p><p style="padding-left:27pt; font-family:Microsoft Sans Serif; font-size:14px"><font color="#0066CC">2. Нажатие кнопки "Расчет" осуществляет отображение результатов </font></p><p style="padding-left:27pt; font-family:Microsoft Sans Serif; font-size:14px"><font color="#0066CC">3. В последующей работе с ИКС "Машины" руководствуйтесь подсказками и инструкциями </font></p></div></td></tr></table>'; // переменная хранения начальной страницы


var pc1 = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "МАШИНЫ"</p><div style="background-image:url(image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';var pc2='\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\';var pc3;var pc4;var pc5;var pc6;var pc7;var pc8; // Переменные хранения параметров
var m1 = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "МАШИНЫ"</p><div style="background-image:url(image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';var a1 = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "АГРЕГАТЫ"</p><div style="background-image:url(image/pn2.png); height:213px; width:578pt; margin-left:6pt; padding-top:38pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="367" contextmenu="return false;"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:356px" onchange="Cb1()"></select></td><td width="161"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="131"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:120px; " ></select></td><td width="61"><select id="sp4" style="margin:0pt 0pt 0pt 8pt; width:50px; " ></select></td><td width="41"><input name="" type="button" style="background-image: url(image/bot2.png); margin-left:8pt;width:23px" onclick="dn()" /></td></tr></table><table id="agr" width="745px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); margin: 10px 0px 0px 11px;font-size:9.0pt;font-family:Microsoft Sans Serif" border="1"><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25" align="center">№</td><td width="173" align="center">Тип техники</td><td width="55" align="center">Тяг класс</td><td width="269" align="center">Название машины</td><td width="44" align="center">Кол-во</td><td width="70" align="center">ЧЭЗ, р./ч</td><td width="63" align="center">Доля, %</td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">1.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">2.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">3.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">4.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">5.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" style="background-color:rgb(255,222,173)"><td></td><td align="left" style="padding-left:5px">Всего:</td><td></td><td></td><td align="center"></td><td align="center"></td><td align="center"></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';var t1; // Переменные для хранения титульных страниц служб


//--------------------------------------------------------Start--------------------------------------------------------------

function avt(){
	document.getElementById('mc').innerHTML = '<table width="825" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:auto; background-image:url(<?=$h?>image/msite/start/Logofon.png); background-repeat:no-repeat"><tr><td><table width="201px" cellpadding="0" cellspacing="0" border="0" align="center" style="margin:auto;"><tr height="140px"><td></td></tr><tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px"><b>Логин:</b></p></td></tr><tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left"><input name="Logn" id="Log" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/></td></tr><tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px;"><b>Пароль:</b></p></td></tr><tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left"><input name="Pasn" id="Pas" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/></td></tr><tr height="50"><td></td></tr><tr><td align="center"><input name="en" type="button" value="Вход" style="width:200px; height:27px; font-weight:bold" onclick="sent()"/></td></tr><tr><td height="100px"></td></tr></table></td></tr></table>';
} //Авторизация
function reg(){
	document.getElementById('mc').innerHTML = registr; //Записываем html код куда надо)
	$(function() {
		
		/*number of fieldsets*/
		var fieldsetCount = $('#formElem').children().length;
		
		/*current position of fieldset / navigation link*/
		var current 	= 1;
		
		/*sum and save the widths of each one of the fieldsets
		set the final sum as the total width of the steps element*/
		var stepsWidth	= 0;
		var widths 		= new Array();
		$('#steps .step').each(function(i){
			var $step 		= $(this);
			widths[i]  		= stepsWidth;
			stepsWidth	 	+= $step.width();
		});
		$('#steps').width(stepsWidth);
		
		/*to avoid problems in IE, focus the first input of the form*/
		$('#formElem').children(':first').find(':input:first').focus();	
		
		//show the navigation bar
		$('#navigation').show();
		
		
		/*when clicking on a navigation link 
		the form slides to the corresponding fieldset*/
		$('#navigation a').bind('click',function(e){
			var $this	= $(this);
			var prev	= current;
			$this.closest('ul').find('li').removeClass('selected');
			$this.parent().addClass('selected');
			/*
			we store the position of the link
			in the current variable	
			*/
			current = $this.parent().index() + 1;
			/*
			animate / slide to the next or to the corresponding
			fieldset. The order of the links in the navigation
			is the order of the fieldsets.
			Also, after sliding, we trigger the focus on the first 
			input element of the new fieldset
			If we clicked on the last link (confirmation), then we validate
			all the fieldsets, otherwise we validate the previous one
			before the form slided
			*/
			$('#steps').stop().animate({
				marginLeft: '-' + widths[current-1] + 'px'
			},500,function(){
				if(current == fieldsetCount)
					validateSteps();
				else
					validateStep(prev);
				$('#formElem').children(':nth-child('+ parseInt(current) +')').find(':input:first').focus();	
			});
			e.preventDefault();
		});
		
		/*clicking on the tab (on the last input of each fieldset), makes the form
		slide to the next step*/
		$('#formElem > fieldset').each(function(){
			var $fieldset = $(this);
			$fieldset.children(':last').find(':input').keydown(function(e){
				if (e.which == 9){
					$('#navigation li:nth-child(' + (parseInt(current)+1) + ') a').click();
					/* force the blur for validation */
					$(this).blur();
					e.preventDefault();
				}
			});
		});
		
		/*validates errors on all the fieldsets
		records if the Form has errors in $('#formElem').data()*/
		function validateSteps(){
			var FormErrors = false;
			for(var i = 1; i < fieldsetCount; ++i){
				var error = validateStep(i);
				if(error == -1)
					FormErrors = true;
			}
			$('#formElem').data('errors',FormErrors);	
		}
		
		/*validates one fieldset
		and returns -1 if errors found, or 1 if not*/
		function validateStep(step){//alert(step);
			if(step == fieldsetCount) return;
			
			var error = 1;
			var hasError = false;
			$('#formElem').children(':nth-child('+ parseInt(step) +')').find(':input:not(button)').each(function(){
				var $this 		= $(this);
				var valueLength = jQuery.trim($this.val()).length;
				
				//Проверяем Email на валидацию
				if(step == 1){
					if($this.val() == $('#email').val() && $this.val() != ''){
						var eml = /@/.test($('#email').val());if(!eml){valueLength = '';}
					}
				}
				
				//Проверяем капчу
				var vl = $this.val();if(step == 4){if(vl != captcha){valueLength = '';}}
				
				
				if(valueLength == ''){
					hasError = true;
					$this.css('background-color','#FFEDEF');
				}
				else
					$this.css('background-color','#FFFFFF');	
			});
			
			//Проверка логина и емейла
			getAjax('register/elog.php?r='+encodeURIComponent($('#username').val() + "|" + $('#email').val()), errlog);
			function errlog(d){var a = d.split('|');hasError = false;
			
				//Проверка на существование такого логина и емейла в базе данных
				if(parseInt(a[0]) > 0 || jQuery.trim($('#username').val()).length == 0)
				{$('#username').css('background-color','#FFEDEF'); hasError = true;}
				if(parseInt(a[1]) > 0 || jQuery.trim($('#email').val()).length == 0 || /@/.test($('#email').val()) == false)
				{$('#email').css('background-color','#FFEDEF'); hasError = true;}
				
				//Проверяем треье поле в первой вкладке
				var valueLength = jQuery.trim($('#password').val()).length;
				if(valueLength == ''){hasError = true; $('#password').css('background-color','#FFEDEF');}
				//else{$('#password').css('background-color','#FFFFFF');}				
				
				//Проверка первой вкладки на возможность регистрации
				var $link = $('#navigation li:nth-child(1) a');
				$link.parent().find('.error,.checked').remove();
				var valclass = 'checked';
				if(hasError){error = -1; valclass = 'error';}
				$('<span class="'+valclass+'"></span>').insertAfter($link);
				
				//Выставление глобальных параметров
				$('#formElem').data('errors',hasError);
				
			} // Функция проверки коректности заполнения сведений
			
			var $link = $('#navigation li:nth-child(' + parseInt(step) + ') a');
			$link.parent().find('.error,.checked').remove();
			
			var valclass = 'checked';
			if(hasError){
				error = -1;
				valclass = 'error';
			}
			$('<span class="'+valclass+'"></span>').insertAfter($link);
			
			return error;
			
		}
		
		//if there are errors don't allow the user to submit
		$('#registerButton').bind('click',function(){validateSteps();
			if($('#formElem').data('errors')){
				alert('Введите корректные данные или заполните поля.');
				return false;
			}
			else{
				var m = [];
				m[0] = $('#username').val();
				m[1] = $('#email').val();
				m[2] = $('#password').val();
				m[3] = $('#name').val();
				m[4] = $('#city').val();
				m[5] = $('#address').val();
				m[6] = $('#role').val();
				m[7] = $('#company').val();
				
				getAjax('register/reg.php?s=' + encodeURIComponent(m.join('|')), okreg);
				//function okreg(d){alert(d);	window.location.reload();}
			}	
		});
		
	}); //Подключаем все необходимые функции и модули для работы 
	$('#k').attr('src', rnd()); //Обновляем картинку
} //Регистрация
function okreg(d){alert(d);	window.location.reload();} // Возвратная функция регистрации -- Результат
function rnd(){
	var keylist = "abcdefghkmnpqrstuvwxyz23456789"; var r='';
	for(var i = 0; i < 5; i++){r += keylist.charAt(Math.floor(Math.random()*keylist.length))}
	captcha = r;  var str = 'register/captcha.php?r=' + r;
	return  str;
} // Функция обновления изображения
function rek(){
	$('#k').attr('src', rnd());
} // Еще одна функция обновления изображения
function sent(){
	var l = document.getElementById("Log").value; var p = document.getElementById("Pas").value;
	var url = 'Enter.php?s='+encodeURIComponent(l + '`' + p); getAjax(url,ent);
} // Функция проверки логина и пароля
function ent(s){
	var a = s.split('|');
	if(a[0] != ''){
		uin=a[0];if(a[1] == ''){a[1]='Гость'};
		document.body.style.backgroundRepeat = 'repeat';	
		document.body.style.backgroundImage = 'url("image/fon.png")';
		document.body.style.fontFamily = 'Microsoft Sans Serif';
		document.getElementById('mn').innerHTML = start;aCb0();ns();//Заполнение списка техникой
		document.getElementById('ulin').innerHTML = '<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;"><tr align="right"><td>Вы вошли как:</td><td width="20px"><img src="image/iuser.png" width="16" height="16" /></td><td id="lin" align="left" style="padding-left:7px;padding-right:7px">' + a[1] + '</td><td width="20px"><img src="image/iuserout.png" width="16" height="16" onclick="window.location.reload()" title="Выход" class="cursor"/></td></tr></table>';
		document.getElementById('msn').scrollIntoView(false);
	}
} // функция загрузки программы после проверки логина и пароля
function kp(e){if (e.keyCode == 13) {sent();}} // Функция по логина и пароля по нажатию ентер

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

//---------------------------------------------------------------------------------------------------------------------------

//Меню
function rm11(e){e.src = "image/m12.png"};function rm12(e){e.src = "image/m11.png"};function rm21(e){e.src = "image/m22.png"};function rm22(e){e.src = "image/m21.png"};function rm31(e){e.src = "image/m32.png"};function rm32(e){e.src = "image/m31.png"};function rm41(e){e.src = "image/m42.png"};function rm42(e){e.src = "image/m41.png"} //Смена иконок
function M(){
	if(z == 't'){if(document.getElementById('menu2') != null){psg = document.getElementById('menu2').innerHTML;}} //Записываем в переменную панель вкладок
	z = 'm'; document.getElementById('Pic').innerHTML = '<img id="p1" src="image/Pic02.png" width="52" height="42" onclick="Pic1(this)" /><img id="p2" src="image/Pic53.png" width="52" height="42" onclick="Pic2(this)" /><img id="p3" src="image/Pic20.png" width="52" height="42" onclick="Pic3(this)" /><img id="p4" src="image/Pic30.png" width="52" height="42" onclick="Pic4(this)" />'; Pic1();
	document.getElementById('u').innerHTML = m1;aCb0();
	//alert(sj.join('+'));
} //M()
function A(){
	if(z == 't'){	if(document.getElementById('menu2') != null){psg = document.getElementById('menu2').innerHTML;}} //Записываем в переменную панель вкладок
	ag = new Array();z = 'a';document.getElementById('Pic').innerHTML = '<img id="p1" src="image/Pic02.png" width="52" height="42" onclick="Pic1(this)" /><img id="p2" src="image/Pic53.png" width="52" height="42" onclick="Pic2(this)" /><img id="p3" src="image/Pic20.png" width="52" height="42" onclick="Pic3(this)" /><img id="p4" src="image/Pic30.png" width="52" height="42" onclick="Pic4(this)" />';Pic1();
	var u = document.getElementById('u');u.innerHTML = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "АГРЕГАТЫ"</p><div style="background-image:url(image/pn2.png); height:213px; width:578pt; margin-left:6pt; padding-top:38pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="367" contextmenu="return false;"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:356px" onchange="Cb1()"></select></td><td width="161"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="131"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:120px; " ></select></td><td width="61"><select id="sp4" style="margin:0pt 0pt 0pt 8pt; width:50px; " ></select></td><td width="41"><input name="" type="button" style="background-image: url(image/bot2.png); margin-left:8pt;width:23px" onclick="dn()" /></td></tr></table><table id="agr" width="745px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); margin: 10px 0px 0px 11px;font-size:9.0pt;font-family:Microsoft Sans Serif" border="1"><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25" align="center">№</td><td width="298" align="center">Название машины</td><td width="94" align="center">Тяг класс</td><td width="94" align="center">Кол-во</td><td width="94" align="center">ЧЭЗ, р./ч</td><td width="94" align="center">Доля, %</td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">1.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">2.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">3.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">4.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" onclick="arc(this)" ondblclick="ard(this)"><td align="center">5.</td><td align="left" style="padding-left:5px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr><tr height="22" style="background-color:rgb(255,222,173)"><td></td><td align="left" style="padding-left:5px">Всего:</td><td></td><td align="center"></td><td align="center"></td><td align="center"></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';
	aCb0(); sp = document.getElementById('sp4'); for (var i = 0; i < 30; i++){sp.options[i] = new Option(i + 1)}
} //A()
function T(){z = 't';
	document.getElementById('Pic').innerHTML = '<img id="p1" src="image/Pic42.png" width="52" height="42" onclick="Pic5(this)" /><img id="p2" src="image/Pic53.png" width="52" height="42" onclick="Pic6(this)" /><img id="p3" src="image/Pic60.png" width="52" height="42" onclick="Pic7(this)" /><img id="p4" src="image/Pic70.png" width="52" height="42" onclick="Pic8(this)" />';
	Pic6();
	//Блок работы с контекстным меню в технлогиях
	// Show menu when #myDiv is clicked
	$("#ctm").contextMenu({menu: 'myMenu'},	function (action, el, pos) {
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

//---------------------------------------------------------------------------------------------------------------------------

//Группы
function Pic1(e){//alert(e.alt);
	var q1 = document.getElementById('p1'); q1.src = "image/Pic02.png";
	var q2 = document.getElementById('p2');if(q2.src.indexOf("image/Pic12.png") > -1){pc2 = ReOne();}; q2.src = "image/Pic13.png";
	var q3 = document.getElementById('p3'); q3.src = "image/Pic20.png";
	var q4 = document.getElementById('p4'); q4.src = "image/Pic30.png";
	
	t = document.getElementById('nl');t.innerHTML = 'Инструменты расчета';
	t = document.getElementById('u'); t.innerHTML = '<p style="padding: 0pt 9pt 0pt 33pt; ">Информационно-консультативная служба "МАШИНЫ"</p><div style="background-image:url(image/pn3.png); height:30pt; width:578pt; margin-left:6pt; padding-top:34pt"><table width="761" style="border-collapse: collapse; "cellpadding="0" cellspacing="0" border="0"><tr><td width="400"><select id="sp1" style="margin:0pt 0pt 0pt 8pt; width:415px" onchange="Cb1()"></select></td><td width="155"><select id="sp2" style="margin:0pt 0pt 0pt 8pt; width:111pt; width:150px"  onchange="Cb2()"  onfocus=""></select></td><td width="206"><select id="sp3" style="margin:0pt 0pt 0pt 8pt; width:150px; " ></select></td></tr></table></div><div id="Q" style="padding-bottom:7px"></div>';
	t.innerHTML = pc1;
	t = document.getElementById('Pi');t.innerHTML = '<img src="image/Pi00.png" width="205" height="37" onclick="addrow()" onmouseover="f00a(this)" onmouseout="f00b(this)" /><img src="image/Pi10.png" width="205" height="37" onmouseover="f10a(this)" onmouseout="f10b(this)" onclick=""/><img src="image/Pi20.png" width="205" height="37" onclick="DelRows()" onmouseover="f20a(this)" onmouseout="f20b(this)"/>';
}//Инструменты пересчета
function Pic2(e){
	var q1 = document.getElementById('p1');if(q1.src.indexOf("image/Pic02.png") > -1){t = document.getElementById('u'); pc1 = t.innerHTML;}; q1.src = "image/Pic00.png";
	var q2 = document.getElementById('p2'); q2.src = "image/Pic12.png";
	var q3 = document.getElementById('p3'); q3.src = "image/Pic23.png";
	var q4 = document.getElementById('p4'); q4.src = "image/Pic30.png";
	t = document.getElementById('nl'); t.innerHTML = 'Инструменты пересчета';
	
	if(z == 'm'){
		//Таблицы
		t = document.getElementById('u');
		t.innerHTML = '<p style="padding: 0pt 9pt 0pt 13pt;">Параметры машины</p><table id="tmychez" width="770" border="0"  style=""><tr><td id="mychez" width="370"></td><td width="114" class="MsoNormal" style="font-family: sans-serif; font-size:13px"><p>Данные на дату:</p></td><td width="144" align="center"><input type="text" id="dt" maxlength="10" value="" align="middle" /></td><td width="128"><input type="button" id="mf" value="Найти" width="20" height="20" style="margin-left:8px" onclick="findm()"/></td></tr></table><div id="t1" style="padding-left:8pt; padding-top:18pt; height:147pt; background-image:url(image/par1.png)"><table id="b1" width="700px" style="border-collapse: collapse;"  cellpadding="0" cellspacing="0" align="left" border="1"><tr height="22" style="background-color:rgb(235,235,235)"><td width="377" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">1.  Вид техники</td><td width="317"><select id="a1" style="width:239pt;  background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt"      onfocus="Spt2(this)"  onchange="Spt2(this)"><OPTION ></OPTION><OPTION >1.0 Тракторы (Все)</OPTION><OPTION >2.0 Почвообрабатывающие машины</OPTION><OPTION >3.0 Машины для внесения удобрений</OPTION><OPTION >4.0 Машины для подготовки семян</OPTION><OPTION >5.0 Сеялки</OPTION><OPTION >6.0 Машины для ухода за посевами</OPTION><OPTION >7.0 Зерноуборочные машины</OPTION><OPTION>8.0 Машины для обработки зерна на току</OPTION><OPTION>9.0 Мелиорационные машины</OPTION><OPTION>10.0 Погрузочно-разгрузочные машины</OPTION><OPTION>11.0 Транспортные машины</OPTION><OPTION>12.0 Силосоуборочные машины</OPTION><OPTION>13.0 Сеноуборочные машины</OPTION><OPTION>14.0 Свеклоуборочные машины</OPTION><OPTION>15.0 Машины для возделывания и уборки картофеля</OPTION><OPTION>16.0 Сцепки</OPTION></select></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt; background-color:">2.  Тип машины</td><td><select id="a2" style="width:239pt; background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt" onchange="tm(this)"></select></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">3.  Страна изготовитель</td><td><select id="a3" style="width:239pt;background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt" onchange="sjk(this)"><OPTION></OPTION><OPTION >Дальнее зарубежье</OPTION><OPTION >Россия</OPTION><OPTION  value="">Ближнее зарубежье</OPTION></select></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">4.  Количество машин в агрегате, шт</td><td><select id="a4" style="width:239pt;background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt" onchange="sjk(this)"><OPTION></OPTION><OPTION>1</OPTION><OPTION >2</OPTION><OPTION >3</OPTION><OPTION >4</OPTION><OPTION>5</OPTION><OPTION >6</OPTION><OPTION >7</OPTION><OPTION >8</OPTION><OPTION >9</OPTION><OPTION >10</OPTION><OPTION >11</OPTION><OPTION >12</OPTION><OPTION >13</OPTION><OPTION >14</OPTION><OPTION >15</OPTION></select></td></tr><tr height="22pt" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">5.  Название машины</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a5" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22pt" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">6.  Марка машины</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a6" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22pt"  style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">7.  Мощность, л.с.</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a7" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22pt" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">8.  Тяговый класс</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a8" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr></table></div><div id="t2" style="padding-left:8pt; padding-top:18pt; height:165pt; background-image:url(image/par2.png)"><table id="b2" width="700px" style="border-collapse: collapse;"  cellpadding="0" cellspacing="0" align="left" border="1"><tr height="22" style="background-color:rgb(235,235,235)"><td width="377px" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">1. Цена машины (без НДС), руб</td><td width="317" align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a9" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">2. Котструктивная ширина захвата, м</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a10" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">3. Расход топлива, кг/ч</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a11" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">4. Рабочая скорость, км/ч</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a12" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">5. Цена топлива, руб/кг</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a13" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">6. Часовая заработная плата, руб/ч</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a14" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">7. Кред. политика банка, %</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a15" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">8. Срок кредита, год</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a16" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">9. Персонал, чел</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a17" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr></table></div><div id="t3" style="padding-left:8pt; padding-top:18pt; margin-bottom:13px;height:113pt; background-image:url(image/par3.png)"><table id="b3" width="700" style="border-collapse: collapse;"  cellpadding="0" cellspacing="0" align="left" border="1"><tr height="22" style="background-color:rgb(235,235,235)"><td width="377" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">1.  Коэффициент ремонта и ПТО, %</td><td width="317" align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a18" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">2. Коэф эффективного использования рабочего времени, kэ</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a19" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">3. Амортизационный ресурс, час</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a20" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">4. Амортизационный коэффициент, µт</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a21" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">5. Ремонтный коэффициент, µр</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a22" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">6. Топливно-эксплуатационный коэффициент, µs</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a23" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">7. Годовой амортизационный ресурс, год</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a24" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr></table></div>'; //Основная рабочая часть
		//Условие заполнения таблицы
		var a = pc2.split('\\');var b; for(var i = 0; i < 22; i++){if(a[i] != ''){b=1}};if(b==1){onil(pc2);}
		t = document.getElementById('Pi');t.innerHTML = '<img src="image/Pi100.png" width="205" height="37" onclick="Cr()" onmouseover="f100a(this)" onmouseout="f100b(this)"/><img src="image/Pi110.png" width="205" height="37" onmouseover="f110a(this)" onmouseout="f110b(this)" onclick="msave()"/><img src="image/Pi120.png" width="205" height="37" onclick="cnm()" onmouseover="f120a(this)" onmouseout="f120b(this)"/><img src="image/Pi130.png" width="205" height="37" onclick="delp()" onmouseover="f130a(this)" onmouseout="f130b(this)"/><img src="image/Pi140.png" width="205" height="37" onclick="infl()" onmouseover="f140a(this)" onmouseout="f140b(this)"/>';}
	else if(z == 'a'){
		//Таблицы
		t = document.getElementById('u'); 
		t.innerHTML = '<p style="padding: 0pt 9pt 0pt 13pt;">Параметры машины</p><table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="background-image:url(image/czi.jpg)"><tr height="22"><td><table border="0" cellpadding="0" cellspacing="0" align="center" style="margin-left:20pt"><tr height="22"><td width="125"><img id="cp1" src="image/H13.png" onclick="fp1(this)"/></td><td width="99pt"><img id="cp2" src="image/H22.png" onclick="fp2(this)"/></td><td width="99pt"><img id="cp3" src="image/H22.png" onclick="fp3(this)"/></td><td width="99pt"><img id="cp4" src="image/H22.png" onclick="fp4(this)"/></td><td width="99pt"><img id="cp5" src="image/H22.png" onclick="fp5(this)"/></td></tr></table></tr></table><table id="tmychez" width="770" border="0"  style=""><tr><td id="mychez" width="370"></td><td width="114" class="MsoNormal" style="font-family: sans-serif; font-size:13px"><p>Данные на дату:</p></td><td width="144" align="center"><input type="text" id="dt" maxlength="10" value="" align="middle" /></td><td width="128"><input type="button" id="mf" value="Найти" width="20" height="20" style="margin-left:8px" onclick="findm()"/></td></tr></table><div id="t1" onmouseout="repar()" style="padding-left:8pt; padding-top:18pt; height:147pt; background-image:url(image/par1.png)"><table id="b1" width="700px" style="border-collapse: collapse;"  cellpadding="0" cellspacing="0" align="left" border="1"><tr height="22" style="background-color:rgb(235,235,235)"><td width="377" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">1.  Вид техники</td><td width="317"><select id="a1" style="width:239pt;  background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt"      onfocus="Spt2(this)"  onchange="Spt2(this)"><OPTION ></OPTION><OPTION >1.0 Тракторы (Все)</OPTION><OPTION >2.0 Почвообрабатывающие машины</OPTION><OPTION >3.0 Машины для внесения удобрений</OPTION><OPTION >4.0 Машины для подготовки семян</OPTION><OPTION >5.0 Сеялки</OPTION><OPTION >6.0 Машины для ухода за посевами</OPTION><OPTION >7.0 Зерноуборочные машины</OPTION><OPTION>8.0 Машины для обработки зерна на току</OPTION><OPTION>9.0 Мелиорационные машины</OPTION><OPTION>10.0 Погрузочно-разгрузочные машины</OPTION><OPTION>11.0 Транспортные машины</OPTION><OPTION>12.0 Силосоуборочные машины</OPTION><OPTION>13.0 Сеноуборочные машины</OPTION><OPTION>14.0 Свеклоуборочные машины</OPTION><OPTION>15.0 Машины для возделывания и уборки картофеля</OPTION><OPTION>16.0 Сцепки</OPTION></select></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt; background-color:">2.  Тип машины</td><td><select id="a2" style="width:239pt; background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt" onchange="tm(this)"></select></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">3.  Страна изготовитель</td><td><select id="a3" style="width:239pt;background-color:rgb(235,235,235); border-style:hidden; padding-left:5pt" onchange="sjk(this)"><OPTION></OPTION><OPTION >Дальнее зарубежье</OPTION><OPTION >Россия</OPTION><OPTION  value="">Ближнее зарубежье</OPTION></select></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">4.  Количество машин в агрегате, шт</td><td><select id="a4" style="width:239pt;background-color:rgb(245,245,245); border-style:hidden; padding-left:5pt"><OPTION></OPTION><OPTION>1</OPTION><OPTION >2</OPTION><OPTION >3</OPTION><OPTION >4</OPTION><OPTION>5</OPTION><OPTION >6</OPTION><OPTION >7</OPTION><OPTION >8</OPTION><OPTION >9</OPTION><OPTION >10</OPTION><OPTION >11</OPTION><OPTION >12</OPTION><OPTION >13</OPTION><OPTION >14</OPTION><OPTION >15</OPTION></select></td></tr><tr height="22pt" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">5.  Название машины</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a5" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22pt" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">6.  Марка машины</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a6" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22pt"  style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">7.  Мощность, л.с.</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a7" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" /></td></tr><tr height="22pt" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">8.  Тяговый класс</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a8" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr></table></div><div id="t2" onmouseout="repar()" style="padding-left:8pt; padding-top:18pt; height:165pt; background-image:url(image/par2.png)"><table id="b2" width="700px" style="border-collapse: collapse;"  cellpadding="0" cellspacing="0" align="left" border="1"><tr height="22" style="background-color:rgb(235,235,235)"><td width="377px" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">1. Цена машины (без НДС), руб</td><td width="317" align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a9" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">2. Конструктивная ширина захвата, м</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a10" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">3. Расход топлива, кг/ч</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a11" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">4. Рабочая скорость, км/ч</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a12" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">5. Цена топлива, руб/кг</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a13" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">6. Часовая заработная плата, руб/ч</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a14" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">7. Кред. политика банка, %</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a15" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">8. Срок кредита, год</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a16" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">9. Персонал, чел</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a17" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr></table></div><div id="t3" onmouseout="repar()" style="padding-left:8pt; padding-top:18pt; margin-bottom:13px;height:113pt; background-image:url(image/par3.png)"><table id="b3" width="700" style="border-collapse: collapse;"  cellpadding="0" cellspacing="0" align="left" border="1"><tr height="22" style="background-color:rgb(235,235,235)"><td width="377" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">1.  Коэффициент ремонта и ПТО, %</td><td width="317" align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a18" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">2. Коэф эффективного использования рабочего времени, kэ</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a19" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">3. Амортизационный ресурс, час</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a20" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">4. Амортизационный коэффициент, µт</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a21" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">5. Ремонтный коэффициент, µр</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a22" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(245,245,245)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">6. Топливно-эксплуатационный коэффициент, µs</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a23" style="width:230pt;background-color:rgb(245,245,245); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr><tr height="22" style="background-color:rgb(235,235,235)"><td class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif; padding-left: 5pt">7. Годовой амортизационный ресурс, год</td><td align="center" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif;"><input id="a24" style="width:230pt;background-color:rgb(235,235,235); border-style:hidden" align="middle" value="" type="text" onkeyup="nechez()" /></td></tr></table></div>'; //Основная рабочая часть
		t = document.getElementById('Pi');t.innerHTML = '<img src="image/Pi100.png" width="205" height="37" onclick="Cr()" onmouseover="f100a(this)" onmouseout="f100b(this)"/><img src="image/Pi110.png" width="205" height="37" onmouseover="f110a(this)" onmouseout="f110b(this)" onclick="msave()"/><img src="image/Pi120.png" width="205" height="37" onclick="cnm()" onmouseover="f120a(this)" onmouseout="f120b(this)"/><img src="image/Pi130.png" width="205" height="37" onclick="delp()" onmouseover="f130a(this)" onmouseout="f130b(this)"/><img src="image/Pi140.png" width="205" height="37" onclick="infl()" onmouseover="f140a(this)" onmouseout="f140b(this)"/>'; //Кнопки левая панель
		var a = pc2.split('\\');var b; for(var i = 0; i < 22; i++){if(a[i] != ''){b=1}};if(b==1){onil(pc2);}
		//delp(); onil(ag[0]);//Загружаем данные в таблицу
	}
}//Параметры
function Pic3(e){
	var q1 = document.getElementById('p1'); if(q1.src.indexOf("image/Pic02.png") > -1){t = document.getElementById('u');pc1 = t.innerHTML;}; q1.src = "image/Pic00.png"; 
	var q2 = document.getElementById('p2'); if(q2.src.indexOf("image/Pic12.png") > -1){pc2 = ReOne();}; q2.src = "image/Pic10.png"; 
	var q3 = document.getElementById('p3'); q3.src = "image/Pic22.png"; 
	var q4 = document.getElementById('p4'); q4.src = "image/Pic33.png";
	
	document.getElementById('nl').innerHTML = 'Настройка';
	document.getElementById('Pi').innerHTML = '<img src="image/Pi200.png" width="205" height="37" onclick="vz()" onmouseover="f200a(this)" onmouseout="f200b(this)"/>';
	document.getElementById('u').innerHTML = '<p style="padding: 0pt 9pt 0pt 13pt;">Настройки</p><div style="height:100pt; background-image:url(image/npar.png); padding-top:20pt; margin-top:15pt" ><table width="500" style="border-collapse: collapse; margin-left:8pt"  cellpadding="0" cellspacing="0" border="1" ><tr style="background-image:url(image/tbgz.png); height:16pt" ><td width="25" align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">№</span></td><td width="337" align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Параметр</span></td><td width="130" align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Значение</span></td></tr><tr style="height:15pt"><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">1</span></td><td align="left" style="padding-left:6pt" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Цена топлива, р./кг</span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="130" align="middle" id="k1" type="text" style="border-style:hidden" onchange="chj()"/></span></td></tr><tr style="height:15pt"><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">2</span></td><td align="left" style="padding-left:6pt" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Часовая заработная плата, р./час</span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="130" align="middle" id="k2" type="text" style="border-style:hidden" onchange="chj()"/></span></td></tr><tr style="height:15pt"><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">3</span></td><td align="left" style="padding-left:6pt" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Кредитная политика банка, %</span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="130" align="middle" id="k3" type="text" style="border-style:hidden" onchange="chj()"/></span></td></tr><tr style="height:15pt"><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">4</span></td><td align="left" style="padding-left:6pt" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Срок кредита, год</span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="130" align="middle" id="k4" type="text" style="border-style:hidden" onchange="chj()"/></span></td></tr><tr style="height:15pt"><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">5</span></td><td align="left" style="padding-left:6pt" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Топливно - эксплуатационный коэффициент, µs</span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="130" align="middle" id="k5" type="text" style="border-style:hidden" onchange="chj()"/></span></td></tr></table></div><div style="padding-top:20pt; background-image:url(image/npar2.png); margin-top:20pt"><table width="500pt" style="border-collapse: collapse; margin-left:8pt"  cellpadding="0" cellspacing="0" border="1" ><tr style="background-image:url(image/tbgz.png); height:16pt" ><td width="25" align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">№</span></td><td width="155" align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Страны</span></td><td width="155" align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Амортизацион. коэф., µт</span></td><td width="155" align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Ремонтный. коэф., µр</span></td></tr><tr style="height:15pt"><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">1</span></td><td align="left" style="padding-left:6pt" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Дальнее зарубежье</span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="155" align="middle" id="k11" type="text" style="border-style:hidden" onchange="chj()"/></span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="155" align="middle" id="k12" type="text" style="border-style:hidden" onchange="chj()"/></span></td></tr><tr style="height:15pt"><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">2</span></td><td align="left" style="padding-left:6pt" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Россия</span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="155" align="middle" id="k21" type="text" style="border-style:hidden" onchange="chj()"/></span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="155" align="middle" id="k22" type="text" style="border-style:hidden" onchange="chj()"/></span></td></tr><tr style="height:15pt"><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">3</span></td><td align="left" style="padding-left:6pt" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif">Ближнее зарубежье</span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="155" align="middle" id="k31" type="text"  style="border-style:hidden" onchange="chj()"/></span></td><td align="center" class=MsoNormal><span style="font-size:9.0pt;font-family:Microsoft Sans Serif"><input width="155" align="middle" id="k32" type="text"  style="border-style:hidden" onchange="chj()"/></span></td></tr></table></div>';
	//alert(111);
	//nj();
	
	var a = sj[0].split('!'); //
	var m = a[0].split('\\');document.getElementById('k1').value = m[1];
	m = a[1].split('\\');document.getElementById('k2').value = m[1];
	m = a[2].split('\\');document.getElementById('k3').value = m[1];
	m = a[3].split('\\');document.getElementById('k4').value = m[1];
	m = a[4].split('\\');document.getElementById('k5').value = m[1];
	
	a = sj[1].split('!');
	m = a[0].split('\\');document.getElementById('k11').value = m[2];document.getElementById('k12').value = m[3];
	m = a[1].split('\\');document.getElementById('k21').value = m[2];document.getElementById('k22').value = m[3];
	m = a[2].split('\\');document.getElementById('k31').value = m[2];document.getElementById('k32').value = m[3];
	
	
	
	//alert(222);
}//Настройки
function Pic4(e){
	var q1 = document.getElementById('p1');if(q1.src.indexOf("image/Pic02.png") > -1){t = document.getElementById('u');pc1 = t.innerHTML;} q1.src = "image/Pic00.png"; 
	var q2 = document.getElementById('p2');if(q2.src.indexOf("image/Pic12.png") > -1){pc2 = ReOne();}; q2.src = "image/Pic10.png"; 
	var q3 = document.getElementById('p3'); q3.src = "image/Pic20.png"; 
	var q4 = document.getElementById('p4'); q4.src = "image/Pic32.png";
	t = document.getElementById('nl');t.innerHTML = 'Графики'; 
	t = document.getElementById('u');t.innerHTML = '<p style="padding: 0pt 9pt 0pt 13pt; ">Графики</p>';t = document.getElementById('Pi');t.innerHTML = '';
}//Графики

function Pic5(e){
	if(document.getElementById('menu2') != null){psg = document.getElementById('menu2').innerHTML;} //Записываем в переменную панель вкладок
	
	var q1 = document.getElementById('p1');q1.src = "image/Pic42.png";
	var q2 = document.getElementById('p2');if(q2.src.indexOf("image/Pic52.png") > -1){t = document.getElementById('u'); pc5 = t.innerHTML;}; q2.src = "image/Pic53.png";
	var q3 = document.getElementById('p3'); q3.src = "image/Pic60.png";
	var q4 = document.getElementById('p4'); q4.src = "image/Pic70.png";	
	t = document.getElementById('nl');t.innerHTML = 'Севооборот';
	
	t = document.getElementById('Pi');t.innerHTML = '<img src="image/Pi400.png" width="205" height="37" onclick="" onmouseover="" onmouseout=""/><img src="image/Pi410.png" width="205" height="37" onclick="" onmouseover="" onmouseout=""/><img src="image/Pi420.png" width="205" height="37" onclick="" onmouseover="" onmouseout=""/>'; //Кнопки левая панель
	
	
	document.getElementById('u').innerHTML = '<div id="box"><h1>Мастер создания технологии</h1><div id="lada"><div id="shi"><form id="aslan" name="formElem" action="" method="post"><fieldset class="sh"><legend>Сведения</legend><p><label for="kult">Возделываемая культура</label><select id="kult" onchange="spk1()" style="width:360px"><option>Бахчевые культуры</option><option>Зерновые культуры</option><option>Кормовые культуры</option><option>Овощные культуры</option><option>Плодовые культуры</option><option>Технические культуры</option></select><select id="kult2" onchange="tehologyname()" style="margin-top:10px; margin-left:235px; width:360px"><option></option></select></p><p><label for="tehname">Наименование технологии</label><input id="tehname" /></p><p><label for="square">Площадь возделывания, Га</label><input id="square" onkeyup="keyview(this)"/></p></fieldset><fieldset class="sh"><legend>Операции<img id="tm1" class="cursor" src="image/master/tmn2.png" style="margin-left:480px" width="13" height="13" title="Традиционная технология" onclick="ftm1()"><img id="tm2" class="cursor" src="image/master/tmn1.png" style="margin-left:30px" width="13" height="13" title="Минимальная технология" onclick="ftm2()"><img id="tm3" class="cursor" src="image/master/tmn1.png" style="margin-left:30px" width="13" height="13" title="Нулевая технология" onclick="ftm3()"></legend><div id="Mst" style="height:505px; display:block; overflow-y:scroll; float:left"><table id="Ms1" class="simple-little-table" cellspacing="0"><tr><th style="padding-left:10px; padding-right:5px">№</th><th width="200px">Операция</th><th>Год</th><th>Дни</th><th>Часы</th><th width="300px">Исходные требования</th></tr><tr><td>1</td><td>100%</td><td>100%</td><td>100%</td><td>100%</td><td>Да</td></tr><tr class="even"><td>2</td><td>100%</td><td>Да</td><td>100%</td><td>100%</td><td>100%</td></tr><tr><td>3</td><td>20%</td><td>Нет</td><td>100%</td><td>100%</td><td>100%</td></tr><tr class="even"><td>4</td><td>80%</td><td>Нет</td><td>100%</td><td>100%</td><td>100%</td></tr><tr><td>5</td><td>100%</td><td>Да</td><td>100%</td><td>100%</td><td>100%</td></tr><tr class="even"><td>6</td><td>23%</td><td>Да</td><td>100%</td><td>100%</td><td>100%</td></tr><tr><td>7</td><td>80%</td><td><a href="blog.harrix.org">Да</a></td><td>100%</td><td>100%</td><td>100%</td></tr><tr class="even"><td>8</td><td>80%</td><td><a href="blog.harrix.org">Да</a></td><td>100%</td><td>100%</td><td>100%</td></tr></table></div></fieldset><fieldset class="sh"><legend>Машины</legend><p><label for="role">Роль пользователя</label><select id="role" name="role"><option>Фермер</option><option>Организация</option><option>Государство</option></select></p><p><label for="company">Организация</label><input id="company" name="company" placeholder="ООО Заря" type="tel" AUTOCOMPLETE=OFF /></p><p><label for="address">Адрес организации</label><input id="address" name="address" placeholder="" type="tel" AUTOCOMPLETE=OFF /></p></fieldset><fieldset class="sh"><legend>Материалы</legend><p><label for="newsletter">Введите код с изображения</label><img id="k" src="javascript:rnd()" onClick="rek()"/></p> <p><label for="tagname">Поле кода</label><input id="tagname" name="tagname" type="text" AUTOCOMPLETE=OFF /></p></fieldset></form></div><div id="favn" style="display:none;"><ul><li class="selected"><a href="#">1. Сведения</a></li><li><a href="#">2. Операции</a></li><li><a href="#">3. Машины</a></li><li><a href="#">4. Материалы</a></li></ul></div></div></div>'; //Записываем html код куда надо)
	$(function() {
		
		/*number of fieldsets*/
		var fieldsetCount = $('#aslan').children().length;
		
		/*current position of fieldset / navigation link*/
		var current 	= 1;
		
		/*sum and save the widths of each one of the fieldsets
		set the final sum as the total width of the steps element*/
		var stepsWidth	= 0;
		var widths 		= new Array();
		$('#shi .sh').each(function(i){
			var $step 		= $(this);
			widths[i]  		= stepsWidth;
			stepsWidth	 	+= $step.width();
		});
		$('#shi').width(stepsWidth);
		
		/*to avoid problems in IE, focus the first input of the form*/
		$('#aslan').children(':first').find(':input:first').focus();	
		
		//show the navigation bar
		$('#favn').show();
		
		/*when clicking on a navigation link 
		the form slides to the corresponding fieldset*/
		$('#favn a').bind('click',function(e){
			var $this	= $(this);
			var prev	= current;
			$this.closest('ul').find('li').removeClass('selected');
			$this.parent().addClass('selected');
			/*
			we store the position of the link
			in the current variable	
			*/
			current = $this.parent().index() + 1;
			/*
			animate / slide to the next or to the corresponding
			fieldset. The order of the links in the navigation
			is the order of the fieldsets.
			Also, after sliding, we trigger the focus on the first 
			input element of the new fieldset
			If we clicked on the last link (confirmation), then we validate
			all the fieldsets, otherwise we validate the previous one
			before the form slided
			*/
			$('#shi').stop().animate({marginLeft: '-' + widths[current-1] + 'px'},500,function(){
				$('#aslan').children(':nth-child('+ parseInt(current) +')').find(':input:first').focus();	
			});
			e.preventDefault();
		});
		
		/*clicking on the tab (on the last input of each fieldset), makes the form
		slide to the next step*/
		$('#aslan > fieldset').each(function(){
			var $fieldset = $(this);
			$fieldset.children(':last').find(':input').keydown(function(e){
				if (e.which == 9){
					$('#favn li:nth-child(' + (parseInt(current)+1) + ') a').click();
					/* force the blur for validation */
					$(this).blur();
					e.preventDefault();
				}
			});
		});
		
		
		
		
	}); //Подключаем все необходимые функции и модули для работы
	$('#k').attr('src', rnd()); //Обновляем картинку


	spk1();
}//Севооборот
function Pic6(e){
	var q1 = document.getElementById('p1');if(q1.src.indexOf("image/Pic42.png") > -1){t = document.getElementById('u');pc5 = t.innerHTML;};q1.src = "image/Pic40.png";
	var q2 = document.getElementById('p2'); q2.src = "image/Pic52.png";
	var q3 = document.getElementById('p3'); q3.src = "image/Pic63.png";
	var q4 = document.getElementById('p4'); q4.src = "image/Pic70.png";
	t = document.getElementById('nl');t.innerHTML = 'Технологии';
	
	t = document.getElementById('Pi');t.innerHTML = '<img src="image/Ti02.png" id="tf0" width="205" height="37" onclick="fn100c(this)" onmouseover="fn100a(this)" onmouseout="fn100b(this)"/><img src="image/Ti10.png" id="tf1" width="205" height="37" onclick="fn110c(this)" onmouseover="fn110a(this)" onmouseout="fn110b(this)"/><img src="image/Ti20.png" id="tf2" width="205" height="37" onclick="fn120c(this)" onmouseover="fn120a(this)" onmouseout="fn120b(this)"/><img src="image/Ti30.png" id="tf3" width="205" height="37" onclick="fn130c(this)" onmouseover="fn130a(this)" onmouseout="fn130b(this)"/><img src="image/Ti40.png" id="tf4" width="205" height="37" onclick="fn140c(this)" onmouseover="fn140a(this)" onmouseout="fn140b(this)"/><img src="image/Ti50.png" id="tf5" width="205" height="37" onclick="fn150c(this)" onmouseover="fn150a(this)" onmouseout="fn150b(this)"/><img src="image/Ti60.png" id="tf6" width="205" height="37" onclick="fn160c(this)" onmouseover="fn160a(this)" onmouseout="fn160b(this)"/>'; //Кнопки левая панель

	//var u = document.getElementById('u');u.innerHTML = '<table id="menu" width="100%" border="0" cellpadding="0" cellspacing="0" style="height:24px"><tr><td id="menu1" style="background-image:url(image/menu.png); width:186px; height:24px"><img id="w1" src="image/j0.png" title="Загрузить технологию" width="23px" height="22px" style="margin: 0px 0px 0px 20px" onmouseover="fp1a(this)" onmouseout="fp1b(this)" onclick="fp1c(this)"/><img id="w2" src="image/j1.png"  title="Расчитать технологию" width="23px" height="22px" style="margin: 0px 0px 0px 7px" onmouseover="fp2a(this)" onmouseout="fp2b(this)" onclick="fp2c(this)"/><img id="w3" src="image/j2.png" title="Очистить технологию" width="23px" height="22px" style="margin: 0px 0px 0px 9px" onmouseover="fp3a(this)" onmouseout="fp3b(this)" onclick="fp3c(this)"/><img id="w4" src="image/j3.png" title="Передать технологию на печать" width="23px" height="22px" style="margin: 0px 0px 0px 10px"  onmouseover="fp4a(this)" onmouseout="fp4b(this)" onclick="fp4c(this)"/><img id="w5" src="image/j4.png" title="Сохранить технологию" width="23px" height="22px" style="margin: 0px 0px 0px 11px" onmouseover="fp5a(this)" onmouseout="fp5b(this)" onclick="fp5c(this)"/></td><td id="menu2" align="left" style="height:24px; margin-left:5px"><input id="b2" type="button" value="." style="border-style:hidden; background-image:url(image/Pl0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)"/><input type="button" value="Технология 1" style="border-style:hidden; background-image:url(image/Pbp3.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 2" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 3" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 4" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 5" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="." style="border-style:hidden; background-image:url(image/Cr0.png); width:26px; height:24px; font-size:10px; color:rgba(255,255,255,0)" onclick="pcr()"/><input type="button" value="." style="border-style:hidden; background-image:url(image/Pr0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)"/></td></tr></table><p style="padding: 0pt 9pt 0pt 33pt; ">Операционная матрица технологий</p><div id="tn" style="background-image:url(image/pnt.png); height:30pt; padding-top:35pt"><table width="761pt" style="border-collapse: collapse; margin-left:6pt" cellpadding="0" cellspacing="0" border="0"><tr><td width="363"><input type="text" id="tx1" style="border-style:hidden; margin:2pt 0pt 0pt 9pt; width:348px; height:15px"/></td><td width="167"><select id="tx2" style="margin:0pt 0pt 0pt 4pt; width:165px" ></select></td><td width="103"><input type="text" id="tx3" style="border-style:hidden; margin:2pt 0pt 0pt 5pt; width:87px; height:15px"/></td><td width="97"><input type="text" id="tx4" style="border-style:hidden; margin:2pt 0pt 0pt 7pt; width:85px; height:15px"/></td></tr></table></div><div id="qt" style="margin: 0px 10px 10px 10px; height:531px; width:766px; display:block; overflow:auto"><table id="Q1" width="1550px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="30px" align="center"></td><td width="25px" align="center">№</td><td width="250" align="center">Операция</td><td width="74" align="center">Год</td><td width="74" align="center">Дни</td><td width="74" align="center">Часы</td><td width="248" align="center">Исходные требования</td><td width="150" align="center">Тип техники</td><td width="120" align="center">Энергосредство</td><td width="20" align="center">№</td><td width="120" align="center">Машина 2</td><td width="20" align="center">№</td><td width="120" align="center">Машина 3</td><td width="20" align="center">№</td><td width="120" align="center">Машина 4</td><td width="20" align="center">№</td><td width="120" align="center">Машина 5</td><td width="20" align="center">№</td></tr><tr height="27px" align="center" onmousedown="selectrow(this)"><td id="ctm" style="background-image:url(image/Aq3.png)" onclick="taddrow(this)"></td><td>44</td><td align="left"><input style=" width:242px; height:16px; border-width:0" /></td><td><select style="width:71px"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" /></td><td><input style="width:142px; height:16px; border-width:0" /></td><td onclick="jk(this)">Энергосредство</td><td></td><td onclick="jk(this)">Машина 1</td><td></td><td onclick="jk(this)">Машина 2</td><td></td><td onclick="jk(this)">Машина 3</td><td></td><td onclick="jk(this)">Машина 4</td><td></td></tr></tbody></table></div>'; //Основное рабочее пространство

	var u = document.getElementById('u');u.innerHTML = '<table id="menu" width="100%" border="0" cellpadding="0" cellspacing="0" style="height:24px"><tr><td id="menu1" style="background-image:url(image/menu.png); width:186px; height:24px"><img id="w1" class="cursor" src="image/j0.png" title="Загрузить технологию" width="23px" height="22px" style="margin: 0px 0px 0px 20px" onmouseover="fp1a(this)" onmouseout="fp1b(this)" onclick="fp1c(this)"/><img id="w2" class="cursor" src="image/j1.png"  title="Расчитать технологию" width="23px" height="22px" style="margin: 0px 0px 0px 7px" onmouseover="fp2a(this)" onmouseout="fp2b(this)" onclick="fp2c(this)"/><img id="w3" class="cursor" src="image/j2.png" title="Очистить технологию" width="23px" height="22px" style="margin: 0px 0px 0px 9px" onmouseover="fp3a(this)" onmouseout="fp3b(this)" onclick="fp3c(this)"/><span rel="#adjust-settings" class="modal-link"><span><img id="w4" src="image/j3.png" title="Передать технологию на печать" width="23px" height="22px" style="margin: 0px 0px 0px 10px"  onmouseover="fp4a(this)" onmouseout="fp4b(this)" onclick="fp4c(this)"/></span></span><img id="w5" class="cursor" src="image/j4.png" title="Сохранить технологию" width="23px" height="22px" style="margin: 0px 0px 0px 11px" onmouseover="fp5a(this)" onmouseout="fp5b(this)" onclick="fp5c(this)"/></td><td id="menu2" align="left" style="height:24px; margin-left:5px"><input id="b2" type="button" value="." style="border-style:hidden; background-image:url(image/Pl0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)"/><input type="button" value="Технология 1" style="border-style:hidden; background-image:url(image/Pbp3.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 2" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 3" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 4" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="Технология 5" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left"/><input type="button" value="." style="border-style:hidden; background-image:url(image/Cr0.png); width:26px; height:24px; font-size:10px; color:rgba(255,255,255,0)" onclick="pcr()"/><input type="button" value="." style="border-style:hidden; background-image:url(image/Pr0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)"/></td></tr></table><p style="padding: 0pt 9pt 0pt 33pt; ">Операционная матрица технологий</p><div id="tn" style="background-image:url(image/pnt.png); height:30pt; padding-top:35pt"><table width="761pt" style="border-collapse: collapse; margin-left:6pt" cellpadding="0" cellspacing="0" border="0"><tr><td width="363"><input type="text" id="tx1" style="border-style:hidden; margin:1pt 0pt 0pt 9pt; width:348px; height:15px" onchange="ret()"/></td><td width="167" style="padding-left:5px"><div id="sorta"><select id="tx2" style="width:173px" class="chzn-select" onchange="chng()" size="11"></select></div></td><td width="103"><input type="text" id="tx3" style="border-style:hidden; margin:1pt 0pt 0pt 5pt; width:87px; height:15px" onchange="ret()"/></td><td width="97"><input type="text" id="tx4" style="border-style:hidden; margin:1pt 0pt 0pt 7pt; width:85px; height:15px" onchange="ret()"/></td></tr></table></div><div id="qt" style="margin: 0px 10px 10px 10px; height:531px; width:766px; display:block; overflow:auto"><table id="Q1" width="1550px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="30px" align="center"></td><td width="25px" align="center">№</td><td width="250" align="center">Операция</td><td width="74" align="center">Год</td><td width="74" align="center">Дни</td><td width="74" align="center">Часы</td><td width="248" align="center">Исходные требования</td><td width="150" align="center">Тип техники</td><td width="120" align="center">Энергосредство</td><td width="20" align="center">№</td><td width="120" align="center">Машина 2</td><td width="20" align="center">№</td><td width="120" align="center">Машина 3</td><td width="20" align="center">№</td><td width="120" align="center">Машина 4</td><td width="20" align="center">№</td><td width="120" align="center">Машина 5</td><td width="20" align="center">№</td></tr><tr height="27px" align="center" onmousedown="selectrow(this)"><td style="background-image:url(image/Aq3.png)" onclick="taddrow(this)" onmouseup="mup(this)"></td><td>1</td><td align="left"><input style=" width:242px; height:16px; border-width:0"  onchange="ret()" /></td><td><select style="width:71px" onchange="ret()"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" onchange="ret()" /></td><td><input style="width:142px; height:16px; border-width:0" onchange="ret()" /></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td></tr></tbody></table></div>'; //Основное рабочее пространство

	psn(); //Загрузка вкладок технологий
	ex(); //Расширяем массив данных
	sorta(); //Создаем список сортов и загружаем выделенную технологию
	upQ1(); //Контекстное меню для первой ячеки
}//Технологии
function Pic7(e){
	if(document.getElementById('menu2') != null){psg = document.getElementById('menu2').innerHTML;} //Записываем в переменную панель вкладок
	
	var q1 = document.getElementById('p1');if(q1.src.indexOf("image/Pic42.png") > -1){t = document.getElementById('u');pc5 = t.innerHTML;};q1.src = "image/Pic40.png";
	var q2 = document.getElementById('p2');if(q2.src.indexOf("image/Pic52.png") > -1){t = document.getElementById('u');pc6 = t.innerHTML;}; q2.src = "image/Pic50.png";
	var q3 = document.getElementById('p3'); q3.src = "image/Pic62.png";
	var q4 = document.getElementById('p4'); q4.src = "image/Pic73.png";
	t = document.getElementById('nl');t.innerHTML = 'Экспорт';
	
	t = document.getElementById('Pi');t.innerHTML = ''; //Кнопки левая панель

}//Экспорт
function Pic8(e){
	if(document.getElementById('menu2') != null){psg = document.getElementById('menu2').innerHTML;} //Записываем в переменную панель вкладок
	
	var q1 = document.getElementById('p1');if(q1.src.indexOf("image/Pic42.png") > -1){t = document.getElementById('u');pc5 = t.innerHTML;}; q1.src = "image/Pic40.png";
	var q2 = document.getElementById('p2');if(q2.src.indexOf("image/Pic52.png") > -1){t = document.getElementById('u');pc6 = t.innerHTML;}; q2.src = "image/Pic50.png";
	var q3 = document.getElementById('p3'); q3.src = "image/Pic60.png";
	var q4 = document.getElementById('p4'); q4.src = "image/Pic72.png";
	t = document.getElementById('nl');t.innerHTML = 'Экономика';
	
	t = document.getElementById('Pi');t.innerHTML = ''; //Кнопки левая панель


}//Графики технологии

//------------------------------------------------Главы главной страницы-----------------------------------------------------

function fog1(){
	var t = document.getElementById('mc');
	t.innerHTML = '<p align="left" style="font-style:bold; font-size:13pt"><b>Фермеру</b></p><p align="left">Сведения о работе МАТЧЭЗ касающиеся направленности непосредственно малого фермерского хозяйства.</p>';
} // Фермеру
function fog2(){
	var t = document.getElementById('mc');
	t.innerHTML = '<p align="left" style="font-style:bold; font-size:13pt"><b>Предприятию</b></p><p align="left">Сведения о работе МАТЧЭЗ касающиеся направленности средних и крупных сельскохозяйственных организаций.</p>';
} // Предприятию
function fog3(){
	var t = document.getElementById('mc');
	t.innerHTML = '<p align="left" style="font-style:bold; font-size:13pt"><b>Государству</b></p><p align="left">Сведения о работе МАТЧЭЗ касающиеся направленности государственных задач и результатов в области сельского хозяйства на уровне поселка, района, области, страны.</p>';
} // Государству

function mac1(){
	
	var t = document.getElementById('mc');
	t.innerHTML = '<p align="left" style="font-style:bold; font-size:13pt"><b>Государству</b></p><p align="left">Сведения о работе МАТЧЭЗ касающиеся направленности государственных задач и результатов в области сельского хозяйства на уровне поселка, района, области, страны.</p>';
	
	if(document.getElementById('mbox').style.display == 'none'){
		$("#mbox").fadeIn();
		document.getElementById('mbox2').style.display = 'none';
		document.getElementById('mbox4').style.display = 'none';
		document.getElementById('mbox6').style.display = 'none';
		//$("#mbox2").fadeOut();
		//$("#mbox4").fadeOut();
		//$("#mbox6").fadeOut();
	}
	else{
		$("#mbox").fadeOut();
	}
	
	
	
} // Администрация
function mac2(){
	
	var t = document.getElementById('mc');
	t.innerHTML = '<p align="left" style="font-style:bold; font-size:13pt"><b>Государству</b></p><p align="left">Сведения о работе МАТЧЭЗ касающиеся направленности государственных задач и результатов в области сельского хозяйства на уровне поселка, района, области, страны.</p>';
	
	if(document.getElementById('mbox2').style.display == 'none'){
		$("#mbox2").fadeIn();
		document.getElementById('mbox').style.display = 'none';
		document.getElementById('mbox4').style.display = 'none';
		document.getElementById('mbox6').style.display = 'none';
		//$("#mbox").fadeOut();
		//$("#mbox4").fadeOut();
		//$("#mbox6").fadeOut();
	}
	else{
		$("#mbox2").fadeOut();
	}
	
	
	
} // Методическая основа
function mac4(){
	
	var t = document.getElementById('mc');
	t.innerHTML = '<p align="left" style="font-style:bold; font-size:13pt"><b>Государству</b></p><p align="left">Сведения о работе МАТЧЭЗ касающиеся направленности государственных задач и результатов в области сельского хозяйства на уровне поселка, района, области, страны.</p>';
	
	if(document.getElementById('mbox4').style.display == 'none'){
		$("#mbox4").fadeIn();
		document.getElementById('mbox').style.display = 'none';
		document.getElementById('mbox2').style.display = 'none';
		document.getElementById('mbox6').style.display = 'none';
		//$("#mbox").fadeOut();
		//$("#mbox2").fadeOut();
		//$("#mbox6").fadeOut();
	}
	else{
		$("#mbox4").fadeOut();
	}
	
	
	
} // Новости
function mac6(){
	
	var t = document.getElementById('mc');
	t.innerHTML = '<p align="left" style="font-style:bold; font-size:13pt"><b>Государству</b></p><p align="left">Сведения о работе МАТЧЭЗ касающиеся направленности государственных задач и результатов в области сельского хозяйства на уровне поселка, района, области, страны.</p>';
	
	if(document.getElementById('mbox6').style.display == 'none'){
		//document.getElementById('mpart6').innerHTML = '<font color="#00CC00">Полезные ссылки</font>';
		$("#mbox6").fadeIn();
		document.getElementById('mbox').style.display = 'none';
		document.getElementById('mbox2').style.display = 'none';
		document.getElementById('mbox4').style.display = 'none';
	}
	else{
		//document.getElementById('mpart6').innerHTML = 'Полезные ссылки';
		$("#mbox6").fadeOut();
	}
	
	
	
} // Полезные ссылки




function mcont(){
	var t = document.getElementById('mc');
	t.innerHTML = '<p align="left" style="font-style:bold; font-size:13pt"><b>Контактная информация</b></p><p align="left" >Россия, 446442, Самарская обл., г. Кинель, п. Усть-Кинельский, ул. Шоссейная, 82.</br>  тел.: (846-63)46-1-43</br>факс: (846-63)46-4-89</br>e-mail: <a href="mailto:povmis2003@mail.ru">povmis2003@mail.ru</a></p>';
} //Контактная информация


//---------------------------------------------------Мастер технологий-------------------------------------------------------




// 2. Операции
var msq = new Array(); // Массив хранения технологий во вкладке операций
var msq1 = new Array(); // Массив Операций
var msq2 = new Array(); // Массив Машин
var msq3 = new Array(); // Массив Материалов




function msqx(){
	var k0 = 'Внесение удобрений`Подготовка семян`Посев`Уход за посевом';
	var k1 = document.getElementById('Op20');
	var k2 = document.getElementById('Op60');
	var k3;	if(k2.innerHTML.indexOf('>Материалы<') > -1){k3 = true;}else{k3 = false;};
	
	if(k1.innerHTML.indexOf('<input id="Op2"') > -1 || k2.innerHTML.indexOf('<input id="Op6"') > -1){
		if(k3 == false){
			var t = document.getElementById('Op1');
			if(k0.indexOf(t.value) > -1 && t.value != ''){
				if(k2.innerHTML.indexOf('mse.png') > -1){
					document.getElementById('Op60').innerHTML = '<label for="Op6">Исходные требования</label><select id="Op6" style="width:361px" onchange="fOp6()"><option></option></select><img id="Op61" class="cursor" src="image/master/mse.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/><label for="Op7" style="margin-top:10px">Материалы</label><input id="Op7" type="text" style="width:165px; margin-top:10px" placeholder="Пример: Нитроаммофоска"/><input id="Op8" type="text" style="width:70px; margin-left:10px; margin-top:10px" placeholder="кг на 1Га"/><input id="Op9" type="text" style="width:70px; margin-left:10px; margin-top:10px" placeholder="руб. за 1 кг"/>';
				}
				else{
					document.getElementById('Op60').innerHTML = '<label for="Op6">Исходные требования</label><input id="Op6" type="text" /><img id="Op61" class="cursor" src="image/master/mss.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/><label for="Op7" style="margin-top:10px">Материалы</label><input id="Op7" type="text" style="width:165px; margin-top:10px" placeholder="Пример: Нитроаммофоска"/><input id="Op8" type="text" style="width:70px; margin-left:10px; margin-top:10px" placeholder="кг на 1Га"/><input id="Op9" type="text" style="width:70px; margin-left:10px; margin-top:10px" placeholder="руб. за 1 кг"/>';
				}
			}
			else{
				if(k2.innerHTML.indexOf('mse.png') > -1){
					document.getElementById('Op60').innerHTML = '<label for="Op6">Исходные требования</label><select id="Op6" style="width:361px" onchange="fOp6()"><option></option></select><img id="Op61" class="cursor" src="image/master/mse.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/>';
				}
				else{
					document.getElementById('Op60').innerHTML = '<label for="Op6">Исходные требования</label><input id="Op6" type="text" /><img id="Op61" class="cursor" src="image/master/mss.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/>';
				}
			}
		}
		if(k3 == true){
			var t = document.getElementById('Op1');
			if(k0.indexOf(t.value) > -1){
				if(t.value == ''){
					var a = k2.innerHTML.split('><label');
					var q = a[0] + '>';
					document.getElementById('Op60').innerHTML = q; 
				}
			}
			else{
				if(k2.innerHTML.indexOf('mse.png') > -1){
					document.getElementById('Op60').innerHTML = '<label for="Op6">Исходные требования</label><select id="Op6" style="width:361px" onchange="fOp6()"><option></option></select><img id="Op61" class="cursor" src="image/master/mse.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/>';
				}
				else{
					document.getElementById('Op60').innerHTML = '<label for="Op6">Исходные требования</label><input id="Op6" type="text" /><img id="Op61" class="cursor" src="image/master/mss.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/>';
				}
			}
		}
	}
	else{
		if(k3 == true){
			document.getElementById('Op60').innerHTML = '<label for="Op6">Исходные требования</label><select id="Op6" style="width:361px" onchange="fOp6()"><option></option></select><img id="Op61" class="cursor" src="image/master/mse.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/>';
		}
	}
} // Функция анализа условий отображения списка или текстового поля в win2
function rm(){
	if(document.getElementById('tm1').src.indexOf('tmn2.png') > -1){return 0}
	if(document.getElementById('tm2').src.indexOf('tmn2.png') > -1){return 1}
	if(document.getElementById('tm3').src.indexOf('tmn2.png') > -1){return 2}
} // Функция определения типа технологии (Традиционная минимальная или нулевая 0, 1, 2)
function fOp6(){
	var k = document.getElementById('Op6'); k.title = k.value;
} // Функция добавления подписи к полю со списком
function msb11(){
	document.getElementById('msb1').src = "image/master/msk31.png";
}
function msb10(){
	document.getElementById('msb1').src = "image/master/msk30.png";
}
function msb21(){
	document.getElementById('msb2').src = "image/master/msk21.png";
}
function msb20(){
	document.getElementById('msb2').src = "image/master/msk20.png";
}
function msb31(){
	document.getElementById('msb3').src = "image/master/msk11.png";
}
function msb30(){
	document.getElementById('msb3').src = "image/master/msk10.png";
}
function msb41(){
	document.getElementById('msb4').src = "image/master/msb41.png";
}
function msb40(){
	document.getElementById('msb4').src = "image/master/msb40.png";
}
function msb51(){
	document.getElementById('msb5').src = "image/master/msb51.png";
}
function msb50(){
	document.getElementById('msb5').src = "image/master/msb50.png";
}
function msb61(){
	document.getElementById('msb6').src = "image/master/msb61.png";
}
function msb60(){
	document.getElementById('msb6').src = "image/master/msb60.png";
} // Группа функций смены изображений кнопок Окна редактирования сведений о технологии в Мастере технологий
function fnOp2(d){
	
	//if(document.getElementById('Op2').value == ''){
	//	document.getElementById('Op6').innerHTML = '';
	//}
	//else{
		var a = d.split('!'); var b; var c; var r='';
		
		for(var i = 0; i < a.length; i++){
			b = a[i].split('|');
			c = b[3].split('$');
			r += c[5] + '`';
		}
		
		var a = r.split('`'); 
		a = a.sort(function (x,y) {return x > y ? 1 : (x < y ? -1 : 0);});
		a = usq(a); a = a.join('$').split(/\s/).join(' ').split('$');// Функция удаления всех лишних пробелов в строке
		
		var p = document.getElementById('Op60');
		if(p.innerHTML.indexOf('<select') > -1){
			var k = document.getElementById('Op6'); k.innerHTML = '<option></option>';
			for(var i = 0; i < a.length; i++){
				k.options[i] = new Option(a[i], a[i]);
			}
		}
	//}
} // Функция заполнения списка исходных требьований значениями
function fOp2(){
	var r = document.getElementById('Op1').value + '`' + document.getElementById('Op2').value + '`%';
	if(document.getElementById('Op2').value.length < 1){var r = document.getElementById('Op1').value + '`%`%';};
	getAjax('Tmso.php?r=' + encodeURIComponent(r),fnOp2);
} // Стартовая функция заполнения списка исходных требований
function uss(x,y) {
 //a = a.sort(function (x,y) {return x > y ? 1 : (x < y ? -1 : 0);});
 //return x > y ? 1 : (x < y ? -1 : 0);
} // Сортировка строк в массиве
function usq(A){
	var n = A.length, t = A[0];
  
    for (var i=1, j=1; i<n; i++) 
     { if (t !== A[ i ])
       { A[j++] = A[ i ]; t = A[ i ]; }
     }
    A.length = j;
                                    // На выходе массив A без
    return A;                       // повторяющихся элементов.	
} // Функция отбора уникальных значений отсортированного массива
function fnOp1(d){
	
	if(document.getElementById('Op1').value == ''){
		document.getElementById('Op2').innerHTML = '';
	}
	else{
		var a = d.split('!'); var b; var c; var r='';
		
		for(var i = 0; i < a.length; i++){
			b = a[i].split('|');
			c = b[3].split('$');
			r += c[1] + '`';
		}
		
		var a = r.split('`'); 
		a = a.sort(function (x,y) {return x > y ? 1 : (x < y ? -1 : 0);});
		a = usq(a); a = a.join('$').split(/\s/).join(' ').split('$');// Функция удаления всех лишних пробелов в строке
		
		var p = document.getElementById('Op20');
		if(p.innerHTML.indexOf('<select') > -1){
			var k = document.getElementById('Op2'); k.innerHTML = '<option></option>';
			for(var i = 1; i < a.length; i++){
				k.options[i] = new Option(a[i], a[i]);
			}
		}
	}
	msqx();
} // Функция заполнения списка Операций значениями
function fOp1(){
	var r = document.getElementById('Op1').value + '`%`%';
	getAjax('Tmso.php?r=' + encodeURIComponent(r),fnOp1);
} // Стартовая функция формирования списка операций
window.onkeyup = function(e){
	if(e.keyCode == 116){
		window.location.href = "#";
	}
} // Функция очищающая основное окно от модальных оконо при обновлении страницы
function msit(){
	var t = document.getElementById('Op60');
	if(t.innerHTML.indexOf('Исходные требования</label><input') > -1){
		t.innerHTML = '<label for="Op6">Исходные требования</label><select id="Op6" style="width:361px" onchange="fOp6()"><option></option></select><img id="Op61" class="cursor" src="image/master/mse.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/>';
		msqx();
		fOp2();
	}
	else{
		t.innerHTML = '<label for="Op6">Исходные требования</label><input id="Op6" type="text" /><img id="Op61" class="cursor" src="image/master/mss.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msit()"/>';
		msqx();
	}
} // Функция представления исходных требований в виде списка или текстового поля
function msop(){
	var t = document.getElementById('Op20');
	if(t.innerHTML.indexOf('<input') > -1){
		t.innerHTML = '<label for="Op2">Операция</label><select id="Op2" style="width:361px" onchange="fOp2()"><option></option></select><img id="Op21" class="cursor" src="image/master/mse.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msop()">';
		msqx();
		fOp1();
	}
	else{
		if(document.getElementById('Op1').value != ''){
			t.innerHTML = '<label for="Op2">Операция</label><input id="Op2" type="text" /><img id="Op21" class="cursor" src="image/master/mss.png" style="margin-left:13px; margin-top:3px" width="20px" height="20px" onclick="msop()">';
			msqx();
			fOp2();
		}
		else{
			alert('Для создания своей операции сначала нужно выбрать технологический модуль в который входит вновь создаваемая операция.');
		}
	}
} // Функция представления операции в виде списка или текстового поля
function rio(k){
	window.location.href = "#win2";
	msq[4] = k.rowIndex;
	ahrio(k.rowIndex);
} // Отображение окна Редактирования сведений о технологии
function ahrio(k){
	
	//0. Очищаем все поля
	document.getElementById('Op1').selectedIndex = 0;
	document.getElementById('Op2').innerHTML = '';
	document.getElementById('Op3').selectedIndex = 0;
	document.getElementById('Op4').selectedIndex = 0;
	document.getElementById('Op5').selectedIndex = 0;
	document.getElementById('Op6').innerHTML = '';
	
	//3. Год
	document.getElementById('Op3').value = msq1[k-1][3];
	
	//4. Дни
	document.getElementById('Op4').value = msq1[k-1][4];
	
	//5. Часы
	document.getElementById('Op5').value = msq1[k-1][5];
	
	//1. Технологический модуль
	document.getElementById('Op1').value = msq1[k-1][0][0];
	Ops21();
	
} // Автоматическое заполнение окна элементами выбранной строки в Операциях
function Ops21(){
	var r = document.getElementById('Op1').value + '`%`%';
	getAjax('Tmso.php?r=' + encodeURIComponent(r),Ops22);
} // Автоматическое заполнение окна список Операции стартовая
function Ops22(d){
	if(document.getElementById('Op1').value == ''){
		document.getElementById('Op2').innerHTML = '';
	}
	else{
		var a = d.split('!'); var b; var c; var r='';
		
		for(var i = 0; i < a.length; i++){
			b = a[i].split('|');
			c = b[3].split('$');
			r += c[1] + '`';
		}
		
		var a = r.split('`'); 
		a = a.sort(function (x,y) {return x > y ? 1 : (x < y ? -1 : 0);});
		a = usq(a); a = a.join('$').split(/\s/).join(' ').split('$');// Функция удаления всех лишних пробелов в строке
		
		var p = document.getElementById('Op20');
		if(p.innerHTML.indexOf('<select') > -1){
			var k = document.getElementById('Op2'); k.innerHTML = '<option></option>';
			for(var i = 1; i < a.length; i++){
				k.options[i] = new Option(a[i], a[i]);
			}
		}
	}
	msqx();
	document.getElementById('Op2').value = msq1[parseInt(msq[4])-1][2]; //2. Операция
	Ops61();
} // Автоматическое заполнение окна список Операции Завершающая
function Ops61(){
	var r = document.getElementById('Op1').value + '`' + document.getElementById('Op2').value + '`%';
	if(document.getElementById('Op2').value.length < 1){var r = document.getElementById('Op1').value + '`%`%';};
	getAjax('Tmso.php?r=' + encodeURIComponent(r),Ops62);
} // Автоматическое заполнение окна список Исходные требовния стартовая
function Ops62(d){
	
	var a = d.split('!'); var b; var c; var r='';
	
	for(var i = 0; i < a.length; i++){
		b = a[i].split('|');
		c = b[3].split('$');
		r += c[5] + '`';
	}
	
	var a = r.split('`'); 
	a = a.sort(function (x,y) {return x > y ? 1 : (x < y ? -1 : 0);});
	a = usq(a); a = a.join('$').split(/\s/).join(' ').split('$');// Функция удаления всех лишних пробелов в строке
	
	var p = document.getElementById('Op60');
	if(p.innerHTML.indexOf('<select') > -1){
		var k = document.getElementById('Op6'); k.innerHTML = '<option></option>';
		for(var i = 0; i < a.length; i++){
			k.options[i] = new Option(a[i], a[i]);
		}
	}
	
	//6. Исходные требования
	document.getElementById('Op6').value = msq1[parseInt(msq[4])-1][6];
	
} // Автоматическое заполнение окна список Исходные требования завершающая
function ftm1(){
	var q1 = document.getElementById('tm1'); q1.src = "image/master/tmn2.png";
	var q2 = document.getElementById('tm2'); q2.src = "image/master/tmn1.png";
	var q3 = document.getElementById('tm3'); q3.src = "image/master/tmn1.png";
	
	Mls('t');
} // Операции Традиционная технология рисунок
function ftm2(){
	var q1 = document.getElementById('tm1'); q1.src = "image/master/tmn1.png";
	var q2 = document.getElementById('tm2'); q2.src = "image/master/tmn2.png";
	var q3 = document.getElementById('tm3'); q3.src = "image/master/tmn1.png";
	
	Mls('m');
} // Операции Минимальная технология рисунок
function ftm3(){
	var q1 = document.getElementById('tm1'); q1.src = "image/master/tmn1.png";
	var q2 = document.getElementById('tm2'); q2.src = "image/master/tmn1.png";
	var q3 = document.getElementById('tm3'); q3.src = "image/master/tmn2.png";
	
	Mls('z');
} // Операции Нулевая технология рисунок
function cht(n){
	if(n%2==0){return true;}
	else{return false;}
} // Функция определения четное нечетное число
function AddMs1(){	//alert(111);

	var t = document.getElementById('Ms1');
	var a = t.innerHTML.split('</tr>');

	if(cht(a.length) == true){
		t.insertRow(t.rows.length);
		t.rows[t.rows.length-1].setAttribute('onclick','rio(this)');
		t.rows[t.rows.length-1].setAttribute('class','cursor');
		t.rows[t.rows.length-1].innerHTML = '<td align="center"></td><td align="left"></td><td></td><td></td><td></td><td align="left"></td>';
	}
	else{
		t.insertRow(t.rows.length);
		t.rows[t.rows.length-1].setAttribute('class','even');
		t.rows[t.rows.length-1].setAttribute('onclick','rio(this)');
		t.rows[t.rows.length-1].innerHTML = '<td align="center"></td><td align="left"></td><td></td><td></td><td></td><td align="left"></td>';
	}
	
	//nMs1();
} // Добавление строк в таблицу Операций в Мастере технологий
function nMs1(){
	var t = document.getElementById('Ms1');
	for(var i = 1; i < t.rows.length; i++){t.rows[i].cells[0].innerHTML = i;}
} // Функция нумерации таблицы Операций Мастера технологий
function MLoad(d){
	var a = d.split('!'); var m = a[0].split('|');
	 
	msq1 = []; msq1 = []; msq2 = []; msq3 = [];
	
	if(m[2] == 't'){msq[1] = []; msq[1] = d; msr(1); mst();}; 
	if(m[2] == 'm'){msq[2] = []; msq[2] = d; msr(2); mst();}; 
	if(m[2] == 'z'){msq[3] = []; msq[3] = d; msr(3); mst();}; // Заполняем массив технлогиями

} // Функция загрузки технологической схемы в таблицу операций
function msr(k){
	var a = msq[k].split('!');
	
	for(var i = 0; i < a.length; i++){msq1[i] = []; msq2[i] = []; msq3[i] = [];
		m = a[i].split('|'); var m1 = m[3].split('$'); var m2 = m[4].split('$'); var m3 = m[5].split('$');
		
		msq1[i][0] = [m[0], m[1], m[2]];
		for(var j = 0; j < m1.length; j++){
			msq1[i][j+1] = m1[j];
		}
		
		msq2[i][0] = [m[0], m[1], m[2]];
		for(var j = 0; j < m2.length; j++){
			msq2[i][j+1] = m2[j];
		}
		
		msq3[i][0] = [m[0], m[1], m[2]];
		for(var j = 0; j < m3.length; j++){
			msq3[i][j+1] = m3[j];
		}
	}
	
} // Функция развертывания технологии в массивы
function mst(){


	var a = msq1;
	// 1. Матрица Операций
	document.getElementById('Mst').innerHTML = '<table id="Ms1" class="simple-little-table" cellspacing="0"><tr><th style="padding-left:10px; padding-right:5px">№</th><th width="200px">Операция</th><th>Год</th><th>Дни</th><th>Часы</th><th width="300px">Исходные требования</th></tr></table>';
	var t = document.getElementById('Ms1');
	for(var i = 0; i < a.length; i++){AddMs1();
		for(var j = 0; j < 6; j++){
			t.rows[i+1].cells[j].innerHTML = a[i][j+1];
		}
	}
	
	
	// 2. Матрица Машин
	var a = msq2;
	
	
	
	// 3. Матрица Материалов
	var a = msq3;
	
	
	
} // Функция переноса значений в таблицы Мастера технологий
// 1. Сведения
function Mls(d){
	var r = document.getElementById('kult').value + '`' + document.getElementById('kult2').value + '``' + d;
	getAjax('Tmaster.php?r=' + encodeURIComponent(r),MLoad);
} // Запрос на выбор технологической схемы выбранной культуры во вкладке Сведения Мастера технологий
function keyview(input){
	//ch = input.value.replace(/[^\d.]/g, ''); //разрешаем вводить только числа и точку
	ch = input.value.replace(/[^\d]/g, ''); //разрешаем вводить только числа
    pos = ch.indexOf('.'); // проверяем, есть ли в строке запятая
    if(pos != -1){ // если запятая есть
        if((ch.length-pos)>3){ // проверяем, сколько знаков после точки, если больше 2го то
            ch = ch.slice(0, -1); // удаляем лишнее
        }
    }
    input.value = ch; // приписываем в инпут новое значение
} // Функция ввода только цифр во вкладке Сведения Мастера технологий
function tehologyname(){
	var t = document.getElementById('kult2').value;
	if(t != ''){
		document.getElementById('tehname').value = t + '. Традиционная технология.';
		Mls('t');
	}
	else{
		document.getElementById('tehname').value = '';
	}
} // Функция автоматического заполнения названия технологии во вкладке Сведения мастера технологий
function spk1(){
	document.getElementById('tehname').value = '';
	getAjax('sorta.php',spk2);
	Mls('t');
} // Стартовая функция отображения культур в мастере технологий
function spk2(d){
	
	var a = d.split('|'); var m; var c=''; var w='';
	var b = document.getElementById('kult').value; 
	
	//Формируем список культур
	for(var i = 0; i < a.length; i++){m = a[i].split('\\');
		if(m[0] == b && c.indexOf(m[1]) < 0){c+=m[1]+'|';
			w+=m[1]+'|';
		}
	}; w = w.substr(0, w.length - 1);
	
	//Сортируем массив уникальных значений
	m = w.split('|'); m = m.sort(function(x,y) {return x > y ? 1 : (x < y ? -1 : 0);});
	
	//Заполняем список значениями
	var k = document.getElementById('kult2'); k.innerHTML = '';
	k.options[0] = new Option('');
	for(var i = 0; i < m.length; i++){
		k.options[i+1] = new Option(m[i]);
	}
	
} // Функция заполнения списка культур значениями в мастере технологий во вкладке Сведения


//--------------------------------------------------------Форум--------------------------------------------------------------

function frm(){
	window.open('forum/index.php', '', '', true);
} //Кнопачка Форум

//----------------------------------------------Загрузить технологию---------------------------------------------------------

var teh='';//Переменная хранения службы технологии
var tg = new Array(); // Массив хранения технологий в загрузке технологии
function tload(){
	teh = document.getElementById('u').innerHTML; teh = teh.replace('j01.png','j0.png');
	document.getElementById('u').innerHTML = '<img src="image/mnu.png" width="787" height="24"/><p style="padding: 0pt 9pt 0pt 33pt; ">Выбор технологии</p><div id="tload" style="margin-left:10px; height:617px; width:768px"><table width="768px" height="620px" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse"><tr height="29px" style="background-image:url(image/tbgz.png)"><td colspan="2"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" style="font-size:12px; font-family:Microsoft Sans Serif; border-collapse:collapse"><tr><td width="257px" align="left" style="padding-left:15px">Выбор культуры</td><td width="458px" align="left" style="padding-left:15px">Выбор технологии</td><td width="50px"><img class="cursor" src="image/btn21.png" width="36" height="15" style="margin-left:5px; margin-top:2px" onmouseover="ft01(this)" onmouseout="ft02(this)" onclick="tehs()"/></td></tr></table></td></tr><tr><td width="250px"  valign="top" style="padding-top:10px;padding-left:7px"><div id="tree" style="height:569px; width:243px; overflow-y:scroll; display:block;"></div></td><td width="515px" valign="top"><table width="515" border="1" cellpadding="0" cellspacing="0" style="font-size:12px; font-family:Microsoft Sans Serif; border-collapse:collapse"><tr height="25px"  style="background-image:url(image/shp.png)"><td width="25px" align="center">№</td><td width="100px" align="center">Шифр</td><td width="390px" align="center">Наименование технологии</td></tr></table><div style="width:515px; display:block; height:553px; overflow-y:scroll;"><table id="teh" width="495" border="1" cellpadding="0" cellspacing="0" style="font-size:12px; font-family:Microsoft Sans Serif; border-collapse:collapse"></table></div></td></tr></table></div>';
	getAjax('sorta.php',tree); //Запуск функции формирония дерева культур
	getAjax('tg.php?r=%!%!%`'+encodeURIComponent(uin),tag); //Запуск функции формирония полного списка технологий

} //Показа панели выбора сельскохозяйственной технологии
function tree(w){//alert(d);
	var t = document.getElementById('tree');var a = w.split('|');var c = w.split('|');var e = w.split('|');
	var m = a[0].split('[\]');var r;var b;var n = 0; var l = 0; var j = 0; var x = 0; var y = 0; var zm = 0; var zs = 0;
	var s = '';
	
	d = new dTree('d');
	d.add(0,-1, '<a href="#" class="node" onclick="nd(this)">Отобразить развернутое</a>');
	
	for(var i = 0; i < a.length; i++){m = a[i].split('\\');
		for(var j = 0; j < c.length; j++){r = c[j].split('\\');
			if(r[0] == m[0]){
				if(s.indexOf(r[0]) < 0){
					n=0; l+=1; s += '<optgroup label="`">'.replace('`', r[0]);
					y += 1; x = 0; zm = y; d.add(y, x, r[0]);
				}
				if(s.indexOf(r[1]) < 0){
					j=0; n+=1; s += '<option>`</option>'.replace('`',l + '.' + n + '. ' + r[1]);
					y += 1; x = 0; zs = y; d.add(y, zm, r[1]);
					for(var k = 0; k < e.length; k++){b = e[k].split('\\');
						if(b[0] == r[0] && b[1] == r[1]){j+=1;
							s += '<option>`</option>'.replace('`',l + '.' + n + '.' + j + '. ' + b[2]);
							y += 1; 
							d.add(y, zs, '<a href="#" class="node" onclick="trel(this)">'+b[2]+'</a>');	
						}
					}
				}
			}
		}
	}
	//d.closeAll();
	document.getElementById('tree').innerHTML = d; 
	
} //Функция формирования дерева культур
function tehs(){
	document.getElementById('u').innerHTML = teh;
	document.getElementById('sorta').innerHTML = srta; spis();
	ext();
} //Функция показа службы Технологии
function addteh(){
	var t = document.getElementById('teh');
	
	t.insertRow(t.rows.length);
	t.rows[t.rows.length-1].setAttribute('height','23');
	t.rows[t.rows.length-1].setAttribute('onmouseover','tgd(this)');
	t.rows[t.rows.length-1].setAttribute('onmouseout','tgo(this)');
	t.rows[t.rows.length-1].setAttribute('onclick','tgl(this)');
	t.rows[t.rows.length-1].setAttribute('class','cursor');
	t.rows[t.rows.length-1].innerHTML = '<td width="25px" align="center"></td><td width="100px" align="center"></td><td width="371px" style="padding-left:7px;"></td>';
	
	nt();
} //Функция добавления строк в таблицу технологий при загрузке технологий
function nt(){
	var t = document.getElementById('teh');
	for(var i = 0; i < t.rows.length; i++){
		t.rows[i].cells[0].innerHTML = i+1;	
	}
}	//Функция нумерации таблицы технологий
function tag(w){//alert(w);
	document.getElementById('teh').innerHTML = '';
	if(w != ''){
		var k = w.split('`'); tg = new Array(); tg = w.split('`');var a; var m;
		for(var i = 0; i < k.length; i++){a = k[i].split('|'); m = a[0].split('$');
			addteh();
			var t = document.getElementById('teh');
			t.rows[t.rows.length-1].cells[1].innerHTML = m[0];
			t.rows[t.rows.length-1].cells[2].innerHTML = m[1];
		}
		nt();
	}
} //Массив технологий выгруженный из базы
function trel(o){
	var r = o.parentNode.parentNode.parentNode.parentNode.innerHTML;
	var n = o.parentNode.innerHTML.split('id='); var s = n[1].substring(1, n[1].indexOf(' ') - 1);
	var c; var h; var w = new Array();
	var m = r.split(['(this)']); var a;
	for(var i = 0; i < m.length; i++){//alert(m[i]);
		if(m[i].indexOf('d.o') > 0){
			c = m[i].split(['d.o']); //alert(c.length);
			if(c.length > 4){
				w[0] = c[2].substring(c[2].indexOf('>') + 1, c[2].indexOf('<'));
				w[1] = c[4].substring(c[4].indexOf('>') + 1, c[4].indexOf('<'));
				//alert(w[0] + '\\' + w[1]);
			}
			if(c.length < 4){
				w[1] = c[2].substring(c[2].indexOf('>') + 1, c[2].indexOf('<'));
				//alert(w[0] + '\\' + w[1]);
			}
		}
		if(m[i].indexOf(s) > -1){
			w[2] = o.innerHTML; 
			h = w[0] + '!' + w[1] + '!' + w[2];
			break;
		}
	}
	//alert(h);
	getAjax('tg.php?r='+encodeURIComponent(h+'`'+uin),tag); //Запуск функции формирония списка технологий

} //Функция получения пути сорта и отправки его на сервер для нового скл запроса
function tgd(o){
	o.style.backgroundColor = '#ffdead';
} //Выделение строки на наведение
function tgo(o){
	o.style.backgroundColor = '#ffffff';
} //Снятие выделения на отведение
function tgl(o){//alert(o.rowIndex);
	var str = tg[o.rowIndex]; var r; tehs();
	
	for(var i = 1; i < ps.length-2; i++){r = tv[i];
		if(r != undefined){
			r = r.split('|'); r = r.join('');
			r = r.split('$'); r = r.join('');
			r = r.split('!'); r = r.join('');
			r = r.replace('Семена,  кг/га', '');
			r = r.replace('Минеральные удобрения', '');
			r = r.replace('Химические  средства защиты растений', '');
			r = r.replace('undefined', '');
			
			if(r.length < 1){
				var s = ps.join('$');s = s.replace('Pbp3','Pbp0');ps = s.split('$');//Обнуляем вкладоки в массиве
				for(var k = 1; k < ps.length; k++){
					if(ps[k].indexOf('Технология ' + i + '"') < 0){ps[k] = ps[k].replace('Pbp3','Pbp0')}
					else{ps[k] = ps[k].replace('Pbp0','Pbp3')}
				}
			
				s = document.getElementById('menu2').innerHTML; var a = s.split(['>']);
				for(var k = 0; k < a.length-1; k++){a[k] += '>'};
				for(var k = 1; k < 7; k++){
					if(a[k].indexOf('Технология ' + i + '"') < 0){a[k] = a[k].replace('Pbp3','Pbp0')}
					else{a[k] = a[k].replace('Pbp0','Pbp3')}
				}
				psg = a.join('');
				document.getElementById('menu2').innerHTML = a.join('');
				tv[ip()] = str;
				sq();//Разворачивание технологии в массив и затем в таблицы
				break;
			}
			
			if(i == ps.length-3 && r.length > 1){
				pcr();
				
				var q = parseInt(i) + 1;
				var s = ps.join('$');s = s.replace('Pbp3','Pbp0');ps = s.split('$');//Обнуляем вкладоки в массиве
				for(var k = 1; k < ps.length; k++){
					if(ps[k].indexOf('Технология ' + q + '"') > -1){ps[k] = ps[k].replace('Pbp0','Pbp3');}
				}
			
				s = document.getElementById('menu2').innerHTML; var a = s.split(['>']);
				for(var k = 0; k < a.length-1; k++){a[k] += '>'};//формируем массив тегов кнопок
				s = a.join('$');s = s.replace('Pbp3','Pbp0');a = s.split('$');
				for(var k = 1; k < a.length; k++){
					if(a[k].indexOf('Технология ' + q + '"') > -1){a[k] = a[k].replace('Pbp0','Pbp3');}
				}
				
				psg = a.join('');
				document.getElementById('menu2').innerHTML = a.join('');
				tv[ip()] = str;
				sq();//Разворачивание технологии в массив и затем в таблицы
				break;
			}
			
		}
		else{
			var s = ps.join('$');s = s.replace('Pbp3','Pbp0');ps = s.split('$');//Обнуляем вкладоки в массиве
			for(var k = 1; k < ps.length; k++){
				if(ps[k].indexOf('Технология ' + i + '"') < 0){ps[k] = ps[k].replace('Pbp3','Pbp0')}
				else{ps[k] = ps[k].replace('Pbp0','Pbp3')}
			}
		
			s = document.getElementById('menu2').innerHTML; var a = s.split(['>']);
			for(var k = 0; k < a.length-1; k++){a[k] += '>'};
			for(var k = 1; k < 7; k++){
				if(a[k].indexOf('Технология ' + i + '"') < 0){a[k] = a[k].replace('Pbp3','Pbp0')}
				else{a[k] = a[k].replace('Pbp0','Pbp3')}
			}
			psg = a.join('');
			document.getElementById('menu2').innerHTML = a.join('');
			tv[ip()] = str;
			sq();//Разворачивание технологии в массив и затем в таблицы
			break;
		}
	}
} //Функция загрузки технологии из базы данных в матрицы ИТК
function nd(o){//alert(123);
	var n = o.parentNode.parentNode.parentNode.parentNode.innerHTML;//alert(n);
	var m = n.split(['dTreeNode']); var k; var c; var s=''; var a = new Array();
	for(var i = 0; i < m.length; i++){
		if(m[i].indexOf('minus') > -1){
			if(m[i].indexOf('line') < 0){
				a = m[i].split(['d.o']); k = a[2].substring(a[2].indexOf('>') + 1,  a[2].indexOf('<'));	c = '%'; //alert(k);
			}
			if(m[i].indexOf('line') > -1){
				a = m[i].split(['d.o']); c = a[2].substring(a[2].indexOf('>') + 1,  a[2].indexOf('<'));	//alert(c);
			}
			if(k != undefined){//Проверка на разнородность структуры дерева
				s += k + '!' + c + '!%|'; if(s.split([k]).length > 2){s = s.replace(k + '!%!%|', '')}
			}
		}
	}; s = s.substring(0, s.length-1); if(s == ''){s = '%!%!%'};
	getAjax('tg.php?r='+encodeURIComponent(s+'`'+uin),tag); //Запуск функции формирония полного списка технологий
} //Функция отображения технологий в зависимости от открытых узлов дерева

//-------------------------------------Функции панели управления в Технологиях-----------------------------------------------

//1. Расчитать технологию
function trt(){
	rout();//Функция удаления строк Q1
	var s = tv[ip()];var a; var m; var b; var c; var r=''; var A=[];var B=[];var C; var u; var ni=0;nj=0;
	a3 = new Array();a4 = new Array();a5 = new Array();a6 = new Array();a7 = new Array();a5[1]=['',''];
	
	if(parseFloat(document.getElementById('tx4').value) > 0){
		if(sb() == false){//alert('Расчет выполняется');
			
			//ИТК - 1 a3
			if(a1.length > 1){
				for(var i = 1; i < a1.length; i++){a3[i] = new Array();
					for(var j = 2; j < 8; j++){
						a3[i][j-1] = a1[i][j];
					}
				}
			} //Поля копируются из массива операций а1
			
			//ИТК - 2 a4
			m = s.split(['|']); c = m[1].split(['!']);
			for(var i = 0; i < c.length; i++){m = c[i].split(['$']); a4[i+1] = new Array();
				a4[i+1][1] = m[0];
			} //Поле "Машинная операция"
			m = s.split(['|']); c = m[2].split(['!']);
			for(var i = 0; i < c.length; i++){m = c[i].split(['$']);C='';A=[];
				for(var j = 0; j < 5; j++){m[j] = m[j].replace(',','.'); C+=m[j];ni=0;nj=0;
					if(m[j] != ''){b = m[j].split(['\\']);
						for(var k = 0; k < 5; k++){
							if(m[k] != ''){
								m[k] = m[k].replace(',','.');B = m[k].split(['\\']);
								if(b[1] == B[1]){ni++; if(parseInt(B[23]) >= nj){nj = B[23];}}
								
							}
						};
						if(C.split([b[1]]).length < 3){
							if(ni>1){A[j] = b[2] + '(' + ni + 'x' + nj + ')';}
							if(ni<2){A[j] = b[2] + '(' + nj + ')';}
						}
					};
				};a4[i+1][2] = A.join(' '); //alert(A.join(' '));
			} //Поле "Состав агрегата"
			m = s.split(['|']); c = m[2].split(['!']);
			for(var i = 0; i < c.length; i++){m = c[i].split(['$']);
				for(var j = 4; j > -1; j--){
					if(m[j] != ''){
						a = m[j].split(['\\']);
						if(a[12] != '0'){
							a[10] = a[10].replace(',','.');a[11] = a[11].replace(',','.');a[12] = a[12].replace(',','.');
							a4[i+1][3] = (0.1 * parseFloat(a[10]) * parseFloat(a[11]) * parseFloat(a[12]) * a[23]).toFixed(2);
						}
					}
				}
			} //Поле "Производительность"
			m = s.split(['|']); c = m[1].split(['!']);
			for(var i = 0; i < c.length; i++){m = c[i].split(['$']);
				a4[i+1][4] = m[2];
				a4[i+1][5] = m[3];
				a4[i+1][6] = m[2] * m[3];
			} //Поля "Дни", "Часы", "План"
			m = s.split(['|']); c = m[1].split(['!']);
			for(var i = 0; i < c.length; i++){
				u = 1 / parseFloat(a4[i+1][3]);
				u = u / parseFloat(a4[i+1][6]); 
				a4[i+1][7] = u.toFixed(6);
			} //Поле "Тмуд = 1 / Wэ / План"
			m = s.split(['|']); c = m[1].split(['!']);
			for(var i = 0; i < c.length; i++){
				a4[i+1][8] = (parseFloat(a4[i+1][7]) * parseFloat(document.getElementById('tx4').value)).toFixed(0);
				if(a4[i+1][8] < 1){a4[i+1][8] = 1}
			} //Поле "Кол. агрег."
			m = s.split(['|']); c = m[1].split(['!']);
			for(var i = 0; i < c.length; i++){
				if(parseFloat(a4[i+1][3]) > 0 && parseFloat(a4[i+1][8]) > 0){
					u = parseFloat(document.getElementById('tx4').value) / parseFloat(a4[i+1][8]);
					u = u / parseFloat(a4[i+1][3]);
					a4[i+1][9] = u.toFixed(0);
				}
				else{
					a4[i+1][9] = 0;
				}
			} //Поле "Факт, час"
			
			//ИТК - 3 a5
			m = s.split(['|']); A = m[2].split(['!']);
			for(var j = 4; j > -1; j--){
				for(var i = A.length-1; i > -1; i--){n=0;u=1;m=A[i].split(['$']);
					if(m[j]!=''){a = m[j].split(['\\']);}else{a=['','','']}
					for(var k = a5.length-1; k > 0; k--){
						if(a5[k][1] == a[2] && a5[k][1] != ''){n=1};
						if(k == 1 && n != 1 && a[2] != ''){
							a5[u][1] = a[2];
							a5[u][0] = m[j];
							a5.splice(1,0,['','']);
						}
					}
				}
			}; a5.splice(1,1); //Поле "Марка"
			m = s.split(['|']); A = m[2].split(['!']);
			for(var k = 1; k < a5.length ; k++){a5[k][2] = 0; 
				for(var j = 4; j > -1; j--){n = 0;
					for(var i = A.length-1; i > -1; i--){m = A[i].split(['$']);
						if(m[j] != ''){a = m[j].split([',']).join(['.']).split(['\\']);}else{a=['','','']}
						if(a5[k][1].split([',']).join(['.']) == a[2] && a[2] != ''){
							c = parseFloat(a[23]) * parseFloat(a4[i+1][8]);
							if(c > n){
								n = c;
							}
						}
					};b = parseInt(a5[k][2]); a5[k][2] = b + n;
				}
			} //Поле "Кол-во, шт"
			for(var i = 1; i < a5.length; i++){
				a = a5[i][0].split(['\\']);a5[i][3]	= a[5];
				a[23] = 1; a5[i][0] = a.join(['\\']);//Переименовываем технику в единичном варианте
			} //Поле "Цена, руб."
			for(var i = 1; i < a5.length; i++){
				a5[i][0] = a5[i][0].split([',']).join(['.']);
				a = ai(a5[i][0]).split(['\\']); a5[i][4] = a[3];
			} //Поле "ЧЭЗ, руб/ч"
			for(var i = 1; i < a5.length; i++){
				a5[i][6] = a5[i][2] * a5[i][3];
			} //Поле "Сумма, руб."
			m = s.split(['|']); A = m[2].split(['!']);
			for(var k = 1; k < a5.length ; k++){n = 0; 
				for(var j = 4; j > -1; j--){
					for(var i = A.length-1; i > -1; i--){m = A[i].split(['$']);
						if(m[j] != ''){a = m[j].split(['\\']);}else{a=['','','']}
						if(a5[k][1] == a[2]){//alert(a4[i+1][8] + ' -- ' + a[2]);
							n += a4[i+1][9] * a4[i+1][8] * a[23];
						}
					}
				}; a5[k][7] = (n / a5[k][2]).toFixed(1); 
			} //Поле "Загрузка, час"
			for(var k = 1; k < a5.length ; k++){n = 0;
				for(var i = 1; i < a4.length; i++){
					if(a4[i][2].indexOf(a5[k][1].split(',').join('.') + '(') > -1){n += 1;}
				}; a5[k][5] =  ((a5[k][2] * a5[k][4] * a5[k][7]) / (document.getElementById('tx4').value * n)).toFixed(1);
			} //Поле "Руб, га"
			for(var k = 1; k < a5.length ; k++){
				a = a5[k][0].split(['\\']);
				u = a[6] * a[20] / a[14];
				a5[k][8] = (a5[k][7] * 100 / u).toFixed(1);
			} //Поле "Загрузка, %"
			
			//ИТК - 4 a6
			for(var i = 1; i < a4.length; i++){a6[i] = new Array();
				a6[i][1] = a4[i][1]; a6[i][2] = a4[i][2]; a6[i][3] = a4[i][3];
			} //Поле "Наименование операции" и Поле "Состав агрегата" и Поле "Wэ"
			m = s.split(['|']); A = m[2].split(['!']);
			for(var i = 1; i < a6.length; i++){m = A[i-1].split(['$']); n = 0;
				for(var j = 0; j < 5; j++){
					if(m[j] != ''){a = m[j].split([',']).join(['.']).split(['\\']);
						r = ai(m[j].split([',']).join(['.'])); r = r.split(['\\']);
						 n += parseFloat(r[3]);
					}
				}; a6[i][4] = n.toFixed(2);//alert(a6[i][4]);
			} //Поле "ЧЭЗ, руб."
			m = s.split(['|']); A = m[2].split(['!']);
			for(var i = 1; i < a6.length; i++){m = A[i-1].split(['$']); n = 0;
				if(m[0] != ''){a = m[0].split([',']).join(['.']).split(['\\']);
					a6[i][5] = (a[9] * a[19] / a6[i][3]).toFixed(1)
				}
				
			}  //Поле "Топливо, кг/га"
			m = s.split(['|']); A = m[2].split(['!']);
			for(var i = 1; i < a6.length; i++){m = A[i-1].split(['$']);
				if(m[0] != ''){a = m[0].split([',']).join(['.']).split(['\\']);
					a6[i][6] = (a[15] * a6[i][5]).toFixed(1)
				}
			} //Поле "ГСМ, руб/га"
			m = s.split(['|']); A = m[2].split(['!']);
			for(var i = 1; i < a6.length; i++){m = A[i-1].split(['$']);
				if(m[0] != ''){a = m[0].split([',']).join(['.']).split(['\\']);
					m[0] = m[0].split([',']).join(['.']);
					r = ai(m[0]).split(['\\']);
					a6[i][8] = ((r[3] - a[16] - (a[9] * a[19] * a[15])) / a6[i][3]).toFixed(1);
				}
			} //Поле "Трактор, руб/га"
			m = s.split(['|']); A = m[2].split(['!']); b = sj[0].split(['!']); c = b[1].split(['\\']); u = c[1];  
			for(var i = 1; i < a6.length; i++){m = A[i-1].split(['$']); n = 0; c = 0; b = 0;
				for(var j = 1; j < 5; j++){
					if(m[j] != ''){a = m[j].split([',']).join(['.']).split(['\\']);
						n = parseFloat(a[13] * a[16]);
					}
				}; c = parseFloat(u) + parseFloat(n); b = parseFloat(a6[i][3]); a6[i][7] = (c / b).toFixed(1);
			} //Поле "Зарплата, руб/га"
			m = s.split(['|']); A = m[2].split(['!']);  
			for(var i = 1; i < a6.length; i++){m = A[i-1].split(['$']);n=1;
				for(var j = 1; j < 5; j++){
					if(m[j] != ''){r = m[j].split([',']).join(['.']); a = r.split(['\\']);
						b = ai(r).split(['\\']);
						n += parseFloat(b[3]);
					}
				}
				for(var j = 1; j < 5; j++){
					if(m[j] != ''){r = m[j].split([',']).join(['.']); a = r.split(['\\']);
						a6[i][9] = parseFloat(a[13] * a[16]);
					}
				}
				if(a6[i][9] == undefined){a6[i][9] = 1}; a6[i][9] = ((n - a6[i][9]) / a6[i][3]).toFixed(1);
			} //Поле "Машины, руб/га"
			for(var i = 1; i < a6.length; i++){
				a6[i][10] = (parseFloat(a6[i][6]) + parseFloat(a6[i][7]) + parseFloat(a6[i][8]) + parseFloat(a6[i][9])).toFixed(1);
			} //Поле "Всего, руб/га"
			n = 0; for(var i = 1; i < a6.length; i++){n += parseFloat(a6[i][10])}
			for(var i = 1; i < a6.length; i++){
				a6[i][11] = ((a6[i][10] * 100) / n).toFixed(1);
			} //Поле "Вес, %"
			a6[a6.length] = [];for(var j = 0; j < 12; j++){a6[a6.length-1][j]=''};a6[a6.length-1][1] = 'Прочие прямые затраты, 5%'; 
			a6[a6.length] = [];for(var j = 0; j < 12; j++){a6[a6.length-1][j]=''};a6[a6.length-1][1] = 'Итого'; 
			a6[a6.length] = [];for(var j = 0; j < 12; j++){a6[a6.length-1][j]=''};a6[a6.length-1][1] = 'Вес, %'; 
			u = 0; for(var i = 1; i < a4.length; i++){
				u = parseFloat(u) + parseFloat(a6[i][10]) + (parseFloat(a6[i][10]) * 0.05);
			}
			for(var j = 5; j < 11; j++){n = 0;
				for(var i = 1; i < a4.length; i++){
					n += parseFloat(a6[i][j]);
				}
				a6[a6.length-3][j] = (n * 0.05).toFixed(2);
				a6[a6.length-2][j] = (n + (n * 0.05)).toFixed(2);
			}
			for(var j = 6; j < 11; j++){n = 0;
				for(var i = 1; i < a4.length; i++){
					n += parseFloat(a6[i][j]);
				}
				b = n + (n * 0.05);	b = b * 100; b = b / u;	a6[a6.length-1][j] = b.toFixed(2);
			} //Три нижних строки в таблице ИТК-4
			
			//ИТК - 5 a7
			for(var i = 1; i < 6; i++){a7[i]=[]}
			a7[1][1] = 'Прямые технические затраты, в том числе:';
			a7[2][1] = 'Зарплата, чел/час';
			a7[3][1] = 'Гсм, кг/га';
			a7[4][1] = 'Содержание тракторов и комбайнов';
			a7[5][1] = 'Содержание сельхозмашин';
			for(var i = 1; i < a2.length; i++){a7[i+5] = [];
				//if(a2[i][2] != '' && a2[i][3] != '' && a2[i][4] != ''){
					for(var j = 2; j < 5; j++){
						a7[i+5][j-1] = a2[i][j].replace(',','.');
					}
				//}
			}
			
			a7.length += 4;
			a7[a7.length-4] = []; a7[a7.length-4][1] = 'Всего прямых материальных затрат, руб/га';
			a7[a7.length-3] = []; a7[a7.length-3][1] = 'Накладные расходы, 5 % от прямых материальных затрат';
			a7[a7.length-2] = []; a7[a7.length-2][1] = 'Себестоимость технологии, руб/га';
			a7[a7.length-1] = []; 
			a7[a7.length-1][1] = 'Себестоимость технологии, Всего, руб на ' + document.getElementById('tx4').value + ' га';
			for(var i = 1; i < a7.length; i++){for(var j = 2; j < 6; j++){if(a7[i][j] == undefined){a7[i][j]=''};}} //Очищаем таблицу
			
			
			n = 0;for(var i = 1; i < a4.length; i++){n += parseFloat(a6[i][7]) + parseFloat(a6[i][7]) * 0.05};//alert(n);
			a7[2][4] = (parseFloat(n)).toFixed(2); b = sj[0].split(['!']); c = b[1].split(['\\']); u = c[1];//alert(u);
			a7[2][3] = u;
			a7[2][2] = (n / u).toFixed(1)
			
			n = 0;for(var i = 1; i < a4.length; i++){n += parseFloat(a6[i][6]) + parseFloat(a6[i][6]) * 0.05};
			a7[3][4] = (parseFloat(n)).toFixed(2); b = sj[0].split(['!']); c = b[0].split(['\\']); u = c[1];//alert(u);
			a7[3][3] = u; 
			a7[3][2] = a6[a6.length-2][5];
		
			n = 0;for(var i = 1; i < a4.length; i++){n += parseFloat(a6[i][8]) + parseFloat(a6[i][8]) * 0.05};
			a7[4][4] = n.toFixed(2); 
		
			n = 0;for(var i = 1; i < a4.length; i++){n += parseFloat(a6[i][9]) + parseFloat(a6[i][9]) * 0.05};
			a7[5][4] = n.toFixed(2); 
			
			n = 0;for(var i = 2; i < 6; i++){n+=parseFloat(a7[i][4])}; a7[1][4] = n.toFixed(2);
			if(a7[6][2] == ''){a7[6][2] = 0}; if(a7[6][3] == ''){a7[6][3] = 0};
			if(a7[6][2] != '' && a7[6][3] != ''){a7[6][4] = (parseFloat(a7[6][2]) * parseFloat(a7[6][3])).toFixed(2);}
			if(a7[6][2] == '0' && a7[6][3] == '0'){a7[6][4] = '0.00'}; // Семена
			//alert(111);
			c = new Array(); for(var i = 1; i < a7.length; i++){
				if(a7[i][1].indexOf('Прямые технические затраты') > -1){c[i] = 1}
				if(a7[i][1].indexOf('Семена') > -1){c[i] = 2}
				if(a7[i][1].indexOf('Минеральные удобрения') > -1){c[i] = 3}
				if(a7[i][1].indexOf('средства защиты растений') > -1){c[i] = 4}
				if(a7[i][1].indexOf('Всего прямых материальных затрат') > -1){c[i] = 5}
				if(a7[i][1].indexOf('Накладные расходы') > -1){c[i] = 6}
				if(a7[i][1].indexOf('Себестоимость технологии, руб/га') > -1){c[i] = 7}
				if(a7[i][1].indexOf('Себестоимость технологии, Всего') > -1){c[i] = 8}
			} // Массив индексов строк
			//alert(222);
			n = 0; for(var i = c.indexOf(3) + 1; i < c.indexOf(4); i++){
				if(a7[i][2] == ''){a7[i][2] = 0}; if(a7[i][3] == ''){a7[i][3] = 0};
				if(a7[i][2] != '' && a7[i][3] != ''){
					a7[i][4] = (parseFloat(a7[i][2]) * parseFloat(a7[i][3])).toFixed(2);
					n += parseFloat(a7[i][4]);
				}
			}; a7[c.indexOf(3)][4] = n.toFixed(2); // Минральные удобрения
			//alert(333);
			n = 0; for(var i = c.indexOf(4) + 1; i < c.indexOf(5); i++){
				if(a7[i][2] == ''){a7[i][2] = 0}; if(a7[i][3] == ''){a7[i][3] = 0};
				if(a7[i][2] != '' && a7[i][3] != ''){
					a7[i][4] = (parseFloat(a7[i][2]) * parseFloat(a7[i][3])).toFixed(2);
					n += parseFloat(a7[i][4]);
				}
			}; a7[c.indexOf(4)][4] = n.toFixed(2); // Химические средства защиты растений
			//alert(444);
			n=c.indexOf(5);for(var i = c.indexOf(2); i < n; i++){
				if(a7[i][1].indexOf('Семена') < 0){
					if(a7[i][2] == '0' && a7[i][3] == '0'){a7.splice(i,1); i--;n--}
				}
			} // Блок удаления нулевых строк
			//alert(555);
			c = new Array(); for(var i = 1; i < a7.length; i++){
				if(a7[i][1].indexOf('Прямые технические затраты') > -1){c[i] = 1}
				if(a7[i][1].indexOf('Семена') > -1){c[i] = 2}
				if(a7[i][1].indexOf('Минеральные удобрения') > -1){c[i] = 3}
				if(a7[i][1].indexOf('средства защиты растений') > -1){c[i] = 4}
				if(a7[i][1].indexOf('Всего прямых материальных затрат') > -1){c[i] = 5}
				if(a7[i][1].indexOf('Накладные расходы') > -1){c[i] = 6}
				if(a7[i][1].indexOf('Себестоимость технологии, руб/га') > -1){c[i] = 7}
				if(a7[i][1].indexOf('Себестоимость технологии, Всего') > -1){c[i] = 8}
			} // Массив индексов строк(Переформироавние индексов)
			
			//alert(666);
			u=0; u += parseFloat(a7[c.indexOf(1)][4]); u += parseFloat(a7[c.indexOf(2)][4]);
			u += parseFloat(a7[c.indexOf(3)][4]); u += parseFloat(a7[c.indexOf(4)][4]);
			a7[c.indexOf(5)][4] = u.toFixed(2);
			a7[c.indexOf(6)][4] = (u * 0.05).toFixed(2); 
			a7[c.indexOf(7)][4] = (u + parseFloat(a7[c.indexOf(6)][4])).toFixed(2);
			a7[c.indexOf(8)][4] = (parseFloat(a7[c.indexOf(7)][4]) * parseFloat(document.getElementById('tx4').value)).toFixed(2);
			// Поле %
			u = parseFloat(a7[c.indexOf(7)][4]);
			for(var i = c.indexOf(1); i < c.indexOf(8); i++){
				a7[i][5] = (a7[i][4] * 100 / u).toFixed(1);
			}; a7[c.indexOf(7)][5] = 100;
			
		}
		trd();
	}//else{alert('Для расчета необходимо указать площадь возделывания культуры для активной технологии.')}
} //Расчет показателей технологии в матрицы ИТК
function trd(){
	
	//ИТК - 1 a3
	if(document.getElementById('Q3') != null){Q3(); var q = document.getElementById('Q3');
		if(a3.length > 1){
			for(var i = 1; i < a3.length; i++){addrowQ3();
				for(var j = 1; j < 7; j++){
					q.rows[i].cells[j].innerHTML = a3[i][j];
				}
			}	
		}
	} //Визуализация ИТК-1
	//ИТК - 2 a4
	if(document.getElementById('Q4') != null){Q4(); var q = document.getElementById('Q4');
		if(a4.length > 1){
			for(var i = 1; i < a4.length; i++){addrowQ4();
				for(var j = 1; j < 10; j++){
					q.rows[i].cells[j].innerHTML = a4[i][j];// alert(a4[i][j]);
				}
			}	
		}
	} //Визуализация ИТК-2
	//ИТК - 3 a5
	if(document.getElementById('Q5') != null){ Q5(); var q = document.getElementById('Q5');
		if(a5.length > 2){
			for(var i = 1; i < a5.length; i++){addrowQ5();
				for(var j = 1; j < 9; j++){
					q.rows[i].cells[j].innerHTML = a5[i][j];
				}
			}	
		}
	} //Визуализация ИТК-3
	//ИТК - 4 a6
	if(document.getElementById('Q6') != null){Q6(); var q = document.getElementById('Q6');
		if(a6.length > 1){
			for(var i = 1; i < a6.length; i++){addrowQ6();
				for(var j = 1; j < 12; j++){
					q.rows[i].cells[j].innerHTML = a6[i][j];
				}
			}	
		}
		for(var i = a6.length-1; i > a6.length-4; i--){
			q.rows[i].style.backgroundColor = '#ffdead';	
		}
	} //Визуализация ИТК-4
	//ИТК - 5 a7
	if(document.getElementById('Q7') != null){Q7(); var q = document.getElementById('Q7');
		if(a7.length > 1){
			for(var i = 1; i < a7.length; i++){addrowQ7();
				for(var j = 1; j < 6; j++){
					q.rows[i].cells[j].innerHTML = a7[i][j];
				}
			}
			for(var i = 1; i < q.rows.length; i++){
				if(a7[i][1].indexOf('Прямые технические затраты') > -1){q.rows[i].style.backgroundColor = '#ffdead';}
				if(a7[i][1].indexOf('Семена') > -1){q.rows[i].style.backgroundColor = '#ffdead';}
				if(a7[i][1].indexOf('Минеральные удобрения') > -1){q.rows[i].style.backgroundColor = '#ffdead';}
				if(a7[i][1].indexOf('средства защиты растений') > -1){q.rows[i].style.backgroundColor = '#ffdead';}
				if(a7[i][1].indexOf('Всего прямых материальных затрат') > -1){q.rows[i].style.backgroundColor = '#ffdead';}
				if(a7[i][1].indexOf('Накладные расходы') > -1){q.rows[i].style.backgroundColor = '#ffdead';}
				if(a7[i][1].indexOf('Себестоимость технологии') > -1){q.rows[i].style.backgroundColor = '#ffdead';}
			}
		}
	} //Визуализация ИТК-4
	
} //Перенос расчитанных показателей в таблицы ИТК
function rout(){
	var s = tv[ip()]; var a = s.split('|'); var b = a[2].split('!'); var c = a[1].split('!'); var r = new Array();
	for(var i = 0; i < b.length; i++){b[i] = b[i].split('$');
		if(b[i][0]=='' && b[i][1]=='' && b[i][2]=='' && b[i][3]=='' && b[i][4]==''){
			b.splice(i, 1); c.splice(i, 1); i--;
		}
		else{
			b[i] = b[i].join('$');
		}
	}
	s = a[0] + '|' + c.join('!') + '|' + b.join('!') + '|' + a[3];
	tv[ip()] = s;
	ext();
} //Функция удаления пустых строк и элементов массива таблицы Q1 и кажется Q2

//2. Удалить технологию
function tdel(){
	var s = '$$undefined$$|$$$$$|$$$$|Семена,  кг/га$$!Минеральные удобрения$$!$$!$$!$$!Химические  средства защиты растений$$!$$!$$!$$!$$!$$!$$!$$!$$!$$'; tv[ip()] = s; trt(); ext(); lev();
	if(document.getElementById('Q1') != null){upQ1();}
	if(document.getElementById('Q1') != null){upQ2();}
} //Удалить технологию

//3. Передать технлогию на печать
function smyrf(){
	var s = '';
	if(document.getElementById('chk1').checked){s+='1'}
	if(document.getElementById('chk2').checked){s+='2'}
	if(document.getElementById('chk3').checked){s+='3'}
	if(document.getElementById('chk4').checked){s+='4'}
	if(document.getElementById('chk5').checked){s+='5'}
	
	window.open('teh.php?r='+encodeURIComponent(tsvk + '`' + uin + '`' + s)); tsvk = '';
}	//Функция отображения технологии для распечатки
function thtml(){
	sq();  //Переформировывание массивов с рачетами
	var k = gr(1, 9999999); //Генерируем случайное число от 1 до 9999999
	var m = tv[ip()]; m = m.split('|');
	var s = itk(); s = k + '|' + m[0] + '|' + s; //alert(s.length);
	var n = s.length / 1500; tsvz = k; tsvk = k;
	for(var i = 0; i < n + 1; i++){tsv[i] = s.substr(i * 1500, 1500)}
	zl1(tsvz);
	
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
	}); //Обновления отображений представлений
	
	//window.open('teh.php?r='+encodeURIComponent(tsvz + '`' + uin));
} //Передать технологию в HTML стартовая функция
var tsvk = '';
function zl1(d){
	if(tsv[0].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[0] + '`' + uin + '`' + tsvz), zl2);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = ''; 
	}
}//Функция передачи технологии 1
function zl2(d){
	if(tsv[1].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[1] + '`' + uin + '`' + tsvz), zl3);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = ''; 
	}
}//Функция передачи технологии 2
function zl3(d){
	if(tsv[2].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[2] + '`' + uin + '`' + tsvz), zl4);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 3
function zl4(d){
	if(tsv[3].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[3] + '`' + uin + '`' + tsvz), zl5);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 4
function zl5(d){
	if(tsv[4].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[4] + '`' + uin + '`' + tsvz), zl6);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 5
function zl6(d){
	if(tsv[5].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[5] + '`' + uin + '`' + tsvz), zl7);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 6
function zl7(d){
	if(tsv[6].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[6] + '`' + uin + '`' + tsvz), zl8);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 7
function zl8(d){
	if(tsv[7].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[7] + '`' + uin + '`' + tsvz), zl9);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 8
function zl9(d){
	if(tsv[8].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[8] + '`' + uin + '`' + tsvz), zl10);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 9
function zl10(d){
	if(tsv[9].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[9] + '`' + uin + '`' + tsvz), zl11);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 10
function zl11(d){
	if(tsv[10].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[10] + '`' + uin + '`' + tsvz), zl12);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 11
function zl12(d){
	if(tsv[11].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[11] + '`' + uin + '`' + tsvz), zl13);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 12
function zl13(d){
	if(tsv[12].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[12] + '`' + uin + '`' + tsvz), zl14);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 13
function zl14(d){
	if(tsv[13].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[13] + '`' + uin + '`' + tsvz), zl15);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 14
function zl15(d){
	if(tsv[14].length > 0){
		getAjax('itks.php?s=' + encodeURIComponent(tsv[14] + '`' + uin + '`' + tsvz), esc);
	}
	else{
		tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция передачи технологии 15  //Передаточные функции временного сохранения 
function itk(){
	var r='';
	//ИТК-1
	for(var i = 1; i < a3.length; i++){r += a3[i].join('$') + '!'};	r = r.substr(0, r.length-1); r += '|';
	//ИТК-2
	for(var i = 1; i < a4.length; i++){r += a4[i].join('$') + '!'};	r = r.substr(0, r.length-1); r += '|';
	//ИТК-3
	for(var i = 1; i < a5.length; i++){r += a5[i].join('$') + '!'};	r = r.substr(0, r.length-1); r += '|';
	//ИТК-4
	for(var i = 1; i < a6.length; i++){r += a6[i].join('$') + '!'};	r = r.substr(0, r.length-1); r += '|';
	//ИТК-5
	for(var i = 1; i < a7.length; i++){r += a7[i].join('$') + '!'};	r = r.substr(0, r.length-1);
	
	return r;
} //Функция составления массивов ИТК
function gr(m,n){
  m = parseInt(m); n = parseInt(n);
  return Math.floor( Math.random() * (n - m + 1) ) + m;
} //Генертор случайных чисел

//4. Сохранить технологию в базе данных
function tsave(){
	var k = tv[ip()]; k = k.split('*'); k = k.join(''); 
	var a = k.split('|'); var b = a[0].split('$');
	if(b[0] != '' && b[1] != '' && b[2] != '' && b[3] != ''){
		b[4] = gm(); a[0] = b.join('$'); k = a.join('|');  
		var n = k.length / 1500; var a = new Array(); var m = k.split('$'); tsvz = m[0];
		for(var i = 0; i < n + 1; i++){tsv[i] = k.substr(i * 1500, 1500)}
		ts1(tsvz);
	}
	else{
		alert('Для успешного сохранения технологии необходимо указать Наименование технологии, выбрать сорт культуры, обозначить шифр технологии и площадь возделываемой культуры.');
	}
} //Функция сохранения технологии стратовая
var tsv = new Array();// Массив строки технологии
var tsvz;// Переменная хранения шифра технологии при ее записи
var tsvg;// Переменная хранения результата записи обновления технологии
function ts1(d){
	if(tsv[0].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[0] + '`' + uin + '`0`' + tsvz), ts2);
	}
}//Функция сохранения технологии 1
function ts2(d){tsvg = d;
	if(tsv[1].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[1] + '`' + uin + '`1`' + tsvz), ts3);
	}
	else{
		alert(tsvg); tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция сохранения технологии 2
function ts3(d){
	if(tsv[2].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[2] + '`' + uin + '`2`' + tsvz), ts4);
	}
	else{
		alert(tsvg); tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция сохранения технологии 3
function ts4(d){
	if(tsv[3].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[3] + '`' + uin + '`3`' + tsvz), ts5);
	}
	else{
		alert(tsvg); tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция сохранения технологии 4
function ts5(d){
	if(tsv[4].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[4] + '`' + uin + '`4`' + tsvz), ts6);
	}
	else{
		alert(tsvg); tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция сохранения технологии 5
function ts6(d){
	if(tsv[5].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[5] + '`' + uin + '`5`' + tsvz), ts7);
	}
	else{
		alert(tsvg); tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция сохранения технологии 6
function ts7(d){
	if(tsv[6].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[6] + '`' + uin + '`6`' + tsvz), ts8);
	}
	else{
		alert(tsvg); tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция сохранения технологии 7
function ts8(d){
	if(tsv[7].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[7] + '`' + uin + '`7`' + tsvz), ts9);
	}
	else{
		alert(tsvg); tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция сохранения технологии 8
function ts9(d){
	if(tsv[8].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[8] + '`' + uin + '`8`' + tsvz), ts10);
	}
	else{
		alert(tsvg); tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция сохранения технологии 9
function ts10(d){
	if(tsv[9].length > 0){
		getAjax('tsave.php?s=' + encodeURIComponent(tsv[9] + '`' + uin + '`9`' + tsvz), esc);
	}
	else{
		alert(tsvg); tsv = new Array(); tsvz = ''; tsvg = '';
	}
}//Функция сохранения технологии 10
function esc(){}//Пустая функция для аякса технологий //Передаточные функции сохранения


//-----------------------------------------------------Сорта-----------------------------------------------------------------

var srta;//Переменная хранения списка сортов
var srt;//Переменная хранения полного пути сорта*
function sorta(){
	var url = 'sorta.php';getAjax(url,asorta)
}//Функция запрос на отображение списка сортов
function asorta(d){
	var t = document.getElementById('sorta');var a = d.split('|');var c = d.split('|');var e = d.split('|');
	var m = a[0].split('[\]');var r;var b;var n = 0; var l = 0; var j = 0;
	var s ='<select id="tx2" style="width:173px" class="chzn-select" onchange="chng()" size="11">'; 
	
	for(var i = 0; i < a.length; i++){m = a[i].split('\\');
		for(var j = 0; j < c.length; j++){r = c[j].split('\\');
			if(r[0] == m[0]){
				if(s.indexOf(r[0]) < 0){n=0; l+=1; s += '<optgroup label="`">'.replace('`', r[0]);}
				if(s.indexOf(r[1]) < 0){j=0; n+=1; s += '<option>`</option>'.replace('`',l + '.' + n + '. ' + r[1]);
					for(var k = 0; k < e.length; k++){b = e[k].split('\\');
						if(b[0] == r[0] && b[1] == r[1]){j+=1;
							s += '<option>`</option>'.replace('`',l + '.' + n + '.' + j + '. ' + b[2]);	
						}
					}
				}
			}
		}
	}
	
	s += '</select>'; e = s.split('<optgroup');	
	for(var i = 1; i < e.length; i++){e[i] = '<optgroup' + e[i] + '</optgroup>'};
	s = e.join(); srta = s ; t.innerHTML = s;
	spis();
	ext(); // Развертывание технологии из вкладки технологий 
}//Функция формирования списка сортов
function spis(){
	$(".chzn-select").chosen();
}//Визуализация списка сортов
function chng(){
	var t = document.getElementById('tx2');
	var s = t.value;
	var n = s.split(' ');//alert(a[1]);
	var a;
	var h = t.innerHTML;
	var r;var k;
	if(s.split('.').length > 3){
		r = s.substr(0,4);	a = h.split('>'+r);	r = a[1].substring(1, a[1].indexOf('<'));//Получаем второй элемент
		a = h.split('<optgroup');
		for(var i = 0; i < a.length; i++){
			if(a[i].indexOf(s) > -1){
				var m = a[i].split('label="');
				k = m[1].substring(0, m[1].indexOf('"'))
			}	
		}
		n[0] = ''; n = n.join(' '); n = n.replace(/^\s*/,'').replace(/\s*$/,''); //alert(n.length + '---' + n)
		srt = k+'!'+r+'!'+n; ret();
		//alert(k+'!'+r+'!'+n);
	}	
	else{document.getElementById('sorta').innerHTML = srta; spis();}
	
	//var i = parseInt(tip[0]); var j = parseInt(tip[1]);
	//alert(h[55][66]);
}//Функция получения пути сорта в зависимости от выбранного из списка сортов

//------------------------------------------------------!!!------------------------------------------------------------------

var tv = new Array();//Массив матриц данных технлогий связанный с вкладками
var a1 = new Array(); //Массив матрицы операций и матрицы машин
var a2 = new Array(); //Массив матрицы материалов
var a3 = new Array(); //Массив матрицы ИТК - 1
var a4 = new Array(); //Массив матрицы ИТК - 2
var a5 = new Array(); //Массив матрицы ИТК - 3
var a6 = new Array(); //Массив матрицы ИТК - 4
var a7 = new Array(); //Массив матрицы ИТК - 5

function ex(){
	
	//Создаем базовый пустой массив таблицы материалов
	if(a2.length < 3){
		for(var i = 1; i < 16; i++){a2[i] = new Array();for(var j = 1; j < 5; j++){a2[i][j] = '';}}
		//Нумеруем первый столбец в массиве
		a2[1][1] = '1'; a2[2][1] = '2'; a2[3][1] = '2.1'; a2[4][1] = '2.2'; a2[5][1] = '2.3'; a2[6][1] = '3';
		for(var i = 1; i < 10; i++){a2[i+6][1] = '3.'+i}
		//for(var i = 1; i < a2.length; i++){alert(a2[i][1])}
		//Проставляем базовые значения в таблице материалов
		a2[1][2] = 'Семена,  кг/га';a2[2][2] = 'Минеральные удобрения';a2[6][2] = 'Химические  средства защиты растений';
	}
	
	var q = document.getElementById('Q2');
	if(q == null){var t = document.getElementById('Q1');
		if(t.rows.length > a1.length){a1[t.rows.length-1] = new Array();}
	}
	else{
		if(q.rows.length > a2.length){a2[q.rows.length-1] = new Array();}
	}
}//Функция согласования структуры таблицы со структурой массива ***
function ip(){
	var n; for(var i = 0; i < ps.length; i++){if(ps[i].indexOf('Pbp3.png') > 0){n=i}};if(n == undefined){n=1};return n;
}//Функция поиска индекса выделенной вкладки в технологиях и его возврат
function ret(){//alert(123);
	
	//1. часть. Информация о технологии
	
	if(document.getElementById('Q1') != null){var t = document.getElementById('Q1');
		// 2. часть. Таблица операций
		for(var i = 1; i < t.rows.length; i++){
			if(a1.length < t.rows.length){a1[i] = new Array()};
			for(var j = 2; j < 8; j++){a1[i][j] = t.rows[i].cells[j].firstChild.value;}}
		// 3. часть. Таблица машин.
		for(var i = 1; i < t.rows.length; i++){for(var j = 8; j < 18; j++){if(a1[i][j] == undefined){a1[i][j] = '';}}}
		// 4.часть. Таблица материалов
		if(a2.length < 2){
			for(var i = 1; i < 16; i++){a2[i] = new Array();
				for(var j = 2; j < 5; j++){
					a2[i][j] = '';
				}
			}
			a2[1][2] = 'Семена,  кг/га';
			a2[2][2] = 'Минеральные удобрения';
			a2[6][2] = 'Химические  средства защиты растений';	
		}		
	}
	if(document.getElementById('Q2') != null){var q = document.getElementById('Q2');
		// 4. часть. Таблица материалов
		for(var i = 1; i < q.rows.length; i++){if(a2.length < q.rows.length){a2[i] = new Array()}
			for(var j = 1; j < 5; j++){
				if(j == 1){a2[i][j] = q.rows[i].cells[j].innerHTML}//else{a2[i][j] = ''}
				if(q.rows[i].cells[j].innerHTML.indexOf('input') > -1){a2[i][j] = q.rows[i].cells[j].firstChild.value}
				else{a2[i][j] = q.rows[i].cells[j].innerHTML}
			}
		}
	}
	
	rem();	
}//Сбор значений из таблиц в массив
function rem(){var s;
		
		// 1 часть. Информация о технологии.
		s = document.getElementById('tx3').value + '$' + document.getElementById('tx1').value + '$' + srt + '$' + document.getElementById('tx4').value + '$|';
		
		// 2 часть. Таблица операций
		for(var i = 1; i < a1.length; i++){
			for(var j = 2; j < 8; j++){
				s += a1[i][j] + '$';
			}s = s.substring(-1,s.length-1); s+='!';	
		}s = s.substring(-1,s.length-1); s+='|';
		
		// 3. часть. Таблица машин.
		for(var i = 1; i < a1.length; i++){
			for(var j = 8; j < 18; j+=2){
				s += a1[i][j] + '$';
			}s = s.substring(-1,s.length-1); s+='!';	
		}s = s.substring(-1,s.length-1); s+='|';
		
		// 4. часть. Таблица материалов
		for(var i = 1; i < a2.length; i++){
			for(var j = 2; j < 5; j++){
				s += a2[i][j] + '$';
			}s = s.substring(-1,s.length-1); s+='!';	
		}s = s.substring(-1,s.length-1);
		
	
	//alert(s);
	tv[ip()] = s;
	//alert(tv[ip()]);
	
}//Сбор значений из массива в строку S и последующее ее присвоению соответствующему элементу массива
function ext(){//alert(tv[ip()]);
	if(tv[ip()] != undefined){
		if(sb()==true){tv[ip()] = '$$undefined$$|$$$$$|$$$$|Семена,  кг/га$$!Минеральные удобрения$$!$$!$$!$$!Химические  средства защиты растений$$!$$!$$!$$!$$!$$!$$!$$!$$!$$'};
		var s = tv[ip()].split('|');var a = s[0].split('$');var m;var d;var n;

		//Развертываем 1 Часть. Информация о технологии.
		tinf();

		//alert(s[1]);
		//Развертываем 2 Часть. Матрицу операций.
		a1 = new Array(); a = s[1].split('!');
		for(var i = 0; i < a.length; i++){a1[i+1] = new Array();m = a[i].split('$');
			for(var j = 0; j < m.length; j++){
				a1[i+1][j+2] = m[j];
			}
		}

		//Развертываем 3 Часть. Матрицу машин.
		a = s[2].split('!');
		for(var i = 0; i < a.length; i++){m = a[i].split('$'); 
			for(var j = 0; j < m.length; j++){d = m[j].split('\\');
				if(j == 0){n = 8};if(j == 1){n = 10};if(j == 2){n = 12};if(j == 3){n = 14};if(j == 4){n = 16};
				a1[i+1][n] = m[j];
				a1[i+1][n+1] = d[d.length-1];
			}
		}

		//Развертываем 4 Часть. Матрицу материалов.
		a2 = new Array(); a = s[3].split('!');
		for(var i = 0; i < a.length; i++){a2[i+1] = new Array();m = a[i].split('$'); 
			for(var j = 0; j < m.length; j++){
				a2[i+1][j+2] = m[j];
			}
		}		
		exm();
	}
	else{tinf();ret();}
}//Развертывание технологии из строки в массив
function exm(){
	
	if(document.getElementById('Q1') != null){document.getElementById('qt').innerHTML = '<table id="Q1" width="1550px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="30px" align="center"></td><td width="25px" align="center">№</td><td width="250" align="center">Операция</td><td width="74" align="center">Год</td><td width="74" align="center">Дни</td><td width="74" align="center">Часы</td><td width="248" align="center">Исходные требования</td><td width="150" align="center">Тип техники</td><td width="120" align="center">Энергосредство</td><td width="20" align="center">№</td><td width="120" align="center">Машина 2</td><td width="20" align="center">№</td><td width="120" align="center">Машина 3</td><td width="20" align="center">№</td><td width="120" align="center">Машина 4</td><td width="20" align="center">№</td><td width="120" align="center">Машина 5</td><td width="20" align="center">№</td></tr><tr height="27px" align="center" onmousedown="selectrow(this)"><td style="background-image:url(image/Aq3.png)" onclick="taddrow(this)" onmouseup="mup(this)"></td><td>1</td><td align="left"><input style=" width:242px; height:16px; border-width:0"  onchange="ret()" /></td><td><select style="width:71px" onchange="ret()"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" onchange="ret()" /></td><td><input style="width:142px; height:16px; border-width:0" onchange="ret()" /></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td></tr></tbody></table>';
		var t = document.getElementById('Q1');
		
		//Заполняем матрицу операций
		var n = a1.length;
		for(var i = 1; i < n; i++){if(t.rows.length < a1.length){taddrow(t.rows[t.rows.length-1].cells[0])} 
			for(var j = 2; j < 8; j++){
				if(t.rows[i].cells[j].innerHTML.indexOf('<input') > -1){
					t.rows[i].cells[j].firstChild.value = a1[i][j];
				}
				else{
					if(j == 3){var b = 0;//alert(a1[i][j])
						if(a1[i][j] == 'K'){b = 1};if(a1[i][j] == 'L'){b = 2};if(a1[i][j] == 'M'){b = 3};
						t.rows[i].cells[j].firstChild.options[b].selected = true;
					}
					else{
						t.rows[i].cells[j].firstChild.selectedIndex = parseInt(a1[i][j]);	
					}
				}
			}	
		}
		
		//Заполняем матрицу машин
		for(var i = 1; i < a1.length; i++){
			for(var j = 8; j < 18; j+=2){
				if(a1[i][j] != ''){
					var m = a1[i][j].split('\\');
					t.rows[i].cells[j].innerHTML = m[2];
					t.rows[i].cells[j+1].innerHTML = m[23];
				}
			}
		}
	}
	if(document.getElementById('Q2') != null){
		//document.getElementById('qt').innerHTML = '<table id="Q2" width="766px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25px" align="center"></td><td width="30px" align="center">№</td><td width="305px" align="center">Наименование</td><td width="203px" align="center">Количество (кг* на 1 Га)</td><td width="203px" align="center">Цена, руб. (за 1 кг)</td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)"  onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left" style="text-indent: 7.0pt">Семена, кг/га</td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)"  onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2</td><td align="left" style="text-indent: 7.0pt">Минеральные удобрения</td><td></td><td></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2.1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2.2</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2.3</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>3</td><td align="left" style="text-indent: 7pt">Химические средства защиты растений</td><td></td><td></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq3.png)" onclick="maddrow(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr></tbody></table>';
		//Загрузка в таблицу матрицы данных
		
		//1. создаем макет чистой таблицы
		var s; var a = new Array();
		
		//2. Заполняем таблицу элементами управления
		for(var i = 1; i < a2.length; i++){//alert(a2[i][2]);
			if(a2[i][2].indexOf('Семена') > -1 && i == 1){a[i] = '<tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)"  onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left" style="text-indent: 7.0pt">Семена, кг/га</td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr>';}
			else if(a2[i][2].indexOf('Минеральные') > -1 && i == 2){a[i] = '<tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)"  onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2</td><td align="left" style="text-indent: 7.0pt">Минеральные удобрения</td><td></td><td></td></tr>';}
			else if(a2[i][2].indexOf('средства защиты растений') > -1){a[i] = '<tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>3</td><td align="left" style="text-indent: 7pt">Химические средства защиты растений</td><td></td><td></td></tr>';}
			else if(i == a2.length-1){a[i] = '<tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq3.png)" onclick="maddrow(this)"></td><td></td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr>';}
			else{a[i] = '<tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td></td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr>';}
		}

		s = '<table id="Q2" width="766px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25px" align="center"></td><td width="30px" align="center">№</td><td width="305px" align="center">Наименование</td><td width="203px" align="center">Количество (кг* на 1 Га)</td><td width="203px" align="center">Цена, руб. (за 1 кг)</td></tr>' + a.join('') + '</table>';
	

		document.getElementById('qt').innerHTML = s;
		//alert(s);
		nQ2();//Нумерация первого столбца
		upQ2();//Присиваиваем контекстное меню первому столбцу таблицы материалы Q2
		ex();//Согласование массивов
		
		//3. Заполняем таблицу значениями
		var q2 = document.getElementById('Q2');//alert(q2.length)
		for(var i = 1; i < a2.length; i++){
			for(var j = 2; j < 5; j++){//alert(a2[i][j]);
				if(q2.rows[i].cells[j].innerHTML.indexOf('<input') > -1){
					q2.rows[i].cells[j].firstChild.value = a2[i][j];
				}
				else{q2.rows[i].cells[j].innerHTML = a2[i][j]}
			}
		}
	}
}//Развертывание технологии из массива в таблицы
function tinf(){//alert(123);
	//Заполняем панель информации значениями
	var s = tv[ip()];
	if(s != undefined){
		var a = s.split('|'); a = a[0].split('$');//alert(a[2]);
		if(a[2].split('!').length > 1){
			document.getElementById('tx1').value = a[1]; //Наименование технологии
			document.getElementById('tx3').value = a[0]; //Шифр технологии
			document.getElementById('tx4').value = a[3]; //Площадь технологии
			if(a[2] != undefined){srt = a[2];
				a = a[2].split('!'); var m = srta.split('<optgroup');
				for(var i = 0; i < m.length; i++){
					if(m[i].indexOf(a[0]) > 0){//alert(m[i]);
						var k = m[i].indexOf('. '+a[1]+'<');
						var r = m[i].substring(k-3, k+2);//alert(r);
						s = r + a[1] + '<'; //alert(r + a[1]);
						var f = m[i].split(s);// alert(f[2]);
						k = f[1].indexOf('. ' + a[2] + '<'); //alert(k);
						r = f[1].substring(k-5, k+2); //alert(r);
						s = r + a[2];//alert(s);
						$(".chzn-select").val(s); $(".chzn-select").trigger("liszt:updated");
						break;
					}
				}
			} //Устанавливаем предыдущий выбранный сорт
		}
		else{//alert(111);
			document.getElementById('tx1').value = a[1]; //Наименование технологии
			document.getElementById('tx3').value = a[0]; //Шифр технологии
			document.getElementById('tx4').value = a[3]; //Площадь технологии
			document.getElementById('sorta').innerHTML = srta; spis();srt=undefined;
		}
	}
	else{document.getElementById('sorta').innerHTML = srta; spis();srt=undefined;}//Обнуляем панель информации
}//Заполняем панель информации значениями
function sq(){
	//var q = document.getElementById('Q2');
	if(document.getElementById('Q1') != null){// Если открыта таблица Операционная матрица технологий
		tz();ext();trt();upQ1();
	}
	if(document.getElementById('Q2') != null){// Если открыта таблица Материалы
		
		var s = tv[ip()];//alert(s); 
		if(s != undefined){var a = s.split('|'); 
			if(a.length > 2){
				if(a[1].indexOf('undefined') > -1 || a[2].indexOf('undefined') > -1)
				{a[1] = '$$$$$'; a[2] = '$$$$'; tv[ip()] = a.join('|');}
			}
		}
		else{tv[ip()] = '$$undefined$$|$$$$$|$$$$|Семена,  кг/га$$!Минеральные удобрения$$!$$!$$!$$!Химические  средства защиты растений$$!$$!$$!$$!$$!$$!$$!$$!$$!$$';}
		tz();ext();trt();upQ2();
		
	}
	if(document.getElementById('Q1') == null && document.getElementById('Q2') == null){tz();ext();exm();trt();lev();upQ1();}
}//Выбор загрузки таблицы
function tz(){
	a1 = new Array();a2 = new Array(); //a3=[];a4=[];a5=[];a6=[];a7=[];
	//var q = document.getElementById('Q2');
	
	document.getElementById('tx1').value = '';
	document.getElementById('sorta').innerHTML = srta; spis();srt=undefined;
	document.getElementById('tx3').value = '';
	document.getElementById('tx4').value = '';
	if(document.getElementById('Q1') != null){document.getElementById('qt').innerHTML = '<table id="Q1" width="1550px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="30px" align="center"></td><td width="25px" align="center">№</td><td width="250" align="center">Операция</td><td width="74" align="center">Год</td><td width="74" align="center">Дни</td><td width="74" align="center">Часы</td><td width="248" align="center">Исходные требования</td><td width="150" align="center">Тип техники</td><td width="120" align="center">Энергосредство</td><td width="20" align="center">№</td><td width="120" align="center">Машина 2</td><td width="20" align="center">№</td><td width="120" align="center">Машина 3</td><td width="20" align="center">№</td><td width="120" align="center">Машина 4</td><td width="20" align="center">№</td><td width="120" align="center">Машина 5</td><td width="20" align="center">№</td></tr><tr height="27px" align="center" onmousedown="selectrow(this)"><td style="background-image:url(image/Aq3.png)" onclick="taddrow(this)" onmouseup="mup(this)"></td><td>1</td><td align="left"><input style=" width:242px; height:16px; border-width:0"  onchange="ret()" /></td><td><select style="width:71px" onchange="ret()"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" onchange="ret()" /></td><td><input style="width:142px; height:16px; border-width:0" onchange="ret()" /></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td></tr></tbody></table>';}
	if(document.getElementById('Q2') != null){document.getElementById('qt').innerHTML = '<table id="Q2" width="766px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25px" align="center"></td><td width="30px" align="center">№</td><td width="305px" align="center">Наименование</td><td width="203px" align="center">Количество (кг* на 1 Га)</td><td width="203px" align="center">Цена, руб. (за 1 кг)</td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)"  onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left" style="text-indent: 7.0pt">Семена, кг/га</td><td><input style=" width:170px; height:16px; border-width:0" onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)"  onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2</td><td align="left" style="text-indent: 7.0pt">Минеральные удобрения</td><td></td><td></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2.1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2.2</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2.3</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>3</td><td align="left" style="text-indent: 7pt">Химические средства защиты растений</td><td></td><td></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq3.png)" onclick="maddrow(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0"  onchange="ret()"/></td></tr></tbody></table>';nQ2();}
	
}//Функция очистки данных о технологии и обнуление таблиц
function sb(){
	var r = tv[ip()];
	
	r = r.split('|'); r = r.join('');
	r = r.split('$'); r = r.join('');
	r = r.split('!'); r = r.join('');
	r = r.replace('Семена,  кг/га', '');
	r = r.replace('Минеральные удобрения', '');
	r = r.replace('Химические  средства защиты растений', '');
	r = r.replace('Хим.  средства защиты растений', '');
	r = r.replace('undefined', '');
	
	if(r.length < 1){return true}
	else{return false}	
}//Функция проверки пустоты технологии
function lev(){
	var p = document.getElementById('tf2');if(p.src.indexOf('Ti22.png') > -1){fn120c(p)}
	var p = document.getElementById('tf3');if(p.src.indexOf('Ti32.png') > -1){fn130c(p)}
	var p = document.getElementById('tf4');if(p.src.indexOf('Ti42.png') > -1){fn140c(p)}
	var p = document.getElementById('tf5');if(p.src.indexOf('Ti52.png') > -1){fn150c(p)}
	var p = document.getElementById('tf6');if(p.src.indexOf('Ti62.png') > -1){fn160c(p)}
}//Функция обновления соответствующей таблице ИТК

//-----------------------------------------------------Вкладки технологий----------------------------------------------------

//Вкладки технологий
var psg = '<input type="button" value="." style="border-style:hidden; background-image:url(image/Pl0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)" onclick="pm(1)"><input type="button" value="Технология 1" style="border-style:hidden; background-image:url(image/Pbp3.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)"><input type="button" value="Технология 2" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)"><input type="button" value="Технология 3" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)"><input type="button" value="Технология 4" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)"><input type="button" value="Технология 5" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)"><input type="button" value="." style="border-style:hidden; background-image:url(image/Cr0.png); width:26px; height:24px; font-size:10px; color:rgba(255,255,255,0)" onclick="pcr()"><input type="button" value="." style="border-style:hidden; background-image:url(image/Pr0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)" onclick="pm(2)">'; //Переменная хранения панели вкладок
var ps = new Array(['<input type="button" value="." style="border-style:hidden; background-image:url(image/Pl0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)" onclick="pm(1)">'],['<input type="button" value="Технология 1" style="border-style:hidden; background-image:url(image/Pbp3.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)">'],['<input type="button" value="Технология 2" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)">'],['<input type="button" value="Технология 3" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)">'],['<input type="button" value="Технология 4" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)">'],['<input type="button" value="Технология 5" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)">'],['<input type="button" value="." style="border-style:hidden; background-image:url(image/Cr0.png); width:26px; height:24px; font-size:10px; color:rgba(255,255,255,0)" onclick="pcr()">'],['<input type="button" value="." style="border-style:hidden; background-image:url(image/Pr0.png); width:20px; height:24px; font-size:10px; color:rgba(255,255,255,0)" onclick="pm(2)">']);	//Массив вкладок технологий
function psn(){
	document.getElementById('menu2').innerHTML = psg;
} //Функция загрузки вкладок технологий
function pcr(){//par(document.getElementById('menu2').innerHTML);//формирование массива вкладок
	var sc = ps[ps.length-2]; var sr = ps[ps.length-1];ps.length = ps.length-2;
	ps[ps.length] = '<input type="button" value="Технология" style="border-style:hidden; background-image:url(image/Pbp0.png); width:107px; height:24px; font-size:10px; text-align:left" onclick="psel(this)" onmousemove="pmv(this,event)" onmouseout="pmo(this)">'.replace('Технология', 'Технология ' + parseInt(ps.length)); ps[ps.length] = sc; ps[ps.length] = sr;
	pm(2);
}//Функция добавления новой вкладки технологии
function pm(o){
	if(o == 2){ //alert(png() + '---' + pnk());//alert(ps[ps.length-4])
		if(png() > pnk()){
			var s = ps[0];var sc = ps[ps.length-2]; var sr = ps[ps.length-1];
			for(var i = pnk() - 3; i < pnk() + 2; i++){s += ps[i]};s+=sc+sr;
			document.getElementById('menu2').innerHTML = s; psg=s;//отображаем новую панель и новую переменную
		}
	}
	if(o == 1){
		if(pmg() < pmk()){//alert(pmg() + '---' + pmk());
			var s = ps[0];var sc = ps[ps.length-2]; var sr = ps[ps.length-1];
			for(var i = pmk() - 1; i < pmk() + 4; i++){s += ps[i]};s+=sc+sr;
			document.getElementById('menu2').innerHTML = s; psg=s;//отображаем новую панель и новую переменную
		}
	}
	psl();
}//Сдвиг вкладок технологий
function png(){//alert(ps[ps.length - 3]);//alert(ps.join());
	var s = "'" + ps[ps.length - 3] + "'";	var a = s.split(['Технология']);
	a = a[1].split(['"']); var g = parseInt(a[0]);
	return g;
}//Функция проверки последней технологии в массиве технологий
function pnk(){
	var a = psg.split(['>']); for(var i = 0; i < a.length - 1; i++){a[i] += '>'}//формируем массив кнопок в панели
	var s = a[a.length-4]; a = s.split(['Технология']); a = a[1].split(['"']); var k = parseInt(a[0]); //№тех в панели
	return k;
}//Функция проверки последней технологии в панели технологий
function pmg(){
	var s = "'" + ps[1] + "'";	var a = s.split(['Технология']);
	a = a[1].split(['"']); var g = parseInt(a[0]);
	return g;
}//Функция проверки первой технологии в массиве технологий
function pmk(){
	var a = psg.split(['>']); for(var i = 0; i < a.length - 1; i++){a[i] += '>'}//формируем массив кнопок в панели
	var s = a[1]; a = s.split(['Технология']); a = a[1].split(['"']); var k = parseInt(a[0]); //№тех в панели
	return k;
}//Функция проверки первой технологии в панели технологий
function psl(){
	if(png() > pnk()){
		var s = document.getElementById('menu2').innerHTML;
		s = s.replace('Pr0', 'Pr1');
		document.getElementById('menu2').innerHTML = s;
	}
	else{		
		var s = document.getElementById('menu2').innerHTML;
		s = s.replace('Pr1', 'Pr0');
		document.getElementById('menu2').innerHTML = s;
	}
	if(pmg() < pmk()){
		var s = document.getElementById('menu2').innerHTML;
		s = s.replace('Pl0', 'Pl1');
		document.getElementById('menu2').innerHTML = s;
	}
	else{		
		var s = document.getElementById('menu2').innerHTML;
		s = s.replace('Pl1', 'Pl0');
		document.getElementById('menu2').innerHTML = s;
	}
}//Выделение крайних стрелок если технологии существуют
function pmv(o,e){var x = e.offsetX; var y = e.offsetY
	
	//Если браузер фаерфокс
	if(brw == 'ff'){var coords = o.getBoundingClientRect();	x = parseInt(e.clientX - coords.left);
	y = parseInt(e.clientY - coords.top);}
	
	
	if(x > 80){//alert(o.style.backgroundImage);
		if(o.style.backgroundImage.indexOf('Pbp0') > 0)
		{o.style.backgroundImage = 'url("image/Pbp02.png")';
		if(brw == 'gc'){o.style.backgroundImage = 'url(image/Pbp02.png)';}
		}
		else if(o.style.backgroundImage.indexOf('Pbp3') > 0)
		{o.style.backgroundImage = 'url("image/Pbp4.png")'
		if(brw == 'gc'){o.style.backgroundImage = 'url(image/Pbp4.png)';}
		}
	}
	else{pmo(o)}
	
}//На наведение и отведение с крестика на вкладке технологий
function pmo(o){//alert(123);
	if(o.style.backgroundImage.indexOf('Pbp02') > 0)
	{o.style.backgroundImage = 'url("image/Pbp0.png")';
	if(brw == 'gc'){o.style.backgroundImage = 'url(image/Pbp0.png)';}
	}
	else if(o.style.backgroundImage.indexOf('Pbp4') > 0)
	{o.style.backgroundImage = 'url("image/Pbp3.png")';
	if(brw == 'gc'){o.style.backgroundImage = 'url(image/Pbp3.png)';}
	}
}//При отведении курсора с элемента управления
function pdel(o){
	tdel(); alert('Технология успещно очищена.');
}//Функция удаления вкладок
function psel(o){
	
	if(o.style.backgroundImage.indexOf('Pbp02') > 0 || o.style.backgroundImage.indexOf('Pbp4') > 0)
	{pdel(o)}
	else{
		if(document.getElementById('Q1') != null || document.getElementById('Q2') != null){ret()}
		var s = ps.join('$');s = s.replace('Pbp3','Pbp0');ps = s.split('$');//Обнуляем все изображения вкладок в массиве
		for(var k = 1; k < ps.length; k++){
			if(ps[k].indexOf(o.value + '"') < 0){ps[k] = ps[k].replace('Pbp3','Pbp0')}
			else{ps[k] = ps[k].replace('Pbp0','Pbp3')}
		}
	
		s = document.getElementById('menu2').innerHTML; var g; var a = s.split(['>']);
		for(var k = 0; k < a.length-1; k++){a[k] += '>'};
		for(var k = 1; k < 7; k++){if(a[k].indexOf(o.value) < 0){a[k] = a[k].replace('Pbp3','Pbp0')}
		else{a[k] = a[k].replace('Pbp0','Pbp3')}}
		psg = a.join('');
		document.getElementById('menu2').innerHTML = a.join('');
		sq();//Разворачивание технологии в массив и затем в таблицы
	}
}//Функция выделения вкладок технологий клик по вкладке

//-----------------------------------------------------Контекстное меню в технологиях----------------------------------------

//Функции контекстного меню
var bf = '';//Буфер обмена между таблицами службы Технологии
function tcut(){//alert('cut');
	ret();bf = '';
	var s = ''; var r;var a = tv[ip()].split('|');var c = a[1].split('!');var d = a[2].split('!');
	
	//Если это Операционная матрица технологий
	if(document.getElementById('Q1') != null){var q = document.getElementById('Q1');
		//1. запись в буфер
		for(var i = 1; i < q.rows.length; i++){var k = c[i-1].split('$'); var m = d[i-1].split('$');
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0){
				bf += k.join('$') + '$' + m.join('$') + '!';
			}
		};bf = bf.substring(-1,bf.length-1);
		//2. удаление строки из таблицы	
		for(var i = 1; i < q.rows.length; i++){
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0){
				q.deleteRow(i); a1.splice(i,1); i--;
				
				if(q.rows.length < 2){document.getElementById('qt').innerHTML = '<table id="Q1" width="1550px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="30px" align="center"></td><td width="25px" align="center">№</td><td width="250" align="center">Операция</td><td width="74" align="center">Год</td><td width="74" align="center">Дни</td><td width="74" align="center">Часы</td><td width="248" align="center">Исходные требования</td><td width="150" align="center">Тип техники</td><td width="120" align="center">Энергосредство</td><td width="20" align="center">№</td><td width="120" align="center">Машина 2</td><td width="20" align="center">№</td><td width="120" align="center">Машина 3</td><td width="20" align="center">№</td><td width="120" align="center">Машина 4</td><td width="20" align="center">№</td><td width="120" align="center">Машина 5</td><td width="20" align="center">№</td></tr><tr height="27px" align="center" onmousedown="selectrow(this)"><td id="ctm" style="background-image:url(image/Aq3.png)" onclick="taddrow(this)"></td><td>1</td><td align="left"><input style=" width:242px; height:16px; border-width:0" onchange="ret()"/></td><td><select style="width:71px" onchange="ret()"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" onchange="ret()"/></td><td><input style="width:142px; height:16px; border-width:0" onchange="ret()"/></td><td onclick="jk(this)"></td><td></td><td onclick="jk(this)"></td><td></td><td onclick="jk(this)"></td><td></td><td onclick="jk(this)"></td><td></td><td onclick="jk(this)"></td><td></td></tr></tbody></table>';}
			}
		}
		//Редактируем атрибуты последней строки
		var q = document.getElementById('Q1'); var i = q.rows.length;
		q.rows[i-1].setAttribute('onmousedown','selectrow(this)');
		q.rows[i-1].cells[0].setAttribute('onmouseup','mup(this)');
		q.rows[i-1].cells[0].setAttribute('onclick','taddrow(this)');
		q.rows[i-1].cells[0].style.backgroundImage = 'url("image/Aq4.png")';
		ret();
	}
	//Если это матрица материалов
	if(document.getElementById('Q2') != null){var q = document.getElementById('Q2');// c = a[3].split('!');
		// 1. Формируем массив копируемых значений в буфер
		for(var i = 1; i < q.rows.length; i++){//d = c[i].split('$');
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0 && q.rows[i].cells[3].innerHTML.indexOf('input') > -1){
				s+= a2[i][2] + '$' + a2[i][3] + '$' + a2[i][4] + '!';
			}; //alert(a2.length + '---' + q.rows.length + '---' + i + '---' + s);
		}; s = s.replace('Семена,  кг/га', ''); s = s.substring(-1,s.length-1); bf = s; 
		// 2. Удаляем выбранные строки
		for(var i = 1; i < q.rows.length; i++){	
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0 && q.rows[i].cells[2].innerHTML.indexOf('input') > -1){
				q.deleteRow(i); a2.splice(i,1); i--;
				
			}
		}
		// 3. Форматируем последнюю строку
		/*if(q.rows[q.rows.length-1].cells[2].innerHTML.indexOf('input') < 0){
			q.insertRow(q.rows.length);
			q.rows[q.rows.length-1].setAttribute('height','27');
			q.rows[q.rows.length-1].setAttribute('align','center');
			q.rows[q.rows.length-1].setAttribute('onmousedown','srQ2(this)');
			q.rows[q.rows.length-1].innerHTML = '<td style="background-image:url(image/Aq3.png)" onclick="maddrow(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td>';
		}*/
	}
	//alert(bf);
} //Вырезать				*
function tcopy(){//alert('copy')
	ret();bf = '';
	var s = ''; var r;var a = tv[ip()].split('|');var c = a[1].split('!');var d = a[2].split('!');
	
	//Если это Операционная матрица технологий
	if(document.getElementById('Q1') != null){var q = document.getElementById('Q1');
		//1. запись в буфер
		for(var i = 1; i < q.rows.length; i++){var k = c[i-1].split('$'); var m = d[i-1].split('$');
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0){
				bf += k.join('$') + '$' + m.join('$') + '!';
			}
		};bf = bf.substring(-1,bf.length-1);
		ret();//alert(bf);
	}
	//Если это матрица материалов
	if(document.getElementById('Q2') != null){var q = document.getElementById('Q2');// c = a[3].split('!');
		// 1. Формируем массив копируемых значений в буфер
		for(var i = 1; i < q.rows.length; i++){//d = c[i].split('$');
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0 && q.rows[i].cells[3].innerHTML.indexOf('input') > -1){
				s+= a2[i][2] + '$' + a2[i][3] + '$' + a2[i][4] + '!';
			}; //alert(a2.length + '---' + q.rows.length + '---' + i + '---' + s);
		}; s = s.replace('Семена,  кг/га', ''); s = s.substring(-1,s.length-1); bf = s;// alert(s); 
	}
} //Копировать				*
function tpaste(){//alert('paste')
	//alert(bf);
	var a = bf.split('!'); var m = a[0].split('$'); var d;
	if(document.getElementById('Q1') != null){var q = document.getElementById('Q1');
		if(m.length > 3){
			for(var k = 1; k < q.rows.length; k++){//alert(111);
				if(q.rows[k].innerHTML.indexOf('Aq2') > -1 || q.rows[k].innerHTML.indexOf('Aq3') > -1){//alert(123);
					
					for(var i = a.length-1; i > -1; i--){m = a[i].split('$');
						
						a1.splice(k+1, 0, new Array()); // добавляем в массив дополнительный элемент
					
						// Добавляем чистую строку
						q.insertRow(k);
						q.rows[k].setAttribute('height','27');
						q.rows[k].setAttribute('align','center');
						q.rows[k].setAttribute('onmousedown','selectrow(this)');
						q.rows[k].innerHTML = '<td style="background-image:url(image/Aq2.png)"  onmouseup="mup(this)" onmousedown="mdown(this)"></td><td></td><td align="left"><input style=" width:242px; height:16px; border-width:0"  onchange="ret()" /></td><td><select style="width:71px" onchange="ret()"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" onchange="ret()" /></td><td><input style="width:142px; height:16px; border-width:0" onchange="ret()" /></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td>';
						
						// Вставляем данные из буфера обмена
						q.rows[k].cells[2].firstChild.value = m[0];
						var t;if(m[1] == 'K'){t=1};if(m[1] == 'L'){t=2};if(m[1] == 'M'){t=3};
						q.rows[k].cells[3].firstChild.selectedIndex = t;
						q.rows[k].cells[4].firstChild.selectedIndex = parseInt(m[2]);
						q.rows[k].cells[5].firstChild.selectedIndex = parseInt(m[3]);
						q.rows[k].cells[6].firstChild.value = m[4];
						q.rows[k].cells[7].firstChild.value = m[5];
					}
					
					for(var i = 0; i < a.length; i++){m = a[i].split('$');
						if(m[6] != ''){d = m[6].split('\\');//alert(m[6]);
							q.rows[k+i].cells[8].innerHTML = d[2];
							q.rows[k+i].cells[9].innerHTML = d[23];
							a1[k+i][8] = d.join('\\');
						}						
						if(m[7] != ''){d = m[7].split('\\');	
							q.rows[k+i].cells[10].innerHTML = d[2];
							q.rows[k+i].cells[11].innerHTML = d[23]; 
							a1[k+i][10] = d.join('\\');
						}
						if(m[8] != ''){d = m[8].split('\\');
							q.rows[k+i].cells[12].innerHTML = d[2];
							q.rows[k+i].cells[13].innerHTML = d[23];
							a1[k+i][12] = d.join('\\');
						}
						if(m[9] != ''){d = m[9].split('\\');
							q.rows[k+i].cells[14].innerHTML = d[2];
							q.rows[k+i].cells[15].innerHTML = d[23];
							a1[k+i][14] = d.join('\\');
						}
						if(m[10] != ''){d = m[10].split('\\');
							q.rows[k+i].cells[16].innerHTML = d[2];
							q.rows[k+i].cells[17].innerHTML = d[23];
							a1[k+i][16] = d.join('\\');
						}
						
					}
					// Заключительное форматирование
					selectrow(q.rows[k]); upQ1(); nq(q); ret(); break;
				}
			}
		}	
	}
	if(document.getElementById('Q2') != null){var q = document.getElementById('Q2');
		if(m.length < 4){
			for(var k = 1; k < q.rows.length; k++){//alert(111);
				if(q.rows[k].innerHTML.indexOf('Aq2') > -1 || q.rows[k].innerHTML.indexOf('Aq3') > -1){//alert(123);
					for(var i = a.length-1; i > -1; i--){m = a[i].split('$');
						// Добавляем чистую строку
						q.insertRow(k);
						q.rows[k].setAttribute('height','27');
						q.rows[k].setAttribute('align','center');
						q.rows[k].setAttribute('onmousedown','srQ2(this)');
						q.rows[k].innerHTML = '<td style="background-image:url(image/Aq2.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td></td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td>';
						// Вставляем данные из буфера обмена
						q.rows[k].cells[2].firstChild.value = m[0];
						q.rows[k].cells[3].firstChild.value = m[1];
						q.rows[k].cells[4].firstChild.value = m[2];
						
						
					};break;
				}
			}
			srQ2(q.rows[k]);
			upQ2();//Присиваиваем контекстное меню первому столбцу таблицы материалы Q2
			nQ2();//Нумерация первого столбца
			ret();
		}
	}
} //Вставить				*
function tedit(){//alert('edit');
	//alert(tv[ip()]);
	if(document.getElementById('Q1') != null){var q = document.getElementById('Q1');
		for(var i = 1; i < q.rows.length; i++){
			if(q.rows[i].cells[0].style.backgroundImage.indexOf('Aq2') > 0 || q.rows[i].cells[0].style.backgroundImage.indexOf('Aq3') > 0){
				q.insertRow(i);
				q.rows[i].setAttribute('height','27');
				q.rows[i].setAttribute('align','center');
				q.rows[i].setAttribute('onmousedown','selectrow(this)');
				q.rows[i].innerHTML = '<td style="background-image:url(image/Aq2.png)" onmousedown="mdown(this)" onmouseup="mup(this)"></td><td></td><td align="left"><input style=" width:242px; height:16px; border-width:0"  onchange="ret()" /></td><td><select style="width:71px" onchange="ret()"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" onchange="ret()" /></td><td><input style="width:142px; height:16px; border-width:0" onchange="ret()" /></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td>';
				
				a1.splice(i,0, new Array());
				
				selectrow(q.rows[i]);
				upQ1();
				nq(q);
				ret();
				break;
			}
		}	
	}
	if(document.getElementById('Q2') != null){var q = document.getElementById('Q2');
		for(var i = 1; i < q.rows.length; i++){
			if(q.rows[i].cells[0].style.backgroundImage.indexOf('Aq2') > 0 || q.rows[i].cells[0].style.backgroundImage.indexOf('Aq3') > 0){
				if(i == 1){i = 2}
				if(q.rows[i].cells[1].innerHTML.length == 1){i+=1}
				
				
				q.insertRow(i);
				q.rows[i].setAttribute('height','27');
				q.rows[i].setAttribute('align','center');
				q.rows[i].setAttribute('onmousedown','srQ2(this)');
				q.rows[i].innerHTML = '<td style="background-image:url(image/Aq2.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td></td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0" onchange="ret()"/></td><td><input style=" width:170px; height:16px; border-width:0" onchange="ret()"/></td>';
				
				srQ2(q.rows[i]);
				upQ2();//Присиваиваем контекстное меню первому столбцу таблицы материалы Q2
				nQ2();//Нумерация первого столбца
				ret();
				break;
			}
		}	
	}
	//alert(tv[ip()]);
} //Добавить ячейки 		*
function tdelete(){//alert('delete')
	if(document.getElementById('Q1') != null){var q = document.getElementById('Q1');
	
		//1. удаление строки из таблицы	
		for(var i = 1; i < q.rows.length; i++){
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0){
				q.deleteRow(i); a1.splice(i,1); i--;
				if(q.rows.length < 2){document.getElementById('qt').innerHTML = '<table id="Q1" width="1550px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="30px" align="center"></td><td width="25px" align="center">№</td><td width="250" align="center">Операция</td><td width="74" align="center">Год</td><td width="74" align="center">Дни</td><td width="74" align="center">Часы</td><td width="248" align="center">Исходные требования</td><td width="150" align="center">Тип техники</td><td width="120" align="center">Энергосредство</td><td width="20" align="center">№</td><td width="120" align="center">Машина 2</td><td width="20" align="center">№</td><td width="120" align="center">Машина 3</td><td width="20" align="center">№</td><td width="120" align="center">Машина 4</td><td width="20" align="center">№</td><td width="120" align="center">Машина 5</td><td width="20" align="center">№</td></tr><tr height="27px" align="center" onmousedown="selectrow(this)"><td id="ctm" style="background-image:url(image/Aq3.png)" onclick="taddrow(this)"></td><td>1</td><td align="left"><input style=" width:242px; height:16px; border-width:0" onchange="ret()"/></td><td><select style="width:71px" onchange="ret()"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" onchange="ret()"/></td><td><input style="width:142px; height:16px; border-width:0" onchange="ret()"/></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td></tr></tbody></table>';}
				
			}
		}
		
		//Редактируем атрибуты последней строки
		var q = document.getElementById('Q1'); var i = q.rows.length;
		q.rows[i-1].setAttribute('onmousedown','selectrow(this)');
		q.rows[i-1].cells[0].setAttribute('onmouseup','mup(this)');
		q.rows[i-1].cells[0].setAttribute('onclick','taddrow(this)');
		q.rows[i-1].cells[0].style.backgroundImage = 'url("image/Aq4.png")';
		
		//selectrow(q.rows[i]);
		nq(q);
		ret();
	}

	if(document.getElementById('Q2') != null){var q = document.getElementById('Q2'); //Если это матрица материалов
		for(var i = 1; i < q.rows.length; i++){
			//if(q.rows[i].cells[0].style.backgroundImage.indexOf('Aq2') > 0 || q.rows[i].cells[0].style.backgroundImage.indexOf('Aq3') > 0){
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0){

				if(q.rows[i].cells[1].innerHTML.length > 1){
					q.deleteRow(i); a2.splice(i,1); i--; 
				}
				else{
					if(i == 1){i = 2}; i++;
					q.deleteRow(i); a2.splice(i,1); i--; 
				}
			}
		}
		
		//Редактируем атрибуты последней строки
		var q = document.getElementById('Q2'); var i = q.rows.length;
		q.rows[i-1].setAttribute('onmousedown','srQ2(this)');
		q.rows[i-1].cells[0].setAttribute('onmouseup','muQ2(this)');
		q.rows[i-1].cells[0].setAttribute('onclick','maddrow(this)');
		q.rows[i-1].cells[0].style.backgroundImage = 'url("image/Aq4.png")';
		
		
		nQ2();
		ret();
	}
} //Удалить 				*
function tquit(){//alert('quit')
	if(document.getElementById('Q1') != null){var q = document.getElementById('Q1');
		for(var i = 1; i < q.rows.length; i++){
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0){
				for(var j = 2; j < 18; j++){
					if(q.rows[i].cells[j].innerHTML.indexOf('input') > 0){
						q.rows[i].cells[j].firstChild.value = '';
					}
					else if(q.rows[i].cells[j].innerHTML.indexOf('select') > 0){
						q.rows[i].cells[j].firstChild.selectedIndex = 0;
					}
					else{q.rows[i].cells[j].innerHTML = ''}
				}
			}
		}
		ret();	
	}
	if(document.getElementById('Q2') != null){var q = document.getElementById('Q2');
		for(var i = 1; i < q.rows.length; i++){
			if(q.rows[i].style.backgroundColor.indexOf('173') > 0){
				for(var j = 2; j < 5; j++){
					if(q.rows[i].cells[j].innerHTML.indexOf('input') > 0){
						q.rows[i].cells[j].firstChild.value = '';
					}
				}
			}
		}
		ret();	
	}
} //Очистить содержимое	*

//-----------------------------------------------------Обработка таблиц  ИТК-------------------------------------------------

function rex(){
	var s = tv[ip()]; var r = s.split(['|']);var m = r[2].split(['!']);var n = r[1].split(['!']);var k = 0;var a;var b;
	for(var i = 0; i < m.length; i++){a = m[i].split(['$']); b = n[i].split(['$']); 
		for(var j = 0; j < 5; j++){
			if(m[j] != ''){
				if(b[2]!='' && b[3]!='' && b[4]!='' && b[5]!=''){break}
			}
			else if(j==4){}
		}
	}
}//Оптимизация машино тракторного парка

function Q1(){
	var t = document.getElementById('qt'); t.innerHTML = '<table id="Q1" width="1550px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="30px" align="center"></td><td width="25px" align="center">№</td><td width="250" align="center">Операция</td><td width="74" align="center">Год</td><td width="74" align="center">Дни</td><td width="74" align="center">Часы</td><td width="248" align="center">Исходные требования</td><td width="150" align="center">Тип техники</td><td width="120" align="center">Энергосредство</td><td width="20" align="center">№</td><td width="120" align="center">Машина 2</td><td width="20" align="center">№</td><td width="120" align="center">Машина 3</td><td width="20" align="center">№</td><td width="120" align="center">Машина 4</td><td width="20" align="center">№</td><td width="120" align="center">Машина 5</td><td width="20" align="center">№</td></tr><tr height="27px" align="center" onmousedown="selectrow(this)"><td id="ctm" style="background-image:url(image/Aq3.png)" onclick="taddrow(this)"></td><td>1</td><td align="left"><input style=" width:242px; height:16px; border-width:0" onchange="ret()"/></td><td><select style="width:71px" onchange="ret()"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" onchange="ret()"/></td><td><input style="width:142px; height:16px; border-width:0" onchange="ret()"/></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td></tr></tbody></table>';
	//a1[document.getElementById('Q1').rows.length-1] = new Array();
	ex(); // Согласование таблиц массивам
	ext();// Развертывание массива технологий в таблицы
}// Функция создания таблицы Q1 "Операции"
function Q2(){
	var t = document.getElementById('qt'); t.innerHTML = '<table id="Q2" width="766px" class="MsoNormal" style="border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25px" align="center"></td><td width="30px" align="center">№</td><td width="305px" align="center">Наименование</td><td width="203px" align="center">Количество (кг* на 1 Га)</td><td width="203px" align="center">Цена, руб. (за 1 кг)</td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)"  onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left" style="text-indent: 7.0pt">Семена, кг/га</td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)"  onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2</td><td align="left" style="text-indent: 7.0pt">Минеральные удобрения</td><td></td><td></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2.1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2.2</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>2.3</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>3</td><td align="left" style="text-indent: 7pt">Химические средства защиты растений</td><td></td><td></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr><tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq3.png)" onclick="maddrow(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr></tbody></table>';
	upQ2();//Присиваиваем контекстное меню первому столбцу таблицы материалы Q2
	nQ2(); //Нумерация первого столбца
	ex(); //Расширяем массив технологий
	sq(); //Развертывание технологии или ее запись
	
}// Функция создания таблицы Q2 "Материалы"
function Q3(){
	document.getElementById('qt').innerHTML = '<table id="Q3" width="895px" class="MsoNormal" style="border-collapse: collapse; font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25px" align="center">№</td><td width="250" align="center">Операция</td><td width="74" align="center">Год</td><td width="74" align="center">Дни</td><td width="74" align="center">Часы</td><td width="248" align="center">Исходные требования</td><td width="150" align="center">Тип техники</td></tr></tbody></table>';
	//addrowQ3(); addrowQ3(); addrowQ3(); addrowQ3(); addrowQ3(); addrowQ3(); addrowQ3();
}// Функция создания таблицы Q3 "ИТК - 1"
function Q4(){
	document.getElementById('qt').innerHTML = '<table id="Q4" width="1075px" class="MsoNormal" align="left" style="padding-left:5; border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25px" align="center">№</td><td width="300" align="center">Машинная операция</td><td width="300" align="center">Состав агрегата</td><td width="75" align="center">Wэ, га/ч</td><td width="75" align="center">Дни</td><td width="75" align="center">Часы</td><td width="75" align="center">План, час</td><td width="75" align="center">ТМуд, шт/га</td><td width="75" align="center">Кол. агрег.</td><td width="75" align="center">Факт, час</td></tr></tbody></table>';
	//addrowQ4(); addrowQ4(); addrowQ4(); addrowQ4(); addrowQ4(); addrowQ4(); addrowQ4();
}// Функция создания таблицы Q4 "ИТК - 2"
function Q5(){
	document.getElementById('qt').innerHTML = '<table id="Q5" width="765px" class="MsoNormal" align="left" style="padding-left:5; border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25px" align="center">№</td><td width="225" align="center">Марка</td><td width="75" align="center">Кол-во, шт</td><td width="75" align="center">Цена, руб.</td><td width="75" align="center">ЧЭЗ, руб/ч</td><td width="75" align="center">Руб/га</td><td width="75" align="center">Сумма, руб.</td><td width="75" align="center">Загрузка, час</td><td width="75" align="center">Загрузка, %</td></tr></tbody></table>';
	//addrowQ5();addrowQ5();addrowQ5();addrowQ5();addrowQ5();addrowQ5();addrowQ5();
}// Функция создания таблицы Q5 "ИТК - 3"
function Q6(){
	document.getElementById('qt').innerHTML = '<table id="Q6" width="1300px" class="MsoNormal" align="left" style="padding-left:8px; border-collapse: collapse; font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25px" align="center">№</td><td width="300" align="center">Наименование операций</td><td width="300" align="center">Состав агрегата</td><td width="75" align="center">Wэ, га/ч</td><td width="75" align="center">ЧЭЗ, руб/ч</td><td width="75" align="center">Топливо, кг/га</td><td width="75" align="center">ГСМ, руб/га</td><td width="75" align="center">Зарплата, руб/га</td><td width="75" align="center">Трактор, руб/га</td><td width="75" align="center">Машины, руб/га</td><td width="75" align="center">Всего, руб/га</td><td width="75" align="center">Вес, %</td></tr></tbody></table>';
	//addrowQ6();addrowQ6();addrowQ6();addrowQ6();addrowQ6();addrowQ6();addrowQ6();
}// Функция создания таблицы Q6 "ИТК - 4"
function Q7(){
	document.getElementById('qt').innerHTML = '<table id="Q7" width="765px" class="MsoNormal" align="left" style="padding-left:5; border-collapse: collapse; border-color:rgb(204,204,204); font-size:9.0pt; font-family:Microsoft Sans Serif" border="1"><tbody><tr height="30px" style="background-image:url(image/tbgz.png);"><td width="25px" align="center">№</td><td width="440" align="center">Наименование</td><td width="75" align="center">Количество, шт</td><td width="75" align="center">Цена, руб/ед</td><td width="75" align="center">Сумма, руб/га</td><td width="75" align="center">Вес, %</td></tr></tbody></table>';
	//addrowQ7();addrowQ7();addrowQ7();addrowQ7();addrowQ7();addrowQ7();addrowQ7();
}// Функция создания таблицы Q7 "ИТК - 5"

//Q7
function addrowQ7(){
	var t = document.getElementById('Q7').innerHTML;
	var s = t.split(['</tr>']);
	s[s.length-1] = s[s.length-1] + '</tr><tr height="27px"><td align="center">№</td><td align="left" style="padding-left:8px">Наименование</td><td align="center">Количество, шт</td><td align="center">Цена, руб/ед</td><td align="center">Сумма, руб/га</td><td  align="center">Вес, %</td>';
	document.getElementById('Q7').innerHTML = s.join('</tr>');
	
	no(document.getElementById('Q7'));//Нумерация
}//Функция добавления строк в таблицу ИТК-5 Q7

//Q6
function addrowQ6(){
	var t = document.getElementById('Q6').innerHTML;
	var s = t.split(['</tr>']);
	s[s.length-1] = '<tr height="27px"><td align="center">№</td><td align="left" style="padding-left:8px">Наименование операций</td><td align="left" style="padding-left:8px">Состав агрегата</td><td align="center">Wэ, га/ч</td><td align="center">ЧЭЗ, руб/ч</td><td align="center">Топливо, кг/га</td><td align="center">ГСМ, руб/га</td><td align="center">Зарплата, руб/га</td><td align="center">Трактор, руб/га</td><td align="center">Машины, руб/га</td><td align="center">Всего, руб/га</td><td align="center">Вес, %</td></tr>' + s[s.length-1];
	document.getElementById('Q6').innerHTML = s.join('</tr>');
	
	no(document.getElementById('Q6'));//Нумерация
}//Функция добавления строк в таблицу ИТК-4 Q6

//Q5
function addrowQ5(){
	var t = document.getElementById('Q5').innerHTML;
	var s = t.split(['</tr>']);
	s[s.length-1] = '<tr height="27px"><td align="center">№</td><td align="left" style="padding-left:9px"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td></tr>' + s[s.length-1];
	document.getElementById('Q5').innerHTML = s.join('</tr>');
	
	no(document.getElementById('Q5'));//Нумерация
}//Функция добавления строк в таблицу ИТК-3 Q5

//Q4
function addrowQ4(){
	var t = document.getElementById('Q4').innerHTML;
	var s = t.split(['</tr>']);
	s[s.length-1] = '<tr height="27px"><td width="25px" align="center">№</td><td align="left" style="padding-left:8px">dfghdfgh</td><td align="left" style="padding-left:8px">dffghdfgh</td><td align="center">fghdfghg</td><td align="center">fghdfgh</td><td align="center">dfghdfghdfg</td><td align="center">dfghfdgh</td><td align="center"></td><td align="center">dfghdfgh</td><td align="center">dfghdfgh</td></tr>' + s[s.length-1];
	document.getElementById('Q4').innerHTML = s.join('</tr>');
	
	no(document.getElementById('Q4'));//Нумерация
}//Функция добавления строк в таблицу ИТК-2 Q4

//Q3
function addrowQ3(){
	var t = document.getElementById('Q3').innerHTML;
	var s = t.split(['</tr>']);
	s[s.length-1] = '<tr height="27px"><td align="center">ghjfghj</td><td align="left" style="padding-left:8px">tyutyu</td><td align="center">qwerqwer</td><td align="center">zxvxcvv</td><td align="center">jkl;kl;</td><td align="left" style="padding-left:8px">dadafsdsf</td><td align="left" style="padding-left:8px">ergberbr</td></tr>' + s[s.length-1];
	document.getElementById('Q3').innerHTML = s.join('</tr>');
	
	no(document.getElementById('Q3'));//Нумерация
}//Функция добавления строк в таблицу ИТК-1 Q3
function no(o){
	var R = o.rows;	var r;
	for(var i = 1; i < R.length; i++){r = R[i]; r.cells[0].innerHTML = i;}
}//Нумерация строк в таблицах ИТК

//Q2
function maddrow(o){
	var i = o.parentNode.rowIndex + 1;//alert(i);
	zrQ2();//Обнуляем все строки
	
	var t = document.getElementById('Q2');
	//Добавляем и редактируем новую строку
	t.insertRow(i);
	t.rows[i].setAttribute('height','27');
	t.rows[i].setAttribute('align','center');
	t.rows[i].setAttribute('onmousedown','srQ2(this)');
	t.rows[i].innerHTML = '<td style="background-image:url(image/Aq2.png)" onclick="maddrow(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td>';
	
	srQ2(t.rows[i]);
	
	//Редактируем атрибуты предыдущей строки
	t.rows[i-1].setAttribute('onmousedown','srQ2(this)')
	t.rows[i-1].cells[0].setAttribute('onmousedown','mdQ2(this)')
	t.rows[i-1].cells[0].setAttribute('onmouseup','muQ2(this)')
	t.rows[i-1].cells[0].setAttribute('onclick','')
	
	t.rows[i-1].cells[0].style.backgroundImage = 'url("image/Aq.png")';
	
	/*
	var s = t.split(['</tr>']);
	s[i] = '<tr height="27px" align="center" onmousedown="srQ2(this)"><td style="background-image:url(image/Aq2.png)" onmousedown="mdQ2(this)" onmouseup="muQ2(this)"></td><td>1</td><td align="left"><input style=" width:280px; height:16px; border-width:0; margin-left: 7pt" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td><td><input style=" width:170px; height:16px; border-width:0" /></td></tr>' + s[i];
	
	document.getElementById('Q2').innerHTML = s.join('</tr>');
	*/
	upQ2();//Присиваиваем контекстное меню первому столбцу таблицы материалы Q2
	nQ2();//Нумерация первого столбца
	ex();//Согласование массивов
}//Добавить строку в Материалы Q2
function nQ2(){
	var R = document.getElementById('Q2').rows; var r; var n = 0; var s; var A;
	for(var i = 1; i < R.length; i++){r = R[i];
		if(r.cells[2].firstChild.type == undefined){n+=1; r.cells[1].innerHTML = n;}
		else{s = R[i-1];
			if(s.cells[1].innerHTML == '2' || s.cells[1].innerHTML == '3'){
				A = (s.cells[1].innerHTML + '.0').split(['.']);
				r.cells[1].innerHTML = A[0] + '.' + (parseInt(A[1]) + 1); }
			else{A = (s.cells[1].innerHTML).split(['.']);r.cells[1].innerHTML = A[0] + '.' + (parseInt(A[1]) + 1)}	
		}		
	}
}//Функция нумерации таблицы Q2
function upQ2(){
	if(document.getElementById('Q2') != null){
		for(var i = 1; i < document.getElementById('Q2').rows.length; i++){
			var R = document.getElementById('Q2').rows;
			var r = R[i];
			var o = r.cells[0];
			//Блок работы с контекстным меню в технлогиях
			// Show menu when #myDiv is clicked
			$(o).contextMenu({menu: 'myMenu'},	function (action, el, pos) {
									
				if(action == 'cut'){tcut()}
				if(action == 'copy'){tcopy()}
				if(action == 'paste'){tpaste()}
				if(action == 'edit'){tedit()}
				if(action == 'delete'){tdelete()}
				if(action == 'quit'){tquit()}					
									
			});
			// Show menu when a list item is clicked
			$("#myList UL LI").contextMenu({menu: 'myMenu'}, function (action, el, pos) {alert(
									'Action: ' + action + '\n\n' +
									'Element text: ' + $(el).text() + '\n\n' +
									'X: ' + pos.x + '  Y: ' + pos.y + ' (relative to element)\n\n' +
									'X: ' + pos.docX + '  Y: ' + pos.docY + ' (relative to document)'
									)});
		}
	}
}//Функция обновления контекстного меню при добавлении или изменении строк таблицы Q2
function zrQ2(){
	//Обнуляем все строки кроме последней на пустые ячейки
	for(var k = 1; k < document.getElementById('Q2').rows.length; k++)
	{
		var R = document.getElementById('Q2').rows;	var r = R[k];//alert(r.cells[0].style.backgroundImage);
		if(r.cells[0].style.backgroundImage == 'url("image/Aq2.png")')
		{r.cells[0].style.backgroundImage = 'url("image/Aq.png")'}
		
		//Если Хром
		if(brw == 'gc'){
		if(r.cells[0].style.backgroundImage == 'url(image/Aq2.png)')
		{r.cells[0].style.backgroundImage = 'url(image/Aq.png)'}}
		
	}
	//Обнуляем последнюю строку на звездочку
	R = document.getElementById('Q2').rows;	r = R[document.getElementById('Q2').rows.length - 1];
	r.cells[0].style.backgroundImage = 'url("image/Aq4.png")';
	
	//Если Хром
	if(brw == 'gc'){r.cells[0].style.backgroundImage = 'url(image/Aq4.png)';}
	
}//Функция обнуления стрелок Q2
function zwQ2(){
	//Обнуляем все строки кроме последней на пустые ячейки
	for(var k = 1; k < document.getElementById('Q2').rows.length; k++)
	{
		var R = document.getElementById('Q2').rows; var r = R[k];
		if(r.style.backgroundColor != ''){r.style.backgroundColor = '';
		if(r.cells[4].innerHTML.indexOf('<input') > -1){r.cells[4].firstChild.style.backgroundColor = '';}
		if(r.cells[3].innerHTML.indexOf('<input') > -1){r.cells[3].firstChild.style.backgroundColor = '';}
		if(r.cells[2].innerHTML.indexOf('<input') > -1){r.cells[2].firstChild.style.backgroundColor = '';}
		}
	}
}//Функция обнуления выделенных строк Q2
function srQ2(o){var i = o.rowIndex;
	if(ri[0] < 1){zwQ2()};//alert(ri[0] + '---' + ri[1]);//Проверка на обнуление выделенных строк;)
	if(i > 0){zrQ2();//Обнуление стрелок
	var R = document.getElementById('Q2').rows;	var r = R[i];
	r.style.backgroundColor = '#ffdead';
	
	if(i == R.length - 1){r.cells[0].style.backgroundImage = 'url("image/Aq3.png")';}
	else{r.cells[0].style.backgroundImage = 'url("image/Aq2.png")';}
		
	if(r.cells[4].innerHTML.indexOf('<input') > -1){r.cells[4].firstChild.style.backgroundColor = '#ffdead';}
	if(r.cells[3].innerHTML.indexOf('<input') > -1){r.cells[3].firstChild.style.backgroundColor = '#ffdead';}
	if(r.cells[2].innerHTML.indexOf('<input') > -1){r.cells[2].firstChild.style.backgroundColor = '#ffdead';}
	
	}
}//Выделение строк в Q2
function mdQ2(o){
	ri[0] = o.parentNode.rowIndex;
}//На нажатие мыши по управляющей ячейке таблицы Q2
function muQ2(o){
	ri[1] = o.parentNode.rowIndex; var R = document.getElementById('Q2').rows; 
	for(var i = parseInt(ri[0]); i < parseInt(ri[1]) + 1; i++){srQ2(R[i]);}
	ri = new Array([0],[0]);//Обнуление массива
}//На отпускание кнопки мыши на управляющей ячейке Q2

//Q1
function taddrow(e){
	var i = e.parentNode.rowIndex+1;
	zeroing();//Обнуляем все строки
	
	var t = document.getElementById('Q1');
	
	//Добавляем и редактируем новую строку
	t.insertRow(i);
	t.rows[i].setAttribute('height','27');
	t.rows[i].setAttribute('align','center');
	t.rows[i].setAttribute('onmousedown','selectrow(this)');
	t.rows[i].innerHTML = '<td style="background-image:url(image/Aq2.png)" onclick="taddrow(this)" onmouseup="mup(this)"></td><td></td><td align="left"><input style=" width:242px; height:16px; border-width:0"  onchange="ret()" /></td><td><select style="width:71px" onchange="ret()"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px" onchange="ret()"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" onchange="ret()" /></td><td><input style="width:142px; height:16px; border-width:0" onchange="ret()" /></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td><td class="cursor" onclick="jk(this)"></td><td></td>';
	
	selectrow(t.rows[i]);
	
	//Редактируем атрибуты предыдущей строки
	t.rows[i-1].setAttribute('onmousedown','selectrow(this)')
	t.rows[i-1].cells[0].setAttribute('onmousedown','mdown(this)')
	t.rows[i-1].cells[0].setAttribute('onmouseup','mup(this)')
	t.rows[i-1].cells[0].setAttribute('onclick','')
	
	t.rows[i-1].cells[0].style.backgroundImage = 'url("image/Aq.png")';
	

	
	/*
	var t = document.getElementById('Q1').innerHTML;
	var s = t.split(['</tr>']);
	s[i] = '<tr height="27px" align="center" onmousedown="selectrow(this)"><td id="ctm" style="background-image:url(image/Aq2.png)" onmousedown="mdown(this)" onmouseup="mup(this)"></td><td>44</td><td align="left"><input style=" width:242px; height:16px; border-width:0" /></td><td><select style="width:71px"><option></option><option>K</option><option>L</option><option>M</option></select></td><td><select style="width:71px"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><select style="width:71px"><option></option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option></select></td><td><input style=" width:238px; height:16px; border-width:0" /></td><td><input style="width:142px; height:16px; border-width:0" /></td><td onclick="jk(this)">Энергосредство</td><td></td><td onclick="jk(this)">Машина 1</td><td></td><td onclick="jk(this)">Машина 2</td><td></td><td onclick="jk(this)">Машина 3</td><td></td><td onclick="jk(this)">Машина 4</td><td></td></tr>' + s[i];
	
	document.getElementById('Q1').innerHTML = s.join('</tr>');
	*/
	
	
	upQ1(); //Присваиваем каждой первой ячейке контекстное меню
	nq(document.getElementById('Q1')); //Нумеруем первый столбец
	ex(); //Расширяем массив данных о технологии
}//Добавить строку в оперционную матрицу технологий Q1
function nq(o){;var R = o.rows;	var r;
	for(var i = 1; i < R.length; i++){r = R[i]; r.cells[1].innerHTML = i;}
}//Функция нумерации таблицы Q1
function upQ1(){
	if(document.getElementById('Q1') != null){
		for(var i = 1; i < document.getElementById('Q1').rows.length; i++){
			var R = document.getElementById('Q1').rows;
			var r = R[i];
			var o = r.cells[0];
			//Блок работы с контекстным меню в технлогиях
			// Show menu when #myDiv is clicked
			$(o).contextMenu({menu: 'myMenu'},	function (action, el, pos) {
									
				if(action == 'cut'){tcut()}
				if(action == 'copy'){tcopy()}
				if(action == 'paste'){tpaste()}
				if(action == 'edit'){tedit()}
				if(action == 'delete'){tdelete()}
				if(action == 'quit'){tquit()}					
									
			});
			// Show menu when a list item is clicked
			$("#myList UL LI").contextMenu({menu: 'myMenu'}, function (action, el, pos) {alert(
									'Action: ' + action + '\n\n' +
									'Element text: ' + $(el).text() + '\n\n' +
									'X: ' + pos.x + '  Y: ' + pos.y + ' (relative to element)\n\n' +
									'X: ' + pos.docX + '  Y: ' + pos.docY + ' (relative to document)'
									)});
			}	
	}
}//Функция обновления контекстного меню при добавлении или изменении строк таблицы Q1
function zeroing(){
	//Обнуляем все строки кроме последней на пустые ячейки
	for(var k = 1; k < document.getElementById('Q1').rows.length; k++)
	{
		var R = document.getElementById('Q1').rows;	var r = R[k];
		if(r.cells[0].style.backgroundImage == 'url("image/Aq2.png")')
		{r.cells[0].style.backgroundImage = 'url("image/Aq.png")'}
		
		//Если Хром
		if(brw == 'gc'){
		if(r.cells[0].style.backgroundImage == 'url(image/Aq2.png)')
		{r.cells[0].style.backgroundImage = 'url(image/Aq.png)'}}
		
	}
	//Обнуляем последнюю строку на звездочку
	R = document.getElementById('Q1').rows;	r = R[document.getElementById('Q1').rows.length - 1];
	r.cells[0].style.backgroundImage = 'url("image/Aq4.png")';
	
	//Если Хром
	if(brw == 'gc'){r.cells[0].style.backgroundImage = 'url(image/Aq4.png)';}
	
}//Функция обнуления стрелок
function zerowing(){
	//Обнуляем все строки кроме последней на пустые ячейки
	for(var k = 1; k < document.getElementById('Q1').rows.length; k++)
	{
		var R = document.getElementById('Q1').rows;	var r = R[k]; r.style.backgroundColor = '#ffffff';
		r.cells[2].firstChild.style.backgroundColor = '';
		r.cells[6].firstChild.style.backgroundColor = '';
		r.cells[7].firstChild.style.backgroundColor = '';
	
	}
}//Функция обнуления выделенных строк
function selectrow(o){var i = o.rowIndex;//alert(i);
	if(ri[0] < 1){zerowing()}//Проверка на обнуление выделенных строк;)
	if(i > 0){zeroing();
	var R = document.getElementById('Q1').rows;	var r = R[i];
	r.style.backgroundColor = '#ffdead';
	r.cells[2].firstChild.style.backgroundColor = '#ffdead';
	r.cells[6].firstChild.style.backgroundColor = '#ffdead';
	r.cells[7].firstChild.style.backgroundColor = '#ffdead';
	
	if(i == R.length - 1){r.cells[0].style.backgroundImage = 'url("image/Aq3.png")';}
	else{r.cells[0].style.backgroundImage = 'url("image/Aq2.png")';}
	}
	//alert(ri[0]);alert(ri[1]);
}//Выделение строк в Q1
function mdown(o){ri[0] = o.parentNode.rowIndex;}//На нажатие мыши по управляющей ячейке таблицы Q1
function mup(o){
	ri[1] = o.parentNode.rowIndex; //alert(ri[0] + "   " + ri[1]);
	for(var i = parseInt(ri[0]); i < parseInt(ri[1]) + 1; i++){selectrow(document.getElementById('Q1').rows[i])}
	ri = new Array([0],[0]);//Обнуление массива
}//На отпускание кнопки мыши на управляющей ячейке Q1
var ri = new Array([0],[0]);//Массив индексов начальной выделенной строки и конечной выделенной строки

//---------------------------------------------------------------------------------------------------------------------------

function fn00a(e){e.src = "image/Pi01.png"};function fn00b(e){e.src = "image/Pi00.png"};
function fn10a(e){e.src = "image/Pi11.png"};function fn10b(e){e.src = "image/Pi10.png"};
function fn20a(e){e.src = "image/Pi21.png"};function fn20b(e){e.src = "image/Pi20.png"}; //Ваще чот ни откуда функции...
function fn100a(e){if(e.src != "image/Ti02.png"){e.src = "image/Ti01.png"}};
function fn100b(e){if(e.src != "image/Ti02.png"){e.src = "image/Ti00.png"}};function fn100c(e){tiz(); e.src = "image/Ti02.png"; Q1();};//Операции
function fn110a(e){if(e.src != "image/Ti12.png"){e.src = "image/Ti11.png"}};
function fn110b(e){if(e.src != "image/Ti12.png"){e.src = "image/Ti10.png"}};function fn110c(e){tiz(); e.src = "image/Ti12.png"; Q2();};//Материалы
function fn120a(e){if(e.src != "image/Ti22.png"){e.src = "image/Ti21.png"}};
function fn120b(e){if(e.src != "image/Ti22.png"){e.src = "image/Ti20.png"}};function fn120c(e){tiz(); e.src = "image/Ti22.png"; Q3();trd();};//ИТК-1
function fn130a(e){if(e.src != "image/Ti32.png"){e.src = "image/Ti31.png"}};
function fn130b(e){if(e.src != "image/Ti32.png"){e.src = "image/Ti30.png"}};function fn130c(e){tiz(); e.src = "image/Ti32.png"; Q4();trd();};//ИТК-2
function fn140a(e){if(e.src != "image/Ti42.png"){e.src = "image/Ti41.png"}};
function fn140b(e){if(e.src != "image/Ti42.png"){e.src = "image/Ti40.png"}};function fn140c(e){tiz(); e.src = "image/Ti42.png"; Q5();trd();};//ИТК-3
function fn150a(e){if(e.src != "image/Ti52.png"){e.src = "image/Ti51.png"}};
function fn150b(e){if(e.src != "image/Ti52.png"){e.src = "image/Ti50.png"}};function fn150c(e){tiz(); e.src = "image/Ti52.png"; Q6();trd();};//ИТК-4
function fn160a(e){if(e.src != "image/Ti62.png"){e.src = "image/Ti61.png"}};
function fn160b(e){if(e.src != "image/Ti62.png"){e.src = "image/Ti60.png"}};function fn160c(e){tiz(); e.src = "image/Ti62.png"; Q7();trd();};//ИТК-5 //Функции левой панели //Функции ИТК
function tiz(){
	document.getElementById('tf0').src = "image/Ti00.png";
	document.getElementById('tf1').src = "image/Ti10.png";
	document.getElementById('tf2').src = "image/Ti20.png";
	document.getElementById('tf3').src = "image/Ti30.png";
	document.getElementById('tf4').src = "image/Ti40.png";
	document.getElementById('tf5').src = "image/Ti50.png";
	document.getElementById('tf6').src = "image/Ti60.png";
} //Обнуление изображений кнопок

//---------------------------------------------------------------------------------------------------------------------------

function fn200a(e){e.src = "image/Pi201.png"};function fn200b(e){e.src = "image/Pi200.png"};function fn210a(e){e.src = "image/Pi211.png"};function fn210b(e){e.src = "image/Pi210.png"}; //Группа смены изображений кнопок технологий
function fp1a(e){e.src = "image/j01.png"};function fp1b(e){e.src = "image/j0.png"};function fp1c(e){tload()};// Загрузить технологию alert(tv[ip()])
function fp2a(e){e.src = "image/j11.png"};function fp2b(e){e.src = "image/j1.png"};function fp2c(e){
	if(parseInt(document.getElementById('tx4').value) > 0){trt()}else{alert('Для расчета необходимо указать площадь возделывания культуры для активной технологии.')}};// Расчитать технологию
function fp3a(e){e.src = "image/j21.png"};function fp3b(e){e.src = "image/j2.png"};function fp3c(e){tdel();};// Удалить технологию
function fp4a(e){e.src = "image/j31.png"};function fp4b(e){e.src = "image/j3.png"};function fp4c(e){thtml();};// Передать технологию в MS Word
function fp5a(e){e.src = "image/j41.png"};function fp5b(e){e.src = "image/j4.png"};function fp5c(e){tsave();};// Сохранить технологию  //Группа смены изображений кнопок панели инструментов

//---------------------------------------------------------------------------------------------------------------------------

function jk(e){
	ret();
	tip = new Array([e.parentNode.rowIndex], [e.cellIndex]);
	var t = document.getElementById('tn');
	t.style.backgroundImage = 'url("image/fds.png")';
	t.style.paddingTop = "1pt";
	t.style.height = "64pt";
	t.innerHTML = '<img src="image/btn21.png" width="36" height="15" style="margin-left:735px; margin-top:12px" onmouseover="ft01(this)" onmouseout="ft02(this)" onclick="ft03()"/><table width="764pt" style="border-collapse: collapse; margin-left:6pt; margin-top:13pt" cellpadding="0" cellspacing="0" border="0"><tr height="25px"><td width="296"><select id="sp1" style="margin:1pt 0pt 0pt 7pt; width:301px" onchange="Cb1()"></select></td><td width="170"><select id="sp2" style="margin:1pt 0pt 0pt 1pt; width:166px" onchange="Cb2()"></select></td><td width="105"><select id="sp3" style="margin:1pt 0pt 0pt 1pt; width:101px"></select></td><td width="103"><select id="sp4" style="border-color:rgb(255,255,255); margin:1pt 0pt 0pt 1pt; width:101px"></select></td><td width="31"><img src="image/btn01.png"  width="24px" height="24px" style="margin: 0px 0px 0px 3px" onmouseover="ft11(this)" onmouseout="ft12(this)" onclick="ft13()"/></td><td width="27"><img src="image/btn11.png"  width="24px" height="24px" style="margin: 0px 0px 0px 1px" onmouseover="ft21(this)" onmouseout="ft22(this)" onclick="ft14()"/></td></tr></table>';
	
	aCb0();
	crsp4();
} //Функция показа панели выбора сх машин и агрегатов
function crsp4(){
	var sp = document.getElementById('sp4');
	//sp.options[0] = new Option('');
	for(var i=0; i<31; i++){sp.options[i+1] = new Option(i+1)}
	sp.selectedIndex = 1;
} //Функция заполнения списка сп4 количества машин в технологиях
function ft01(e){e.src = "image/btn22.png"} //На наведение кусора мыши на кнопку закрыть в наборной панели машин
function ft02(e){e.src = "image/btn21.png"} //На отведение кусора мыши на кнопку закрыть в наборной панели машин
function ft11(e){e.src = "image/btn02.png"} //На наведение курсора мыши на удалить набранную машину
function ft12(e){e.src = "image/btn01.png"} //На отведение курсора мыши от удалить набранную машину
function ft21(e){e.src = "image/btn12.png"} //На наведение курсора мыши на передать
function ft22(e){e.src = "image/btn11.png"} //На отведение курсора мыши от передать
function ft13(){
	var sp = document.getElementById('sp1'); sp.selectedIndex = 0;
	var sp = document.getElementById('sp2'); sp.selectedIndex = 0;
	var sp = document.getElementById('sp3'); sp.selectedIndex = 0;
	var sp = document.getElementById('sp4'); sp.selectedIndex = 0;
		
} //Функция удаления выбранной сх машины из наборной панели машин и агрегатов в технлогиях
function ft14(){
	var R = document.getElementById('Q1').rows;
	var r = R[parseInt(tip[0])];
	r.cells[parseInt(tip[1])].innerHTML = document.getElementById('sp3').value;
	r.cells[parseInt(tip[1]) + 1].innerHTML = document.getElementById('sp4').value;
	//Запрос в базу данных по выбранной машине
	if(document.getElementById('sp3').value != ''){
		var fv = document.getElementById('sp1').value;var m = fv.split([' ']);var b = m[0]; 
		if (b.indexOf('.0') > 0){a = b.split('.');m[0] = a[0] + '.';};
		m[1] = document.getElementById('sp3').value;
		var url = 'ajax.php?ge='+encodeURIComponent(m[0] + '||' + m[1] + '|' + uin); getAjax(url,addM);
	}
	else{addM('')}
} //Функция передачи набранной машины в операционную матрицу технологий
function ft03(){
	var t = document.getElementById('tn');
	t.style.backgroundImage = 'url("image/pnt.png")';
	t.style.paddingTop = "35pt";
	t.style.height = "30pt";
	t.innerHTML = '<table width="761pt" style="border-collapse: collapse; margin-left:6pt" cellpadding="0" cellspacing="0" border="0"><tr><td width="363"><input type="text" id="tx1" style="border-style:hidden; margin:1pt 0pt 0pt 9pt; width:348px; height:15px" onchange="ret()"/></td><td width="167"><div id="sorta"></div></td><td width="103"><input type="text" id="tx3" style="border-style:hidden; margin:1pt 0pt 0pt 5pt; width:87px; height:15px" onchange="ret()"/></td><td width="97"><input type="text" id="tx4" style="border-style:hidden; margin:1pt 0pt 0pt 7pt; width:85px; height:15px" onchange="ret()"/></td></tr></table>';
	
	//Создаем список сортов из переменной ;)
	document.getElementById('sorta').innerHTML = srta; spis();
	
	tinf(); //Заполняем панель информации значениями
	
} //Кнопочка закрыть наборную панель элементов
function addM(d){
	if(d.split('|').length > 1){d = d.split('|'); d = d[0]}
	var s = document.getElementById('sp4').value;
	var i = parseInt(tip[0]); var j = parseInt(tip[1]);//alert(d); 
	if(d.length > 3){a1[i][j] = d + '\\' + s; ft03(); ret();}
	else{a1[i][j] = d; ft03(); ret();}
} //Добавление машины в массив технлогий

//---------------------------------------------------------------------------------------------------------------------------

//Инструменты расчета//
var imp; // Переменная хранения числа циклов записей в базу данных инфы на печать
var impa = []; // Переменная храниения массива таблицы qq
var impk; // Переменная хранения номера
function addrow(){
	if(z=='a'){calk(ag);return};
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
	var url = 'ajax.php?ge='+encodeURIComponent(m[0] + '|' + m[1] + '|' + m[2] + '|' + uin);
	getAjax(url,showResult);
}  function showResult(d){
	var a = d.split('|'); var u = document.getElementById('Q');
	if (v.length != 0){var s = a[a.length - 1].split('\\'); s = s[0].split('.');
	var m = v[v.length - 1].split('\\'); m = m[0].split('.');
	if (s[0] == m[0]){if(u.innerHTML == ''){t = document.getElementById('Q'); t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse:collapse; border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt; padding-left:6pt; font-size:9.0pt; font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbgz.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:522px; overflow-y:scroll"><table id="qq" width="751pt" style="border-collapse:collapse; border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt; font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tbody></tbody></table></div>';v = new Array();}}
	else if (s[0] != m[0]){t = document.getElementById('Q'); t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:522px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';v = new Array();}}
	else {t = document.getElementById('Q'); t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:522px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';v = new Array();}
	for (var i = 0; i < a.length; i++){adRow();v.push(up(a[i]));title(a[i]+'||||');tai(ai(up(a[i])));};
}   //Рачет
function prt(){
	var R = document.getElementById('qq').rows;	var r = ''; var n; // var s = '';
	var t = document.getElementById('qt').rows;
	
	r = t[0].cells[0].innerHTML + '$' + t[0].cells[1].innerHTML + '$' + t[0].cells[2].innerHTML + '$' + t[0].cells[3].innerHTML + '$' + t[0].cells[4].innerHTML + '$' + t[0].cells[5].innerHTML + '|'; 
	for(var i = 0; i < R.length; i++){
		r += R[i].cells[0].innerHTML + '$' + R[i].cells[1].innerHTML + '$' + R[i].cells[2].innerHTML + '$' + R[i].cells[3].innerHTML + '$' + R[i].cells[4].innerHTML + '$' + R[i].cells[5].innerHTML + '|';
	} 
	r = r.substr(0, r.length - 1);  // Формируем массив для передачи на печать
	
	imp =  parseInt(r.length / 1500) + 1;
	impk = gr(1, 9999999); //Генерируем случайное число от 1 до 9999999
	for(var i = 0; i < imp + 1; i++){impa[i] = r.substr(i * 1500, 1500)};
	
	sqls(0);
	//window.open('printm.php?r='+encodeURIComponent(impk + '`' + uin));
	
}  //Печать
function DelRows(){
	t = document.getElementById('Q');t.innerHTML = '';//<table width="670" style="border-collapse: collapse;border-color: rgb(242,242,241); margin: 5pt 0pt 0pt 7pt"cellpadding="0" cellspacing="0" border="1" ><tr height="30pt"style="background-image:url(image/tbg.png)"><td width="25" style="padding: 0pt 0pt 0pt 6pt">№</td><td style="font: Tahoma, Geneva, sans-serif; padding:0pt 0pt 0pt 6pt;" width="295pt">Название машины</td><td  align="center" width="80pt">Wэ, га/ч</td><td align="center" width="80pt">ГСМ, кг/га</td><td align="center" width="80pt">ЧЭЗ, руб./час</td><td align="center" width="80pt">Сс, руб./га</td></tr></table>';
	t = document.getElementById('sp1'); t.value = t.options[0].value;
	t = document.getElementById('sp2'); t.value = t.options[0].value;
	t = document.getElementById('sp3'); t.value = t.options[0].value;
	agrdel();
}  //Очистить

function dn(){
	var u = document.getElementById('sp3');
	if(u.value == ''){alert('Для передачи в агрегат необходимо выбрать марку машины.');return;}
	var url = 'Bdn.php?u='+encodeURIComponent(u.value + '|' + uin);getAjax(url,redn);
}   function redn(d){
	var k;var a = d.split('\\');var R = document.getElementById('agr').rows;var r = R[1];var n;
	for(var i = 1; i < 6; i++){r = R[i]; 
	if(r.style.backgroundImage == 'url("image/v1.png")'){
	if(a[0].indexOf('1.') == 0 || a[0].indexOf('7.2') == 0){r = R[1];
	
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
		
	r = R[1];if(a[0].indexOf('1.') == 0 || a[0].indexOf('7.2') == 0){
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
	}}
} //Кнопка добавить машину в агрегат
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
	R[6].cells[3].innerHTML = '';
	R[6].cells[4].innerHTML = '';
	R[6].cells[5].innerHTML = '';
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
function arc(e){
	var r;var R = document.getElementById('agr').rows;
	if(e.style.backgroundImage == 'url("image/v1.png")'){e.style.backgroundImage = '';return}
	for(var i = 1; i < 7; i++){r = R[i];r.style.backgroundImage = '';}
	if(e.style.backgroundImage == ''){e.style.backgroundImage = 'url("image/v1.png")';}
} //На клик по таблице агрегатов
function ard(e){
	for(var i = 1; i < 6; i++){e.cells[i].innerHTML = '';}; ag.splice(e.rowIndex-1, 1);
	if(e.rowIndex - 1 == 0){ag.unshift(undefined);}; sum();} //Удаление по клику на строку в таблице агрегатов agr
	function calk(k){oagr();var f='';var w;var q; var h=0; var c;var a;var m;
	if(k[0] == undefined && ag[1] == undefined){return}
	
	for(var i = 0; i < 5; i++){if(k[i] != undefined){a = k[i].split('\\');f += a[2] + '(' + a[23] + ') '}}//F
	for(var i = 0; i < 5; i++){if(k[i] != undefined){a = ai(up(k[i])).split('\\'); h += parseFloat(a[3]);}}//Чэз
	
	if(k[0] != undefined){a = ai(up(k[0])).split('\\');w = a[1]; q = a[2]; c = a[4]}
	for(var i = 4; i > 0; i--){if(k[i] != undefined){a = ai(up(k[i])).split('\\');w = a[1];
	if(k[0] != undefined){m = ai(up(k[0])).split('\\');q = m[2];}; if(q > 0){q = q / w} else{q = a[2]}; 
	c = h / parseFloat(a[1]);}}; a = k[0]
	if(k[0] != undefined){a = k[0].split('\\');}else{a = '123'.split('');}
	if(a[0].indexOf('7.2') > -1){m = ai(up(k[0])).split('\\'); w = m[1]; q = m[2]; c = h / parseFloat(m[1]);}
	
	w = parseFloat(w).toFixed(2);q = parseFloat(q).toFixed(2);h = h.toFixed(2);c = parseFloat(c).toFixed(2);
	//alert(f + '---' + w + '---' + q + '---' + h + '---' + c);
	
	//Вывод данных в таблицу
	t = document.getElementById('Q');if(t.innerHTML == ''){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';v = new Array()};
	var R = document.getElementById('qt').rows; var r = R[0]; 
	if(k[0] != undefined){a = k[0].split('\\');}else{a = '123'.split('');}//!
	if(k[0] != undefined && k[1] != undefined || a[0].indexOf('7.2') > -1)
	{if(r.cells[3].innerHTML != 'ГСМ, кг/га'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	else if(k[0] != undefined && k[1] == undefined)
	{if(r.cells[3].innerHTML != 'ГСМ, кг/ч'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Мощность, л.с.</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	else if(k[0] == undefined && k[1] != undefined)
	{if(r.cells[3].innerHTML != 'Тяговый класс'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">СС, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	
	v.push(k[0]+'|'+k[1]+'|'+k[2]+'|'+k[3]+'|'+k[4]);/*Кладем массив техники в список v*/
	adRow(); tai(f + '\\' + w + '\\' + q + '\\' + h + '\\' + c);
	
} //Расчет в агрегатах
function recalk(k){oagr();var f='';var w;var q; var h=0; var c;var a;var m;
	if(k[0] == undefined && ag[1] == undefined){return}
	
	for(var i = 0; i < 5; i++){if(k[i] != undefined){a = k[i].split('\\');f += a[2] + '(' + a[23] + ') '}}//F
	for(var i = 0; i < 5; i++){if(k[i] != undefined){a = ai(k[i]).split('\\'); h += parseFloat(a[3]);}}//Чэз
	
	if(k[0] != undefined){a = ai(k[0]).split('\\');w = a[1]; q = a[2]; c = a[4]}
	for(var i = 4; i > 0; i--){if(k[i] != undefined){a = ai(k[i]).split('\\');w = a[1];
	if(k[0] != undefined){m = ai(k[0]).split('\\');q = m[2];}; if(q > 0){q = q / w} else{q = a[2]}; 
	c = h / parseFloat(a[1]);}}; a = k[0]
	if(k[0] != undefined){a = k[0].split('\\');}else{a = '123'.split('');}
	if(a[0].indexOf('7.2') > -1){m = ai(k[0]).split('\\'); w = m[1]; q = m[2]; c = h / parseFloat(m[1]);}
	
	w = parseFloat(w).toFixed(2);q = parseFloat(q).toFixed(2);h = h.toFixed(2);c = parseFloat(c).toFixed(2);
	//alert(f + '---' + w + '---' + q + '---' + h + '---' + c);
	
	//Вывод данных в таблицу
	t = document.getElementById('Q');if(t.innerHTML == ''){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>';v = new Array()};
	var R = document.getElementById('qt').rows; var r = R[0]; 
	if(k[0] != undefined){a = k[0].split('\\');}else{a = '123'.split('');}//!
	if(k[0] != undefined && k[1] != undefined || a[0].indexOf('7.2') > -1)
	{if(r.cells[3].innerHTML != 'ГСМ, кг/га'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	else if(k[0] != undefined && k[1] == undefined)
	{if(r.cells[3].innerHTML != 'ГСМ, кг/ч'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Мощность, л.с.</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	else if(k[0] == undefined && k[1] != undefined)
	{if(r.cells[3].innerHTML != 'Тяговый класс'){t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Тяговый класс</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">СС, руб./га</td></tr></table><div style="width:778px; display:block; height:342px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse: collapse;border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt;padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif; "  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'; v = new Array()}}
	
	v.push(k[0]+'|'+k[1]+'|'+k[2]+'|'+k[3]+'|'+k[4]);/*Кладем массив техники в список v*/
	adRow(); tai(f + '\\' + w + '\\' + q + '\\' + h + '\\' + c);
	
} //Пересчет в агрегатах
function sqls(n){
	if(n < imp){
		getAjax('qqp.php?s=' + encodeURIComponent(impa[n] + '`' + uin + '`' + impk + '`' + n), sqls);
	}
	else{
		window.open('printm.php?r='+encodeURIComponent(impk + '`' + uin));
		imp = ''; impa = []; impk = '';
	}
} //Функция записи во временную таблицу данных о машинах



//----------------------------------------------------Параметры-------------------------------------------------------------

//Параметры//
function Cr(){
	if(z=='m'){if (ons(ReOne()) == true){var s = ReOne();Pic1();t = document.getElementById('Q');
		//alert(t.innerHTML);
		if (t.innerHTML == '' || t.innerHTML.indexOf('Начало работы') > 0){ t.innerHTML = '<table id="qt" width="769" class="MsoNormal" style="border-collapse:collapse; border-color:rgb(199,199,199); margin: 5pt 0pt 0pt 7pt; padding-left:6pt; font-size:9.0pt;font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1" ><tr height="30pt" style="background-image:url(image/tbg2.png)"><td width="22pt" class="MsoNormal" style="padding: 0pt 0pt 0pt 8pt; font-size:9.0pt; font-family: Microsoft Sans Serif">№</td><td width="275pt" class="MsoNormal" style="padding:0pt 0pt 0pt 6pt; font-size:9.0pt;font-family:Microsoft Sans Serif">Название машины</td><td  align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Wэ, га/ч</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ГСМ, кг/га</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">ЧЭЗ, руб./час</td><td align="center" width="80pt" class="MsoNormal" style="font-size:9.0pt;font-family:Microsoft Sans Serif">Сс, руб./га</td></tr></table><div style="width:778px; display:block; height:522px; overflow-y:scroll"><table id="qq" width="751pt" class="MsoNormal" style="border-collapse:collapse; border-color:rgb(199,199,199); margin: 0pt 0pt 0pt 7pt; padding-left:6pt; font-size:9.0pt; font-family:Microsoft Sans Serif"  cellpadding="0" cellspacing="0" border="1"><tbody></tbody></table></div>'}
			adRow(); // Добавляем новую чистую строку
			var R = document.getElementById('qq').rows; var r = R[R.length - 1];
			r.style.backgroundColor = 'rgb(255, 222, 173)'; // Окрашиваем строку в пересчетную
			tai(ai(s)); v.push(s);
			document.getElementById('qq').scrollIntoView(false);} // Прокрутка вниз
		else{alert('Проверьте правильность заполнения всех полей.');}}
			if(z=='a'){
			for(var i = 0; i < 5; i++){if(ons(cz[i]) == false){cz[i] = undefined}}//Обнуляем пустые элементы массива cz
			Pic1(); recalk(cz);
			var R = document.getElementById('qq').rows; var r = R[R.length - 1];
			r.style.backgroundColor = 'rgb(255, 222, 173)'; // Окрашиваем строку в пересчетную
			document.getElementById('qq').scrollIntoView(false);
	}
}  //Пересчет
function msave(){
	if (ons(ReOne()) == true){var s = ReOne(); var m = s.split('\\'); m.length = 23; 
		if(m[1] == m[2]){alert('Поля Название машины и Марка машины не должны совпадать.'); return;}
		s = m.join('\\'); m = s.split('*'); s = m.join('');
		var url = 'Msave.php?s='+encodeURIComponent(s + '|' + uin);getAjax(url,ReMsave);	
	} else {alert('Проверьте правильность заполнения всех полей.');}
}  //Сохранить данные
function cnm(){var a = sj[0].split('!');
	var m = a[0].split('\\'); document.getElementById('a13').value = m[1];
	m = a[1].split('\\'); document.getElementById('a14').value = m[1];
	m = a[2].split('\\'); document.getElementById('a15').value = m[1];
	m = a[3].split('\\'); document.getElementById('a16').value = m[1];
	m = a[4].split('\\'); document.getElementById('a23').value = m[1];
	document.getElementById('dt').value = gm();
	nechez();
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
	nechez();
}  //Удалить текущие данные
function infl(){
	var r = document.getElementById('a2').value; r = r.split(' ');
	if(r[0].indexOf('7.2') > -1){
		window.open("inf.php?re=" + document.getElementById('a5').value, "_blank");
	}
	else{
		var r = document.getElementById('a5').value;
		r = r.split('*'); r = r.join(''); r = r.split('/'); r = r.join(''); r = r.split('\\'); r = r.join(''); //alert(r);
		window.open("inf/" + r + ".pdf", "_blank");
	}
	
}  //Информация

function Spt2(e){var b = e.value.split(' ');b=b[0].split('.');//alert(b[0])
	var u = document.getElementById('a2');u.innerHTML = '';
	var n = 0; var c;u.options[0] = new Option('');
	for(var i = 0;i < g.length ;i++){c = g[i].split('!');
	if((c[0].indexOf(b[0] + '.') < 1) && (c[0].indexOf(b[0] + '.') > -1) && (c[0].indexOf(b[0] + '.0') < 0))
	{n++;	u.options[n] = new Option(c[0] + " " + c[1]);}}
} //Функция заполнения подсписка техники
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
function onil(s){
	if(s == 'undefined'){return};
	var a = s.split('\\');var m = a[0].split('.');
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
	nechez(); //Функция расчета чэз в окне параметры
} //Функция развертывания параметров
function tm(e){//alert(e.value);	
	var s = e.value.split(' ');var a;
	for (var i = 0; i < g.length; i++){a = g[i].split('!');
	if (s[0] == a[0]){document.getElementById('a18').value = a[8];
	document.getElementById('a19').value = parseFloat(a[3]) / 100;
	document.getElementById('a20').value = a[6];
	document.getElementById('a24').value = a[11];
	nechez(); //Функция расчета чэз в окне параметры
	return}}
} //Функция изменения параметров от изименения типа техники
function sjk(e){
	var a = sj[1].split('!');var m = new Array();
	if (e.selectedIndex == 1){m = a[0].split('\\');
		var u = document.getElementById('a21');u.value = m[2];
		var u = document.getElementById('a22');u.value = m[3];}
	else if (e.selectedIndex == 2){m = a[1].split('\\');
		var u = document.getElementById('a21');u.value = m[2];
		var u = document.getElementById('a22');u.value = m[3];}
	else if (e.selectedIndex == 3){m = a[2].split('\\');
		var u = document.getElementById('a21');u.value = m[2];
		var u = document.getElementById('a22');u.value = m[3];}
	nechez(); //Функция расчета чэз в окне параметры
} //Функция от изменения страны выбор коэффициентов
function ons(s){a = s.split('\\');
	for (var i = 0; i < a.length; i++){if (a[i] == ''){return false;}}
	for (i = 3; i < 22; i++){if(a[i] / 9999 > -9999999999999999999999999){}else{return false}}
	return true;
} //Проверка на заполненность всех данных параметров
function ReMsave(d){alert(d);} //Ответ от функции сохранения машин
function findm(){var s = document.getElementById('a5').value + '|' + document.getElementById('dt').value + '|' + uin;
	var url = 'Mfind.php?j='+encodeURIComponent(s);
	getAjax(url,Refindm);
} //Функция поиска цен от указанной даты
function Refindm(d){
	var a = d.split('|');
	alert('Данные на ближайшую дату  " ' + a[0] + ' "  успешно найдены.');
	document.getElementById('dt').value = a[0];
	document.getElementById('a9').value = a[1];
} //Ответ от функции поиска указанной даты
function fp(){
	document.getElementById('cp1').src = 'image/H12.png';
	document.getElementById('cp2').src = 'image/H22.png';
	document.getElementById('cp3').src = 'image/H22.png';
	document.getElementById('cp4').src = 'image/H22.png';
	document.getElementById('cp5').src = 'image/H22.png';
} //Функция назначения базовых изображений на вкладках параметров
function fp1(e){fp(); e.src='image/H13.png'; delp(); onil(cz[0]);}
function fp2(e){fp(); e.src='image/H23.png'; delp(); onil(cz[1]);}
function fp3(e){fp(); e.src='image/H23.png'; delp(); onil(cz[2]);}
function fp4(e){fp(); e.src='image/H23.png'; delp(); onil(cz[3]);}
function fp5(e){fp(); e.src='image/H23.png'; delp(); onil(cz[4]);} //Группа функций на клик по вкладкам агрегатов
function repar(){var s = ReOne();
	if(document.getElementById('cp1').src.indexOf("image/H13.png") > -1){cz[0] = s}
	if(document.getElementById('cp2').src.indexOf("image/H23.png") > -1){cz[1] = s}
	if(document.getElementById('cp3').src.indexOf("image/H23.png") > -1){cz[2] = s}
	if(document.getElementById('cp4').src.indexOf("image/H23.png") > -1){cz[3] = s}
	if(document.getElementById('cp5').src.indexOf("image/H23.png") > -1){cz[4] = s};//alert(cz[0]);
} //Функция сбора всех параметров в массив cz
function gm(){
	var t = new Date(); var dt = ((String(t.getDate()).length == 1) ? "0" + t.getDate() : t.getDate()) + "." + ((parseInt(t.getMonth()) < 9) ? "0" + (parseInt(t.getMonth()) + 1): parseInt(t.getMonth()) + 1) + "." + t.getFullYear();
	return dt;
} //Функция определения текущей даты и времени
function nechez(){
	var a = ai(ReOne()).split('\\');
	if(a[3].indexOf('NaN') > -1){
		document.getElementById('mychez').innerHTML = '';
	}
	else{
		document.getElementById('mychez').innerHTML = '<p style="margin-left:40px; float:left">ЧЭЗ, руб./час</p><b><p id="chez" style="margin-left:15px; float:left">' + a[3] + '</p></b>';
	}
} //Функция расчета показателя чез в параметрах

//---------------------------------------------------------------------------------------------------------------------------

//Настройки//
function vz(){ns();setTimeout( function(){nj();}, 300);}  //Восстановить значения из базы настроек
function chj(e){var a = sj[1].split('!');
	//Матрица стран и их коэффициентов
	var m = a[0].split('\\');m[2] = document.getElementById('k11').value;
	m[3] = document.getElementById('k12').value;a[0] = m.join('\\');
	m = a[1].split('\\');m[2] = document.getElementById('k21').value;
	m[3] = document.getElementById('k22').value;a[1] = m.join('\\');
	m = a[2].split('\\');m[2] = document.getElementById('k31').value;
	m[3] = document.getElementById('k32').value;a[2] = m.join('\\');sj[1] = a.join('!');
	//Матрица экономических настроек
	a = sj[0].split('!');
	m = a[0].split('\\');m[1] = document.getElementById('k1').value;a[0] = m.join('\\');
	m = a[1].split('\\');m[1] = document.getElementById('k2').value;a[1] = m.join('\\');
	m = a[2].split('\\');m[1] = document.getElementById('k3').value;a[2] = m.join('\\');
	m = a[3].split('\\');m[1] = document.getElementById('k4').value;a[3] = m.join('\\');
	m = a[4].split('\\');m[1] = document.getElementById('k5').value;a[4] = m.join('\\');sj[0] = a.join('!');
	//alert(a.join('!'));
}  //Renj Сбор настроек
function nj(){
	alert(333);
	var a = sj[0].split('!'); //
	var m = a[0].split('\\');document.getElementById('k1').value = m[1];
	m = a[1].split('\\');document.getElementById('k2').value = m[1];
	m = a[2].split('\\');document.getElementById('k3').value = m[1];
	m = a[3].split('\\');document.getElementById('k4').value = m[1];
	m = a[4].split('\\');document.getElementById('k5').value = m[1];
	
	a = sj[1].split('!');
	m = a[0].split('\\');document.getElementById('k11').value = m[2];document.getElementById('k12').value = m[3];
	m = a[1].split('\\');document.getElementById('k21').value = m[2];document.getElementById('k22').value = m[3];
	m = a[2].split('\\');document.getElementById('k31').value = m[2];document.getElementById('k32').value = m[3];
	
}  //nj Развертывание настроек

//---------------------------------------------------------------------------------------------------------------------------

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
function tai(e){
	var a = e.split('\\');
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
function up(e){var a = e.split('\\'); var s = sj[0].split('!'); var m = s[0].split('\\'); a[15] = m[1];
	m = s[1].split('\\');a[16] = m[1];
	m = s[2].split('\\');a[17] = m[1];
	m = s[3].split('\\');a[18] = m[1];
	m = s[4].split('\\');a[19] = m[1];
	
	s = sj[1].split('!');
	if (a[8] != ''){m = s[parseInt(a[8])].split('\\'); a[20] = m[2]; a[21] = m[3];}
	s = a.join('\\'); return s;
} //функция обновления показателей настроек

function adRow(){
	
	var t = document.getElementById('qq');
	var i = t.rows.length;
	
	//Добавляем и редактируем новую строку
	t.insertRow(i);
	t.rows[i].setAttribute('height','20');
	t.rows[i].setAttribute('class','cursor');
	t.rows[i].setAttribute('onclick','goPr(this)');
	t.rows[i].setAttribute('onmouseover','selStr(this)');
	t.rows[i].setAttribute('onmouseout','unselStr(this)');
	t.rows[i].style.backgroundColor = 'rgb(255, 255, 255)';
	t.rows[i].innerHTML = '<td width="39pt" align="center">&nbsp;</td><td width="333" style="padding:0pt 0pt 0pt 6px;">&nbsp;</td><td align="center" width="96pt">&nbsp;</td><td align="center" width="96">&nbsp;</td><td align="center" width="96">&nbsp;</td><td id="col" align="center" width="77">&nbsp;</td>';
	
} // Добавление строки в таблицу qq
function goPr(e){
	if(z == 'm'){var s = v[e.rowIndex];Pic2();onil(s);}
	if(z == 'a'){cz = new Array(); cz = v[e.rowIndex].split('|'); Pic2(); delp(); onil(cz[0]);}
} // функция добавления строк в таблицу результатов))
function selStr(e){	
	if(e.style.backgroundColor == 'rgb(255, 255, 255)'){e.style.backgroundColor = 'rgb(148, 220, 227)';}
	if(e.style.backgroundColor == 'rgb(255, 222, 173)'){e.style.backgroundColor = 'rgb(148, 220, 228)';}
} // Выделение строк в таблице qq
function unselStr(e){
	if(e.style.backgroundColor == 'rgb(148, 220, 227)'){e.style.backgroundColor = 'rgb(255, 255, 255)';}
	if(e.style.backgroundColor == 'rgb(148, 220, 228)'){e.style.backgroundColor = 'rgb(255, 222, 173)';}
} // Снятие выделения строк в таблице qq

//---------------------------------------------------------------------------------------------------------------------------

function f00a(e){e.src = "image/Pi01.png"};function f00b(e){e.src = "image/Pi00.png"};
function f10a(e){e.src = "image/Pi11.png"};function f10b(e){e.src = "image/Pi10.png"};
function f20a(e){e.src = "image/Pi21.png"};function f20b(e){e.src = "image/Pi20.png"};

function f100a(e){e.src = "image/Pi101.png"};function f100b(e){e.src = "image/Pi100.png"};function f110a(e){e.src = "image/Pi111.png"};function f110b(e){e.src = "image/Pi110.png"};function f120a(e){e.src = "image/Pi121.png"};function f120b(e){e.src = "image/Pi120.png"};function f130a(e){e.src = "image/Pi131.png"};function f130b(e){e.src = "image/Pi130.png"};function f140a(e){e.src = "image/Pi141.png"};function f140b(e){e.src = "image/Pi140.png"};

function f200a(e){e.src = "image/Pi201.png"};function f200b(e){e.src = "image/Pi200.png"};function f210a(e){e.src = "image/Pi211.png"};function f210b(e){e.src = "image/Pi210.png"} // Группа смены кнопок функций

//---------------------------------------------------------------------------------------------------------------------------
//sql запросы
function aCb0(){
	var url = 'Cb0.php';getAjax(url,aReCb0);
}
function aReCb0(d){
	g = d.split('|');var sp = document.getElementById('sp1');var m = d.split('|');
	sp.options[0] = new Option('');
	for(var i=0; i<m.length; i++) {var a = m[i].split('!'); 
	sp.options[i+1] = new Option(a[0] + ' ' + a[1]);}
} // Список тип техники -- заполнение
function Cb1(e){var fv = document.getElementById('sp1').value;var m = fv.split([' ']);var b = m[0]; 
	if (b.indexOf('.0') > 0){a = b.split('.');m[0] = a[0] + '.';}; 
	var url = 'Cb1.php?ge='+encodeURIComponent(m[0]);
	getAjax(url,aReCb1);
} // отображение списка тяговых классов
function aReCb1(d){var m = d.split('|');
	var sp3 = document.getElementById('sp3');for (var i = 0; i < 30; i++){sp3.options[0] = null;}
	sp2 = document.getElementById('sp2');for (var i = 0; i < 30; i++){sp2.options[0] = null;}//удаляем предыдущие элементы списка
	sp2.options[0] = new Option(''); sp2.options[1] = new Option('Все классы');
	sp1 = document.getElementById('sp1'); var a = sp1.value.split(' ');
	if(a[0].indexOf('.0') > -1){ sp2.selectedIndex = 1 }
	for(var i=0; i<m.length; i++) {sp2.options[i+2] = new Option('Тяговый класс ' + m[i]);}
	//setTimeout( function(){Cb2();}, 400);
	Cb2();
} // вывод тяговых классов в комбобокс //Cb1
function Cb2(){var a; var b;
	var s1 = document.getElementById('sp1').value;var s2 = document.getElementById('sp2').value;
	var m = s1.split([' ']); b = m[0]; if (b.indexOf('.0') > -1){a = b.split('.');m[0] = a[0] + '.';};
	b = s2.split([' ']); if(b[2] == undefined){b[2] = '';}
	var url = 'Cb2.php?ge='+encodeURIComponent(m[0] + '|' + b[2] + '|' + uin);
	getAjax(url,aReCb2);
} // отображение списка марок машин
function aReCb2(d){var m = d.split('|');
	var sp = document.getElementById('sp3'); var n = sp.options.length + 1;
	for (var i = 0; i < n; i++){sp.options[0] = null;}
	sp.options[0] = new Option('');sp.options[1] = new Option('Все марки');
	if(document.getElementById('sp2').value == 'Все классы'){sp.selectedIndex = 1}
	for(i=0; i<m.length; i++){var a = m[i].split('\\');sp.options[i+2] = new Option(a[2]);}
} // вывод списка марок машин  //Списки Cb
function ns(){
	getAjax('Ns.php',nsk);
} // функция подачи запроса на выбор параметров
function nsk(d){//alert(d);
	sj = new Array();
	sj = d.split('|');
} // обнуление параметров в настройках

//---------------------------------------------------------------------------------------------------------------------------


/*
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
*/


	
	
	
	
	
	
	
	

