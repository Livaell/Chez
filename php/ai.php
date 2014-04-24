<?php
header("Content-Type: text/html;charset=utf-8");

//Предварительная обработка переменных
	$a = explode('\\', $_GET["s"]);
	
	$mp = $a[21];
	$k2 = $a[7] / 100;
	$i = $a[17] / 100;
	$n = $a[18] + 1;
	
	/*
	var a = s.split('\\'); //Массив строки S
	var f;var w;var q;var c;var k; //Объявление переменных
	var Mp = a[21];var k2 = a[7] / 100;
	var I = a[17] / 100;var N = parseInt(a[18]) + 1;
	var k0 = 1.15 + Mp * k2 + I * N / 2;
	var Pr = a[5] * k0; var T0 = Pr / a[6];
	var Mt = T0 / a[20];var Gsm = a[15] * a[9] * a[19];
	var W = a[16] * a[13]; 
	
	var c = Mt + Gsm + W;c = c.toFixed(2); //Расчет ЧЭЗ
	
	//1. Блок формирования форумулы агрегатов
	f = a[1];
	//2. Расчет производительности
	if (a[0].indexOf('1.') == 0) {w = a[4]}
	else {w = 0.1 * a[10] * a[11] * a[12]; w = w.toFixed(2)};
	//3. Расход топлива для тракторов и тяговых устройств
	if (a[0].indexOf('1.') == 0) {q = parseFloat(a[9]).toFixed(1);}
	else if (a[0].indexOf('7.2') == 0){q = parseFloat(a[9]).toFixed(1); q = parseFloat(q / w).toFixed(1);}
	else if (a[0].indexOf('1.') < 0 && a[0].indexOf('7.2') < 0){q = parseFloat(a[4]);}
	else {if (w != 0){q = parseFloat(q / w).toFixed(1);}};
	//4. Расчет ЧЭЗ
	if(a.length == 24){c = (c * a[23]).toFixed(2);} else{c = c;}
	//5. Расчет себестоимости
	if (a[0].indexOf('1.') == 0) {k = a[3]}
	else {if (w!=0){k = parseFloat(c / w).toFixed(1);} else {k = 0;}}  
	 //Обработка результатов
	  
	s = f + "\\" + w + "\\" + q + "\\" + c + "\\" + k;  

	return s;
	*/
	
	//print "Трактор1\\\\3\\\\55\\\\1523\\\\295";
	print "AAA";




