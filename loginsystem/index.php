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
  session_start();
  if(isset($_SESSION['error'])){
    echo($_SESSION['error']);
    unset($_SESSION['error']);
  }
  ?>
<div class="container w-50">
<form class="border mt-5" method="post" action="login_form.php">

  <!-- Email input -->
  <div class="form-outline mb-4 ">
  <label class="form-label" for="form2Example1">Email address</label>
    <input type="email" id="form2Example1" class="form-control"  name="email"/>
   
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password"/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>



  <!-- Submit button -->
  <input type="submit"  name="submit"class="btn btn-primary mb-4" value="Login"></input>

  
</form>
</div>
</body>
</html>