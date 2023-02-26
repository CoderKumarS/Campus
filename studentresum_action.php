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

    $fn = $_REQUEST['fn'];
    $rl = $_REQUEST['rl'];
    $ln = $_REQUEST['ln'];
    $an = $_REQUEST['fan'];
    $mn = $_REQUEST['mn'];
    $ge = $_REQUEST['ge'];
    $em = $_REQUEST['em'];
    $cn = $_REQUEST['cn'];
    $ct = $_REQUEST['ct'];
    $ad = $_REQUEST['ad'];
    $db = $_REQUEST['db'];
    $sc = $_REQUEST['sc'];
    $yp = $_REQUEST['yp'];
    $pr = $_REQUEST['pr'];
    $co = $_REQUEST['co'];
    $tp = $_REQUEST['cyp'];
    $rp = $_REQUEST['cpr'];
    $nn = $_REQUEST['un'];
    $pp = $_REQUEST['upy'];
    $pt = $_REQUEST['upr'];
    $mp = $_REQUEST['exp'];

    $qu = "INSERT INTO `student`(`Name` ,`password`, `LastName`, `Father_Name`, `Mother_Name`, `Gender`, `Email`, `Contact_No.`, `City`, `Address`, `DOB`, `School`, `Year_of_passingS`, `PercentageS`, `College`,`Year_of_passingCl`, `PercentageCl`, `University`, `Year_of_passingC`, `PercentageC`, `Experience`) VALUES ('$fn','$rl','$ln','$an','$mn','$ge','$em','$cn','$ct','$ad','$db','$sc','$yp','$pr','$co','$tp','$rp','$nn','$pp','$pt','$mp')";
    $result= mysqli_query($con, $qu);

    if ($result) {
        header("location:studentresum.php");
    } else {
        echo " problem";
    }
    ?>

</body>

</html>