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
    $uname = $_REQUEST['uname'];
    $email = $_REQUEST['email'];
    $psword = $_REQUEST['password'];

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
        $sql = "INSERT INTO `company` (`Company_name`, `manger`, `email`, `password`) VALUES ('$name', '$uname', '$email', '$psword')";
        $result = mysqli_query($con,$sql);

        if($result){
            header("location:compreg.html");
        }
        else{
            echo 'unsucessful';
        }
    }
    ?>
</body>
</html>