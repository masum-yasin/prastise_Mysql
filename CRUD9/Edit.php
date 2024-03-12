<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once("db_config.php");
    $id=$_REQUEST['id'];
    if(isset($_POST['update'])){
        extract($_POST);
        $sql2 = "UPDATE product_details SET ProuctName='$ProuctName',Price='$price', Quentity = '$quentity', Brand = '$brand' WHERE ProductID = '$id'  ";
        $myDB->query($sql2);
        if($myDB->affected_rows){
            echo "Update Successfully";
        }

    }

    $sql = "SELECT * FROM product_details WHERE ProductID='$id' ";
    $result = $myDB->query($sql);
    $row = $result->fetch_assoc();
    
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="ProuctName" placeholder="Enter your Product Name" value="<?php echo $row['ProuctName'] ?>"><br><br>
    <input type="number"name="price" placeholder="Input Product Price" value="<?php echo $row['Price'] ?>"><br><br>
    <input type="number" name="quentity" placeholder="Input Product Quentity" value="<?php echo $row['Quentity'] ?>"><br><br>
    <input type="text" name="brand" placeholder="Enter Product Brand" value="<?php echo $row['Brand'] ?>"> <br><br>
    <input type="submit" name="update" value="UPDATE">
    <input type="hidden" name="id" value="<?php echo $row['ProductID'] ?>">


    </form>
</body>
</html>