<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: lightcyan;
        }
    </style>
</head>
<body>

        <?php 
        session_start();
        if (!isset($_SESSION['name'])){
            header("Location:index.php");
        }
        ?>

   <div>  <h1> Congratulation... <?php echo $_SESSION['name'] ?>  </h1>    <a href="logout.php"> Logout</a> </div>
    <h2> you are a premier member now. !  </h2>
    <h2> Email : <?php   echo $_SESSION['email2'] ?> </h2>
</body>
</html>