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
            background-color: #3B13D9
        }

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
            <div class="container-fluid">
                <div class="col-md-12 ">
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
                                    <form class="d-flex" role="search" name="f" method="post" action="searchjob_action.php">
                                        <input class="form-control me-2" type="search" placeholder="Enter Job Title" aria-label="Search" name="t1">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color:#999">
            <div class="col-md-12">
                <!-- Start WOWSlider.com BODY section -->
                <div id="wowslider-container1">
                    <div class="ws_images">
                        <ul>
                            <li><img src="data1/images/img1.jpg" alt="" title="" id="wows1_0" /></li>
                            <li><img src="data1/images/img2.jpg" alt="" title="" id="wows1_1" /></li>
                            <li><img src="data1/images/img5.jpg" alt="" title="" id="wows1_2" /></li>
                            <li><a href="http://wowslider.net"><img src="data1/images/img6.jpg" alt="responsive slider" title="" id="wows1_3" /></a></li>
                            <li><img src="data1/images/img5_0.jpg" alt="" title="" id="wows1_4" /></li>
                        </ul>
                    </div>
                    <div class="ws_bullets">
                        <div>
                            <a href="#" title=""><span><img src="data1/tooltips/img1.jpg" alt="" />1</span></a>
                            <a href="#" title=""><span><img src="data1/tooltips/img2.jpg" alt="" />2</span></a>
                            <a href="#" title=""><span><img src="data1/tooltips/img5.jpg" alt="" />3</span></a>
                            <a href="#" title=""><span><img src="data1/tooltips/img6.jpg" alt="" />4</span></a>
                            <a href="#" title=""><span><img src="data1/tooltips/img5_0.jpg" alt="" />5</span></a>
                        </div>
                    </div>
                    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap slider</a> by WOWSlider.com v9.0</div>
                    <div class="ws_shadow"></div>
                </div>
                <script type="text/javascript" src="engine1/wowslider.js"></script>
                <script type="text/javascript" src="engine1/script.js"></script>
                <!-- End WOWSlider.com BODY section -->
            </div>
        </div>
        <h1>job list</h1>
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