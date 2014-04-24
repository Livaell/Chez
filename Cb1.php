<?php
header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["ge"])) { 

//Подключение к базе и формирование массива
$dbcnx = mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8");mysql_select_db("chez");
$qry = "SELECT * FROM `mt` WHERE `mt`.`s` LIKE '".trim($_GET["ge"])."%'";
$result = mysql_query($qry);
$f = mysql_fetch_array($result);

//Получаем массив тяговых классов
$i=0; $a = explode('\\', $f[1]); $b = $a[4].'|';
while ($row = mysql_fetch_array($result)) {$a = explode('\\', $row[1]); $b = $b.$a[4].'|';};$b = substr($b, 0, strlen($b) - 1);

//Формируем уникальные значения массива тяговых классов в переменную $s
$b = explode('|', $b); sort($b);$s = $b[0].'|';
for ($i = 0; $i < count($b)-1; $i++){if ($b[$i] <> $b[$i + 1]){$s = $s.$b[$i + 1].'|';};};
$s = substr($s, 0, strlen($s) - 1);

//Вывод значений функции
print $s;
} 
else {echo 'нет значения';}
