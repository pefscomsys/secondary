<?php
    include_once './includes/class.dbc.php';
    include_once './includes/functions.php';

    //now set up database connection varaible
    $db = new dbc();
    $dbc = $db->connect();
?>

<!DOCTYPE HTML>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>BGS - Molyko </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel='stylesheet' id='prettyphoto-css'  href="css/prettyPhoto.css" type='text/css' media='all'>
    <link href="css/AdminLTE.css" type="text/css" rel="stylesheet">
    <link href="css/animate.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
    body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Load ScrollTo -->
    <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
    <!-- Load LocalScroll -->
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>


    <!-- prettyPhoto Initialization -->
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();

            wow = new WOW(
            {
              animateClass: 'animated',
                        offset: 100,
                        callback: function (box) {
                            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                        }
            }

                );
            wow.init();
          });
        </script>
    </head>
    <body>
    <!--******************** NAVBAR ********************-->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <h1 class="brand"><a href="#top">BGS Molyko</a></h1>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <nav class="pull-right nav-collapse collapse">
              <ul id="menu-main" class="nav">
                <li><a title="portfolio" href="index.php">Dashboard</a></li>
                <li><a title="services" href="classes.php">Classes</a></li>
                <li><a title="news" href="teachers.php">Teachers</a></li>
                <li><a title="team" href="#team">Team</a></li>
                <li><a title="contact" href="#contact">Account</a></li>
              </ul>
            </nav>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-inner -->
      </div>
      <!-- /.navbar -->
    </div>
    <!-- /.navbar-wrapper -->
    <div id="top"></div>
    <!-- ******************** HeaderWrap ********************-->
    <div id="headerwrap">
      <header class="clearfix">
        <h1><span>BGS!</span> Making Learning Better.</h1>

      </header>
    </div>

    <hr>
    <!-- Info boxes -->

    <div class="container">
        <div class="row">
            <div class="">
                <div class="col-md-3  wow slideInLeft">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua">
                            <i class="fa fa-group"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Students</span>
                            <span class="info-box-number">
                                <?php
                                // we need to count alll the students for this year
                                //first we get the current academic year
                                $query = "SELECT `year` FROM `rush` WHERE `roll` = '1'";
                                $result = mysqli_query($dbc, $query);

                                list($year) = mysqli_fetch_array($result);

                                $query = "SELECT * FROM `marks` WHERE `form` = '$year'";
                                $result = mysqli_query($dbc, $query);

                                $number = mysqli_num_rows($result);

                                echo number_format($number);
                                ?>
                                <small> Students </small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 wow slideInLeft">
                    <div class="info-box">
                        <span class="info-box-icon bg-green">
                            <i class="fa fa-pencil-square"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Teacher</span>
                            <span class="info-box-number">
                                <?php
                                $query = "SELECT * FROM `users` WHERE `user_level` = '3'";
                                $result = mysqli_query($dbc, $query);

                                $number = mysqli_num_rows($result);

                                echo number_format($number);
                                ?>

                                <small>Teachers</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 wow slideInLeft">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow">
                            <i class="fa fa-user-circle"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total V. Principals</span>
                            <span class="info-box-number">
                                <?php
                                $query = "SELECT * FROM `users` WHERE `user_level` = '19'";
                                $result = mysqli_query($dbc, $query);

                                $number = mysqli_num_rows($result);

                                echo number_format(--$number);
                                ?>
                                <small>Vice Principals</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 wow slideInLeft">
                    <div class="info-box">
                        <span class="info-box-icon bg-red">
                            <i class="fa fa-houzz"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">N<sup>o</sup> Classes</span>
                            <span class="info-box-number">
                                <?php
                                $query = "SELECT * FROM `classes`";
                                $result = mysqli_query($dbc, $query);

                                $number = mysqli_num_rows($result);

                                echo number_format($number);
                                ?>
                                <small>Classes</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
        </div> <!-- end first row -->

        <div class="row">
            <div class="col-md-3 wow slideInRight">
                <a href="students.php" class="btn btn-info btn-block btn-flat btn-lg" title="Student List">
                    Student List
                </a>
            </div>

            <div class="col-md-3 wow slideInRight">
                <a href="teachers.php" class="btn btn-success btn-block btn-flat btn-lg" title="Student List">
                    Teachers
                </a>
            </div>

            <div class="col-md-3 wow slideInRight">
                <a href="vprincipals.php" class="btn btn-warning btn-block btn-flat btn-lg" title="Student List">
                    Vice Principals
                </a>
            </div>

            <div class="col-md-3 wow slideInRight">
                <a href="classes.php" class="btn btn-danger btn-block btn-flat btn-lg" title="Student List">
                    Classes
                </a>
            </div>
        </div>
    </div>



    <hr>
    <div class="footer-wrapper">
      <div class="container">
        <footer>
          <small>&copy; <?php echo date("Y"); ?> PEFSCOM SYSTEM. All rights reserved.</small>
        </footer>
      </div>
      <!-- ./container -->
    </div>
    <!-- Loading the javaScript at the end of the page -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/site.js"></script>


    </body>
    </html>
