<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Test M$ Word</title>
<script src="js/Context/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/Context/jquery.contextMenu.js" type="text/javascript"></script>
<link href="js/Context/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <script type='text/javascript' src='jquery.js'></script> 
  <script type='text/javascript'> 
    $(document).ready(function() { 
      $("A#trigger").toggle(function() { 
        //Отображаем скрытый блок 
        $("DIV#box").fadeIn(); 
        return false; 
      },  
      function() { 
        //Прячем скрытый блок 
        $("DIV#box").fadeOut(); 
        return false; 
      });//end of toggle() 
    });//end of ready() 
  </script> 
</head> 
<body> 
	<table border="1px"><tr height="23px"><td>
  <a href='#' id='trigger'>Ссылка</a> 
  <div id='box' style='display: none;'>Блок</div>   </body>
  </td></tr></table>
</html>