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
    <title>Контакты | Дозор</title>
    <?php include '_head.php' ?>
</head>
<body>
<div class="wrap">
    <?php include '_header.php' ?>
    <div class="main">
        <?php include '_sidebar.php' ?>
        <div id="content">
            <div class="form-group">
                <label for="comment">Адрес:</label>
                <input type="text" class="form-control" id="iAddress" value="<?= $dc->GetSetting('address') ?>" >
            </div>
            <div class="form-group">
                <label for="comment">Код города (телефон):</label>
                <input class="form-control" id="iPhoneCode" value=<?= $dc->GetSetting('phonecode') ?> >
            </div>
            <div class="form-group">
                <label for="comment">Телефон:</label>
                <input class="form-control" id="iPhone1" value=<?= $dc->GetSetting('phone1') ?> >
            </div>
            <div class="form-group">
                <label for="comment">Телефон:</label>
                <input class="form-control" id="iPhone2" value=<?= $dc->GetSetting('phone2') ?> >
            </div>
            <div class="form-group">
                <label for="comment">Телефон:</label>
                <input class="form-control" id="iPhone3" value=<?= $dc->GetSetting('phone3') ?> >
            </div>
            <div class="form-group">
                <label for="comment">Электронная почта:</label>
                <input class="form-control" id="iMail" value=<?= $dc->GetSetting('mail') ?> >
            </div>
            <div class="form-group">
                <label for="comment">ВКонтакте:</label>
                <input class="form-control" id="iVK" value=<?= $dc->GetSetting('vk') ?> >
            </div>
            <button type="button" class="btn btn-success" onclick="admin.UpdateContacts()">Сохранить</button>
        </div>
        <div id="error"><i class="fa fa-times"></i><div></div></div>
    </div>
    <footer></footer>
</body>
</html>
