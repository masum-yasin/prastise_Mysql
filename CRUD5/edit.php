<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Student form</h2>
   <?php 
   require_once("config.php");
   $id = $_REQUEST['id'];
   if(isset($_POST['submit'])){
    extract($_POST);
    $newhobbies = implode(",",$hobby);
    echo "UPDATE students SET Name='$name',Gender='$gender',dob='$dob',Email='$email', Batch='$batch', Address='$Address',  WHERE id = '$id' ";
    	
    $sql ="UPDATE students SET Name='$name',Gender='$gender',dob='$dob',Email='$email', Batch='$batch', Address='$Address',hobbies WHERE id = '$id' ";
    echo "<br>";
    $myDB->query($sql);
    if($myDB->affected_rows){
    echo "update Sussessfully";
    }
   }





   $result =$myDB->query("SELECT * FROM students WHERE id='$id'");
  $row = $result->fetch_assoc();
  $hobbies = $row['hobbies'];//string
  $hobbies = explode(",",$hobbies);//array

  $hobbilist = array("Cricket","Tenis","Football","Hockey","Badminton");

  
   ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<label for="">Name</label>
<input type="text" name="name" placeholder="Enter your Name" value="<?php echo $row['Name'] ?>"><br><br>
<label for="">Gender</label>
<input type="radio" name="gender" value="male" <?php echo ($row['Gender']=='Male') ?"checked": ''; ?>>Male
<input type="radio" name="gender" value="female" <?php echo ($row['Gender']=='Female')?'checked':''; ?>>Female<br><br>
<label for="">Date Of Birth</label>
<input type="date" name="dob" placeholder="Enter your Birth"  value="<?php echo $row['dob'] ?>"><br><br>
<label for="">Email</label>
<input type="text" name="email" placeholder="Enter your Email"  value="<?php echo $row['Email'] ?>"><br><br>
<label for="">Batch</label>
<select name="batch">
    <option value="JAVA_50" <?php if($row['Batch']=='JAVA_50') echo 'Selected' ?>>jAVA_50</option>
    <option value="WDPF_55"<?php if($row['Batch']=="WDPF_55") echo 'Selected' ?>>WDPF_55</option>
    <option value="JAVA_55"<?php if($row['Batch']=="JAVA_55") echo 'Selected' ?>>JAVA_55</option>
    <option value=".NET_55"<?php if($row['Batch']==".NET_55") echo 'Selected' ?>>.Net_55</option>
    <option value="C#_55"<?php if($row['Batch']=="C#_55") echo 'Selected' ?>>C#_55</option>
    <option value="Database_55"<?php if($row['Batch']=='Database_55') ?>>Database_55</option>
    </select><br><br>
    <textarea name="Address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea><br><br>
    <label for="">Hobbies</label>
    <?php  foreach($hobbilist as $val){?>
        <?php  echo $val;?><input type="checkbox" name="<?php echo $namefield.'[]'; ?>" value="<?php  echo $val;?>"<?php echo in_array($val,$hobbies)? "checked":"";?>>
        <?php }?><br><br>
    <!-- <input type="Checkbox" name="hobby[]" value="Cricket">Cricket
    <input type="Checkbox" name="hobby[]" value="Tenis">Tenis
    <input type="Checkbox" name="hobby[]" value="Football">Football
    <input type="Checkbox" name="hobby[]" value="Hockey">Hockey
    <input type="Checkbox" name="hobby[]" value="Batminton">Batminton<br><br> -->
    <input type="submit" name="submit" value="SUBMIT">
    <input type="hidden" name="id"  value="<?php echo $row['id'] ?>">
    
    </form>
</body>
</html>