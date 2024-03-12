
<?php 
require_once("db_config.php");
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
    <a class="btn btn-warning text-white mb-3 mt-1" href="Entry_from.php">Inserted Updatefully</a>
    <?php 
    $sql = "SELECT * FROM  product_details ";
    $result = $myDB->query($sql);
    ?>
    <h1>Product Information</h1>
    <div class="container">
<table class="table table-striped table-success">
 
  <thead>
    <tr>
      <th scope="col">ProductID</th>
      <th scope="col">ProductName</th>
      <th scope="col">Price</th>
      <th scope="col">Quentity</th>
      <th scope="col">Brand</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    while($row=$result->fetch_object()){
    ?>
    <tr>
      <th><?php echo $row->ProductID ?></th>
      <td><?php echo $row->ProuctName  ?></td>
      <td><?php echo $row->Price?></td>
      <td><?php echo $row->Quentity ?></td>
      <th><?php echo $row->Brand ?></th>
      <td>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $row->ProductID ?>" onclick="return confirm('Are you sure to Delete')">DELETE</a>
        <a class="btn btn-success" href="Edit.php?id=<?php echo $row->ProductID ?>">Edit</a>
      </td>
    </tr>
    <?php }?>

  </tbody>
</table>
  </div>
</body>
</html>