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
    $id= $_REQUEST['id'];
    if(isset($_POST['update'])){
        extract($_POST);
        
        $sql ="UPDATE student_details SET FirstName='$fname',LastName='$lname',Email='$email', Phone_Number='$phone', FatherName ='$faname', MotherName='$maname', Address='$address', City='$city', Department='$department' WHERE StudentID ='$id'";
     $myDB->query($sql);
       if($myDB->affected_rows){
        echo "Successful Updat";
       }
    }




    $result =$myDB->query("SELECT * FROM student_details WHERE StudentID ='$id'");
    $row=$result->fetch_assoc();
    
    ?>
<!-- 
StudentID 	FirstName 	LastName 	Email 	Phone_Number 	FatherName 	MotherName 	Address 	City 	Department 	 -->
    

    <div class="container text-center border bg-dark text-info mt-5">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text"name="fname" placeholder="Enter Your First Name"  value="<?php echo $row['FirstName'] ?>"><br><br>
    <input type="text"name="lname" placeholder="Enter Your Last Name" value="<?php echo $row['LastName'] ?>"><br><br>
    <input type="email"name="email" placeholder="Enter Your Email" value="<?php echo $row['Email'] ?>"><br><br>
    <input type="number"name="phone" placeholder="Enter Your Phone Number" value="<?php echo $row['Phone_Number'] ?>"><br><br>
    <input type="text" name="faname" placeholder="Enter your Father Name" value="<?php echo $row['FatherName'] ?>"><br><br>
    <input type="text"name="maname" placeholder="Enter Your Mother Name" value="<?php echo $row['MotherName'] ?>"><br><br>
    <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea><br><br>
    <select name="city">
        <option value="Dhaka" <?php if($row['City']=='Dhaka') echo 'selected' ?>>Dhaka</option>
        <option value="Khulna" <?php if($row['City']=='Khulna') echo 'selected' ?>>Khulan</option>
        <option value="Comilla" <?php if($row['City']=='Comilla') echo 'selected' ?>>Comilla</option>
        <option value="Faridpur"<?php if($row['City']=='Faridpur') echo 'selected'?> >Faridpur</option>
        <option value="Barisal" <?php  if($row['City']=='Barisal') echo 'selected'?>>Barisal</option>
        <option value="Maymansing" <?php if($row['City']=='Maymansing') echo 'selected' ?>>Maymansing</option>
        <option value="Netrokona"<?php if($row['City']=='Netrokona') echo 'selected'?> >Netrokona</option>
    </select><br><br>
    <input type="text" name="department" placeholder="Department" value="<?php echo $row['Department'] ?>"><br><br>
    <input type="submit" name="update" value="UPDATE">
    <input type="hidden" name="id" value="<?php echo $row['StudentID'] ?>" >
    </form>
    </div>
   
</body>
</html>