<?php 
require_once("db_config.php");
$id = $_GET['id'];
$sql ="DELETE FROM  product_details  WHERE ProductID='$id'";
$myDB->query($sql);
header("Location:index.php");

?>