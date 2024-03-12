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
    require_once("db_config.php"); 
    $id = $_REQUEST['id'];
    if(isset($_POST['update'])){
        extract($_POST);
         
        $sql2 = "UPDATE biodata SET FirstName='$fname',LastName='$lname', Email='$email',Phone='$phone',Department='$department',Gender='$gender',City='$city' WHERE personID='$id' ";
        $myDB->query($sql2);
        if($myDB->affected_rows){
            echo "Update Successfully";
        }
    }



    $sql = "SELECT * FROM biodata WHERE personID='$id'";
    $result = $myDB->query($sql);
    $row = $result->fetch_assoc();
    ?>
	<div class="container">
        <div class="text-center text-warning">
        <form class="from bg-secondary" action="<?php echo $_SERVER['PHP_SELF'] ?>"method="post" >
            <input type="text" name="fname" placeholder="Enter your First Name" value="<?php echo $row['FirstName'] ?>"><br><br>
            <input type="text" name="lname" placeholder="Enter your Last Name" value="<?php echo $row['LastName'] ?>"><br><br>
            <input type="email" name="email" placeholder="Enter your Email" value="<?php echo $row['Email'] ?>"><br><br>
            <input type="number" name="phone" placeholder="Enter your Phone Number" value="<?php echo $row['Phone'] ?>"><br><br>
            

            <select name="department">
                <option value="Accounting"<?php if($row['Department']=='Accounting') echo 'selected' ?>>Accounting</option>
                <option value="Management" <?php if($row['Department']=='Management') echo 'selected' ?>>Management</option>
                <option value="Markting"<?php if($row['Department']=='Markting') echo 'selected' ?>>Markting</option>
                <option value="English"<?php if($row['Department']=='English') echo 'selected' ?>>English</option>
                <option value="Bangla"<?php if($row['Department']=='Bangla') echo 'selected' ?>>Bangla</option>
             </select><br><br>
            
            <input type="radio" name="gender" value="Male" <?php echo ($row['Gender']=='Male')? "checked":""; ?>>Male
            <input type="radio" name="gender" value="Female" <?php echo($row['Gender']=='Female')? "checked":""; ?>>Female<br><br>
            <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea><br><br>
            <select name="city">
                <option value="Dhaka" <?php if($row['City']=='Dhaka') echo "selected" ?>>Dhaka</option>
                <option value="Khulna"<?php if($row['City']=='Khulna') echo "selected" ?>>Khulna</option>
                <option value="Maymansing"<?php if($row['City']=='Maymansing') echo "selected" ?>>Maymansing</option>
  
                <option value="Comilla"<?php if($row['City']=='Comilla') echo "selected" ?>>Comilla</option>
                <option value="Faridpur"<?php if($row['City']=='Faridpur') echo "selected" ?>>Faridpur</option>
                  </select><br><br>
                  <input type="submit" name="update" value="UPDATE">
                  <input type="hidden" name="id" value="<?php echo $row['personID']?>">

        </form>
    </div>
        </div>
</body>
</html>