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
    if(isset($_POST['submit'])){
        extract($_POST);
        	    $sql = "INSERT biodata VALUES(NULL,'$fname','$lname','$email','$phone','$department','$gender', '$address','$city')";
     $myDB->query($sql);
    if($myDB->affected_rows){
        echo "Inserted Successfully";
    }
    }
    ?>
	<div class="container">
        <div class="text-center text-warning">
        <form class="from bg-secondary" action="<?php echo $_SERVER['PHP_SELF'] ?>"method="post" >
            <input type="text" name="fname" placeholder="Enter your First Name"><br><br>
            <input type="text" name="lname" placeholder="Enter your Last Name"><br><br>
            <input type="email" name="email" placeholder="Enter your Email"><br><br>
            <input type="number" name="phone" placeholder="Enter your Phone Number"><br><br>
            <select name="department">
                <option value="Accounting">Accounting</option>
                <option value="Management">Management</option>
                <option value="Markting">Markting</option>
                <option value="English">English</option>
                <option value="Bangla">Bangla</option>
             </select><br><br>
            
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br><br>
            <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
            <select name="city">
                <option value="Dhaka">Dhaka</option>
                <option value="Khulna">Khulna</option>
                <option value="Maymansing">Maymansing</option>
                <option value="Comilla">Comilla</option>
                <option value="Faridpur">Faridpur</option>
                  </select><br><br>
                  <input type="submit" name="submit" value="SUBMIT">
        </form>
    </div>
        </div>
</body>
</html>