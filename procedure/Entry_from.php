<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $myDB = new mysqli("localhost","root","","pro_evidence");
    if(isset($_POST['submit'])){
       extract( $_POST);
            $sql ="Call insert_studentinfo('$name','$email','$dob','$address','$city','$phone')";
      
    //    $sql ="INSERT student_details VALUES(NULL,'$fname','$lname','$email','$phone','$address','$city')";
       $myDB->query($sql);
            if($myDB->affected_rows){
                echo "Inserted";
            };
            
         	

    }
    ?>
	
    <h1>user Input Form</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" placeholder="Enter your Name"><br><br>
    <input type="email" name="email" placeholder="Enter your Email"><br><br>
    <input type="date" name="dob" placeholder="Enter your Email"><br><br>
    
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
 </select><br><br>
 <input type="number"name="phone" placeholder="Enter your Phone Number"><br><br>
    <input type="submit" name="submit" value="SUBMIT">

    </form>
</body>
</html>