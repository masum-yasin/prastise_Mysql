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
//  data update of from//
require_once("config_file.php");
$id = $_REQUEST['id'];
if(isset($_POST['update'])){
    extract($_POST);
    $sql ="UPDATE person SET FirstName='$fname', LastName='$lname', Email = '$email', Phone='$phone', Address='$address', City = '$city', Nationality = '$nationality', Gender='$gender' WHERE personID='$id' ";
 $myDB->query($sql);
    if($myDB->affected_rows>0){
        header("Location:index.php");
    }
}


// Show data of From
   
    $sql ="SELECT * FROM person WHERE personID='$id'";
    $result =$myDB->query($sql);
    $row = $result->fetch_assoc()

 ?>
   <div class="container">
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"><br><br>
    <input type="text" name="fname" placeholder="Enter your First Name" value="<?php echo $row['FirstName'] ?>"><br><br>
    <input type="text" name="lname" placeholder="Enter your Last Name" value="<?php echo $row['LastName'] ?>"><br><br>
    <input type="email" name="email" placeholder="Enter your Email" value="<?php echo $row['Email'] ?>"><br><br>
    <input type="number" name="phone" placeholder="Enter your Phone Number" value="<?php echo $row['Phone'] ?>"><br><br>
    <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea><br><br>
    <select name="city">
        <option value="Dhaka" <?php if($row['City']=='Dhaka') echo "Selected" ?>>Dhaka</option>
        <option value="Maymansing" <?php if($row['City']=='Maymansing') echo "Selected" ?>>Maymansing</option>
        <option value="Comilla" <?php if($row['City']=='Comilla') echo "Selected" ?>>Comilla</option>
        <option value="Faridpur"<?php if($row['City']=='Faridpur') echo "selected" ?> >Faridpur</option>
        <option value="Narayangong" <?php if($row['City']=="Narayangong") echo 'selected' ?>>Narayangong</option>
        <option value="Barisal" <?php if($row['City']=='Barisal') echo "Selected" ?>>Barisal</option>
    </select><br><br>
    <select name="nationality">
        <option value="Bangladeshi"<?php if($row['Nationality']=='Bangladeshi') echo'selected' ?> >Bangladeshi</option>
        <option value="Pakistani" <?php if($row['Nationality']=='Pakistani') echo 'Selected' ?>>Pakistani</option>
        <option value="Maldiv" <?php if($row['Nationality']=='Maldiv') echo 'selected' ?>>Maldiv</option>
    </select><br><br>
    <input type="radio" name="gender" value="male" <?php echo($row['Gender']=='Male')? "checked":""; ?>>Male
    <input type="radio" name="gender" value="Female" <?php echo($row['Gender']=='Female')?'checked':""; ?>>Female<br><br>
    <input type="submit" name="update" value="UPDATE">
    <input type="hidden" name="id" value="<?php echo $row['personID'] ?>">
    </form>
   </div>
</body>
</html>