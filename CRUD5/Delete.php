<?php
require_once("config.php");
   if(isset($_GET['id'])){
    $id = $_GET['id']; 
 
$myDB->query("DELETE FROM students WHERE id='$id'");
    if($myDB->affected_rows){
        echo "Delete";
        header("Location:index.php");
    
    }
   }

?>