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
		<title>Отзывы | Народные окна</title>
		<?php include '_head.php' ?>
		<?php
		$revs = $dc->GetReviews();
		?>
	</head>
	<body>
		<div class="wrap">
			<?php include '_header.php' ?>
			<div class="main">
				<?php include '_sidebar.php' ?>
				<div id="content">
					<div class="rows row3 rowRev">
						<div class="form-group">
							<label for="comment">Имя</label>
							<input type="text" class="form-control" id="iName">
						</div><div class="form-group">
							<label for="comment">Дата (в формате DD.MM.YYYY):</label>
							<input type="text" class="form-control" id="iDate" value="<?= date('d.m.Y') ?>">
						</div><div class="form-group">
							<label for="comment">Порядок:</label>
							<input type="text" class="form-control" id="iSort" placeholder="если не заполнить, на сайте будет последним">
						</div>
					</div>
					<div class="form-group">
						<label for="comment">Текст отзыва:</label>
						<textarea class="form-control" rows="3" id="iText"></textarea>
					</div>
					<div class="form-group"><button type="button" class="btn btn-success" onclick="admin.SaveReview()">Добавить</button></div>
					<div class="form-group">
						<table class="table table-bordered">
							<colgroup>
								<col width="50" />
								<col width="100" />
								<col width="100" />
								<col width="500" />
								<col width="150" />
								<col width="100" />
							</colgroup>
							<thead>
								<tr>
									<th>Порядок</th>
									<th>Имя</th>
									<th>Дата</th>
									<th>Текст</th>
									<th>Видимость</th>
									<th>Удалить</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($revs as $rev): ?>
								<tr data-id="<?= $rev->id ?>">
									<td><?= $rev->sort ?></td>
									<td><?= $rev->name ?></td>
									<td><?= $rev->date ?></td>
									<td><?= $rev->post ?></td>
									<td class="revStatus <?= $rev->status ? 'yes' : 'no' ?>"><?= $rev->status ? 'Показан на сайте' : 'Скрыт' ?></td>
									<td><i class="fa fa-times" onclick="admin.RemoveReview(this, <?= $rev->id ?>)"></i></td>
								</tr>
							<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
				<div id="error"><i class="fa fa-times"></i><div></div></div>
			</div>
			<footer></footer>
	</body>
</html>
