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
    <?php 
    if(isset($_POST['submit'])):
     extract($_POST);
     $sql ="CALL insert_student_info('$name','$email','$address','$mobile')";
      $myDB->query($sql);
     if($myDB->affected_rows){
        echo "Enserted Successfully";
     }


        endif
    
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Your Name"><br><br>
        <input type="email" name="email" placeholder="Enter Your  Email"><br><br>
        <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
        <input type="number" name="mobile" placeholder="Enter Your Phone Number"><br><br>
        <input type="submit" name="submit" value="SUBMIT">
       
 </form>
</body>
</html>