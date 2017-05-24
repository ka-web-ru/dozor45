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
    <title>Акции | Дозор</title>
    <?php include '_head.php' ?>
</head>
<body>
<div class="wrap">
    <?php include '_header.php' ?>
    <div class="main">
        <?php include '_sidebar.php' ?>
        <div id="content">
            <div class="form-group">
                <label for="comment">Акция (текст:</label>
                <input type="text" class="form-control" id="iDiscText1" value="<?= $dc->GetSetting('disconttext1') ?>" >
            </div>
            <div class="form-group">
                <label for="comment">Скидка:</label>
                <input class="form-control" id="iDiscVal1" value=<?= $dc->GetSetting('discontval1') ?> >
            </div>
            <hr>
            <div class="form-group">
                <label for="comment">Акция (текст):</label>
                <input class="form-control" id="iDiscText2" value=<?= $dc->GetSetting('disconttext2') ?> >
            </div>
            <div class="form-group">
                <label for="comment">Скидка:</label>
                <input class="form-control" id="iDiscVal2" value=<?= $dc->GetSetting('discontval2') ?> >
            </div>
            <hr>
            <div class="form-group">
                <label for="comment">Акция (текст):</label>
                <input class="form-control" id="iDiscText3" value=<?= $dc->GetSetting('disconttext3') ?> >
            </div>
            <div class="form-group">
                <label for="comment">Скидка:</label>
                <input class="form-control" id="iDiscVal3" value=<?= $dc->GetSetting('discontval3') ?> >
            </div>
            <hr>
            <div class="form-group">
                <label for="comment">Акция (текст):</label>
                <input class="form-control" id="iDiscText4" value=<?= $dc->GetSetting('disconttext4') ?> >
            </div>
            <div class="form-group">
                <label for="comment">Скидка:</label>
                <input class="form-control" id="iDiscVal4" value=<?= $dc->GetSetting('discontval4') ?> >
            </div>
            <hr>
            <div class="form-group">
                <label for="comment">Акция (текст):</label>
                <input class="form-control" id="iDiscText5" value=<?= $dc->GetSetting('disconttext5') ?> >
            </div>
            <div class="form-group">
                <label for="comment">Скидка:</label>
                <input class="form-control" id="iDiscVal5" value=<?= $dc->GetSetting('discontval5') ?> >
            </div>
            <button type="button" class="btn btn-success" onclick="admin.UpdateDiscont()">Сохранить</button>
        </div>
        <div id="error"><i class="fa fa-times"></i><div></div></div>
    </div>
    <footer></footer>
</body>
</html>
