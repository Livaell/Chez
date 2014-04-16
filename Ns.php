<?php

//Подключение к базе и формирование массива
$dbcnx = mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8"); mysql_select_db("chez");
$qry = "SELECT * FROM `sp`";
$result = mysql_query($qry);
$f = mysql_fetch_array($result);

//Вывод значения в функцию
print $f[2]; 