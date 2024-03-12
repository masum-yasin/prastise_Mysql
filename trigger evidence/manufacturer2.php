<?php 
$myDB  =new mysqli("localhost","root","","tridb_evidence")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Company List</h1>
    <?php 
    if(isset($_POST['delete'])):
    $mid = $_POST['company'];
    $myDB->query("DELETE FROM manufacturer WHERE M_id='$mid'");
    if($myDB->affected_rows){
        echo "Delete Successfully";
    }

        endif
    ?>
    
    <form action="" method="post">
    <select name="company">
        <option value="">Select One</option>
        <?php 
        $result = $myDB->query("SELECT * FROM  manufacturer");
      while($row=$result->fetch_assoc()):
        ?>

        <option value="<?php echo $row['M_id'] ?>"><?php echo $row['Company_Name'] ?></option>
        <?php endwhile ?>
    </select>
    <input type="submit" name="delete" value="DELETE">
    </form>
    
</body>
</html>