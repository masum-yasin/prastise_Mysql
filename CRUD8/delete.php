<?php 
require_once("db_config.php");
$id = $_GET['id'];
$sql = "DELETE  FROM Biodata WHERE personID='$id'";
$myDB->query($sql);
header("Location:index.php");

?>