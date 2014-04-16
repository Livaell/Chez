<?php 
header("Content-Type: text/html;charset=utf-8");

if (!empty($_GET["j"])) { 

//Предварительная обработка переменных
$m = explode('|',$_GET["j"]);

//Подключение к базе и формирование массива
$dbcnx = @mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8");mysql_select_db("chez");

//1. Формируем запрос на выбор данных из центральной таблицы
$q = "'".mysql_real_escape_string("%\\\\".$m[0]."\\\\%")."'";
$qry = "SELECT * FROM `mt` WHERE `mt`.`s` LIKE ".$q;
$result = mysql_query($qry); $f = mysql_fetch_array($result);

//2. Формируем запрос на выбор данных из пользовательской базы данных
$q = "'".mysql_real_escape_string("%\\\\".$m[0]."\\\\%")."'";
$qry = "SELECT * FROM `umt` WHERE `umt`.`u` = '".mysql_real_escape_string($m[2])."' `umt`.`s` LIKE ".$q;
$result2 = mysql_query($qry); $f2 = mysql_fetch_array($result2);

//Условие выбора базы данных между центральной или пользовательской
if(mysql_num_rows($result2) > 0){$a = explode('|', $f2[2]);$c = explode('\\', $f2[1]);}
else{$a = explode('|', $f[2]);$c = explode('\\', $f[1]);}

//Поиск в поле цен даты и соответствующе цены
$s = explode('\\', $a[0]); $d = strtotime($s[0]) - strtotime($m[0]);
//Цикл поиска даты и цены
for($i = 0; $i < count($a); $i++){$s = explode('\\', $a[$i]);
	if(abs(strtotime($s[0]) - strtotime($m[1])) < $d){
		$d = abs(strtotime($s[0]) - strtotime($m[1]));$y = $s[0];$u = $s[1];
	}
}

//Вывод значения в функцию
if (strlen($y) < 1){print $c[22]."|".$c[5];}
else {print $y."|".$u;}

}
else {echo 'нет значения';}
