
<?php 
require_once("db_config.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <?php 
    $sql ="SELECT * FROM student_details";
    $result = $db->query($sql);
    ?>
<div class="container">
  <h1>List of Student Information</h1>
  <a class="btn btn-success mb-2" href="Entry_form.php">Inserted Form</a>
<table class="table table-striped table-warning text-dark text-center table-responsive" style="width: 1000px; height:400px">
</div>
  <thead>
    <tr>
      <th scope="col">StuentID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">HomeTown</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    while($row =$result->fetch_object()){

    
    
    ?>
    <tr>     		 		
     
      <td><?php echo $row->StudentID ?></td>
   
      <td><?php echo  $row->FirstName."".$row->LastName?></td>     
      <td><?php echo $row->Email ?></td>
      <td><?php echo $row->Phone ?></td>
      <td><?php echo $row->	Address?></td>
      <td><?php echo $row->City ?></td>
      <td><a class="btn btn-success" href="edit.php?id= <?php echo $row->StudentID?>">Edit</a><a class="btn btn-danger" href="delete.php?id= <?php echo $row->StudentID?>">DELETE</a></td>
    </tr>
    <?php } ?>
   
  </tbody>
</table> 
</div>

</body>
</html>