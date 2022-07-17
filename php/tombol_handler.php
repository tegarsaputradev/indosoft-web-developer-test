<?php
if (isset($_SESSION['login'])) {
  $tombol = 'Logout';
  $status = 'logout';
}
else {
  $tombol = 'Login';
  $status = 'login';
}

if(isset($_POST['tb'])) {
    if($status == 'login') {
        header("Location: halaman/login.php");
    }else {
      header("Location: halaman/logout.php");
    }
}