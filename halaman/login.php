<?php
require '../php/login_validate.php'

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/style.css">
<script src="js/main.js"></script>
<title>Login Page</title>
</head>

<body>
    <div class="quotes">
      <div class="container">
        <div class="header-logo">
            <div class="img">
                <img src="img/logo.png" alt="">
            </div>
          
            <hr>
            <div class="login">
              <form method="post">
              <div class="login-form">
                Username : <input type="text" name="username" id="username">
                Password : <input type="text" name="pass" id="pass">
                <div class="btn-wrapper">
                  <button class="btn-login" name="login">Login</button>
                </div>

                <h2>Note</h2>
                <table>
                  <tr>
                    <td width="80px">Username</td>
                    <td>:</td>
                    <td>indosoft</td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>indosoft</td>
                  </tr>
                </table>
              </div>
              </form> 
            </div>
        </div>
                
      </div>
    </div>
</body>
</html>