<?php 
$myDB = new mysqli("localhost","root","","evidence_trigger2")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Manufacturer Data Entry</h1>
    <?php 
    if(isset($_POST['submit'])):
    extract($_POST);
    $sql ="CALL manufacturer_procedure('$company','$address','$contract')";
    $myDB->query($sql);
    if($myDB->affected_rows){
        echo "inserted Successfully";
    }
        endif
    
    ?>
<form action="" method="post">
<input type="text" name="company" placeholder="Enter your Company Name"><br><br>
<textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
<input type="number" name="contract" placeholder="Enter your Phone Number"><br><br>
<input type="submit" name="submit" value="SUBMIT">


</form>
</body>
</html>