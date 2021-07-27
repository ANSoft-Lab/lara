<!DOCTYPE html>
<html lang="ru">
<head>
<title>Инструкция по установке виджета FINIST</title>
<style type="text/css">
li {font-family: sans-serif;}
body {font-size: 14px;}
li {margin: 10px;}
textarea {padding:10px;}
</style>
</head>
<body>
<?php
$code = "<script>(function(){ var widget_id = '111111';\nvar s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//finist.ru/widgets/finist_widget.js?wid='+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>";
?>
<h1>Установка виджета на сайт</h1>
<ol>
<li>Получите <code>widget_id</code> для вашего сайта у вашего менеджера в Finist</li>
<li>Укажите этот id вместо <code>111111</code> в коде ниже и вставьте код javascript перед закрывающим тегом <code>&lt;body&gt;</code>
<br/><textarea style="width:80%;height:50px;">
<?php echo preg_replace("/</", "&lt;", preg_replace("/>/", "&gt;", $code)); ?>
</textarea>
</li>
<li>Вставьте код<br/><textarea style="width:80%;height:50px;">&lt;div id="finist__widget"&gt;&lt;/div&gt;</textarea><br/> в любое место на сайте, где нужно разместить виджет.</li>
</body>
</html>