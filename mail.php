<?php

$recepient = "zayavka@dozor45.ru, dmarker@arteast.ru";
$sitename = "dozor45.ru";

$name = trim($_POST["name-input"]);
$phone = trim($_POST["phone-input"]);
$type = trim($_POST["zakaz-type"]);

$pagetitle = "Заявка с сайта \"$sitename\"";
$message ='
			<html>
				<head>
					<title>' . $pagetitle . '</title>
				</head>
				<body>
					<p>Тип заявки: '.$_POST['zakaz-type'].'</p>
					<p>Имя: '.$_POST['name-input'].'</p>
					<p>Телефон: '.$_POST['phone-input'].'</p>
				</body>
			</html>';

if(isset($_POST['name-input'])&&
    (isset($_POST['phone-input'])&&$_POST['phone-input']!="")){ //Проверка отправились ли наши поля и не пустые ли они
    
    if (mail($recepient, $pagetitle, $message, "Content-type: text/html; charset=\"utf-8\"\n From: ЧОП Дозор <info@dozor45.ru>\r\n")){ //отправка письма
        echo "Письмо отправлено.";
    }else{
        echo 'Ошибка отправки почты.'; //вывод ошибок
    }
} else {
    echo "Заполните пожалуйста все поля формы.";
}

