<!-- PHP -->

<?php

// ? Creare una variabile con un paragrafo di testo.
// ? Visualizzare a schermo il paragrafo con la relative lunghezza e sestituire la badword passata in GET con  ***

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

$paragraph = "Le mosche non riposano mai perché la merda è davvero tanta.";

if ( !empty($_GET['badword'])) {
    $bad_word = $_GET['badword'];
    $paragraph = str_replace($bad_word, '***', $paragraph);
 } 

?>


<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - BAD WORD</title>
</head>
<body>
<p>
    La parola censurata è : <strong> <?php echo $bad_word; ?> </strong>
    <br> 
    <?php echo $paragraph; ?> 
    <br>
    La lunghezza del paragrafo è di <?php echo strlen($paragraph); ?> caratteri
</p>
    
</body>
</html>