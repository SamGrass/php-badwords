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
</head>

<body>

<div><?php echo $text ?></div>

<div><?php echo $text_length ?></div>

<div><?php echo $text_replaced ?></div>

<div><?php echo $text_replaced_length ?></div>
</body>

</html>