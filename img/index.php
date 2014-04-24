<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//RU" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Инф листы</title>
<style type="text/css">
body {
	background-color: #CCC;
}
</style>
</head>

<body>
<div style="width: 660px;" align="center">
    <div id="f" align="center"><form name="form1" method="post" action="index.php?option=com_content&amp;view=article&amp;id=53"><label for="f"><em>Поиск</em></label> <input name="fid" id="f" type="text" /></form></div>
    <p><?php   
        $dbcnx = @mysql_connect("localhost", "cez", "mainCez");
        mysql_set_charset('utf8');
        mysql_select_db("cez") or die('db not found');
        $qry = "SELECT * FROM `cv` WHERE `cv`.`a2` LIKE '%".mysql_real_escape_string($_POST['fid'])."%'";
        $result = mysql_query($qry) or die('query failed');
        $f = mysql_fetch_array($result);
        $a = split('[|]',$f[a5],39);
		
		if (mysql_num_rows ($result) > 1)
		echo "<a href='#' onclick='fq(this)'>$f[a2]</a>";echo "<br>";
        while ($row = mysql_fetch_array($result)) {
        echo "<a href='#' onclick='fq(this)'>$row[2]</a>";echo "<br>";  }
        ?></p>
        
        
        
<script type="text/javascript">
function fq(obj){

var k = document.getElementById('i');
alert(obj.innerHTML);

 


var r = document.getElementById('q0');
var s1 = r.innerHTML.split('>  ');var s2 = s1[1].split('  <');

//Поле a2
r.innerHTML = s1[0] + '> <?php echo $f[a1]; ?> <' + s2[1];

//document.write(prompt("Введите приветственное сообщение:", ""));
}


</script>      
        
        
        
        
        
        
        
        
        
    <table id="t1" style="width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0">
        <tbody>
            <tr valign="middle">
                <td height="20" width="100%" align="center">
                    <p class="MsoNormal" style="text-align: center;" align="center"><b style="mso-bidi-font-weight: normal;"> <?php echo $f[a1]; ?> </b></p>
                </td>
            </tr>
            <tr valign="middle">
                <td id="q0" height="20" width="100%" align="center">
                    <p class="MsoNormal" style="text-align: center;" align="center"><b style="mso-bidi-font-weight: normal;"><span style="color: black;"> <?php echo $f[a2]; ?> </span></b></p>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-collapse: collapse; width: 100%;" cellpadding="20" cellspacing="0" align="center" border="0">
        <tbody>
            <tr>
                <td cellpadding="50" height="220" width="50%">
                    <div id="di1" align="center"><?php echo 
                        "<img src='img/".$f[0]."1.jpg' width='300' 
                        height='200'/>";?></div>
                </td>
                <td width="50%">
                    <div id="di2" align="left"><?php echo "Производитель:"; ?></div>
                    <div id="di3" align="left"><?php echo $f[a3]; ?></div>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-collapse: collapse; width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0">
        <tbody>
            <tr>
                <td cellpadding="10" height="30" width="100%" align="center"><?php echo "1. НАЗНАЧЕНИЕ И КОНСТРУКЦИЯ."; ?></td>
            </tr>
            <tr>
                <td cellpadding="10" height="20" width="100%" align="center">
                    <p class="MsoFooter" style="text-align: justify; text-indent: 27.0pt;"><b style="mso-bidi-font-weight: normal;"><i style="mso-bidi-font-style: normal;"><span style="color: black;"><?php echo "Назначение.";?></span></i></b><span style="color: black;"> <?php echo $f[a4]; ?> </span><span style="font-size: 9.0pt; font-family: Arial; color: black;"><o:p></o:p></span></p>
                </td>
            </tr>
            <tr>
                <td height="30" width="100%" align="center"><?php echo "2. ТЕХНИКО-ЭКОНОМИЧЕСКИЕ ПОКАЗАТЕЛИ."; ?></td>
            </tr>
        </tbody>
    </table>
    <table style="border-collapse: collapse; width: 100%;" cellpadding="0" cellspacing="0" align="center" border="1">
        <tbody>
            <tr>
                <td width="40" align="center">№ п.п.</td>
                <td width="511" align="center">Наименование показателя</td>
                <td width="149" align="center">Значение</td>
            </tr>
            <tr>
                <td width="40" align="center">1.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[0]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[0]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">2.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[1]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[1]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">3.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[2]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[2]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">4.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[3]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[3]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">5.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[4]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[4]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">6.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[5]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[5]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">7.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[6]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[6]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">8.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[7]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[7]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">9.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[8]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[8]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">10.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[9]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[9]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">11.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[10]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[10]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">12.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[11]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[11]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">13.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[12]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[12]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">14.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[13]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[13]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">15.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[14]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[14]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">16.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[15]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[15]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">17.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[16]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[16]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">18.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[17]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[17]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">19.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[18]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[18]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">20.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[19]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[19]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">21.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[20]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[20]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">22.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[21]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[21]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">23.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[22]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[22]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">24.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[23]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[23]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">25.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[24]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[24]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">26.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[25]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[25]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">27.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[26]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[26]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">28.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[27]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[27]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">29.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[28]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[28]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">30.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[29]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[29]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">31.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[30]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[30]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">32.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[31]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[31]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">33.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[32]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[32]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">34.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[33]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[33]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">35.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[34]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[34]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">36.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[35]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[35]); echo $m[1]; ?></td>
            </tr>
            <tr>
                <td width="40" align="center">37.</td>
                <td style="padding: 0pt 5.4pt 0pt 5.4pt;" width="511"><?php $m = split('[`]',$a[36]); echo $m[0]; ?></td>
                <td width="149" align="center"><?php $m = split('[`]',$a[36]); echo $m[1]; ?></td>
            </tr>
        </tbody>
    </table>
    <table style="border-collapse: collapse; width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0">
        <tbody>
            <tr>
                <td width="100%"><?php echo "*   Данные при работе с шириной жатки";?></td>
            </tr>
            <tr>
                <td width="100%"><?php echo "**  По данным испытаний.";?></td>
            </tr>
            <tr>
                <td width="100%"><?php echo "*** КЗК – Красноярский завод комбайнов.";?></td>
            </tr>
        </tbody>
    </table>
    <table style="border-collapse: collapse; width: 100%;" cellpadding="0" cellspacing="0" align="center" border="0">
        <tbody>
            <tr>
                <td height="40" valign="bottom" width="100%" align="center"><?php echo "3. КОНСТРУКЦИЯ."; ?></td>
            </tr>
            <tr>
                <td height="20" width="100%">
                    <p class="MsoFooter" style="text-align: justify; text-indent: 27pt;"><?php echo $f[a6]; ?></p>
                </td>
            </tr>
            <tr>
                <td cellpadding="50" height="220" width="350">
<div id="di1" align="center"><?php echo "<img src='img/".$f[0]."2.jpg' width='300' height='200'/>";?></div>
</td>
</tr>
<tr>
<td height="20" width="100%">
<p class="MsoFooter" style="text-align: justify; text-indent: 27pt;"><?php echo $f[a7]; ?></p>
</td>
</tr>
<tr>
<td height="40" valign="middle" width="100%" align="center"><?php echo "4. КЛАСС КОМБАЙНА."; ?></td>
</tr>
<tr>
<td height="20" width="100%">
<p class="MsoFooter" style="text-align: justify; text-indent: 27pt;"><?php echo $f[a8]; ?></p>
</td>
</tr>
<tr>
<td height="40" valign="middle" width="100%" align="center"><?php echo "5. ИТОГОВЫЕ ЗАМЕЧАНИЯ И ПОЯСНЕНИЯ."; ?></td>
</tr>
<tr>
<td height="20" width="100%">
<p class="MsoFooter" style="text-align: justify; text-indent: 27pt;"><?php echo $f[a9]; ?></p>
</td>
</tr>
</tbody>
</table>
</div>

















</body>
</html>
