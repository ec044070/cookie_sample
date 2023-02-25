<?php
$userID = $_GET["userID"];
file_put_contents("users.txt", $userID . PHP_EOL, FILE_APPEND);

header("Content-Type: image/png");

readfile("hello.png");