<?php
header("Content-Type: text/html;charset=utf-8");

//Подключение к базе и формирование массива
$dbcnx = @mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8");mysql_select_db("chez");
$qry = "SELECT * FROM `cs`";
$result = mysql_query($qry);
$f = mysql_fetch_array($result);

//Формируем массив данных для вывода
$i=0; $a=$f[1].'|';
while ($row = mysql_fetch_array($result)) {$a = $a.$row[1].'|';};$a = substr($a, 0, strlen($a) - 1);

//Вывод значений функции
print $a; 

