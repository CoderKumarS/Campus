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
            font-size: 30px;
            text-align: center;
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

        .bxshadow {
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
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


        .topnav {
            background-color: #36C;
            overflow: hidden;
            border-radius: 20px;
        }

        /*Style the links inside the navgation bar */
        .topnav a {
            float: left;
            color: #804000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            margin-right: 60px;
        }

        /* change the color of links on hover */
        .topnav a:hover {
            background-color: #800080;
            color: #FFF;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #C1BF71;
            color: #804000;
            margin-right: 20px;
        }

        .dropbtn {
            background-color: #03F;
            color: #000;
            padding: 10px;
            font-size: 18px;
            font-style: oblique;
            font-weight: 700;
            border: thick;
        }

        .dropdown {
            position: relative;
            display: inline;
            margin-right: 50px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #C36;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 2);
            z-index: 1;
            font-size: 16px;
            font-style: oblique;
            font-weight: 700;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #FFF;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is showm */
        .dropdown:hover .dropbtn {
            background-color: #0FF;
        }

        .detail {
            font-size: 16px;
            font-weight: bold;
            color: #900;
            padding: 10px;
        }

        .detailhead {
            font-size: 28px;
            text-decoration: underline;
            color: #FFF;
        }

        .obj {
            font-size: 28px;
            text-decoration: underline;
            color: #F00;
            padding-left: 20px;
            font-weight: bold;
        }

        .objmain {
            font-size: 18px;
            color: #FFF;
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
        <div class="row" style="background-color:#EC090D">
            <div class="col-md-2">
                <img src="images/campus_logo.png" class="campus_logo">
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
        <div class="row" style="background-color:#6CF">
            <div class="col-md-12" style="background-color:#EEE;">
                <ul id="MenuBar1" class="MenuBarHorizontal">
                    <li><a href="studenthome.php">Home</a></li>
                    <li><a href="userlogin.html">profile</a></li>
                    <li><a href="applyjob.html">Apply Job</a></li>
                    <li><a href="viewjob.php">View Job</a></li>
                    <li><a href="searchjob.html">Search Job</a></li>

                    <li><a href="index.html"><button>Logout</button></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row" style="background-color:#999">
            <div class="col-md-4" align="center">
            </div>

            <!-- Start WOWSlider.com BODY section -->
            <center>
                <div class="my-div col-md-4">
                    <BR><BR></br>
                    <center><b>
                            <font id="heading">Job Apply Sucessfully</font>
                        </b></center>
                    <center>




                        <?php
                        $con = mysqli_connect("localhost", "root", "", "campus");
                        if (!$con) {
                            echo "not connected...";
                        }
                        $n = $_REQUEST['t1'];
                        $em = $_REQUEST['t2'];
                        $ct = $_REQUEST['t3'];
                        $hr = $_REQUEST['t4'];
                        $un = $_REQUEST['t5'];
                        $pw = $_REQUEST['t6'];

                        $qu = "insert into applyjob(na,em,ph,jid,jp,rid) values('$n','$em','$ct','$hr','$un','$pw')";
                        mysqli_query($con,$qu);
                        ?>
                    </center>
                    <br><br><br><br>

                </div>
        </div>
    </div>
    <div class="row" style="background-color:#CCC">
        <div class="col-md-1" style="background-color:#CCC">
        </div>
        <div class="col-md-10" style="background-image:url(background/b6.png)">


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