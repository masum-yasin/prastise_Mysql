<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
    require_once('db_config.php');
    if(isset($_POST['submit'])){
        extract($_POST);  

       $sql ="INSERT  student_details VALUES(NULL, '$fname','$lname','$email','$number','$faname','$maname','$address','$city','$department')";
       $myDB->query($sql);
       if($myDB->affected_rows){
        echo "Data Input Successfully";
       }
    }
    
    
    ?>
    <div class="container text-center border bg-dark text-info mt-5">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text"name="fname" placeholder="Enter Your First Name"><br><br>
    <input type="text"name="lname" placeholder="Enter Your Last Name"><br><br>
    <input type="email"name="email" placeholder="Enter Your Email"><br><br>
    <input type="number"name="number" placeholder="Enter Your Phone Number"><br><br>
    <input type="text"name="faname" placeholder="Enter Your Father Name"><br><br>
    <input type="text"name="maname" placeholder="Enter Your Mother Name"><br><br>
    <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
    <select name="city">
        <option value="Dhaka">Dhaka</option>
        <option value="Khulan">Khulan</option>
        <option value="Comilla">Comilla</option>
        <option value="Faridpur">Faridpur</option>
        <option value="Barisal">Barisal</option>
        <option value="Maymansing">Maymansing</option>
        <option value="Netrokona">Netrokona</option>
    </select><br><br>
    <input type="text" name="department" placeholder="Department"><br><br>
    <input type="submit" name="submit" value="SUBMIT">
    </form>
    </div>
   
</body>
</html>