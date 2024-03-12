<?php 
session_start();
if(!isset($_SESSION['email'])){
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
        body{background-color:burlywood;}
    </style>
</head>
<body>
    <div><h3>Congratulation.....<br><?php echo $_SESSION['name'].","?></h3><a href="logout.php">Logout</a></div>
    <h5>You are prime Member</h5>
    <h5>Email:<?php echo $_SESSION['email'].","?></h5>
</body>
</html>