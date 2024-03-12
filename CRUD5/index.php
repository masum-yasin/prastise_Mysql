<?php 
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Student Information Details</h1>
    <a class="btn btn-success mb-3 ml-5 font-weight-bold" href="form_entry.php">NEW ENTRY FORM</a>
    
    <?php 
    $sql = "SELECT * FROM students";
    $result = $myDB->query($sql);
    ?>
<div class="container">
<table class="table table-primary table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>	
      <th scope="col">dob</th>
      <th scope="col">Email</th>
      <th scope="col">Batch</th>
      <th scope="col">Address</th>
      <th scope="col">hobbies</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    while($row = $result->fetch_object()){
    ?>
    <tr>
      <th><?php echo $row->id ?></th>
      <td><?php echo $row->Name?></td>
      <td><?php echo $row->Gender?></td>
      <td><?php echo $row->dob ?></td>
      <th><?php echo $row->Email ?></th>
      <td><?php echo $row->Batch ?></td>
      <td><?php echo $row->Address ?></td>
      <td><?php echo $row->hobbies?></td>
      <td>
        <a class="btn btn-success" href="edit.php?id=<?php echo $row->id?>">Edit</a> 
       
        <a class="btn btn-danger" href="Delete.php ?id=<?php  echo $row->id?>" onclick="return confirm('Are you sure to deleted')">Delete</a>
      </td>
    </tr>
    <?php }?>
   
  </tbody>
</table>
<!-- === table display Ending -->



</body>
</div>
</html>