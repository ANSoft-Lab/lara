<?php

if(getenv("REQUEST_METHOD") == "POST") {

    require('Bitrix24ConnectorClass.php');
    $b24 = new Bitrix24ConnectorClass();
    $b24->sendLead($_POST);

?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Финансы и страхование FINIST</title>
    <link rel="icon" type="image/png" href="/icon/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="/widgets/bootstrap.min.css">
    <script src="/widgets/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    .calculator {
        background: #fff;
        box-shadow: 0 0 20px hsl(0deg 0% 68% / 25%);
        border-radius: 10px;
        padding: 20px;
        min-width: 200px;
        max-width: 600px;
        display: block;
        margin: auto;
    }
    .widget-form-button {
        margin-top: 10px;
    }
    .form-group {
        min-height: 70px;
    }
    .hidden {
        display: none;
    }
    .input-error {
        border-color: red;
    }
    .label-error {
        color: red;
    }
    </style>
</head>
<body>
    <div class="calculator">
       <h3 class="text-center">Заявка на&nbsp;ипотеку отправлена!</h3>
       <p class="text-center">Наш менеджер свяжется с&nbsp;вами и&nbsp;запросит необходимые документы в&nbsp;течение рабочего&nbsp;дня.</p>
       <div class="row justify-content-center widget-form-button">
           <div class="col-xs-12 col-sm-6 form-group">
               <button type="button" class="btn btn-warning w-100" onclick="location.href=location.href;">Вернуться</button>
           </div>
       </div>
    </div>
</body>
</html>
<?php

} else {

    $wid = 0;
    if(isset($_GET['wid']))
    {
        $wid = intval($_GET['wid']);
    }

    switch($wid)
    {
        case 1001:
        case 1002:
        case 1003:
            include("templates/{$wid}.html");
            break;
        default:
            include("templates/default.html");
            break;
    }

} ?>