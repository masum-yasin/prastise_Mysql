<?php 
require_once("db_connection.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT Name, email, password FROM users WHERE email='$email' AND password= '$password'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    session_start();
    if($result->num_rows){
        $_SESSION['u_name']=$row['Name'];
        $_SESSION['u_email']=$row['email'];
        header("Location: home.php");
    }
    else{
        $_SESSION['error']="Login Failed plase Try agein";
        header("Location:index.php");
    }
}

?>