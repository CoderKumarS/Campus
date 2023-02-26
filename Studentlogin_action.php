<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login - Action</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <?php
    $server = "localhost";
    $password = "";
    $user = "root";
    $dbName = "campus";

    $con = mysqli_connect($server, $user, $password, $dbName);

    if (!$con) {
        echo "Connection Failed...............";
    }

    $user = $_REQUEST['name'];
    $pass = $_REQUEST['password'];

    $q = "select *from student where Name='$user'";
    $qu = mysqli_Query($con, $q);
    $rs = mysqli_fetch_assoc($qu);
    $dp = $rs['password'];

    if ($dp == $pass) {
        header("location:studenthome.php");
    } else {
    ?>
        <h1>
            <?php echo "Please enter a valid password"; ?>
        </h1>
    <?php
    }
    ?>
</body>

</html>