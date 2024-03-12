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
require_once("config_file.php");
if(isset($_POST['submit'])){
    extract($_POST);
    $sql = "INSERT person VALUES(NULL, '$fname','$lname','$email','$phone','$address','$city','$nationality','$gender') ";
    $myDB->query($sql);
    if($myDB->affected_rows){
        echo "Inserted Successfully";
    }
}
?>
   <div class="container">
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"><br><br>
    <input type="text" name="fname" placeholder="Enter your First Name"><br><br>
    <input type="text" name="lname" placeholder="Enter your Last Name"><br><br>
    <input type="email" name="email" placeholder="Enter your Email"><br><br>
    <input type="number" name="phone" placeholder="Enter your Phone Number"><br><br>
    <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
    <select name="city">
        <option value="Dhaka">Dhaka</option>
        <option value="Maymansing">Maymansing</option>
        <option value="Comilla">Comilla</option>
        <option value="Faridpur">Faridpur</option>
        <option value="Narayangong">Narayangong</option>
        <option value="Barisal">Barisal</option>
    </select><br><br>
    <select name="nationality">
        <option value="Bangladeshi">Bangladeshi</option>
        <option value="Pakistani">Pakistani</option>
        <option value="Maldiv">Maldiv</option>
    </select><br><br>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="Female">Female<br><br>
    <input type="submit" name="submit" value="SUBMIT">
    </form>
   </div>
</body>
</html>