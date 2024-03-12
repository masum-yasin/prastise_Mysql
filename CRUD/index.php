<?php 
require_once("db_config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
    $sql = "SELECT * FROM persons";
    $result = $db->query($sql);
    ?>

<div class="container">
  <h2>List of all persons</h2>
  <a class="btn btn-primary" href="entry_form.php">Insert persons</a>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>personID</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
      <th>Date_Birth</th>
        <th>Phone</th>
        <th>action</th>

      </tr>
    </thead>
    <tbody>
        <?php 
        while ($row = $result->fetch_object()){ 
        ?>
      <tr>
       
        <td><?php echo $row->personID ?></td>
        <td><?php echo $row->FirstName ."".$row->LastName?></td>
        <td><?php echo $row->Address?></td>
        <td><?php echo $row->City ?></td>
        <td><?php echo $row->Date_Birth ?></td>
        <td><?php echo $row->phone ?></td>
        
        <td><a class="btn btn-success"  href="edit.php?id=<?php echo $row->personID?>">Edit</a>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $row->personID?>">Delete</a></td>
      
      </tr>
      <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
