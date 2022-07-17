<?php
session_start();
require 'php/tombol_handler.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<script src="js/main.js"></script>
<script src="js/sweety_alert.js"></script>
<title>Indosoft Web Developer Test</title>
</head>

<body>
    <div class="quotes">
        <div class="container">
          <div class="header-logo">
            <form method="post">
              <button class="btn-menu" name="tb"><?php echo $tombol; ?></button>
            </form>
            <div class="img">
              <img src="img/logo.png" alt="">
            </div>
            </div>
            <hr>
            <div class="post-quote-wrapper">
                <div class="input-by">
                  <span>By :</span>
                    <input type="text" id="by" name="by">
                  </div>
                  <div class="input-quote">
                    <span>Quote :</span>
                    <textarea name="quote" id="quote" rows="5"></textarea>
                  </div>
                  <button class="btn-save" onclick="post_data()">Save</button>
            </div>
            <div class="tombol-wrapper">
                <p>Klick tombol di bawah untuk melihat random quotes!</p>
                <button onclick="load_data()">Get Random Quotes</button>
            </div>
            <div class="content-wrapper">
              <div class="c">

                <div id="isi">
                <?php $quotes = json_decode(file_get_contents('data/quotes.txt'));
                  $random = $quotes[array_rand($quotes)];
                  echo "
                      <div class='content'>
                      <div>
                      <h4>PeribahasaHari ini:</h4>
                      <p>$random->quote.</p>
                      </div>
                      <div class='post-date'>
                      <span>By: $random->by .</span><span> Posted: $random->date.</span>
                      </div>
                      <hr>
                      </div>
                  ";
                ?>
                </div>
              </div>
            </div>
        </div>
    </div>
    
</body>
</html>