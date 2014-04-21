<?php
header("Content-Type: text/html;charset=utf-8");

//Подключение к базе и формирование массива
$db = mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8");
mysql_select_db("chez", $db);
$qry = "SELECT * FROM `chez`.`sp`";
$result = mysql_query($qry, $db) or die(mysql_error());
$f = mysql_fetch_array($result);

//Вывод значения в функцию
print $f[1]; 

