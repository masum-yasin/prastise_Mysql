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
        require_once("db_config.php");
        echo  "INSERT persons VALUES(NULL, '$fname','$lname','$address','$city', '$date',  '$number', '$email')" ;
     $sql =  "INSERT persons VALUES(NULL, '$fname','$lname','$address','$city', '$date',  '$number', '$email')" ;
     $db->query($sql);
      echo"<br>"; 
     if ($db->affected_rows){
        echo "Inserted";
     }
}
    ?>
   <h3>INput user data</h3> 
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="fname" id="" placeholder="Enter Your First Name"><br><br>
    <input type="text" name="lname" id="" placeholder="Enter Your Last Name"><br><br>
    <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
    <select name="city">
    <option value="Dhaka">Dhaka</option>
    <option value="Chittagong">Chittagong</option>
    <option value="rajshahi">Rajshahi</option>
    <option value="Khulna">Khulna</option>
    <option value="Barisal">Barisal</option>
    <option value="Sylhet">Sylhet</option>
    <option value="Maymansing">Maymansing</option>
    </select><br><br>
 <input type="email" name="email" placeholder="email"><br><br>
    <input type="date" name="date" placeholder="Date"><br><br>
    <input type="number" name="number" placeholder="number"><br><br>
    <input type="submit" name="submit" value="SUBMIT"><br><br>


   </form>
</body>
</html>