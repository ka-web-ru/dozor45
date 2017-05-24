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
    <title>Сменить пароль | Дозор</title>
    <?php include '_head.php' ?>
</head>
<body>
<div class="wrap">
    <?php include '_header.php' ?>
    <div class="main">
        <?php include '_sidebar.php' ?>
        <div id="content">
            <div class="form-group">
                <label for="comment">Логин:</label>
                <input type="text" class="form-control" id="iLog" value="<?= $dc->GetSetting('login') ?>">
            </div>
            <div class="form-group">
                <label for="comment">Пароль:</label>
                <input class="form-control" id="iPass" value=<?= $dc->GetSetting('password') ?>>
            </div>
            <button type="button" class="btn btn-success" onclick="admin.UpdateAccaunt()">Сохранить</button>
        </div>
        <div id="error"><i class="fa fa-times"></i><div></div></div>
    </div>
    <footer></footer>
</body>
</html>
