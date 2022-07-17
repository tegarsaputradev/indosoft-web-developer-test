<?php
session_start();
function append_quote() {
    $array_data = json_decode(file_get_contents('../data/quotes.txt'));
    $template = array(
        'by' => $_POST['by'],
        'quote' => $_POST['quote'],
        'date' => date("Y-m-d",time())
    );
    
    array_push($array_data, $template);
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    return $final_data;
}

function eksekusi() {
    $final_data = append_quote();
    $fptr = fopen('../data/quotes.txt','w');
    fwrite($fptr, $final_data);
    fclose($fptr);

    $quote = $_POST['quote'];
    $by = $_POST['by'];
    $date = date("Y-m-d",time());

    echo "
    <div class='content'>
    <div>
    <h4>PeribahasaHari ini:</h4>
    <p>$quote</p>
    </div>
    <div class='post-date'>
    <span>By: $by </span><span> Posted: $date</span>
    </div>
    <hr>
    </div>
";

}

if (isset($_POST['by'])) {
    if (isset($_SESSION['login'])) {
        eksekusi();
    }else {
        echo 'a';
    }
    
}

?>