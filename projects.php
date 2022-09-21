<?php
include 'includes/header.php'; ?>

    <!-- Page Title -->
    <title>Projects! - Prime Tools & Equipments</title>

    
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        
        <!-- end of header -->

        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Projects</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Projects</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- recent-project -->
        <section class="section-padding projects-grid-view-section" style="padding-top: 50px; padding-bottom: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="projects-grid-view">
                            <div class="grid">
                                <div class="project-img">
                                    <img src="assets/images/projects/proj1.jpg" alt class="bg-image">
                                </div>
                                <div class="project-info">
                                    <div class="inner-info">
                                        <a href="project-single.php">
                                            <h3>Machine Bolting Service</h3>
                                        </a>
                                        <div class="tags">Allen Bolting</div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="project-img">
                                   <img src="assets/images/projects/proj2.jpg" alt class="bg-image">
                                </div>
                                <div class="project-info">
                                    <div class="inner-info">
                                        <a href="project-single2.php">
                                            <h3>Bolting Service for Tunnel Boring Machine</h3>
                                        </a>
                                        <div class="tags">TBM Machine</div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="project-img">
                                    <img src="assets/images/projects/proj3.jpg" alt class="bg-image">
                                </div>
                                <div class="project-info">
                                    <div class="inner-info">
                                        <a href="project-single3.php">
                                            <h3>Structural Bolting Service</h3>
                                        </a>
                                        <div class="tags">Structural Bolting</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end recent-project -->


        <?php include 'includes/footer.php'; ?>