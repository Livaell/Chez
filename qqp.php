<?php 
header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["s"])) { 

	//Предварительная обработка переменных
	$s = split('[`]', $_GET["s"]); 
	
	//Подключение к базе данных
	$dbcnx = @mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");
	
	//1. Проверка на существование технологии во временной базе данных
	if($s[3] > 0){
		
		//Выбираем прежние записанные данные
		$q1 = "SELECT * FROM `uzl` WHERE `uzl`.`u` = '".mysql_real_escape_string($s[1])."' AND `uzl`.`s` LIKE '".mysql_real_escape_string($s[2]."%")."'"; 
		$rs1 = mysql_query($q1);
		$f1 = mysql_fetch_array($rs1);
		
		//Соединяем прежние и новые данные и дозаписываем технологию
		$r1 = $f1[2].$s[0];
		$q2 = "UPDATE `uzl` SET `uzl`.`s` = '".mysql_real_escape_string($r1)."' WHERE `uzl`.`u` = '".mysql_real_escape_string($s[1])."' AND `uzl`.`s` LIKE '".mysql_real_escape_string($s[2]."%")."'"; 
		mysql_query($q2);
	}
	else{
		$q3 = "INSERT INTO `uzl` (`uzl`.`u`, `uzl`.`s`) VALUES ('".mysql_real_escape_string($s[1])."', '".mysql_real_escape_string($s[2].$s[0])."')"; 
		mysql_query($q3);
	}
	
	//Вывод значения в функцию
	print $s[3] + 1;
}
else {echo 'нет значения';}

