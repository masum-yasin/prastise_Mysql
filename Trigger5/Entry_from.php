<?php 
$myDB = new mysqli("localhost","root","","evidence_trigger")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Entry Form</h1>
    <?php 
    if(isset($_POST['submit'])):
        extract($_POST);
        $sql = "CALL student_trigger('$name','$email','$address','$mobile')";
        $myDB->query($sql);
        if($myDB->affected_rows){
            echo "Inserted Successfully";
        }
        endif
    ?>
    <form action="" method="post">
<input type="text" name="name" placeholder="Entery Your Name"><br><br>
<input type="text" name="email" placeholder="Entery Your Emil"><br><br>
<textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
<input type="number" name="mobile" placeholder="Entery Your Phone Number"><br><br>
<input type="submit" name="submit" value="SUBMIT">


    </form>
</body>
</html>