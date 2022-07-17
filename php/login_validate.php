<?php
session_start();
if(isset($_POST['login'])) {
    if($_POST['username'] == 'indosoft' && $_POST['pass'] == 'indosoft') {
        $_SESSION['login'] = true;
        header("Location: ../index.php");
    }
    else {
        echo 'login gagal';
    }
}
