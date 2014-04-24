<?php 
header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["s"])) { 

	//Предварительная обработка переменных
	$r = explode('|', $_GET["s"]); $a = explode('\\', $r[0]);
	
	//Подключение к базе данных
	$db = mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");
	
	//Проверка на существовании машины в базе данных
	$j = "'".mysql_real_escape_string("%\\\\".$a[1]."\\\\%")."'";
	$qry = "SELECT * FROM `umt` WHERE `umt`.`u` = '".mysql_real_escape_string($r[1])."' AND `umt`.`s` LIKE ".$j;
	$result = mysql_query($qry); $f = mysql_fetch_array($result);
	
	//Запись машины в базу данных в случае ее отсутствия и обновление значений в случае наличия в базе данных
	if (mysql_num_rows($result) > 0){// Если машина существует в пользовательской базе данных то обновляем ее значения
		//Обновляем строку S  главной таблицы
		$q = "UPDATE `umt` SET `umt`.`s` = '".mysql_real_escape_string($r[0])."' WHERE `umt`.`u` = '".mysql_real_escape_string($r[1])."' AND `umt`.`s` LIKE '".mysql_real_escape_string("%\\\\".$a[1]."\\\\%")."'"; mysql_query($q);
		
		//Обновляем значения цен
		if($f[3] != ''){$k = $a[22]."\\".$a[5]."|".$f[3];}else{$k = $a[22]."\\".$a[5];}
		$q = "UPDATE `umt` SET `umt`.`b` = '".mysql_real_escape_string($k)."' WHERE `umt`.`u` = '".mysql_real_escape_string($r[1])."' AND `umt`.`s` LIKE '".mysql_real_escape_string("%\\\\".$a[1]."\\\\%")."'";
		mysql_query($q);
		
		print 'Данные машины «'.$a[1].'» успешно обновлены.';}
	else {// Если машины не существует в пользовательской базе данных то вставляем запись
		$q = "INSERT INTO `umt` (`umt`.`s`, `umt`.`u`) VALUES ('".mysql_real_escape_string($r[0])."', '".mysql_real_escape_string($r[1])."')"; mysql_query($q);
		
		//Пополнение центральной базы данных если там нету такой машины
		$q = "SELECT * FROM `mt` WHERE `mt`.`s` LIKE '".mysql_real_escape_string("%\\\\".$a[1]."\\\\%")."'";
		$result = mysql_query($q);
		if(mysql_num_rows($result) < 1){
			$q = "INSERT INTO `amt` (`amt`.`s`) VALUES ('".mysql_real_escape_string($r[0])."')"; mysql_query($q);		
		}
		
		//Выводим конечное сообщением работы функции
		print 'Данные машины «'.$a[1].'» упешно сохранены.';
	}
	
	//Вывод значения в функцию
	//print $a[1];
}
else {echo 'нет значения';}
