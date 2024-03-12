<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once("config.php");
    if(isset($_POST['submit'])){
        extract($_POST);
        $hobbies=implode(",",$hobby);
        $sql = "CALL insert_studentifno('$name','$gender','$dob','$email','$batch','$Address','$hobbies')";
        // $sql ="INSERT students VAlUES(NULL,'$name','$gender','$dob','$email','$batch','$Address','$hobbies')";
        $myDB->query($sql);
        if($myDB->affected_rows){
            echo "Intersered";
        }
    }
    
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<label for="">Name</label>
<input type="text" name="name" placeholder="Enter your Name"><br><br>
<label for="">Gender</label>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female<br><br>
<label for="">Date Of Birth</label>
<input type="date" name="dob" placeholder="Enter your Birth"><br><br>
<label for="">Email</label>
<input type="text" name="email" placeholder="Enter your Email"><br><br>
<label for="">Batch</label>
<select name="batch">
    <option value="">Select one</option>
    <option value="WDPF_55">WDPF_55</option>
    <option value="JAVA_55">JAVA_55</option>
    <option value=".NET_55">.Net_55</option>
    <option value="C#_55">C#_55</option>
    <option value="Database_55">Database_55</option>
    </select><br><br>
    <textarea name="Address" id="" cols="30" rows="10"></textarea><br><br>
    <label for="">Hobbies</label>
    <input type="Checkbox" name="hobby[]" value="Cricket">Cricket
    <input type="Checkbox" name="hobby[]" value="Tenis">Tenis
    <input type="Checkbox" name="hobby[]" value="Football">Football
    <input type="Checkbox" name="hobby[]" value="Hockey">Hockey
    <input type="Checkbox" name="hobby[]" value="Batminton">Batminton<br><br>
    <input type="submit" name="submit" value="SUBMIT">
    
    </form>
</body>
</html>