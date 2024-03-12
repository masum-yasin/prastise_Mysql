<?php 
$myDB  = new mysqli("localhost","root","","student_eviendence")

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
            background-color:darkblue;}
            button,a {
                text-decoration: none;
                color: white;
                font-size: 20px;
            }
            .ptable{
                width: 600px;
                height: 300px;
                text-align: center;
                background-color:darkblue;
                color: white;
            }
            .display{
                display: flex;
            }
            body{
                display: flex;
                gap:50px
            }
    </style>
</head>
<body>
    
   <div>
   <h1>Student List</h1>
    <?php 
    if(isset($_POST['delete'])):
    $s_id = $_POST['name'];
    $myDB->query("DELETE  FROM student WHERE st_id='$s_id'");
    if($myDB->affected_rows){
        echo "delete";
    }
    endif
    ?>
    <form action="" method="post">
<select name="name">
<option value="">Select One</option><br>
<?php 
$result = $myDB->query("SELECT * FROM student");
while($row = $result->fetch_assoc()):
?>
<option value="<?php echo $row['st_id'] ?>"><?php echo  $row['Name'] ?></option><br>
<?php endwhile ?>
</select>
<input type="submit" name="delete" value="DELETE">

    </form>
   
 <h1>Product List</h1>
 <?php 
 $sql ="SELECT * FROM student_info ";
 $result  =$myDB->query($sql);
 ?>
 <table class="ptable" border="2">
<tr>
<th>ID</th>
<th>Name</th>
<th>Module Name</th>
<th>Address</th>
<th>Total Marks</th>
</tr>
<?php 
$n =1;
while($row=$result->fetch_assoc()):
?>
<tr>
    <td><?php echo $n; $n++; ?></td>
    <td><?php echo $row['Name'] ?></td>
    <td><?php echo $row['Module_Name'] ?></td>
    <td><?php echo $row['Address'] ?></td>
    <td><?php echo $row['TotalMarkts'] ?></td>
</tr>
<?php endwhile ?>

 </table>
   </div>

    <div style="margin-top: 20%; gap:20px">
    <button><a href="Entry_from.php">Student Data Entry</a></button>
    </div>
</body>
</html>