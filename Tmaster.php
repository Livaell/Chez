<?php
header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["r"])) { 
	
	//Предварительная обработка входящей переменной
	$r = explode('`', $_GET["r"]); $m[0] = $r[0]."$".$r[1]."$".$r[2]; $m[1] = $r[0]."$".$r[1]."$%"; $m[2] = $r[0]."$%$%"; 
	
	//Подключение к базе
	$dbcnx = @mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");
	
		
		//1. SQL запрос с соответствующей переменной в цикле из центральной базы данных
		$q = "SELECT * FROM `mso` WHERE `mso`.`s` LIKE '".mysql_real_escape_string("%|".$m[0]."|".$r[3]."|%")."'"; $result = mysql_query($q); 
		if(mysql_num_rows($result) > 0){
			$f = mysql_fetch_array($result); $a = $f[1].'!';
			while($row = mysql_fetch_array($result)){$a = $a.$row[1].'!';};
			$a = substr($a, 0, strlen($a) - 1);
		};
		
		//2. SQL запрос с соответствующей переменной в цикле из центральной базы данных
		$q = "SELECT * FROM `mso` WHERE `mso`.`s` LIKE '".mysql_real_escape_string("%|".$m[1]."|".$r[3]."|%")."'"; $result = mysql_query($q); 
		if(mysql_num_rows($result) > 0){
			$f = mysql_fetch_array($result); $a = $f[1].'!';
			while($row = mysql_fetch_array($result)){$a = $a.$row[1].'!';};
			$a = substr($a, 0, strlen($a) - 1);
		};
		
		//3. SQL запрос с соответствующей переменной в цикле из центральной базы данных
		$q = "SELECT * FROM `mso` WHERE `mso`.`s` LIKE '".mysql_real_escape_string("%|".$m[2]."|".$r[3]."|%")."'"; $result = mysql_query($q); 
		if(mysql_num_rows($result) > 0){
			$f = mysql_fetch_array($result); $a = $f[1].'!';
			while($row = mysql_fetch_array($result)){$a = $a.$row[1].'!';};
			$a = substr($a, 0, strlen($a) - 1);
		};
		
	//Вывод значений функции
	print $a; 
} 
else {echo 'нет значения';}
