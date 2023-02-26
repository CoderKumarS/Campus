<html>

<head>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

    <!-- End WOWSlider.com HEAD section -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .my-div {
            padding: 20px;
            background: lightsalmon;
        }

        #heading {
            color: white;
            font-size: 50px;
            text-align: center;
            padding: 20px 0px;
        }
    </style>
    <style type="text/css">
        
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
            width: 100px;
            height: 80px;
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
        .mycolorf {
            background: linear-gradient(60deg, rgb(96, 191, 239), rgb(241, 93, 237));
            clip-path: polygon(0 0, 100% 0, 100% 100%,  75% 93%, 0 100%);
            padding-bottom: 50px;
            opacity: 0.9;
        }
        .myform{
            width: 30rem;
        }
    </style>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container-fluid ">
        <div class="row" style="background-color: #ED0D11">
            <div class="col-md-2">
                <img src="images/campus_logo.png" class="campus_logo"  >
            </div>
            <div class="col-md-6">
                <span class="hea">CAMPUS RECRUITEMENT SYSTEM</span>
            </div>
            <div class="d-none d-md-block col-md-4 ">
                <div class="contact">
                    <ul class="mx-auto">
                        <li><a href="#"><i class="bi bi-telephone"></i>Call</a></li>
                        <li><a href="#"><i class="bi bi-telephone"></i>Message</a></li>
                        <li><a href="#"><i class="bi bi-telephone"></i>E-mail</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navi" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item mx-5">
                                <a class="nav-link active" aria-current="page" href="studenthome.php">Home</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link active" aria-current="page" href="userlogin.html">Profile</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link active" aria-current="page" href="applyjob.html">Apply Job</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link active" aria-current="page" href="viewjob.php">View Job</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link active" aria-current="page" href="searchjob.html">Search Job</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a class="nav-link active" aria-current="page" href="index.html">
                                    <button class="btn btn-outline-dark">Logout</button>
                                </a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search" name="f" method="post" action="searchjob_action.php">
                            <input class="form-control me-2" type="search" placeholder="Enter Job Title" name="t1" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row mycolorf">
            <div class="col-md-12 py-2">
                <center>
                    <b>
                        <h1 id="heading">STUDENT REGISTRATION FORM</h1>
                    </b>
                </center>
                <form name="f1" id="f1" method="post" action="studentresum_action.php">
                    <table style="margin: 25px auto;">
                        <tr>
                            <td style="font-weight:bold;">FirstName</td>
                            <td><input type="text" name="fn" class="form-control myform" placeholder="Remember as username" required /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Password</td>
                            <td><input type="text" name="rl" class="form-control" placeholder="Remember as password" required /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">LastName</td>
                            <td><input type="text" name="ln" class="form-control" placeholder="Max 50 Characters Allowed" required /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Father's Name</td>
                            <td><input type="text" name="fan" class="form-control" placeholder="Max 50 Characters Allowed" required</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Mother's Name</td>
                            <td><input type="text" name="mn" class="form-control" placeholder="Max 50 Characters Allowed" required</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Gender</td>
                            <td><input type="radio" name="ge" value="female">Female</input>
                                <input type="radio" name="ge" value="male" style="margin-left: 30px;">Male</input>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">E-Mail</td>
                            <td><input type="email" name="em" class="form-control" placeholder="eg. xyz123@gmail.com" required /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Contact No.</td>
                            <td><input type="number" name="cn" class="form-control" placeholder="+91 9857xxxxxx" required maxlength="12" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">City</td>
                            <td><input type="text" name="ct" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Address</td>
                            <td><textarea type="text" name="ad" class="form-control" ></textarea></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">DOB</td>
                            <td><input type="date" name="db" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold; font-size:20px; text-decoration:underline; padding: 20px 0px ;">Educational Qualifications:</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">School</td>
                            <td><input type="text" name="sc" class="form-control myforme" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Year of passing</td>
                            <td><input type="text" name="yp" class="form-control myforme" /></td>
                        </tr>
                            <td style="font-weight:bold;">Percentage</td>
                            <td><input type="text" name="pr" class="form-control myforme" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">college</td>
                            <td><input type="text" name="co" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Year of passing</td>
                            <td><input type="text" name="cyp" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Percentage</td>
                            <td><input type="text" name="cpr" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">University</td>
                            <td><input type="text" name="un" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Year of passing</td>
                            <td><input type="text" name="upy" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Percentage</td>
                            <td><input type="text" name="upr" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Experiance(if any)</td>
                            <td><textarea type="text" name="exp" class="form-control"></textarea></td>
                        </tr>

                        <tr>
                            <td align="center">
                                <br><input type="submit" value="Register" class="btn btn-primary" />
                            </td>
                            <td align="center">
                                <br><input type="reset" value="Clear" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
                <!-- </center> -->

            </div>
        </div>

        <script type="text/javascript">
            var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {
                imgDown: "SpryAssets/SpryMenuBarDownHover.gif",
                imgRight: "SpryAssets/SpryMenuBarRightHover.gif"
            });
        </script>
        <script src="./js/bootstrap.bundle.js"></script>
</body>

</html>