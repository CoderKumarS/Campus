<html>

<head>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        body {
            background-image:url("./images/back.jpg") ;
            background-repeat: no-repeat;
        }

         
        .hea {
            font-size: 45px;
            font-weight: bold;
            text-shadow: 14px -8px 20px #FFFF6AFC;
            text-align: center;
            display: flex;
            background: -webkit-linear-gradient(#FF80ACFF, #68b51b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bxshadow{
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3),0 7px 21px 0 rgba(0, 0, 0, 0.20) ;
            box-sizing: border-box;
        }
        .stic {
            position: sticky;
            top: 0%;
            z-index: 1001;
            left: 0;
        }

        .campus_logo {
            display: block;
            height: 80px;
            margin: 5px auto;
            border-radius: 10px;
        }

        .contact ul {
            list-style: none;
            display: flex;
        }

        .contact ul li {
            text-decoration: none;
            margin: auto;
        }

        .contact ul li a {
            text-decoration: none;
        }

        .contact ul li i {
            margin-right: 5px;
        }
.navi ul li a {
            font-size: 20px;
        }
        .campus_logo {
            display: block;
            height: 80px;
            margin: 5px auto;
            border-radius: 10px;
        }

        .detailhead {
            font-size: 36px;
            color: rgb(122, 68, 68);
            font-weight: bold;
            opacity: 1;
            z-index: 1001;
        }

        .last {
            font-size: 36px;
            color: #C00;
            font-weight: bold;
        }

        .end {
            font-size: 40px;
            color: #C00;
        }
    </style>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="background-color:#F4070B ">
            <div class="col-md-2">
                <img class="campus_logo" src="images/campus_logo.png"  >
            </div>
            <div class="col-md-10">
                <center><i><span class="hea">CAMPUS RECRUITEMENT SYSTEM</span></i></center>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-expand-lg bg-primary">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse navi" id="navbarTogglerDemo03">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item mx-5">
                                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item mx-5 dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Login
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="adminlogin.html">Admin</a></li>
                                            <li><a class="dropdown-item" href="userlogin.html">Student</a></li>
                                            <li><a class="dropdown-item" href="companylogin.html">Company</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item mx-5 dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Register
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="studentresum.php">Student</a></li>
                                            <li><a class="dropdown-item" href="compreg.html">Company</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
                                    </li>

                                </ul>
                                <form class="d-flex" role="search" method="post" action="searchjob_action.php">
                                    <input class="form-control me-2" type="search" placeholder="Enter Job Title" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <p class="h1 text-center">List of Student</p>
        <?php
        $con = mysqli_connect("localhost", "root", "", "campus");

        if (!$con) {
            echo ("Server not available................");
        }

        $q = "select *from student";
        $qu = mysqli_query($con, $q);
        ?>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="col">SI</th>
                        <th class="col">First Name</th>
                        <th class="col">Last Name</th>
                        <th class="col">Father`s Name</th>
                        <th class="col">Mother`s Name</th>
                        <th class="col">Gender</th>
                        <th class="col">Email</th>
                        <th class="col">Contact No.</th>
                        <th class="col">City</th>
                        <th class="col">Address</th>
                        <th class="col">DOB</th>
                        <th class="col">School</th>
                        <th class="col">Year_of_passing in School</th>
                        <th class="col">Percentage in School</th>
                        <th class="col">College</th>
                        <th class="col">Year_of_passing in College</th>
                        <th class="col">Percentage in College</th>
                        <th class="col">University</th>
                        <th class="col">Year_of_passing in University</th>
                        <th class="col">Percentage in University</th>
                        <th class="col">Experience</th>
                    </tr>
                </thead>

                <?php
                while ($rs = mysqli_fetch_assoc($qu)) {
                ?>
                    <tbody>
                        <tr>
                            <th socpe="row"><?php echo $rs['SI']; ?></th>
                            <td><?php echo $rs['Name']; ?></td>
                            <td><?php echo $rs['LastName']; ?></td>
                            <td><?php echo $rs['Father_Name']; ?></td>
                            <td><?php echo $rs['Mother_Name']; ?></td>
                            <td><?php echo $rs['Gender']; ?></td>
                            <td><?php echo $rs['Email']; ?></td>
                            <td><?php echo $rs['Contact_No.']; ?></td>
                            <td><?php echo $rs['City']; ?></td>
                            <td><?php echo $rs['Address']; ?></td>
                            <td><?php echo $rs['DOB']; ?></td>
                            <td><?php echo $rs['School']; ?></td>
                            <td><?php echo $rs['Year_of_passingS']; ?></td>
                            <td><?php echo $rs['PercentageS']; ?></td>
                            <td><?php echo $rs['College']; ?></td>
                            <td><?php echo $rs['Year_of_passingCl']; ?></td>
                            <td><?php echo $rs['PercentageCl']; ?></td>
                            <td><?php echo $rs['University']; ?></td>
                            <td><?php echo $rs['Year_of_passingC']; ?></td>
                            <td><?php echo $rs['PercentageC']; ?></td>
                            <td><?php echo $rs['Experience']; ?></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <script src="./js/bootstrap.bundle.js"></script>
</body>

</html>