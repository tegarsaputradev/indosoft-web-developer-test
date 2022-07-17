<?php
$quotes = json_decode(file_get_contents('../data/quotes.txt'));
$random = $quotes[array_rand($quotes)];
echo "
    <div class='content'>
    <div>
    <h4>PeribahasaHari ini:</h4>
    <p>$random->quote.</p>
    </div>
    <div class='post-date'>
    <span>By: $random->by </span><span> Posted$random->date</span>
    </div>
    <hr>
    </div>
";
?>