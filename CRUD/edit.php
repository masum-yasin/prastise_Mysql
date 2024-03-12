<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
         require_once("db_config.php");

    $id = $_REQUEST['id'];
   
    if(isset($_POST['update'])){
        extract($_POST);
        
        $sql = "UPDATE persons SET FirstName='$fname',LastName='$lname',Address='$address',City='$city',Date_Birth='$date',phone='$number',email='$email' WHERE personID='$id'";
   
    
     $db->query($sql);
      echo"<br>"; 
     if ($db->affected_rows){
        echo "update Successful";
     }
     }
     $result = $db->query("SELECT * FROM persons WHERE personID= '$id'");
     $row = $result->fetch_assoc();
    ?>
   <h3>Edit Data</h3> 
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="fname" id="" placeholder="Enter Your First Name" value="<?php echo $row['FirstName'] ?>"><br><br>
    <input type="text" name="lname" id="" placeholder="Enter Your Last Name"value="<?php echo $row['LastName'] ?>"><br><br>
    <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea><br><br>
    <select name="city">
    <option value="Dhaka" <?php if($row['City']=='Dhaka') echo "selected";?>>Dhaka</option>
    <option value="Chittagong<?php if($row['City']=='Chittagong') echo "selected";?>">Chittagong</option>
    <option value="rajshahi"<?php if($row['City']=='rajshahi') echo "selected";?>>Rajshahi</option>
    <option value="Khulna"<?php if($row['City']=='Khulna') echo "selected";?>>Khulna</option>
    <option value="Barisal"<?php if($row['City']=='Barisal') echo "selected";?>>Barisal</option>
    <option value="Sylhet"<?php if($row['City']=='Sylhet') echo "selected";?>>Sylhet</option>
    <option value="Maymansing"<?php if($row['City']=='Maymansing') echo "selected";?>>Maymansing</option>
    <option value="Faridpur"<?php if($row['City']=='Faridpur') echo "selected";?>>Faridpur</option>
    </select><br><br>
 <input type="email" name="email" placeholder="email"  value="<?php echo $row['email'] ?>"><br><br>
    <input type="date" name="date" placeholder="Date" value="<?php echo $row['Date_Birth'] ?>"><br><br>
    <input type="number" name="number" placeholder="number"value="<?php echo $row['phone'] ?>"><br><br>
    <input type="submit" name="update" value="UPDATE"><br><br>
    <input type="hidden" value="<?php echo $row['personID']?>" name="id">


   </form>
</body>
</html>