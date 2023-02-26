<html>

<head>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        .bdk::before {
            background-image: url("./images/back.jpg");
            content: "";
            position: fixed;
            top: 0;
            left: 0%;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.2;
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
        <div class="row" style="background-color: #F11014">
            <div class="col-md-2">
                <img src="images/campus_logo.png" class="campus_logo"  >
            </div>
            <div class="col-md-10">
                <center><i><span class="hea"> CAMPUS RECRUITEMENT SYSTEM</span><i>
            </div>
        </div>
        <div class="row" style="background-color:#6CF">
            <div class="col-md-12" style="background-color:#EEE;">
                <ul id="MenuBar1" class="MenuBarHorizontal">
                    <li><a href="adminhome.html">Home</a></li>

                    <li><a href="viewlistofstudent.php">view list of student</a></li>
                    <li><a href="index.html"><button>Logout</button></a></li>
                </ul>

            </div>
        </div>
        <br>
        <div class="row" style="background-color:#999">
            <div class="col-md-12">
                <!-- Start WOWSlider.com BODY section -->
                <div id="wowslider-container1">
                    <div class="ws_images">
                        <ul>
                            <li><img src="data1/images/img1.jpg" alt="  " title="  " id="wows1_0" /></li>
                            <li><img src="data1/images/img2.jpg" alt=" " title=" " id="wows1_1" /></li>
                            <li><img src="data1/images/img3.jpg" alt=" " title=" " id="wows1_2" /></li>
                            <li><a href="http://wowslider.net"><img src="data1/images/img4.jpg" alt="html slider" title=" " id="wows1_3" /></a></li>
                            <li><img src="data1/images/img6.jpg" alt=" " title=" " id="wows1_4" /></li>
                        </ul>
                    </div>
                    <div class="ws_bullets">
                        <div>
                            <a href="#" title="  "><span><img src="data1/tooltips/img1.jpg" alt="  " />1</span></a>
                            <a href="#" title=" "><span><img src="data1/tooltips/img2.jpg" alt=" " />2</span></a>
                            <a href="#" title=" "><span><img src="data1/tooltips/img3.jpg" alt=" " />3</span></a>
                            <a href="#" title=" "><span><img src="data1/tooltips/img4.jpg" alt=" " />4</span></a>
                            <a href="#" title=" "><span><img src="data1/tooltips/img6.jpg" alt=" " />5</span></a>
                        </div>
                    </div>
                    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript slider</a> by WOWSlider.com v9.0</div>
                    <div class="ws_shadow"></div>
                </div>
                <script type="text/javascript" src="engine1/wowslider.js"></script>
                <script type="text/javascript" src="engine1/script.js"></script>
                <!-- End WOWSlider.com BODY section -->
            </div>
        </div>
    </div>
    <div class="row" style="background-color:#CCC">
        <div class="col-md-1" style="background-color:#CCC">
        </div>
        <div class="col-md-10" style="background-image:url(background/b6.png)">

            <center>
                <h1>Welcome to Company Home page</h1>
            </center>
            <?php
            $con = mysqli_connect("localhost", "root", "", "campus");

            if (!$con) {
                echo ("Server not available................");
            }

            $q = "select *from student";
            $qu = mysqli_query($con, $q);
            ?>

            <table border="1px" style="background-color:gray; text-align:center;">
                <tr style="background-color:red; text-align:center;">
                    <th>Si</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>password</th>
                </tr>
                <?php
                while ($rs = mysqli_fetch_assoc($qu)) {
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
        </div>
        <div class="col-md-1" style="background-color:#CCC">
        </div>
    </div>
    <br>
    <div class="row" style="background-image:url(background/b9.jpg)">

    </div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-4" style="background-image:url(background/bb12.jpg)">

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