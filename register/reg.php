<?php 
header("Content-Type: text/html;charset=utf-8");
if (!empty($_GET["s"])) { 

//Предварительная обработка переменных
$a = split('[|]', $_GET["s"]);

//Подключение к базе данных
$dbcnx = @mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8");mysql_select_db("chez");

//Запись в базу данных
$q = "INSERT INTO ps (Login, Password, Email, Fio, Town, Address, Company, Role) VALUES ('".mysql_real_escape_string(trim($a[0]))."', '".mysql_real_escape_string(trim($a[2]))."', '".mysql_real_escape_string(trim($a[1]))."', '".mysql_real_escape_string(trim($a[3]))."', '".mysql_real_escape_string(trim($a[4]))."', '".mysql_real_escape_string(trim($a[5]))."', '".mysql_real_escape_string(trim($a[7]))."', '".mysql_real_escape_string(trim($a[6]))."')";
mysql_query($q);

//Вывод значения в функцию
$r = 'Поздравляем, Вы успешно зарегистрированы. Для входа в систему необходимо авторизоваться.';
print $r;

}
else {echo 'нет значения';}
