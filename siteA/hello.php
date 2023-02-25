<?php
$date = date('Y-m-d H:i:s');
setcookie('MyDate', $date);
setcookie('Fruits', 'Apple');

$count = $_COOKIE['count'];
$count++;
setcookie('count', $count);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>site A</h1>
    <p><?= $date ?></p>
    <p><?= $count ?></p>
    <img src="hello.png">
    <img src="my_image.php?userID=1234">
</body>
</html>
