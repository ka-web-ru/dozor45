<!DOCTYPE html>
<html class="html" lang="ru-RU">
	<head>
		<title>Вход в систему администрирования</title>
		<?php include '_head.php' ?>
	</head>
	<body>
		<div class="wrap">
			<?php include '_header.php' ?>
			<div class="main">
				<div id="login">
					<div class="form-group">
						<input type="text" class="form-control" id="iName" placeholder="Логин" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="iPass" placeholder="Пароль" />
					</div>
					<button type="button" class="btn btn-success" onclick="admin.Login()">Войти</button>
				</div>
				<div id="error"><i class="fa fa-times" onclick="admin.ErrorClose()"></i><div></div></div>
			</div>
			<footer></footer>
		</div>
	</body>
</html>
