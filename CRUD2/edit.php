<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
   require_once('db_config.php');
   $id = $_REQUEST['id'];
   if(isset($_POST['update'])){
     extract($_POST);
     $sql = "UPDATE student_details SET FirstName='$fname', LastName='$lname', Email='$email', Phone='$phone', Address ='$address',City='$city' WHERE StudentID='$id'";
     $db->query($sql);
     if($db->affected_rows)
    {echo "Update successfully";}
   }



   $result =$db->query("SELECT * FROM student_details WHERE StudentID='$id'");
   $row =$result->fetch_assoc();
    ?>
	
    <h1>user Input Form</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="fname" placeholder="Enter your Name" value="<?php echo $row['FirstName'] ?>"><br><br>
    <input type="text" name="lname" placeholder="Enter your Last Name" value="<?php echo $row['LastName'] ?>" ><br><br>
    <input type="email" name="email" placeholder="Enter your Email"  value="<?php echo $row['Email'] ?>"><br><br>
    <input type="number"name="phone" placeholder="Enter your Phone Number"value="<?php echo $row['Phone'] ?>"><br><br>
    <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea><br><br>
    <select name="city">
    <option value="Dhaka" <?php if($row['City']=='Dhaka')  echo 'selected'?>>Dhaka</option>
    <option value="Khulna" <?php if($row['City']=='Khulna')  echo 'selected'?>>Khulna</option>
    <option value="Comilla" <?php if($row['City'] =='Comilla') echo "selected" ?>>Comilla</option>
    <option value="Maymansing"<?php if($row['City'] =='Maymansing') echo "selected" ?>>Maymansing</option>
    <option value="Faridpur"<?php if($row['City'] =='Faridpur') echo "selected" ?>>Faridpur</option>
    <option value="Chittagong"<?php if($row['City'] =='Chittagong')echo "selected" ?>>Chittagonag</option>
    <option value="Barisal"<?php if($row['City'] =='Barisal') echo "selected" ?>>Barisal</option>
 
 </select><br><br>
    <input type="submit" name="update" value="UPDATE">
   <input type="hidden" value="<?php echo $row['StudentID'] ?>" name='id'>



    </form>
</body>
</html>