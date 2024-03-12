<?php 
require_once("db_config.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
    $sql ="SELECT * FROM biodata";
    $result = $myDB->query($sql);
    ?>
    <a class="btn btn-warning mb-4 text-white" href="Entry_form.php">NEW DATA ENTRY</a>
    <h1>Person Information</h1>
    <div class="container">
    <table class="table table-primary table-striped">
  <thead>
    <tr>
      <th scope="col">personID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Department</th>
      <th scope="col">Gender</th>
    <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
  <tbody>
    <?php 
    while($row=$result->fetch_object()){
    ?>
    <tr>
      <th><?php echo $row->personID ?></th>
      <td><?php echo $row->FirstName."".$row->LastName ?></td>
      <td><?php echo $row->Email ?></td>
      <td><?php echo $row->Phone ?></td>
      <th><?php echo $row->Department ?></th>
      <th><?php echo $row->Gender?></th>
     <td><?php echo $row->Address ?></td>
      <td><?php echo $row->City ?></td>
      <td>
      <a class="btn btn-primary" href="Edit.php?id=<?php echo $row->personID ?>">Edit</a>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $row->personID ?>" onclick="return confirm('Are you sure to Delete')">DELETE</a>
      </td>
    </tr>
    <?php }?>
 
  </tbody>
</table>
    </div>
</body>
</html>