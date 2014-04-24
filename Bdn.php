<?php
//header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["u"])) { 

//Предварительная обработка входящей переменной
$m = explode('|', $_GET["u"]);

//Подключение к базе
$dbcnx = @mysql_connect("localhost", "chez", "chez");mysql_set_charset("utf8");mysql_select_db("chez");

//Если выбрана пользовательская марка то делаем запрос в пользовательскую базу данных
if(substr_count($m[0], '*') > 0){$m[0] = substr($m[0], 1, strlen($m[0]) - 1);
	$q = "'".mysql_real_escape_string("%\\\\%\\\\".$m[0]."\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%")."'";
	$qry = "SELECT * FROM `umt` WHERE `umt`.`u` = '".mysql_real_escape_string($m[1])."' AND `umt`.`s` LIKE ".$q;
	$result = mysql_query($qry);$f = mysql_fetch_array($result);
	$s = explode('\\', $f[2]); $s[1] = '*'.$s[1]; $s[2] = '*'.$s[2];
	$s = implode('\\', $s);
}
//Если выбрана центральная марка то делаем запрос в центральную базу данных
else{
	$q = "'".mysql_real_escape_string("%\\\\%\\\\".$m[0]."\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%")."'";
	$qry = "SELECT * FROM `mt` WHERE `mt`.`s` LIKE ".$q;
	$result = mysql_query($qry);$f = mysql_fetch_array($result);
	$s = $f[1];
}


//Вывод значений функции
print $s; 
} 
else {echo 'нет значения';}