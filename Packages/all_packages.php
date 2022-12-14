<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>

        Packages-AdventureoryX

    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
    <style>
        .form-control {
            border: 1px solid #b3a1a1 !important;
            padding: 8px 10px !important;
        }
    </style>
</head>

<body class="blog-author bg-gray-200">
    <!-- Navbar Transparent -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
        <div class="container">
            <a class="navbar-brand  text-white " href="https://demos.creative-tim.com/material-kit/presentation" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                AdventureoryX
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">



                    <!-- <li class="nav-item ms-lg-auto">
                        <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial/soft-ui-design-system" target="_blank">
                            <i class="fa fa-github me-1"></i>
                            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
                        </a>
                    </li> -->
                    <li class="nav-item my-auto ms-3 ms-lg-0">
                        <a href="../index.php" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Home-page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
    <header>
        <div class="page-header min-height-400" style="background-image: url('https://img.invinciblengo.org/iconscout/f:jpeg/w:2000/h:0/rt:fit/plain/https://invinciblengo.org/_nuxt/img/13eaaff.jpg');" loading="lazy">
            <span class="mask bg-gradient-dark opacity-0"></span>
        </div>
    </header>
    <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <section class="p-5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <h3 class="mb-5">All Packages</h3>
                    </div>
                    <!-- dropdown -->

                    <div class="container col-md-6">
                        <div class="row">
                            
                        </div>
                    </div>


                    <!-- mandatory scripts -->
                    <script src="../assets/js/plugins/choices.min.js"></script>
                    <script>
                        if (document.getElementById("choices-button")) {
                            var element = document.getElementById("choices-button");
                            const example = new Choices(element, {});
                        }
                    </script>
                </div>

                <div class="row">
                    <?php

                    include("../Admin_Tourism/pages/dbConfig.php");
                    $sql = "Select * from `tour_packaes`";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {

                        $images = $row['Upload_image'];
                        $title = $row['Tour_Title'];
                        $sub = $row['sub_title'];
                        $id = $row['id'];


                    ?>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-plain">
                                <div class="card-header p-0 position-relative">
                                    <a class="d-block blur-shadow-image" href="../packages/display_package.php?id=<?php echo $id; ?>">
                                        <img src="../Admin_Tourism/pages/packages/images/<?php echo $images; ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                                    </a>
                                </div>
                                <div class="card-body px-0">
                                    <h5>
                                        <a href="javascript:;" class="text-dark font-weight-bold"><?php echo $title; ?></a>
                                    </h5>
                                    <p>
                                        <?php echo $sub; ?>
                                    </p>
                                    <a href="javascript:;" class="text-info text-sm icon-move-right">Book now
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                </div>
            </div>
        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>

    <!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->
    
    <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="../assets/js/plugins/parallax.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>