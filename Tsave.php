<?php 
header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["s"])) { 

	//Предварительная обработка переменных
	$r = explode('`', $_GET["s"]); 
	
	//Подключение к базе данных
	$db = mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");
	
	//1. Проверка на существование технологии в центральной базе данных
	$q5 = "SELECT * FROM `atg` WHERE `atg`.`s` LIKE '".mysql_real_escape_string($r[3]."$%")."'"; $rt = mysql_query($q5);
	
	if(mysql_num_rows($rt) > 0){
		//Удаляем старую технологию перед записью новой
		if($r[2] == 0){
			//Если это первая итерация то перезаписываем старую технологию на первую порцию инфы
			$q6 = "UPDATE `atg` SET `atg`.`s` = '".mysql_real_escape_string($r[0])."' WHERE `atg`.`u` = '".mysql_real_escape_string($r[1])."' AND `atg`.`s` LIKE '".mysql_real_escape_string($r[3]."$%")."'"; mysql_query($q6);
		}
		//Выбираем прежние записанные данные
		$j2 = "'".mysql_real_escape_string($r[3]."$%")."'";
		$q7 = "SELECT * FROM `atg` WHERE `atg`.`u` = '".mysql_real_escape_string($r[1])."' AND `atg`.`s` LIKE ".$j2;
		$rst2 = mysql_query($q7); $fm2 = mysql_fetch_array($rst2);
		
		//Соединяем прежние и новые данные и дозаписываем технологию
		$a2 = $fm2[2].$r[0];
		$q8 = "UPDATE `atg` SET `atg`.`s` = '".mysql_real_escape_string($a2)."' WHERE `atg`.`u` = '".mysql_real_escape_string($r[1])."' AND `atg`.`s` LIKE '".mysql_real_escape_string($r[3]."$%")."'"; mysql_query($q8);
	}
	else{
		$q9 = "INSERT INTO `atg` (`atg`.`u`, `atg`.`s`) VALUES ('".mysql_real_escape_string($r[1])."', '".mysql_real_escape_string($r[0])."')"; mysql_query($q9);
	}
	
	
	
	//2. Проверка на существовании технологии в пользовательской базе данных
	$j = "'".mysql_real_escape_string($r[3]."$%")."'";
	$qry = "SELECT * FROM `utg` WHERE `utg`.`u` = '".mysql_real_escape_string($r[1])."' AND `utg`.`s` LIKE ".$j;
	$result = mysql_query($qry);
	
	// Если машина существует в пользовательской базе данных то обновляем ее значения
	if (mysql_num_rows($result) > 0){
		
		//Удаляем старую технологию перед записью новой
		if($r[2] == 0){
			//Если это первая итерация то перезаписываем старую технологию на первую порцию инфы
			$q = "UPDATE `utg` SET `utg`.`s` = '".mysql_real_escape_string($r[0])."' WHERE `utg`.`u` = '".mysql_real_escape_string($r[1])."' AND `utg`.`s` LIKE '".mysql_real_escape_string($r[3]."$%")."'"; mysql_query($q);
		}
		//Если это не первая итерация то дополняем предыдущую порцию инфы последующей порции инфы
		else{
			//Выбираем прежние записанные данные
			$j = "'".mysql_real_escape_string($r[3]."$%")."'";
			$q2 = "SELECT * FROM `utg` WHERE `utg`.`u` = '".mysql_real_escape_string($r[1])."' AND `utg`.`s` LIKE ".$j;
			$rst = mysql_query($q2); $fm = mysql_fetch_array($rst);
			
			//Соединяем прежние и новые данные и дозаписываем технологию
			$a = $fm[2].$r[0];
			$q3 = "UPDATE `utg` SET `utg`.`s` = '".mysql_real_escape_string($a)."' WHERE `utg`.`u` = '".mysql_real_escape_string($r[1])."' AND `utg`.`s` LIKE '".mysql_real_escape_string($r[3]."$%")."'"; mysql_query($q3);
			
		}
		
		print 'Данные технологии с шифром «'.$r[3].'» успешно обновлены.';
	}
		
	//Если машины не существует в пользовательской базе данных то вставляем запись	
	else {
		
		//Если это первая порция инфы то просто вставляем новую запись
		$q4 = "INSERT INTO `utg` (`utg`.`u`, `utg`.`s`) VALUES ('".mysql_real_escape_string($r[1])."', '".mysql_real_escape_string($r[0])."')"; mysql_query($q4);

		//Выводим конечное сообщением работы функции
		print 'Данные технологии с шифром «'.$r[3].'» успешно сохранены.';
	}
	
	//Вывод значения в функцию
	//print $a[1];
}
else {echo 'нет значения';}

//$r = explode('`', $_GET['s']); print $r[0];