<?php
header("Content-Type: text/html;charset=utf-8");
if (!empty($_GET["s"])) {

//Предварительная обработка переменных
$m = split('[`]',$_GET["s"]);

//Подключение к базе и формирование массива
$dbcnx = @mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8");mysql_select_db("chez");
$qry = "SELECT * FROM `ps` WHERE `ps`.`Login`='".mysql_real_escape_string(trim($m[0]))."' AND `ps`.`Password`='".mysql_real_escape_string(trim($m[1]))."'";
$result = mysql_query($qry);
$f = mysql_fetch_array($result);

//Вывод значения в функцию
print $f[0].'|'.$f[1];
}
else {echo 'нет значения';}
