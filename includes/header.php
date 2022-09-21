<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
   

    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/images/logo/logo.jpg">

    <!-- Icon fonts -->
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Plugins for this template -->
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/animate.css" rel="stylesheet">
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/owl.theme.css" rel="stylesheet">
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/slick.css" rel="stylesheet">
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/slick-theme.css" rel="stylesheet">
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">

    <script type="text/javascript">
        function openTab(th) {
            window.open(th.name, '_blank');
        }
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <!-- Custom styles for this template -->
    <link href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/style.css" rel="stylesheet">
    </head>

     <!-- Start header -->
     <header id="header" class="site-header header-style-5">
            <div class="topbar topbar-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-7">
                            <div class="topbar-contact-info-wrapper">
                                <div class="topbar-contact-info">
                                    <div>
                                        <i class="fa fa-location-arrow"></i>
                                        <div class="details">
                                            <p>Plot No.-3, LSC,
                                                Mayur Vihar, Phase–1,
                                                New Delhi–110091
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <i class="fa fa-phone"></i>
                                        <div class="details">
                                            <p>011-43037699</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-5">
                            <div class="social">
                                <span>Follow: </span>
                                <ul class="social-links">
                                    <li>
                                        <a onClick="openTab(this)" href=""
                                            name="https://www.facebook.com/primetoolsindia">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a onClick="openTab(this)" href="" name="https://twitter.com/primetoolsindia">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a onClick="openTab(this)" href=""
                                            name="https://www.linkedin.com/in/prime-tools-india-89374b1a5/">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a onClick="openTab(this)" href=""
                                            name="https://www.instagram.com/primetoolsindia/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->

            <div class="lower-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-3">
                            <div class="site-logo">
                                <a href="index.php"><img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/images/logo/logo.png" width="150" height="50"></a>
                            </div>
                        </div>
                        <div class="col col-sm-9">
                            <div class="awards">
                                <div>
                                    <div class="icon"><i class="fi flaticon-title"></i></div>
                                    <div class="award-info">
                                        <h4>Global Certified</h4>
                                        <p>ISO 9001 : 2015</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="icon"><i class="fi flaticon-medal"></i></div>
                                    <div class="award-info">
                                        <h4>Prime</h4>
                                        <p>Tools & Equipments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end lower-topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php">Home</a>
                            </li>
                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/about.php">About</a></li>


                            <li class="menu-item-has-children">
                                <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products.php">Products</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/torquing_tools.php">Torquing Tools</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/hyd-torq-wrench.php">Hydraulic Torque
                                                    Wrenches</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/elec-torq-wrench.php">Electric Torque
                                                    Wrenches</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/pneu-torq-wrench.php">Pneumatic Torque
                                                    Wrenches</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/bat-operated-torq-wrench.php">Battery
                                                    Operated Torque Wrenches</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/elec-shear-wrench.php">Electric Shear
                                                    Wrenches</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/manual-torq-wrench-mtw2.php">Manual
                                                    Torque Wrenches</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/tensioning_tools.php">Tensioning Tools</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/hyd-bolt-tensioners.php">Hydraulic Bolt
                                                    Tensioners</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/hyd_equipments.php">Hydraulic Equipments</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/hyd-nut-splitters.php">Hydraulic Nut
                                                    Splitters</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/hyd-flange-spreaders.php">Hydraulic
                                                    Flange Spreaders</a></li>
                                                     <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/hyd-pullers.php">Hydraulic Bearing Pullers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/bolting_accessories.php">Bolting Accessories</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/sockets-accessories.php">Sockets And
                                                    Accessories</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/slug-hammer-wrench.php">Slugging/Hammering
                                                    Wrenches</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/hex-reducer-bush-insert-sockets.php">Hex
                                                    Reducer Bush/Insert Sockets</a></li>
                                            <!---<li><a href="products/sub_products/nut-rotating-sockets.php">Nut Rotating
                                                    Sockets</a></li>--->
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/spring-balancers.php">Spring
                                                    Balancers</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/lifting_tools.php">Lifting Tools</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/hyd-jacks-cylinders.php">Hydraulic
                                                    Jacks/Cylinders</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/pump-accessories.php">Pump And
                                                    Accessories</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/pneumatic-tools.php">Pneumatic Tools</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/pneu-impact-wrench.php">Pneumatic Impact
                                                    Wrenches</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/pneu-grinders.php">Pneumatic
                                                    Grinders</a></li>
                                        </ul>
                                    </li>
                                   <li class="menu-item-has-children">
                                        <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/tube_tools.php">Tube Tools</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/tube-expanders.php">Tube Expanders</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/tube-installation-tools.php">Tube Installation Tools </a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/tube-removal-tools.php">Tube Removal Tools</a></li>
                                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/products/sub_products/tube-cleaning-tools.php">Tube Cleaning Tools  </a></li>
                                        </ul>
                                        <!---<ul class="sub-menu">
                                            <li><a href="products/sub_products/tube-expander-heat-exchange.php">Tube
                                                    Expanders for Heat Exchanges</a></li>
                                            <li><a href="products/sub_products/tube-expanders-boilers.php">Tube
                                                    Expanders for Boilers</a></li>
                                            <li><a href="products/sub_products/tube-rolling-expansion-system.php">Tube
                                                    Rolling/Expansion Systems</a></li>
                                            <li><a href="products/sub_products/tube-pulling-system.php">Tube Pulling
                                                    Systems</a></li>
                                            <li><a href="products/sub_products/tube-installation-tools.php">Tube
                                                    Installation Tools</a></li>
                                            <li><a href="products/sub_products/tube-removal-tools.php">Tube Removal
                                                    Tools</a></li>
                                            <li><a href="products/sub_products/tube-cleaning-machine-accessories.php">Tube
                                                    Cleaning Machine And Accessories</a></li>
                                        </ul>--->
                                    </li>
                                </ul>
                            </li>


                            <li class="menu-item-has-children">
                                <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/projects.php">Projects</a>
                                <ul class="sub-menu">
                                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/project-single.php">Machine Bolting Service</a></li>
                                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/project-single2.php">Tunnel Boring Machine- TBM</a></li>
                                    <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/project-single3.php">Structural Bolting Service</a></li>
                                </ul>
                            </li>
                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/services.php">Services</a></li>
                            <li><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/contact.php">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <a href="#" class="theme-btn-s2 request-quote" onclick="openForm()">Request Quote</a>
                    <div class="form-popup" id="myForm">
                        <form id="myPar"  class="form-container"   >
                        <!-- action="mailto:sales@primetoolsindia.com,info@primetoolsindia.com" -->
                            <h1 style="text-align: center;">Get Quote</h1>
                            <!-- https://<?php echo $_SERVER['SERVER_NAME']; ?>/mailto:asitmandal492@gmail.com -->
                            <input type="text" placeholder="Name*" name="name" required>

                            <input type="text" placeholder="Email*" name="email" required>
                            <input type="text" placeholder="Enquire now..." name="query" required>

                            <button type="submit"  class="btn">Submit</button>
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </form>
                    </div>
                </div><!-- end of container -->
            </nav> <!-- end navigation -->
        </header>

        <script>
    window.addEventListener("load", () => {
    function sendData(url) {
    const XHR = new XMLHttpRequest();
    const FD = new FormData(form);

    XHR.addEventListener("load", (event) => {
      alert("Get Back You Soon");
    });

    XHR.addEventListener("error", (event) => {
      alert('Oops! Something went wrong.');
    });

    XHR.open("POST", url);

    XHR.send(new URLSearchParams(FD));
  }

  const form = document.getElementById("myPar");

  form.addEventListener("submit", (event) => {
    event.preventDefault();
    sendData("https://yourquerys.herokuapp.com/api/send/b4943121-e708-45f0-aca4-5c0a9def8d99");
    sendData("https://yourquerys.herokuapp.com/api/send/3baed36a-e0e7-49e1-8cdf-ffa5baf51c4a");
  });
});

  </script>

        <!-- end of header --