<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Fancy Sliding Form with jQuery</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Fancy Sliding Form with jQuery" />
    <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <!--<script type="text/javascript" src="sliding.form.js"></script>-->
</head>
<style>
	span.reference{
		position:fixed;
		left:5px;
		top:5px;
		font-size:10px;
		text-shadow:1px 1px 1px #fff;
	}
	span.reference a{
		color:#555;
		text-decoration:none;
		text-transform:uppercase;
	}
	span.reference a:hover{
		color:#000;
		
	}
	h1{
		color:#ccc;
		font-size:36px;
		text-shadow:1px 1px 1px #fff;
		padding:20px;
	}
a:hover {text-decoration:underline;}
a {text-decoration:none;}


</style>
    <!-- <body style="background-color:rgb(0,0,0);background-image:url(../image/StartFon8.jpg); background-position:center; background-repeat:no-repeat"> -->
<body>
	<table id="mt" width="100%" height="100%" border="0"  style="border-collapse: collapse;margin:auto"><tr id="mtr"><td id="mn">
        <table align="center" width="100%" border="0"  style="border-collapse: collapse;margin:auto">
            <tr height="200px" style="background-color:rgb(0,0,0);background-image:url(../image/Shapka5.png);">
            <td colspan="5">
            
            
            
            
            
            </td>
            </tr>
            <tr height="43px" align="center" style="background-image: url(../image/Fon_menu.png)">
            <td id="col1" width="35%"></td>
            <td id="col2" width="10%"><a href="#">Фермеру</a></td>
            <td id="col3" width="10%"><a href="#">Предприятию</a></td>
            <td id="col4" width="10%"><a href="#">Государству</a></td>
            <td id="col5" width="35%"></td>
            </tr></table>      
		<table id="tab" align="center" width="100%" border="0"  style="border-collapse: collapse;margin:auto">
        <tr><td width="250px" height="5px" colspan="3"></td></tr>
        <tr>
        <td width="250px" valign="top">
            <div>
                <table width="242px" align="center" border="0" style="border-collapse: collapse; margin-top:10px; margin:auto">
                <tr height="16px" style="background-image:url(../image/msite/um.png)"><td></td></tr>
                <tr style="background-image:url(../image/msite/mm.png)"><td>
                    <table align="center" border="0" style="border-collapse: collapse; margin:auto">
                    <tr height="23px" style="background-image:url(../image/msite/gm.png)">
                    <td style="padding-left:15px">Основное меню</td></tr>
                    <tr height="33px" style="background-image:url(../image/msite/pm.png)">
                    <td><a href="javascript:reg()" style="padding-left:35px">Администрация</a></td></tr>
                    <tr height="33px" style="background-image:url(../image/msite/pm.png)">
                    <td><a href="#" style="padding-left:35px">Методическая основа</a></td></tr>
                    <tr height="33px" style="background-image:url(../image/msite/pm.png)">
                    <td ><a href="#" style="padding-left:35px">Школа МАТЧЭЗ</a></td></tr>
                    <tr height="33px" style="background-image:url(../image/msite/pm.png)">
                    <td><a href="#" style="padding-left:35px">СМИ о нас</a></td></tr>
                    <tr height="33px" style="background-image:url(../image/msite/pm.png)">
                    <td><a href="#" style="padding-left:35px">Объявления</a></td></tr>
                    <tr height="33px" style="background-image:url(../image/msite/pm.png)">
                    <td><a href="#" style="padding-left:35px">Полезные ссылки</a></td></tr>
                    <tr height="33px" style="background-image:url(../image/msite/pm.png)">
                    <td><a href="#" style="padding-left:35px">Контактная информация</a></td></tr>
                    <tr><td></td></tr>
                    </table>
               </td></tr>
               <tr height="16px" style="background-image:url(../image/msite/bm.png)"><td></td></tr>
               </table>          
            </div>
        </td>
        <td id="c" valign="top">
           	<table width="100%" align="center" border="0" style="border-collapse: collapse; margin:auto;">
            <tr height="16px">
            <td width="16px" style="background-image: url(../image/msite/mainwindow/m11.png)">
            
            </td>
            <td style="background-image: url(../image/msite/mainwindow/m12.png)">
            
            </td>
            <td width="16px" style="background-image: url(../image/msite/mainwindow/m13.png)">
            
            </td>
            </tr>
            <tr>
            <td style="background-image: url(../image/msite/mainwindow/m21.png)">
            
            </td>
            <td id="mc" style="background-image: url(../image/msite/mainwindow/m22.png)">
            
                <table width="200" border="0" align="center" style="margin:auto">
                <tr height="150px">
                <td></td></tr>
                <tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px"><b>Логин:</b></p></td></tr>
                <tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left">
                <input name="Logn" id="Log" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/>
                
                </td></tr>
                <tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px;"><b>Пароль:</b></p></td></tr>
                <tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left">
                <input name="Pasn" id="Pas" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/></td></tr>
                <tr height="50"><td></td></tr>
                <tr><td align="center"><input name="en" type="button" value="Вход" style="width:200px; height:27px; font-weight:bold" onclick="sent()"/>
                </td></tr>
                <tr><td height="100px">
                </td></tr></table>
                    
                
            	
            </td>
            <td style="background-image: url(../image/msite/mainwindow/m23.png)">
            
            </td>
            </tr>
            <tr height="16px">
            <td style="background-image: url(../image/msite/mainwindow/m31.png)">
            
            </td>
            <td style="background-image: url(../image/msite/mainwindow/m32.png)">
            
            </td>
            <td style="background-image: url(../image/msite/mainwindow/m33.png)">
            
            </td>
            </tr>
            </table>
        
        
        
    
    
    </td>
        <td width="250px" valign="top">
        <div>
            <table width="242px" align="center" border="0" style="border-collapse: collapse; margin-top:10px; margin:auto">
            <tr height="16px" style="background-image:url(../image/msite/um.png)"><td></td></tr>
            <tr style="background-image:url(../image/msite/mm.png)"><td>
                <table align="center" border="0" style="border-collapse: collapse; margin-left:20px">
                <tr height="23px" style="background-image:url(../image/msite/gm.png)">
                <td style="padding-left:15px">Вход в систему</td></tr>
                <tr height="33px" style="background-image:url(../image/msite/pm.png)">
                <td><a href="javascript:avt()" style="padding-left:35px">Авторизация</a></td></tr>
                <tr height="33px" style="background-image:url(../image/msite/pm.png)">
                <td><a href="javascript:reg()" style="padding-left:35px">Регистрация</a></td></tr>
                <tr><td></td></tr>
                </table> 
           </td></tr>
           <tr height="16px" style="background-image:url(../image/msite/bm.png)"><td></td></tr>
           </table>          
        </div>
        </td>
        </tr> 
        <tr>
        <td width="250px" colspan="3">
        	<table width="100%" align="center" border="0" style="border-collapse: collapse; margin:auto;">
                <tr height="16px"><td width="16px" style="background-image: url(../image/msite/mainwindow/m11.png)"></td>
                <td style="background-image: url(../image/msite/mainwindow/m12.png)"></td>
                <td width="16px" style="background-image: url(../image/msite/mainwindow/m13.png)"></td>
                </tr><tr><td style="background-image: url(../image/msite/mainwindow/m21.png)"></td>
                <td style="background-image: url(../image/msite/mainwindow/m22.png)">
                
                	<table align="center" width="100%" border="0" style="border-collapse:collapse;margin:auto;border-color:transparent">
                    <tr align="center">
                    <td></td>
                    <td width="140px"><a href="#"><img src="../image/ban/b1.png" width="120" height="60"></a></td>
                    <td width="140px"><a href="#"><img src="../image/ban/b2.png" width="120" height="60"></td>
                    <td width="140px"><a href="#"><img src="../image/ban/b3.png" width="120" height="60"></td>
                    <td width="140px"><a href="#"><img src="../image/ban/b4.jpg" width="120" height="60"></td>
                    <td width="140px"><a href="#"><img src="../image/ban/b5.jpg" width="120" height="60"></td>
                    <td width="140px"><a href="#"><img src="../image/ban/b6.jpg" width="120" height="60"></td>
                    <td></td>
                    </tr>
                    </table>
                
                    
                </td><td style="background-image: url(../image/msite/mainwindow/m23.png)"></td></tr><tr height="16px">
                <td style="background-image: url(../image/msite/mainwindow/m31.png)"></td>
                <td style="background-image: url(../image/msite/mainwindow/m32.png)"></td>
                <td style="background-image: url(../image/msite/mainwindow/m33.png)"></td></tr>
            </table>
        </td>
        </tr>
        <tr><td width="250px" colspan="3">
        	<table width="100%" align="center" border="0" style="border-collapse: collapse; margin:auto;">
                <tr height="16px"><td width="16px" style="background-image: url(../image/msite/mainwindow/m11.png)"></td>
                <td style="background-image: url(../image/msite/mainwindow/m12.png)"></td>
                <td width="16px" style="background-image: url(../image/msite/mainwindow/m13.png)"></td>
                </tr><tr><td style="background-image: url(../image/msite/mainwindow/m21.png)"></td>
                <td style="background-image: url(../image/msite/mainwindow/m22.png)">
               	  <table width="100%" align="center" border="0" style="border-collapse: collapse; margin:auto;">
                    <tr><td height="30" style="padding-left:13px"><a href="http://www.povmis.ru/" target="_blank">ФГБУ Поволжская машиноиспытательная станция</a> © 2013.</td><td width="150px" align="right" style="padding-right:13px"><a href="#">Контакты</a></td></tr>
                    <tr height="20px"><td height="30" style="padding-left:13px"><a href="http://www.povmis.ru/index.php?option=com_content&view=article&id=274" target="_blank">Povolzskaya machinery testing station</a> © 2013.</td><td width="150px" align="right" style="padding-right:13px"></td></tr>
                    
                    </table>
                </td><td style="background-image: url(../image/msite/mainwindow/m23.png)"></td></tr><tr height="16px">
                <td style="background-image: url(../image/msite/mainwindow/m31.png)"></td>
                <td style="background-image: url(../image/msite/mainwindow/m32.png)"></td>
                <td style="background-image: url(../image/msite/mainwindow/m33.png)"></td></tr>
            </table>
        </td></tr>
        </table>
        
</td></tr></table>        
</body>
<script type="text/javascript">
    var captcha='ttttt';
    var registr = '<div id="content"><h1>Регистрация</h1><div id="wrapper"><div id="steps"><form id="formElem" name="formElem" action="" method="post"><fieldset class="step"><legend>Аккаунт</legend><p><label for="username">Имя пользователя</label><input id="username" name="username" /></p><p><label for="email">Email</label><input id="email" name="email" placeholder="info@mail.ru" type="email" AUTOCOMPLETE=OFF /></p><p><label for="password">Пароль</label><input id="password" name="password" type="password" AUTOCOMPLETE=OFF /></p></fieldset><fieldset class="step"><legend>Сведения</legend><p><label for="name">Полное имя (ФИО)</label><input id="name" name="name" type="text" AUTOCOMPLETE=OFF /></p><p><label for="country">Организация</label><input id="country" name="country" type="text" AUTOCOMPLETE=OFF /></p><p><label for="phone">Адрес</label><input id="phone" name="phone" placeholder="" type="tel" AUTOCOMPLETE=OFF /></p><p><label for="website">Сайт</label><input id="website" name="website" placeholder="e.g. http://www.codrops.com" type="tel" AUTOCOMPLETE=OFF /></p></fieldset><fieldset class="step"><legend>Роль</legend><p><label for="cardtype">Роль пользователя</label><select id="cardtype" name="cardtype"><option>Фермер</option><option>Органиция</option><option>Государство</option></select></p><p><label for="cardnumber">Card number</label><input id="cardnumber" name="cardnumber" type="number" AUTOCOMPLETE=OFF /></p><p><label for="secure">Security code</label><input id="secure" name="secure" type="number" AUTOCOMPLETE=OFF /></p><p><label for="namecard">Name on Card</label><input id="namecard" name="namecard" type="text" AUTOCOMPLETE=OFF /></p></fieldset><fieldset class="step"><legend>Проверка</legend><p><label for="newsletter">Введите код с изображения</label><img id="k" src="javascript:rnd()" onClick="rek()"/></p> <p><label for="tagname">Поле кода</label><input id="tagname" name="tagname" type="text" AUTOCOMPLETE=OFF /></p></fieldset><fieldset class="step"><legend>Подтвердить</legend><p>Everything in the form was correctly filled if all the steps have a green checkmark icon. A red checkmark icon indicates that some field is missing or filled out with invalid data. In this last step the user can confirm the submission of the form.</p><p class="submit"><button id="registerButton" type="submit">Register</button></p></fieldset></form></div><div id="navigation" style="display:none;"><ul><li class="selected"><a href="#">Аккаунт</a></li><li><a href="#">Сведения</a></li><li><a href="#">Роль</a></li><li><a href="#">Проверка</a></li><li><a href="#">Подтвердить</a></li></ul></div></div></div>';
	
	function avt(){
		document.getElementById('mc').innerHTML = '<table width="200" border="0" align="center" style="margin:auto"><tr height="150px"><td></td></tr><tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px"><b>Логин:</b></p></td></tr><tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left"><input name="Logn" id="Log" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/></td></tr><tr height="40"><td align="center"><p style="font-family:Microsoft Sans Serif; font-size:14px;"><b>Пароль:</b></p></td></tr><tr><td height="27" style="background-image:url(<?=$h?>image/ltxt.png);" align="left"><input name="Pasn" id="Pas" type="text" height="23" style="border:hidden; margin-left:6px; width:190px" onkeydown="kp(event)"/></td></tr><tr height="50"><td></td></tr><tr><td align="center"><input name="en" type="button" value="Вход" style="width:200px; height:27px; font-weight:bold" onclick="sent()"/></td></tr><tr><td height="100px"></td></tr></table>';
	} //Авторизация
	function reg(){
		document.getElementById('mc').innerHTML = registr; //Записываем html код куда надо)
		$(function() {
	/*
	number of fieldsets
	*/
	var fieldsetCount = $('#formElem').children().length;
	
	/*
	current position of fieldset / navigation link
	*/
	var current 	= 1;
    
	/*
	sum and save the widths of each one of the fieldsets
	set the final sum as the total width of the steps element
	*/
	var stepsWidth	= 0;
    var widths 		= new Array();
	$('#steps .step').each(function(i){
        var $step 		= $(this);
		widths[i]  		= stepsWidth;
        stepsWidth	 	+= $step.width();
    });
	$('#steps').width(stepsWidth);
	
	/*
	to avoid problems in IE, focus the first input of the form
	*/
	$('#formElem').children(':first').find(':input:first').focus();	
	
	/*
	show the navigation bar
	*/
	$('#navigation').show();
	
	/*
	when clicking on a navigation link 
	the form slides to the corresponding fieldset
	*/
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
	
	/*
	clicking on the tab (on the last input of each fieldset), makes the form
	slide to the next step
	*/
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
	
	/*
	validates errors on all the fieldsets
	records if the Form has errors in $('#formElem').data()
	*/
	function validateSteps(){
		var FormErrors = false;
		for(var i = 1; i < fieldsetCount; ++i){
			var error = validateStep(i);
			if(error == -1)
				FormErrors = true;
		}
		$('#formElem').data('errors',FormErrors);	
	}
	
	/*
	validates one fieldset
	and returns -1 if errors found, or 1 if not
	*/
	function validateStep(step){
		if(step == fieldsetCount) return;
		
		var error = 1;
		var hasError = false;
		$('#formElem').children(':nth-child('+ parseInt(step) +')').find(':input:not(button)').each(function(){
			var $this 		= $(this);
			var valueLength = jQuery.trim($this.val()).length;
			
			var vl = $this.val();
			//alert(step + '---' + vl + '---' + captcha);
			if(step == 4){
				if(vl != captcha){
					valueLength = '';
				}
			}
			
			
			if(valueLength == ''){
				hasError = true;
				$this.css('background-color','#FFEDEF');
			}
			else
				$this.css('background-color','#FFFFFF');	
		});
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
	
	/*
	if there are errors don't allow the user to submit
	*/
	$('#registerButton').bind('click',function(){
		if($('#formElem').data('errors')){
			alert('Please correct the errors in the Form');
			return false;
		}	
	});
}); //Подключаем все необходимые функции и модули для работы
		$('#k').attr('src', rnd()); //Обновляем картинку
	} //Регистрация
	
    window.onload = function(){$('#k').attr('src', rnd());} //При загрузке страницы обновляем изображение
    
    function rnd(){
        var keylist = "abcdefghkmnpqrstuvwxyz23456789"; var r='';
        for(var i = 0; i < 5; i++){r += keylist.charAt(Math.floor(Math.random()*keylist.length))}
         
        captcha = r; 
        var str = 'captcha.php?r=' + r;
        return  str;alert(captcha);
    } //Функция обновления изображения
    function clk(){
        
        //var url = 'captcha.php';getAjax(url,aReCb0);
        //document.getElementById('k').src = 'captcha.php?string=Math.random()';
        //Удаляем капчу из сессии 
        //$('#k').attr('src', 'captcha.php?_SESSION["code"]=' + Math.random());
        //alert(<?php print "'".$_SESSION['code']."'"; ?>);
        
        alert(captcha + '---' + document.getElementById('xexe').value);
        
        
    }
    function rek(){
        
        $('#k').attr('src', rnd());
        
    }//Еще одна функция обновления изображения
    
    </script>
</html>
























