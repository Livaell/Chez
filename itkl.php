<?php 
header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["s"])) { 

	//Предварительная обработка переменных
	$s = split('[`]', $_GET["s"]); 
	
	//Подключение к базе данных
	$dbcnx = @mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");
	
	//Выбор данных
	$q1 = "SELECT * FROM `uzl` WHERE `uzl`.`u` = '".mysql_real_escape_string($s[1])."' AND `uzl`.`s` LIKE '".mysql_real_escape_string($s[0]."%")."'"; 
	$rs = mysql_query($q1); $f = mysql_fetch_array($rs);
	
	//Вывод значения в функцию
	print $f[2];
}
else {echo 'нет значения';}

