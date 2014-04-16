<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
<style type="text/css">
/* Форимируем слой затемнения фона */
.overlay {
    background-color: rgba(0, 0, 0, 0.7);
    bottom: 0;
    cursor: default;
    left: 0;
    opacity: 0;
    position: fixed;
    right: 0;
    top: 0;
    visibility: hidden;
    z-index: 1;
    -webkit-transition: opacity .5s;
    -moz-transition: opacity .5s;
    -ms-transition: opacity .5s;
    -o-transition: opacity .5s;
    transition: opacity .5s;
}
.overlay:target {
    visibility: visible;
    opacity: 1;
}
/* Позиционирум медиа-элементы внутри окна 
.is-image {
  width: 100%;
  display: inline-block;
  height: auto;
  margin: auto;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  top: 0; left: 0; bottom: 0; right: 0;
}
*/

embed, iframe {
  width: 100%;
  min-width: 320px;
  max-width: 600px;
 
  margin: auto;
  top: 0; left: 0; bottom: 0; right: 0;
}
/* Формируем и позиционируем всплывающее окно */
.popup { 
    min-width: 320px;
    max-width: 600px;
    margin: auto;
    background-color: #fff;
    /*border: 3px solid #fff;*/
    display: block;
    left: 0; right: 0;
    opacity: 0;
    padding: 15px;
    position: absolute;
    font-size: 14px;
    top: 0;
    visibility: hidden;
    z-index: 10;
/* Скругление углов окна  */	
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    border-radius: 10px;
/* Тень блока окна  */	
    -webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
    -moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
    -ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
    -o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
    box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
/* Устанавливаем эффект перехода появления окна */ 
    /*-webkit-transition: opacity .5s, top .5s;
    -moz-transition: opacity .5s, top .5s;
    -ms-transition: opacity .5s, top .5s;
    -o-transition: opacity .5s, top .5s;
    transition: opacity .5s, top .5s;*/
	
	-webkit-transition: opacity 300ms ease-in;
	-moz-transition: opacity 300ms ease-in;
	transition: opacity 300ms ease-in;
}
/* Устанавливаем позицию появления окна */ 
.overlay:target+.popup {
    top: 20%;
    opacity: 1;
    visibility: visible;
}
/* Оформляем и позицонируем кнопку закрытия */
.close {
    background-color: rgba(0, 0, 0, 0.8);
    border: 2px solid #ccc;
    height: 24px;
    line-height: 24px;
    position: absolute;
    right: -13px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;padding: 0;
    top: -15px;
    width: 24px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    border-radius: 15px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:before {
    color: rgba(255, 255, 255, 0.9);
    content: "X";
    font-size: 14px;
    text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
}
.close:hover {
    background-color: rgba(64, 128, 128, 0.8);
}
.popup p, .popup div {
    margin-bottom: 10px;
}
</style>
<body>

<!-- Ссылки на вызов модальных окон-->
<div style="text-align: center;">
    <a href="#win1" class="button button-green">Открыть окно 1</a>
    <a href="#win2" class="button button-red">Открыть окно 2</a>
    <a href="#win3" class="button button-blue">Видео в окне 3</a>
    <a href="#win4" class="button button-orange">Фото в окне 4</a>
</div>
<!-- Вызов окна через миниатюру изображения -->
<div style="text-align: center;">
<a href="#win5"><img title="Гиперреализм" src="img/realism_lrg.jpg" width="150" height="150" alt="Реалистичные Рисунки" /></a>
</div>
<!-- Модальное окно №1 -->
   <a href="#x" class="overlay" id="win1"></a>
   <div class="popup">
     ЗДЕСЬ ВЫ МОЖЕТЕ РАЗМЕСТИТЬ ЛЮБУЮ ИНФОРМАЦИЮ, БУДЬ ТО ПРОСТО ТЕКСТ С КАРТИНКАМИ ИЛИ ВИДЕО! 
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №2 -->
    <a href="#x" class="overlay" id="win2"></a>
    <div class="popup">
     
     <p style="float:left;clear:both;margin:5px 0px;background-color:#f4f4f4; border:1px solid #fff;width:200px;padding:10px;margin-left:55px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;-moz-box-shadow:0px 0px 3px #aaa;-webkit-box-shadow:0px 0px 3px #aaa;box-shadow:0px 0px 3px #aaa;" ><label style="width:50px; float:left; text-align:right; margin-right:15px; line-height:26px; color:#666; text-shadow:1px 1px 1px #fff;  font-weight:bold;" for="cna">Операции</label><input id="cna" type="text" style="background: #ffffff; border: 1px solid #ddd; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; outline: none; padding: 5px; width: 100px; float:left; margin-left:15px"/></p>
     
     <p style="float:left;clear:both;margin:5px 0px;background-color:#f4f4f4; border:1px solid #fff;width:200px;padding:10px;margin-left:55px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;-moz-box-shadow:0px 0px 3px #aaa;-webkit-box-shadow:0px 0px 3px #aaa;box-shadow:0px 0px 3px #aaa;" ><label style="width:50px; float:left; text-align:right; margin-right:15px; line-height:26px; color:#666; text-shadow:1px 1px 1px #fff;  font-weight:bold;" for="cna">Операции</label><input id="cna" type="text" style="background: #ffffff; border: 1px solid #ddd; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; outline: none; padding: 5px; width: 100px; float:left; margin-left:15px"/></p>
     
     <p style="float:left;clear:both;margin:5px 0px;background-color:#f4f4f4; border:1px solid #fff;width:200px;padding:10px;margin-left:55px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;-moz-box-shadow:0px 0px 3px #aaa;-webkit-box-shadow:0px 0px 3px #aaa;box-shadow:0px 0px 3px #aaa;" ><label style="width:50px; float:left; text-align:right; margin-right:15px; line-height:26px; color:#666; text-shadow:1px 1px 1px #fff;  font-weight:bold;" for="cna">Операции</label><input id="cna" type="text" style="background: #ffffff; border: 1px solid #ddd; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; outline: none; padding: 5px; width: 100px; float:left; margin-left:15px"/></p>
    
    
    <a class="close" title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №3 -->
        <a href="#x" class="overlay" id="win3"></a>
        <div class="popup">
<h2>Заголовок</h2>
      ЗДЕСЬ ВСТАВЛЯЕТЕ ВИДЕО С ЛЮБОГО СТОРОННЕГО СЕРВЕРА, YouTube, Vimeo и т.д.
        <a class="close" title="Закрыть" href="page.html" onclick="return false"></a><!-- Выключение видео при закрытии окна -->
        </div>
<!-- Модальное окно №4 -->
<a href="#x" class="overlay" id="win4"></a>
        <div class="popup">
<img class="is-image" src="ВАША КАРТИНКА.jpg" alt="" />
        <a class="close" title="Закрыть" href="#close"></a>
        </div>
<!-- Модальное окно №5 -->
        <a href="#x" class="overlay" id="win5"></a>
        <div class="popup">
<img class="is-image" src="ВАША КАРТИНКА.jpg" alt="" />
<a class="close" title="Закрыть" href="#close"></a>
        </div>




</body>
</html>