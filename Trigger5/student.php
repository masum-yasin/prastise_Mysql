<?php 
$myDB = new mysqli("localhost","root","","evidence_trigger")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            padding: 20px;
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <h1>Student Data list</h1>
    <?php
    if(isset($_POST['delete'])):
        $id =$_POST['name'];
        $sql = "DELETE FROM  student WHERE St_id='$id'";
        $myDB->query($sql);
        if($myDB->affected_rows){
            echo "Delete Successfully";
        }

        endif
    ?>
   
    <form action=""  method="post">
    <select name="name">
   <option value="">Select One</option>
    <?php 
    $result =$myDB->query("SELECT * FROM student");
    while($row=$result->fetch_assoc()):
    ?>
    <option value="<?php echo $row['St_id '] ?>"><?php echo  $row['Name'] ?></option>
        <?php endwhile ?>
    </select><br><br>
   
    <input type="submit" name="delete" value="DELETE">
    
 </form>
 <button><a href="Entry_from.php"> Studetn Entry_from</a></button>
</body>
</html>