<?php
require './PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';      //smtp сервер
$mail->SMTPAuth = true;//требуется авторизация
$mail->Username = 'kalinin-av2016';  //логин почтового ящика
$mail->Password = addslashes('AleVla_1980');  //пароль от почты
$mail->SMTPSecure = 'ssl'; //шифрование на сервере
$mail->Port = '465';   //порт на сервере

//$mail->SMTPDebug = 1; //подробные ошибки

$mail->CharSet = 'UTF-8'; //кодировка письма
$mail->From = 'kalinin-av2016@yandex.ru'; //почтовый адрес отправителя, должен совпадать с ящиком откуда реально отправляется
$mail->FromName = 'dozor'; //имя отправителя
$mail->addAddress('kalinin-av2016@yandex.ru','dozor'); //почта получателя

$mail->isHTML(true); //письмо будет отправлено в html виде

//отладка
//echo '<pre>';
//print_r ($_POST);
//echo '<pre><br>';

if(isset($_POST['name-input'])&&
    (isset($_POST['phone-input'])&&$_POST['phone-input']!="")){ //Проверка отправились ли наши поля и не пустые ли они
    $mail->Subject = 'Заявка с сайта ЧОП "Дозор"'; //Заголовок сообщения
    $mail->Body = '
                <html>
                    <head>
                        <title>' . $mail->Subject . '</title>
                    </head>
                    <body>
                        <p>Тип заявки: '.$_POST['zakaz-type'].'</p>
                        <p>Имя: '.$_POST['name-input'].'</p>
                        <p>Телефон: '.$_POST['phone-input'].'</p>
                    </body>
                </html>'; //текст сообщения можно использовать HTML теги
    if ($mail->send()){ //отправка письма
        echo "Письмо отправлено.";
    }else{
        echo 'Ошибка: ' . $mail->ErrorInfo; //вывод ошибок
    }
} else {
    echo "Заполните пожалуйста все поля формы.";
}
?>
