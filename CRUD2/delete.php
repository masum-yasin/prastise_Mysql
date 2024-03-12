<?php 
$id = $_GET['id'];
require_once("db_config.php");
$db->query("DELETE FROM student_details WHERE StudentID='$id' ");
header("Location:index.php");

?>