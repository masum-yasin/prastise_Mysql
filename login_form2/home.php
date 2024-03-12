<?php 
session_start();
if(!isset($_SESSION['u_name'])){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:cornflowerblue;
        }
    </style>
</head>
<body>
    <h1>Congration Users AND Welcome To MY Home Page</h1>
</body>
</html>