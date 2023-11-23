<?php

include register.php;

$filePath = register.php;

$contentWrite = 'This is content';

$file = fopen($filePath, 'w');

if($file) {
    fwrite($file, $contentWrite);


    fclose($file);

    echo "Content successfully written";
} else {
    echo "Unable file";
}
















//if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//    // Check if a parameter named 'param' is passed in the URL
//    if (isset($_GET['sumbit_button'])) {
//
//        $username = $_GET['username'];
//        $password = $_GET['password'];
//
//        // Do something with the parameter value
//        echo "Value of 'param' is: " . $username;
//    } else {
//        echo "No 'param' value provided in the URL.";
//    }
//}
//
//
?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Register</title>-->
<!--</head>-->
<!--<body>-->
<!--<div>-->


<!---->
<!--</div>-->
<!--</body>-->
<!--</html>-->




