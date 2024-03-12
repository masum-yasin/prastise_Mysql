<?php 
require_once("db_config.php");
$id =$_GET['id'];
$sql="DELETE FROM student_info WHERE StudentID ='$id'";
$myDB->query($sql);
header("Location:index.php");

?>