<?php 
$myDB = new mysqli("localhost","root","","evidence_trigger2")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        button{
            padding: 20px;
            background-color:lightgreen;
            margin-top: 20px;
        }
        button,a {
            text-decoration: none;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Compnay List</h1>
    <?php 
    if(isset($_POST['delete'])):
        $m_name = $_POST['company_name'];
        $sql = "DELETE FROM  manufacturer WHERE M_id='$m_name'";
        $myDB->query($sql);
        if($myDB->affected_rows){
            echo "Delete Successfully";
        }

        endif
    ?>
    <form action="" method="post">
        <select name="company_name">
    <option value="">Select One</option>
    <?php 
    $result = $myDB->query("SELECT * FROM  manufacturer ");
    while($row=$result->fetch_assoc()):
    ?>
    <option value="<?php echo $row['M_id'] ?>"><?php echo $row['Company_Name'] ?></option>
<?php endwhile ?>
        </select><br><br>
        <input type="submit" name="delete" value="DELETE">
    </form>
    <h1>product List</h1>
    <?php 
    $sql = "SELECT * FROM  	manufacturer_info";
    $result = $myDB->query($sql);
?>
    <table border="2">
        
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product price</th>
            <th>Company Name</th>
        </tr>
        <?php
        $n = 1;
        while($row=$result->fetch_assoc()):
         ?>
        <tr>
            <td><?php echo $n; $n++ ?></td>
            <td><?php echo $row['P_Name'] ?></td>
            <td><?php echo $row['P_Price'] ?></td>
            <td><?php echo $row['Company_Name'] ?></td>
        </tr>
        <?php endwhile ?>
    </table>
<button><a href="Data_Entry.php">Data Entry of Menufacturer</a></button>


</body>
</html>