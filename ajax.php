<?php 
header("Content-Type: text/html;charset=utf-8");
if (!empty($_GET["ge"])) { 

//Предварительная обработка переменных
$m = explode('|', $_GET["ge"]);if ($m[1] == ''){$m[1] = '%';};if ($m[2] == ''){$m[2] = '%';};
if(substr_count($m[2], '*') > 0){$m[2] = substr($m[2], 1, strlen($m[2]) - 1);};

//Подключение к базе и формирование массива
$db = mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");

//1 запрос в пользовательскую базу данных
$q = "'".mysql_real_escape_string($m[0]."%\\\\%\\\\".$m[2]."\\\\%\\\\".$m[1]."\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%")."'";
$qry = "SELECT * FROM `umt` WHERE `umt`.`u` = '".mysql_real_escape_string($m[3])."' AND `umt`.`s` LIKE ".$q;
$res = mysql_query($qry, $db);
$v = mysql_fetch_array($res);

//2 запрос в центральную базу данных
$q = "'".mysql_real_escape_string($m[0]."%\\\\%\\\\".$m[2]."\\\\%\\\\".$m[1]."\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%")."'";
$qry = "SELECT * FROM `mt` WHERE `mt`.`s` LIKE ".$q;
$result = mysql_query($qry);
$f = mysql_fetch_array($result);

//Формирование переменной S для передачи в ai из центральной базы данных
if(mysql_num_rows($result) > 0){
	$i=0; $a=$f[1].'|';
	while ($row = mysql_fetch_array($result)) {$a = $a.$row[1].'|';};$a = substr($a, 0, strlen($a) - 1);
}
//Формирование переменной S для передачи в ai из пользовательской базы данных
if(mysql_num_rows($res) > 0){
	$s = explode('\\', $v[2]); $s[1] = '*'.$s[1]; $s[2] = '*'.$s[2]; $v[2] = implode('\\', $s); 
	if(strlen($a) < 3){$a=$v[2].'|';}else{$a=$a.'|'.$v[2].'|';}
	
	while ($row = mysql_fetch_array($res)) {
		$s = explode('\\', $row[2]); $s[1] = '*'.$s[1]; $s[2] = '*'.$s[2]; $row[2] = implode('\\', $s);
		$a = $a.$row[2].'|';
	};
	$a = substr($a, 0, strlen($a) - 1);
}

//Вывод значения в функцию
print $a;
}
else {echo 'нет значения';}
