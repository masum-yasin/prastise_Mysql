
<?php 
$myDB = new mysqli("localhsot","root","","evidence_trigger3");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Data Entry</h1>
<?php 
if(isset($_POST['submit'])):
  extract($_POST);
 $sql ="CALL"
    endif
    
?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Entry Your Name"><br><br>
        <textarea name="address" id="" cols="30" rows="10"></textarea>
        <input type="Email" name="Email" placeholder="Entry Your Email"><br><br>
        <input type="number" name="mobile" placeholder="Entry Your Email"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>