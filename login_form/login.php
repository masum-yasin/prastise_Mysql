<?php 
require_once("db_config.php");

if( isset($_POST['email']) ){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass = sha1($pass) ;


    $sql = "SELECT Name, email, password FROM users WHERE email='$email' AND password = '$pass'  " ;
    $result = $myDB->query($sql);
    $row =  $result->fetch_assoc() ;
    session_start() ;

     if ( $result->num_rows ){                  // check how many rows are in the database
        $_SESSION['name'] = $row['Name'];
        $_SESSION['email2'] = $row['email'];        
        // $row['email'] = is from database | $_SESSION['email'] = is from session super global index (it is like state) . 
        header("Location: home.php");

     } else {
        $_SESSION['error'] = "Login failed" ;
        header("Location: index.php") ;
     }


    // echo " Email: $email  <br>
    //         Password: $password 
    // ";
}


?>