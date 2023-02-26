<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <?php
        $con=mysqli_connect("localhost","root","","campus");

        if (!$con) {
            echo ("Server not available................");
        }

        $q="select *from student";
        $qu=mysqli_query($con,$q);
    ?>

    <table border= "1px" style="background-color:gray; text-align:center;">
        <tr  style="background-color:red; text-align:center;" >
            <th>Si</th>
            <th>Name</th>
            <th>email</th>
            <th>password</th>
        </tr>
        <?php
            while ($rs=mysqli_fetch_assoc($qu)) {
        ?>
        <tr>
            <td><?php echo $rs['SI']; ?></td>
            <td><?php echo $rs['Name']; ?></td>
            <td><?php echo $rs['email']; ?></td>
            <td><?php echo $rs['password']; ?></td>
        </tr>
        <?php     
            }
        ?>
    </table>
</body>
</html>