<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
   <form action="login.php" method="post">
    <input type="text" name="email" placeholder="Enter your Email"><br><b>
    <input type="password" name="password" placeholder="Enter your Password"><br><b>
    <input type="submit" name="submit" value="SUBMIT">
   </form> 
</body>
</html>