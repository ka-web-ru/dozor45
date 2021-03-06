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
if($_POST['type'] == 'accaunt')
{
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	if($dc->AddSetting('login', $login) && $dc->AddSetting('password', $pass))
		$item['r'] = 's';
}
if($_POST['type'] == 'contacts')
{
	$address = $_POST['address'];
	$phonecode = $_POST['phonecode'];
	$phone1 = $_POST['phone1'];
	$phone2 = $_POST['phone2'];
	$phone3 = $_POST['phone3'];
	$mail = $_POST['mail'];
	$vk = $_POST['vk'];
	if($dc->AddSetting('address', $address)
		&& $dc->AddSetting('phonecode', $phonecode)
		&& $dc->AddSetting('phone1', $phone1)
		&& $dc->AddSetting('phone2', $phone2)
		&& $dc->AddSetting('phone3', $phone3)
		&& $dc->AddSetting('mail', $mail)
		&& $dc->AddSetting('vk', $vk)
	)
		$item['r'] = 's';
}
if($_POST['type'] == 'discont')
{
	$disconttext1 = $_POST['disconttext1'];
	$discontval1 = $_POST['discontval1'];
	$disconttext2 = $_POST['disconttext2'];
	$discontval2 = $_POST['discontval2'];
	$disconttext3 = $_POST['disconttext3'];
	$discontval3 = $_POST['discontval3'];
	$disconttext4 = $_POST['disconttext4'];
	$discontval4 = $_POST['discontval4'];
	$disconttext5 = $_POST['disconttext5'];
	$discontval5 = $_POST['discontval5'];

	if($dc->AddSetting('disconttext1', $disconttext1)
		&& $dc->AddSetting('discontval1', $discontval1)
		&& $dc->AddSetting('disconttext2', $disconttext2)
		&& $dc->AddSetting('discontval2', $discontval2)
		&& $dc->AddSetting('disconttext3', $disconttext3)
		&& $dc->AddSetting('discontval3', $discontval3)
		&& $dc->AddSetting('disconttext4', $disconttext4)
		&& $dc->AddSetting('discontval4', $discontval4)
		&& $dc->AddSetting('disconttext5', $disconttext5)
		&& $dc->AddSetting('discontval5', $discontval5)
	)
		$item['r'] = 's';
}
echo json_encode($item);