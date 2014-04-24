<?php

	if (!empty($_GET["r"])) {
		
		session_start();
		$_SESSION['code'] = '';
		$string = $_GET["r"];
		
		//Создаем 5 Букв
		//for ($i = 0; $i < 5; $i++){$string .= chr(rand(97, 122));}
		
		//Записываем переменную сессии
		//$_SESSION['code'] = $string;
	
		$dir = "fonts/";
	
		$image = imagecreatetruecolor(170, 60);
		$black = imagecolorallocate($image, 0, 0, 0);
		$color = imagecolorallocate($image, 200, 100, 90);
		$white = imagecolorallocate($image, 255, 255, 255);
	
		imagefilledrectangle($image,0,0,399,99,$white);
		imagettftext ($image, 30, 0, 10, 40, $color, $dir."verdana.ttf", $string);
		
		/* Рисуем линии*/
		for($i = 0; $i < 4; $i++)
		{
		   imageline($image, rand(0, 20), rand(1, 50), rand(150, 180), rand(1, 50), $color);
		}
		
		header("Content-type: image/png");
		imagepng($image);
	}
?>