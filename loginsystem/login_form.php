<?php 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass = sha1($pass);//enctrype
    // echo "your Email:$email<br>";
    // echo "your password : $pass";
    require_once("db_config.php");
   $sql= "SELECT Name ,Email, password FROM users WHERE Email='$email' AND password ='$pass'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    session_start();
    if ($result->num_rows){
        $_SESSION['name'] =$row['Name'];
        $_SESSION['email'] =$row['Email'];
        header("Location:home.php");
    }
    else{
        $_SESSION['error'] ="Email and password is not  stored in the database";
        header("Location:index.php");
    }
}

?>