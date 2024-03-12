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
       extract( $_POST);
       require_once('db_config.php');
      echo  "INSERT student_details VALUES(NULL,'$fname','$lname','$email','$phone','$address','$city')";
       $sql ="INSERT student_details VALUES(NULL,'$fname','$lname','$email','$phone','$address','$city')";
       $db->query($sql);
            if($db->affected_rows){
                echo "Inserted";
            };
            
         	

    }
    ?>
	
    <h1>user Input Form</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="fname" placeholder="Enter your Name"><br><br>
    <input type="text" name="lname" placeholder="Enter your Last Name"><br><br>
    <input type="email" name="email" placeholder="Enter your Email"><br><br>
    <input type="number"name="phone" placeholder="Enter your Phone Number"><br><br>
    <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
    <select name="city">
    <option value="select">Select</option>
    <option value="Khulna">Khulna</option>
    <option value="Comilla">Comilla</option>
    <option value="Maymansing">Maymansing</option>
    <option value="Faridpur">Faridpur</option>
    <option value="Chittagonag">Chittagonag</option>
    <option value="Barisal">Barisal</option>
    <option value="Dhaka">Dhaka</option>
 </select>
    <input type="submit" name="submit" value="SUBMIT">

    </form>
</body>
</html>