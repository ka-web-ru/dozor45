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
?>
<!DOCTYPE html>
<html class="html" lang="ru-RU">
	<head>
		<title>Администрирование | Дозор</title>
		<?php include '_head.php' ?>
	</head>
	<body>
		<div class="wrap">
			<?php include '_header.php' ?>
			<div class="main">
				<?php include '_sidebar.php' ?>
				<div id="content">
					<div class="form-group">
						<label for="comment">Заголовок страницы:</label>
						<input type="text" class="form-control" id="iTitle" value="<?= $dc->GetSetting('title') ?>" />
					</div>
					<div class="form-group">
						<label for="comment">Описание страницы:</label>
						<textarea class="form-control" rows="3" id="iDesc"><?= $dc->GetSetting('desc') ?></textarea>
					</div>
					<div class="form-group">
						<label for="comment">Ключевые слова:</label>
						<textarea class="form-control" rows="3" id="iKeys"><?= $dc->GetSetting('keys') ?></textarea>
					</div>
					<button type="button" class="btn btn-success" onclick="admin.SaveSettings()">Сохранить</button>
				</div>
				<div id="error"><i class="fa fa-times" onclick="admin.ErrorClose()"></i><div></div></div>
			</div>
			<footer></footer>
		</div>
	</body>
</html>
