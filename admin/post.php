<?php
header('Content-Type: application/json');
include '../core/dc.php';
function __autoload($class)
{
	$class = str_replace('\\', '/', $class);
  require __DIR__ . '/../' . $class . '.php';
}

session_start();
ini_set("display_errors",1);
error_reporting(E_ALL);
$item = ['r' => 'f', 'error' => 'Произошла ошибка во время выполнения запроса'];
if(!isset($_POST['type']))
	exit(json_encode($item));
function translit($str)
{
	$rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
	$lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
	return str_replace($rus, $lat, $str);
}
if($_POST['type'] == 'settings')
{
	$title = $_POST['title'];
	$keys = $_POST['keys'];
	$desc = $_POST['desc'];
	if($dc->AddSetting('title', $title) && $dc->AddSetting('keys', $keys) && $dc->AddSetting('desc', $desc))
		$item['r'] = 's';
}
if($_POST['type'] == 'upload')
{
	$uploaddir = __DIR__ . '/../upload/';
	$name = time() . '_' . basename(translit($_FILES['image']['name']));
	
	$lPatch = $uploaddir .'large/'  . $name;
	$prevPatch = $uploaddir . 'preview/' . $name;
	
	$imagine = new Imagine\Gd\Imagine();
	$size    = new Imagine\Image\Box(320, 240);
	$mode    = Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;
	$imagine->open($_FILES['image']['tmp_name'])->thumbnail($size, $mode)->save($prevPatch);
	move_uploaded_file($_FILES['image']['tmp_name'], $lPatch);
	if($dc->AddImage($name, $dc->GetMaxImageSort() + 100))
		$item['r'] = 's';
	else
		$item['error'] = 'Ошибка сохранения изображения';
}
if($_POST['type'] == 'add_review')
{
	$name = trim($_POST['name']);
//	$date = trim($_POST['date']);
//	$sort = trim($_POST['sort']);
	$text =  trim($_POST['text']);
	if($name == '')
		$item['error'] = 'Введите имя';
//	else if($date == '')
//		$item['error'] = 'Введите дату';
	else if($text == '')
		$item['error'] = 'Введите текст отзыва';
	else if($dc->AddReview($name, $text, 1))
		$item['r'] = 's';
	else
		$item['error'] = 'Ошибка добавления отзыва';

//	else if(preg_match('/^([0-9]{2})\.([0-9]{2})\.([0-9]{4})$/', $date, $match))
//	{
//
//		$date = $match[3] . '-' . $match[2] . '-' . $match[1];
//		if($sort == '')
//			$sort = $dc->GetMaxReviewSort() + 1;
//		else
//			$sort = (int)$sort;
//		if($dc->AddReview($name, $date, $text, $sort, 1))
//			$item['r'] = 's';
//		else
//			$item['error'] = 'Ошибка добавления отзыва';
//	}
//	else
//		$item['error'] = 'Неверный формат даты. Нужно ввести примерно следующее: ' . date('d.m.Y');
}
if($_POST['type'] == 'review_status')
{
	$id = (int)$_POST['id'];
	$status = (int)$_POST['status'];
	if($dc->UpdateReview($id, $status))
		$item['r'] = 's';
	else
		$item['error'] = 'Ошибка изменения статуса';
}
if($_POST['type'] == 'review_delete')
{
	$id = (int)$_POST['id'];
	if($dc->DeleteReview($id))
		$item['r'] = 's';
	else
		$item['error'] = 'Ошибка удаления отзыва';
}
if($_POST['type'] == 'image_delete')
{
	$id = (int)$_POST['id'];
	if($dc->DeleteImage($id))
		$item['r'] = 's';
	else
		$item['error'] = 'Ошибка удаления отзыва';
}
if($_POST['type'] == 'login')
{
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	if($dc->Login($login, $pass))
		$item['r'] = 's';
	else
		$item['error'] = 'Неверное имя пользователя или пароль';
}
if($_POST['type'] == 'logout')
{
	$dc->Logout();
	$item['r'] = 's';
}
echo json_encode($item);