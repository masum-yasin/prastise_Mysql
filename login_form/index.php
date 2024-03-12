<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<?php 
session_start();

if ( isset($_SESSION['error']) ) {
  echo $_SESSION['error'];
  unset($_SESSION['error']);
}

?>


<body>

    
<form method="post" action="login.php" class="container mt-5 w-50 bg-light p-5">
<h1 class="mb-5 text-primary "> Please Login </h1>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" id="form2Example1" class="form-control w-75"  placeholder="Email address"/> <br>
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" id="form2Example2" class="form-control w-75" placeholder="Password" /> <br>
    
  </div>



  <!-- Submit button -->
  <input type="submit" value="Log in" class="btn btn-primary btn-block mb-4"></input>

  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>