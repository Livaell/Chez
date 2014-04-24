<?php 

//Предварительная обработка переменных
$m = split('[|]',$_GET["r"]);

//Подключение к базе и формирование массива
$link = @mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8");mysql_select_db("chez",$link);

//Проверяем существует ли в базе данных еще один такой логин
$qry = "SELECT * FROM `ps` WHERE `ps`.`Login` = '".mysql_real_escape_string($m[0])."'";
$result = mysql_query($qry);
$f = mysql_fetch_array($result);
$k = mysql_num_rows($result);

//Проверяем существует ли в базе данных еще один такой логин
$qry = "SELECT * FROM `ps` WHERE `Email` = '".mysql_real_escape_string($m[1])."'";
$result = mysql_query($qry);
$l = mysql_num_rows($result);
//$b=$n;

//Вывод значения в функцию
print $k.'|'.$l;

