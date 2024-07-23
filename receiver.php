<?php

$text = $_POST['txt'];
$badword = $_POST['badword'];


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

<div><?php echo $badword ?></div>
</body>

</html>