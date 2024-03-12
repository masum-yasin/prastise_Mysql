<?php 
$myDB = new mysqli("localhost","root","","student_eviendence");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql = "CALL insert_studentinfo('$name','$address','$mobile')";
        
        
         $myDB->query($sql);
        if($myDB->affected_rows){
            echo "Inserted Successfully";
        }
    }
    ?>
    <h1>Student Data Entry</h1>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your Name"><br><br>
        <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
        <input type="number" name="mobile" placeholder="Enter Your Phone Number"><br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>