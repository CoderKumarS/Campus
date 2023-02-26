<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <?php
    $name = $_REQUEST['name'];
    $uname = $_REQUEST['sname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    //connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "campus";

    //create connection
    $con = mysqli_connect($servername, $username, $password, $database);
    if (!$con){
        die("connection failed");
    }
    else{
        $sql = "INSERT INTO `practice` (`name`, `sname`, `email`, `password`) VALUES ('$name', '$uname', '$email', '$password')";
        $result = mysqli_query($con,$sql);

        if($result){
            echo 'Your entery submitted';
        }
        else{
            echo 'unsucessful';
        }
    }
    ?>
</body>
</html>