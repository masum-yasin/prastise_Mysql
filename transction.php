<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   //Creating a connection
   $db = mysqli_connect("localhost", "root", "", "auth_users");
   $db->autocommit(FALSE);

   //Beginning the transaction
   $db->begin_transaction();
   $error=0;   
   print("Transaction Started......\n");

   //Creating a table
//    $db->query("IF NOT EXIST CREATE TABLE Test(Name VARCHAR(255), AGE INT)");
   $db->query("CREATE TABLE Test(Name VARCHAR(255), AGE INT)");
   print("Table Created......\n");

   //Inserting values
   $db->query("INSERT INTO Test values('Raju', 25),('Rahman', 30),('Sarmista', 27)");
   $db->query("Records Inserted......\n");

   //Committing the transaction
   if($error){
    $db->rollback();
    echo "No query excuted";
   }
   else{
    $db->commit();
    print("transction saved...../");

   }
   

   //Closing the connection
   $db->close();
?>
</body>
</html>