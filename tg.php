<?php
	header("Content-Type: text/html;charset=utf-8");
if (!empty($_GET["r"])) { 
	
	//Предварительная обработка входящей переменной
	$r = split('[`]', $_GET["r"]); $m = split('[|]', $r[0]); 
	
	//Подключение к базе
	$dbcnx = @mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");
	
	//Цикл запросов SQL
	for ($x = 0; $x < count($m); $x++){
		
		//1. SQL запрос с соответствующей переменной в цикле из центральной базы данных
		$q = "SELECT * FROM `tg` WHERE `tg`.`s` LIKE '".mysql_real_escape_string("%$%$".$m[$x]."$%$%|%|%|%")."'";
		$result = mysql_query($q); $f = mysql_fetch_array($result);
		
		//Формируем массив данных для вывода
		$a = $a.$f[1].'`';
		$result = mysql_query($q);
		
		while($row = mysql_fetch_array($result)){
			$a = $a.$row[1].'`';
		};
		$a = substr($a, 0, strlen($a) - 1);
		
		
		
		
		$q = "SELECT * FROM `utg` WHERE `utg`.`u` = '".mysql_real_escape_string($r[1])."' AND `utg`.`s` LIKE '".mysql_real_escape_string("%$%$".$m[$x]."$%|%|%|%")."'";
		$result = mysql_query($q); $f = mysql_fetch_array($result);
		
		if(strlen($a) > 0){
			if(strlen($f[2]) > 0){$a = $a.'`*'.$f[2].'`';}
			$result = mysql_query($q);
			while($row = mysql_fetch_array($result)){
				$a = $a.'*'.$row[2].'`';
			};
			$a = substr($a, 0, strlen($a) - 1);
		}
		else{
			if(strlen($f[2]) > 0){$a = $a.'*'.$f[2].'`';}
			$result = mysql_query($q);
			while($row = mysql_fetch_array($result)){
				$a = $a.$row[2].'`';
			};
			$a = substr($a, 0, strlen($a) - 1);
		}
		
		
	}
	
	
	
	//Вывод значений функции
	print $a; 
} 
else {echo 'нет значения';}
		
