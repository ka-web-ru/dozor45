<?php
include 'core/dc.php';
$name = '';
$com = '';

if(isset($_POST['name']))
	$name = $_POST['name'];
if(isset($_POST['com']))
	$com = $_POST['com'];
$sort = $dc->GetMaxReviewSort() + 1;
$dc->AddReview($name, date('Y-m-d'), $com, $sort, 0);

$to = 'dmarker@arteast.ru, narodokna45@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
$from = 'info@narodokna45.ru';
$message = '
	<html>
		<head><title>Новый отзыв на сайте</title></head>
		<body>
			<p><b>Имя</b>: ' . $name . '</p>
			<p><b>Отзыв</b>: ' . $com . '</p>
		</body>
	</html>'; //Текст нащего сообщения можно использовать HTML теги
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
$headers .= "From: Народные окна <" . $from . ">\r\n"; //Наименование и почта отправителя
if(mail($to, 'Новый отзыв на сайте', $message, $headers))
	echo '<div class="alertM">Спасибо, Ваш отзыв успешно отправлен на модерацию!</div>';
else
	echo '<div class="alertR">Ошибка отправки отзыва</div>';