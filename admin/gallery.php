<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
include '../core/dc.php';
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] == 0)
{
	include 'login.php';
	return;
}
$images = $dc->GetImages();
?>
<!DOCTYPE html>
<html class="html" lang="ru-RU">
	<head>
		<title>Галерея | Народные окна</title>
		<?php include '_head.php' ?>
	</head>
	<body>
		<div class="wrap">
			<?php include '_header.php' ?>
			<div class="main">
				<?php include '_sidebar.php' ?>
				<div id="content">
					<div class="form-group"><button type="button" class="btn btn-primary btn-lg file-upload" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Загрузка..."><input type="file" class="file-input" onchange="admin.UploadImage(this)">Загрузить изображение</button></div>
					<div class="form-group">
						<?php foreach($images as $img): ?><div class="gImage">
							<div>
								<img src="/upload/preview/<?= $img->name ?>" alt="" />
								<i class="fa fa-times" onclick="admin.DeleteImage(this, <?= $img->id ?>)"></i>
							</div>
						</div><?php endforeach ?>
					</div>
					<!--<div class="form-group"><button type="button" class="btn btn-success">Сохранить порядок</button></div>-->
				</div>
				<div id="error"><i class="fa fa-times"></i><div></div></div>
			</div>
			<footer></footer>
	</body>
</html>
