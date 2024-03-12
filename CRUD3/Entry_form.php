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
 
  if(isset($_POST['submit'])){
    extract($_POST);
    require_once("db_config.php");
  //  echo  "INSERT student_info VAlUES(NULL, $fname, $lname, $department, $email, $number,$faname, $maname,$address, $city)";
    $sql = "INSERT student_info VAlUES(NULL, '$fname', '$lname', '$department', '$email', '$number','$faname', '$maname','$address', '$city')";
    $myDB->query($sql);
    if($myDB->affected_rows){
      echo "Inserted";
    }
  }
  ?>
<div class="container text center" >
<form class="mt-4 border bg-success text-white " action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->

  
    
     <div class="form-outline text-center mb-2 mt-5">
      <label class="form-label" for="form3Example1">First name</label>
      <input type="text"  name="fname" placeholder="Enter your First Name" />
      </div>
    
      <div class="form-outline text-center mb-2 gap-2">
      <label class="form-label" for="form3Example2">Last name</label>
      <input type="text"  name="lname"placeholder="Enter your Last Name" />
      </div>
     
  
  <!-- Deaprtment -->
  <div class="form-outline text-center  mb-2">
  <label class="form-label" for="form3Example3">Department</label>
    <input type="text"  name="department" placeholder="Enter your Department Name"/>
   </div>

  <!-- Email -->
  <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">Email</label>
    <input type="email" name="email"placeholder="Enter your Email" />
  </div>

  <!-- phone-->
  <div class="form-outline text-center mb-2">
<label class="form-label">Phone-Number</label>
    <input type="number" name="number"placeholder="Enter your Phone Number" />
    </div>
    <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">FatherName</label>
    <input type="text" name="faname" placeholder="Enter your Father Name"/></div>
    <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">MotherName</label>
    <input type="text" name="maname" placeholder="Enter your Mother Name"/></div>
    <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">Address</label>
<textarea name="address" id="" cols="30" rows="10"></textarea>
</div>
    <div class="form-outline text-center mb-2">
  <label class="form-label" for="form3Example4">City</label>
    <select name="city">
      <option value="Dhaka">Dhaka</option>
      <option value="Khulna">Khulna</option>
      <option value="Maymansing">Maymansing</option>
      <option value="Comilla">Comilla</option>
      <option value="Barisal">Barisal</option>
      <option value="Sylhet">Sylhet</option>
      <option value="Faridpur">Faridpur</option>
      <option value="Bula">Bula</option>
      <option value="Tangail">Tan</option>
    </select></div>

  <!-- Submit button -->
<div class="text-center">
<input class="bg-primary text center" type="submit" name="submit" value="SUBMIT">

</div>
 <!-- Register buttons -->
  <div class="text-center">
    <p>or Submit with:</p>
    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa -facebook-f"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
</div>
</body>
</html>