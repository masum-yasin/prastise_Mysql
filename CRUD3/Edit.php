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
    $id =$_REQUEST['id'];
    require_once("db_config.php");
    // if(isset($_POST['submit']))





    $result = $myDB->query("SELECT * FROM student_info WHERE StudentID='$id'");

    $row =$result->fetch_assoc();
    ?>
<div class="container text center" >
<form class="mt-4 border bg-success text-white " action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->

  
    
     <div class="form-outline text-center mb-2 mt-5">
      <label class="form-label" for="form3Example1">First name</label>
      <input type="text"  name="fname" placeholder="Enter your First Name" value="<?php echo $row['FirstName'] ?>"/>
      </div>
    
      <div class="form-outline text-center mb-2 gap-2">
      <label class="form-label" for="form3Example2">Last name</label>
      <input type="text"  name="lname"placeholder="Enter your Last Name" value="<?php echo $row['LastName'] ?>" />
      </div>
     
  
  <!-- Deaprtment -->
  <div class="form-outline text-center  mb-2">
  <label class="form-label" for="form3Example3">Department</label>
    <input type="text"  name="department" placeholder="Enter your Department Name" value="<?php echo $row['Department'] ?>"/>
   </div>

  <!-- Email -->
  <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">Email</label>
    <input type="email" name="email"placeholder="Enter your Email"  value="<?php echo $row['Email'] ?>" />
  </div>

  <!-- phone-->
  <div class="form-outline text-center mb-2">
<label class="form-label">Phone-Number</label>
    <input type="number" name="number"placeholder="Enter your Phone Number" value="<?php echo $row['Phone_Number'] ?>"/>
    </div>
    <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">FatherName</label>
    <input type="text" name="faname" placeholder="Enter your Father Name" value="<?php echo $row['FatherName'] ?>"/></div>
    <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">MotherName</label>
    <input type="text" name="maname" placeholder="Enter your Mother Name" value="<?php  echo $row['MotherName']?>"/></div>
    <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">Address</label>
<textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address']?></textarea>
</div>
    <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">City</label>
    <select name="city">
      <option value="Dhaka" <?php if($row['City']=='Dhaka') echo 'selected'?>>Dhaka</option>
      <option value="Khulna" <?php if($row['City']=='Khulna') echo 'selected'?>>Khulna</option>
      <option value="Maymansing"  <?php if($row['City']=='Maymansing') echo 'selected'?>>Maymansing</option>
      <option value="Comilla" <?php if($row['City']=='Comilla') echo 'selected'?>>Comilla</option>
      <option value="Barisal"  <?php if($row['City']=='Barisal') echo 'selected'?>>Barisal</option>
      <option value="Sylhet" <?php if($row['City']=='Sylhet') echo 'selected'?>>Sylhet</option>
      <option value="Faridpur" <?php if($row['City']=='Faridpur') echo 'selected'?>>Faridpur</option>
      <option value="Bula"<?php if($row['City']=='Bula') ?> >Bula</option>
      <option value="Tangail" <?php if($row['City']=='Tangail') ?>>Tangail</option>
    </select></div>

  <!-- Submit button -->
<div class="text-center">
<input class="bg-primary text center" type="submit" name="submit" value="SUBMIT">
<input type="hidden" name="id" value="<?php echo $row['StudentID'] ?>" >

</div>

</form>
</div>
</body>
</html>