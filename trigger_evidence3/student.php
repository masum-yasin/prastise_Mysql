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
            background-color:darkslategray;
        }
        button,a{
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        .student_table{
            width: 700px;
            height: 300px;
            background-color:darkslategrey;
            color:white;
        }

    </style>
</head>
<body>
    
    <h1>Student Form</h1>
    <?php 
    if(isset($_POST['delete'])):
        $stu_Name = $_POST['name'];
        $myDB->query("DELETE FROM student WHERE Stu_id='$stu_Name'");
        if($myDB->affected_rows){
            echo "Delete Successfully";
        }
        endif
    ?>
    <form action="" method="post">
    <select name="name">
        <option value="">Select One</option>
        <?php 
        $result = $myDB->query("SELECT * FROM student");
        while($row=$result->fetch_assoc()):
        ?>
    <option value="<?php echo $row['Stu_id'] ?>"><?php echo $row['Name'] ?></option>
                <?php endwhile ?>
    </select><br><br>
    <input type="submit" name="delete" value="DELETE">
</form>
<h1>Student Result</h1>
<?php
$sql ="SELECT * FROM student_info";
$result = $myDB->query($sql);

?>
<table class="student_table" border="2">

    <tr>
       <th>ID</th> 
       <th>Name</th> 
       <th>Eamil</th> 
       <th>Address</th> 
       <th>Mobile</th> 
       <th>Module Name</th> 
       <th>TotalMarkts</th> 
    </tr>
    <?php 
    while($row=$result->fetch_assoc()):
    ?>
    <tr>
         <td></td>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Address'] ?></td>
        <td><?php echo $row['Mobile'] ?></td>
        <td><?php echo $row['Module_name'] ?></td>
        <td><?php echo $row['Totalmarks'] ?></td>
        
       
    </tr>
    <?php endwhile ?>
</table>
<button style="margin-top: 10px;"><a href="Entry_from.php">Student Entry Form</a></button>
</body>
</html>