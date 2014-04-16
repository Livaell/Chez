<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//RU" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php print $_GET["re"];?></title>
<style type="text/css">
body,td,th {
	color: #000;
}
</style>
</head>

<body>
<?php // $j = $_GET["re"];
$dbcnx = @mysql_connect("localhost", "chez", "chez");
mysql_set_charset("utf8");mysql_select_db("chez");
$q = "'".mysql_real_escape_string("%\\\\".$_GET["re"]."\\\\%\\\\%\\\\%\\\\%")."'";//Предыдущая версия
$q = "'".mysql_real_escape_string("%".$_GET["re"]."%")."'";
$qry = "SELECT * FROM `mt` WHERE `mt`.`s` LIKE ".$q;
$result = mysql_query($qry);
$f = mysql_fetch_array($result);

//echo $f[3];

$a = split('[|]',$f[3]);
$s = split('[!]',$a[4]);
//echo $a[0];
?>

<table id="fon" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-image:url(image/fon.png)"><tr><td id="fonc">
<table id="bk" width="914" border="0" align="center" style="background-color:rgb(255,255,255)">
<tr><td>

<table id="all" width="800" border="0" align="center" style="background-color:rgb(255,255,255)">

<tr height="100"><td id="allc">
<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr height="100px"><td width="5%" style="padding:20px 20px 20px 0px"><img src="image/gerb.jpeg" width="91" height="100" /></td><td width="95%"><p class="MsoNormal" style="text-align:left; font-size:14pt;font-family:Microsoft Sans Serif;">Самарская аграрная информационно-консультативная система МАТЧЭЗ</p><p align="center">Министерство сельского хозяйства и продовольствия Самарской области</p>


</td></tr></table>
 
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-bottom:30px"><tr class="MsoNormal" style="font-size:8pt"><td align="right"></td></tr><tr height="2px" style="background-color:rgb(102,102,102)"><td></td></tr></table>


</td></tr>


<tr><td>

<table id="t1" style="width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0">
        <tr valign="middle">
                <td height="10" width="100%" align="center" class="MsoNormal" style="text-align: center;"><b><?php echo $a[0]; ?></b>
                </td>
            </tr>
            <tr valign="middle">
                <td id="q0" height="40" width="100%" align="center" class="MsoNormal" style="text-align: center; font-size:16pt;"><b><?php echo $a[1]; ?></b>
                </td>
            </tr>
       </table>
    <table style="border-collapse: collapse; width: 100%;" cellpadding="20" cellspacing="0" align="center" border="0">
        <tbody>
            <tr>
                <td cellpadding="50" height="220" width="50%">
                    <div id="di1" align="center"><?php echo 
                        "<img id='p0' src='img/".$f[0]."1.jpg' />";?></div>
                </td>
                <td width="50%">
                    <div id="di2" align="right"><?php echo $a[2]; ?></div>
                                        
              </td>
            </tr>
        </tbody>
    </table>
    <table style="border-collapse: collapse; width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0">
        <tbody>
            <tr>
                <td cellpadding="10" height="30" width="100%" align="center"><?php echo "НАЗНАЧЕНИЕ И КОМПЛЕКТАЦИЯ."; ?></td>
            </tr>
            <tr>
                <td cellpadding="10" height="20" width="100%" align="left">
 <p align="left" class="MsoFooter" style="text-align: justify; text-indent: 27.0pt;"><?php print $a[3]; ?></p>
                </td>
            </tr>
            <tr>
                <td height="30" width="100%" align="center"><?php echo "ТЕХНИКО-ЭКОНОМИЧЕСКИЕ ПОКАЗАТЕЛИ."; ?></td>
            </tr>
        </tbody>
    </table>
    
    
    
<script language="javascript">
window.onload = function () {
var j = '<?php print $f[3];?>';//alert(j.length);
if (j == '' || j == null || j.length < 2 ){
var g = document.getElementById('fonc');
g.innerHTML = '<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p align="center"><font size="+2">Информация находится в разработке.</font></p><p>&nbsp;</p><p align="center">Приносим извинения за неудобства.</p>';
//document.getElementById('bk').style.backgroundColor = 'rgb(204, 255, 204)';
//document.getElementById('all').style.backgroundColor = 'rgb(204, 255, 204)';
document.getElementById('fon').style.backgroundImage = '';
} //Информация находится в разработке
var t = document.getElementById('qs').rows;
var r = t[1];
for(var i = 1; i < t.length;i++){r = t[i];
if(r.cells[1].innerHTML == ''){i--;r.parentNode.removeChild(r);}
} //удаление пустых строк из таблицы
var m = '<?php print mysql_real_escape_string($f[1]); ?>';
document.getElementById('tr').innerHTML = ai(m); //Пересчет чэз при загрузке
}
</script>  



<table id="qs" style="border-collapse: collapse; width: 80%;" cellpadding="0" cellspacing="0" align="center" border="1">
        <tbody>
            <tr>
                <td width="40" align="center">№ п.п.</td>
                <td width="511" align="center">Наименование показателя</td>
                <td width="149" align="center">Значение</td>
            </tr>
            <tr>
                <td width="40" align="center">1.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[0]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[0]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">2.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[1]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[1]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">3.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[2]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[2]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">4.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[3]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[3]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">5.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[4]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[4]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">6.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[5]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[5]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">7.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[6]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[6]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">8.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[7]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[7]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">9.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[8]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[8]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">10.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[9]); echo $m[0]; ?></td>
                <td width="149" align="center" style="background-color: rgb(220,194,116)">
                
                <input style="background-color: rgb(220,194,116); border-width:0px " id="Qt" align="middle" onkeypress="Ct(event)" value="<?php $m = split('[`]',$s[9]); echo $m[1]; ?>" />
                
<script type="text/javascript">
function Ct(e){if (e.keyCode == 13) {var a = '<?php echo mysql_real_escape_string($f[1]); ?>';document.getElementById('tr').innerHTML = '<font color="#CC0000">' + ai(a) + '</font>';}} // Расчет чэз
function ai(s){a = s.split('\\'); a[5] = document.getElementById('Qt').value;
	
	var Mp = a[21];var k2 = a[7] / 100;
	var I = a[17] / 100;var N = parseInt(a[18]) + 1;
	var k0 = 1.15 + Mp * k2 + I * N / 2;
	var Pr = a[5] * k0; var T0 = Pr / a[6];
	var Mt = T0 / a[20];var Gsm = a[15] * a[9] * a[19];
	var W = a[16] * a[13]; 
	
	var c = Mt + Gsm + W;c = c.toFixed(0); return c;} // ai

</script>		  
            </tr>
            <tr>
                <td width="40" align="center">11.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[10]); echo $m[0]; ?></td>
                <td width="149" align="center" id="tr"><?php $m = split('[`]',$s[10]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">12.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[11]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[11]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">13.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[12]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[12]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">14.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[13]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[13]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">15.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[14]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[14]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" height="25" align="center">16.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[15]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[15]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">17.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[16]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[16]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">18.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[17]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[17]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">19.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[18]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[18]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">20.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[19]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[19]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">21.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[20]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[20]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">22.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[21]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[21]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">23.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[22]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[22]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">24.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[23]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[23]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">25.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[24]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[24]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">26.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[25]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[25]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">27.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[26]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[26]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">28.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[27]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[27]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">29.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[28]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[28]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">30.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[29]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[29]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">31.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[30]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[30]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">32.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[31]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[31]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">33.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[32]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[32]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">34.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[33]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[33]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">35.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[34]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[34]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">36.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[35]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[35]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">37.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$s[36]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$s[36]); echo $m[1]; ?></td>
            </tr>
        </tbody>
    </table>
    <table style="border-collapse: collapse; width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0">
        <tbody>
            
            
            
        </tbody>
    </table>
    <table style="border-collapse: collapse; width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0">
        <tbody>
            <tr>
                <td height="40" valign="bottom" width="100%" align="center"><?php echo "КОНСТРУКЦИЯ."; ?></td>
            </tr>
            <tr>
                <td height="20" width="100%">
                    <p class="MsoFooter" style="text-align: justify; text-indent: 27.0pt;"><?php print $a[5]; ?></p>
                </td>
            </tr>
</tbody></table>





<table id="plm" style="border-collapse: collapse; width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0"><tr>
            
<td cellpadding="50" height="220" width="50%"><div id="di1" align="center">
<?php echo "<img id='p1' src='img/".$f[0]."2.jpg'  onerror='err1()'/>";?></div></td>

<td width="50%"><div id="di2" align="center">
<?php echo "<img id='p2' src='img/".$f[0]."3.jpg' onerror='err2()'/>";?></div></td>
</tr>
</table>



<script type="text/javascript">
var k = 1;
function err1(){k = 0;document.getElementById('plm').innerHTML = '';}

function err2(){document.getElementById('plm').innerHTML = "<tr align='center'><td><?php echo "<img src='img/".$f[0]."2.jpg' />";?></td></tr>";
if(k == 0){document.getElementById('plm').innerHTML = '';}
}

function err3(){document.getElementById('tru1').innerHTML = '';document.getElementById('tru2').innerHTML = '';}
</script>




<table style="border-collapse: collapse; width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0"><tbody>
<tr>
<td height="20" width="100%">
<p class="MsoFooter" style="text-align: center;"><?php print $a[6]; ?></p>
</td>
</tr>
<tr>
<td height="20" width="100%">
<p class="MsoFooter" style="text-align: justify; text-indent: 27pt;"><?php echo $a[7]; ?></p>
</td>
</tr>
<tr id="tru1" align="center"><td>
<?php echo "<img id='p3' src='img/".$f[0]."4.jpg' onerror='err3()'/>";?>
</td></tr>
<tr id="tru2" align="center"><td><p><?php echo $a[8]; ?></p></td></tr>
<tr><td><?php echo $a[9]; ?></td></tr>
<tr><td><?php echo $a[10]; ?></td></tr>
<tr><td align="center"><?php echo $a[11]; ?></td></tr>

<tr>
<td height="40" valign="middle" width="100%" align="center"><?php echo "ДАННЫЕ ИСПЫТАНИЙ."; ?></td>
</tr>
<tr>
<td height="20" width="100%">
<p class="MsoFooter" style="text-align: justify; text-indent: 27pt;"><?php echo $a[12]; ?></p>
</td>
</tr>
<tr>
<td height="40" valign="middle" width="100%" align="center"><?php echo "ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ."; ?></td>
</tr>
<tr>
<td height="20" width="100%" align="justify"><?php echo $a[13]; ?></td>
</tr>
<tr>
<td height="40" valign="middle" width="100%" align="center"><?php echo "ИСТОЧНИКИ."; ?></td>
</tr>
<tr>
<td height="20" width="100%">
<p class="MsoFooter" style="text-align: justify;"><?php echo $a[14]; ?></p>
</td>
</tr>
</tbody>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr height="2" style="background-color:rgb(102,102,102); margin:20px"><td></td></tr></table>

<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr height="100px"><td width="11%" style="padding-left:20px"><img src="image/gerb2.png" width="55" height="75" /></td>
<td width="89%" align="left"><?php echo $a[15]; ?></td></tr></table>

</td></tr></table>

</td> </tr></table>
</td> </tr></table>















</body>
</html>
