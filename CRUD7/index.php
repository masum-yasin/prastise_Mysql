<?php 
require_once("config_file.php");
?>

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
    $sql = "SELECT * FROM  person";
    $result = $myDB->query($sql);
 ?>
    <h1>One of person Detailes</h1> 
    <a class="btn btn-success mb-4" href="entry_from.php">Inserted</a>

<div class="container">
<table class="table table-primary table-striped">
<thead>
    <tr>
      <th scope="col">personID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Nationality</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
</thead>
  <tbody>
    <?php 
while($row=$result->fetch_object()){
    ?>
    <tr>
      <th><?php echo $row->personID?></th>
      <td><?php echo $row->FirstName."".$row->LastName ?></td>
      <td><?php echo $row->Email ?></td>
      <td><?php echo $row->Phone ?></td>
      <th><?php echo $row->Address ?></th>
      <td><?php echo $row->City ?></td>
      <td><?php echo $row->Nationality ?></td>
      <td><?php echo $row->Gender ?></td>
      <td>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $row->personID?>"onclick="return confirm('Are you sure Delete')">Delete</a>
        <a class="btn btn-success" href="edit.php?id=<?php echo $row->personID ?>">Edit</a>
      </td>
</tr>
<?php }?>
  </tbody>
</table>
</div>
</body>
</html>