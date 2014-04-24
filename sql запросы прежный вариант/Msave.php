<?php 
header("Content-Type: text/html;charset=utf-8");
if (!empty($_GET["s"])) { 

//Предварительная обработка переменных
$a = split('[\]', $_GET["s"]);

//Подключение к базе данных
$dbcnx = @mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8");mysql_select_db("chez");

//Проверка на существовании машины в базе данных
$j = "'".mysql_real_escape_string("%\\\\".$a[1]."\\\\%")."'";
$qry = "SELECT * FROM `mt` WHERE `mt`.`s` LIKE ".$j;
$result = mysql_query($qry);$f = mysql_fetch_array($result);

$h = mysql_num_rows($result);
//Запись машины в базу данных в случае ее отсутствия и обновление значений в случае наличия в базе данных
if (mysql_num_rows($result) > 0){
//Обновляем строку S  главной таблицы
$q = "UPDATE mt SET S = '".mysql_real_escape_string($_GET["s"])."' WHERE S LIKE '".mysql_real_escape_string("%\\\\".$a[1]."\\\\%")."'";
mysql_query($q);
//Обновляем значения цен
$k = $a[22]."\\".$a[5]."|".$f[2];
$q = "UPDATE mt SET B = '".mysql_real_escape_string($k)."' WHERE S LIKE '".mysql_real_escape_string("%\\\\".$a[1]."\\\\%")."'";
mysql_query($q);

print 'Данные машины «'.$a[1].'» успешно обновлены.';}
else {
$q = "INSERT INTO mt (S) VALUES ('".mysql_real_escape_string($_GET["s"])."')";mysql_query($q);
print 'Данные машины «'.$a[1].'» упешно сохранены.';
}

//Вывод значения в функцию
//print $a[1];
}
else {echo 'нет значения';}
