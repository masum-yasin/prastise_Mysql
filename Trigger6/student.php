<?php 
$myDB = new mysqli("localhost","root","","evidence_trigger3")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Data</h1>
    <?php 
if(isset($_POST['delete'])){
$id = $_POST['name'];
$sql = "DELETE FROM student WHERE St_id = '$id'";
$myDB->query($sql);
if($myDB->affected_rows){
 echo "Delete Successfully";
}
}
    ?>
    <form action="" method="post">
        <select name="name">
            <option value="">One Select</option>
        <?php 
        $result = $myDB->query("SELECT * FROM student");
        while($row=$result->fetch_assoc()):
        ?>
        <option value="<?php echo $row['St_id'] ?>"><?php echo $row['Name'] ?></option>
        <?php endwhile ?>
        </select><br><br>
        <input type="submit" name="delete" value="DELETE">
    </form>
</body>
</html>