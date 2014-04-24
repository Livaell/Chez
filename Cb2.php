<?php
header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["ge"])) { 

//Предварительная обработка входящей переменной
$m = explode('|', $_GET["ge"]); if ($m[1] == ''){$m[1] = '%';}

//Подключение к базе
$dbcnx = @mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");

//1 запрос в пользовательскую базу данных
$q = "'".mysql_real_escape_string($m[0]."%\\\\%\\\\%\\\\%\\\\".$m[1]."\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%")."'";
$qry = "SELECT * FROM `umt` WHERE `umt`.`u` = '".mysql_real_escape_string($m[2])."' AND `umt`.`s` LIKE ".$q;
$res = mysql_query($qry); $v = mysql_fetch_array($res);

//2 запрос в центральную базу данных
$q = "'".mysql_real_escape_string($m[0]."%\\\\%\\\\%\\\\%\\\\".$m[1]."\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%")."'";
$qry = "SELECT * FROM `mt` WHERE `mt`.`s` LIKE ".$q;
$result = mysql_query($qry); $f = mysql_fetch_array($result);

//Формируем массив данных для вывода марок из центральной базы данных
$i=0; $a=$f[1].'|'; while ($row = mysql_fetch_array($result)){$a = $a.$row[1].'|';}; $a = substr($a, 0, strlen($a) - 1);

//Формируем массив данных для вывода марок из пользовательской базы данных
if(mysql_num_rows($res) > 0){
	$s = explode('\\', $v[2]); $s[1] = '*'.$s[1]; $s[2] = '*'.$s[2]; $v[2] = implode('\\', $s); $a = $a.'|'.$v[2].'|';
	while ($row = mysql_fetch_array($result)) {
		$s = explode('\\', $row[2]); $s[1] = '*'.$s[1]; $s[2] = '*'.$s[2]; $row[2] = implode('\\', $s);
		$a = $a.$row[2].'|';
	}
	$a = substr($a, 0, strlen($a) - 1);
}

//Вывод значений функции
print $a; 
} 
else {echo 'нет значения';}
