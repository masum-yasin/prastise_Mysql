<?php 
$db  = new mysqli("localhost","root","","test");
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
        $sql ="CALL insert_company_info('$companyname','$address','$contract')";
     
        // $sql ="INSERT INTO manufacturer ValUES(NUll,'$companyname','$address','$contract')";
        $db->query($sql);
        if($db->affected_rows){
            echo "Inserted Successfully";
            
        }
    }
    ?>
    <h1>manufacturer Data Entry</h1>
    <form action="" method="post">
 <input type="text" name="companyname" placeholder="Enter Your Company Name"><br><br>
 <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
 <input type="number" name="contract" placeholder="Enter Your Company Contract"><br><br>
 <input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>