<?php

$text = $_POST['txt'];
$badword = $_POST['badword'];

$text_length = strlen($text);
$text_replaced = str_replace($badword, '***', $text); 
$text_replaced_length = strlen($text_replaced);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<div class="container">
    <h2>Testo originale</h2>
    <div><?php echo $text ?></div>
    <h4>Il testo ha: <?php echo $text_length ?> caratteri</h4>

    <h2>Testo censurato</h2>
    <div><?php echo $text_replaced ?></div>
    <h4>Il testo modificato ha: <?php echo $text_replaced_length ?> caratteri</h4>
</div>


</body>

</html>