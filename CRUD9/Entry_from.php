<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("../includes/index_header.php") ;?>
</head>
<body>
    <?php 
      include_once("../includes/index_sidebar.php");
    ?>
    <?php 
    require_once("db_config.php");
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql ="INSERT product_details VALUES(NULL,'$ProuctName','$price','$quentity','$brand')";
        $myDB->query($sql);
        if($myDB->affected_rows){
            echo "Inserted successfully";
        }
    }
    
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="ProuctName" placeholder="Enter your Product Name"><br><br>
    <input type="number"name="price" placeholder="Input Product Price"><br><br>
    <input type="number" name="quentity" placeholder="Input Product Quentity"><br><br>
    <input type="text" name="brand" placeholder="Enter Product Brand"> <br><br>
    <input type="submit" name="submit" value="SUBMIT">


    </form>
    <?php include("../includes/index_footer.php") ?>
</body>
</html>