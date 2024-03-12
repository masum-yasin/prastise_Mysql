<?php 
$db=new mysqli("localhost","root","","test");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .productT{
            background-color:darkslateblue;
            color:white ;
            width: 500px;
            height: 400px;
            text-align: center;
        }
       button  { 
        border: 2px;
        padding: 20px;
        background-color:yellow;
    
       }
       button,a{
        text-decoration: none;
        color:red;
        font-size: 20px;
        margin-left: 60px;
        margin-top: 50%;
       }
       body{
        display: flex;
       }
    </style>
</head>
<body>
     <div>
    <h1>Company List</h1>
   
    <?php 
    if(isset($_POST['delete'])):
        $mid = $_POST['company'];
       $db->query( "DELETE FROM manufacturer WHERE M_id='$mid'");
        if($db->affected_rows){
            echo "Deleted";
        }


    endif
    ?>
    <form action="" method="post">
    <select name="company">
    <option value="">Select One</option>
    <?php 
    $result = $db->query("SELECT * FROM manufacturer");
    $sn = 1;

    while($row = $result->fetch_assoc()):
    ?>
    <option value="<?php echo $row['M_id'] ?>"><?php echo $row['Company_name'] ;?></option>
    <?php endwhile; ?>
</select>
<input type="submit" name="delete" value="DELETE">
    </form>
    <h1>Product List</h1>
    <?php 
    $sql =" SELECT * FROM manufacturer_info ";
    $result=$db->query($sql);?>
    <table class="productT" border="2">
        <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Company</th>
        </tr>
    
    <?php
    $sn = 1;
        while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $sn; $sn++; ?></td>
            <td><?php echo $row['P_name'] ?></td>
            <td><?php echo $row['P_price'] ?></td>
            <td><?php echo $row['Company_name'] ?></td>
        
        </tr>
        <?php 
        endwhile;
        ?>
        </table>
    </div>
        <div>
        <button><a href="data_entryfrom.php">manufacturer Data Entry</a></button>
        </div>
</body>
</html>