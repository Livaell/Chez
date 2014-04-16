<?php
header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["r"])) { 
	
	//Предварительная обработка входящей переменной
	$r = explode('`', $_GET["r"]); 
	
	//Подключение к базе
	$dbcnx = @mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");
	
		
	//1. SQL запрос с соответствующей переменной из центральной базы данных
	$q = "SELECT * FROM `mso` WHERE `mso`.`s` LIKE '".mysql_real_escape_string($r[0]."|%|%|%$".$r[1]."$%$%$%$".$r[2]."$%|%|%")."'"; 
	$result = mysql_query($q); 
	if(mysql_num_rows($result) > 0){
		$f = mysql_fetch_array($result); $a = $f[1].'!';
		while($row = mysql_fetch_array($result)){$a = $a.$row[1].'!';};
		$a = substr($a, 0, strlen($a) - 1);
	};
	
	//Вывод значений функции
	print $a; 
} 
else {echo 'нет значения';}
