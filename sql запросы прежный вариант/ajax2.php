<?php 
header("Content-Type: text/html;charset=utf-8");
if (!empty($_GET["ge"])) { 

//Предварительная обработка переменных
$m = split('[|]',$_GET["ge"]);if ($m[1] == ''){$m[1] = '%';};if ($m[2] == ''){$m[2] = '%';}

//Подключение к базе и формирование массива
$dbcnx = @mysql_connect("localhost", "chez", "chez"); mysql_set_charset("utf8"); mysql_select_db("chez");

//1 запрос в пользовательскую базу данных
$q = "'".mysql_real_escape_string($m[0]."%\\\\%\\\\".$m[2]."\\\\%\\\\".$m[1]."\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%")."'";
$qry = "SELECT * FROM `umt` WHERE `umt`.`u` = '".mysql_real_escape_string($m[3])."' AND `umt`.`s` LIKE ".$q;
$result = mysql_query($qry);
$v = mysql_fetch_array($result);

//2 запрос в центральную базу данных
$q = "'".mysql_real_escape_string($m[0]."%\\\\%\\\\".$m[2]."\\\\%\\\\".$m[1]."\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%\\\\%")."'";
$qry = "SELECT * FROM `mt` WHERE `mt`.`s` LIKE ".$q;
$result = mysql_query($qry);
$f = mysql_fetch_array($result);

//Формирование переменной S для передачи в ai
$i=0; $a=$f[1].'|';
while ($row = mysql_fetch_array($result)) {$a = $a.$row[1].'|';};$a = substr($a, 0, strlen($a) - 1);

//Вывод значения в функцию
print $a;
}
else {echo 'нет значения';}
