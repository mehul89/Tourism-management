<?php
include("./Admin_Tourism/pages/Visitor.php");
?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>

    Home -AdventureoryX

  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/me.css">

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <linl id="pagestyle" href="./assets/css/me.css" rel="stylesheet"></linl>

  <style>
    #list {
      scrollbar-width: normal;
      scrollbar-color: #777 #555;
    }

    #list::-webkit-scrollbar {
      width: 4vw;
    }

    #list::-webkit-scrollbar-thumb {
      background-color: #7775;
    }

  </style>
</head>

<body class="index-page bg-gray-200">


  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="index.php" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
              AdventureoryX
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">




                <!-- <li class="nav-item ms-lg-auto">
                  <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial/material-kit" target="_blank">
                    <i class="fa fa-github me-1"></i>
                    <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
                  </a>
                </li> -->
                <li class="nav-item my-auto ms-3 ms-lg-0">

                  <a href="./Admin_Tourism/pages/Contect_us.php" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Contect us</a>

                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>


  <header class="header-2">

    <div class="page-header min-vh-80" style="background-image: url(&#39;https://images.unsplash.com/photo-1520769945061-0a448c463865?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80&#39;);" loading="lazy">

      <span class=" bg-gradient-primary opacity-10"></span>
      <div class="container min-vh-25 text-light home-sec">
        <div class="row">
          <div class="col-lg-15 text-left mx-auto">
            <span class="h1  me-text ">Experience</span>
            <div class="text-6 me-siz"> <span class="typing"></span></div>

            <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>





            <p class="lead text-white mt-3">Organized group trips & tours
              round the world </p>
            <a href="../Tourism/Packages/all_packages.php" target="_blanck" class="btn btn-white">Explore</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <section class="pt-3 pb-4" id="count-stats">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 mx-auto py-3">
            <div class="row">
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"><span id="state1" countTo="10000">0</span>+</h1>
                  <h5 class="mt-3">Participants</h5>
                  <p class="text-sm font-weight-normal">Participants in India's Largest Trekking Organization</p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"> <span id="state2" countTo="500">0</span>+</h1>
                  <h5 class="mt-3">Volunteers</h5>
                  <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity
                  </p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"><span id="state3" countTo="45">0</span>+</h1>
                  <h5 class="mt-3">Treks</h5>
                  <!-- <p class="text-sm font-weight-normal">
                    </p> -->
                  <hr class="vertical dark">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- heighlighted Events -->

    <section>
      <div class="container  bg-light rounded-3 ">


        <div class="py-6">
          <h2 class="h3 text-primary mt-0 mb-3 d-flex justify-content-center  ">Highlighted Events</h2>
          <p class="text-secondary mb-4 d-flex justify-content-center ">
            Recommended camps by our Instructors
          </p>

          <ul class=" list-group-numbered overflow-scroll container d-flex  " id="list" style="overflow-y: hidden !important;">
            <?php

            include("./Admin_Tourism/pages/dbConfig.php");
            $sql = "Select * from `tour_packaes` WHERE unique_id = '1' ";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {

              $images = $row['Upload_image'];
              $title = $row['Tour_Title'];
              $sub = $row['sub_title'];
              $id = $row['id'];

            ?>
              <li class=" px-4 event_5esi1 mr-5"><a href="./packages/display_package.php?id=<?php echo $id; ?>" target="_blank">
                  <img loading="lazy" src="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" srcset="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" class="rounded-3"></a>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>

    </section>

    <!-- Diwali Events -->

    <section>
      <div class="container bg-light ">
        <div class="container">
          <div class="py-3">
            <h2 class="h3 text-primary mt-0 mb-3 d-flex justify-content-center ">Diwali Events</h2>
            <p class="text-secondary mb-4 d-flex justify-content-center"></p>
            <div class="overflow-scroll container d-flex " id="list" style="overflow-y: hidden !important;">

              <?php

              include("./Admin_Tourism/pages/dbConfig.php");
              $sql = "Select * from `tour_packaes` WHERE unique_id = '2' ";

              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {

                $images = $row['Upload_image'];
                $title = $row['Tour_Title'];
                $sub = $row['sub_title'];
                $id = $row['id'];

              ?>
                <div class=" px-4 event_5esi1 mr-5"><a href="./packages/display_package.php?id=<?php echo $id; ?>" target="_blank"><img loading="lazy" src="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" srcset="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" class="rounded-3"></a></div>

              <?php
              }
              ?>
              </a>
            </div>

          </div>
        </div>
      </div>



    </section>

    <!-- weekend section  -->
    <section>
      <div class="container bg-light ">
        <div class="container">
          <div class="py-3">
            <h2 class="h3 text-primary mt-0 mb-3 d-flex justify-content-center ">weekend Events</h2>
            <p class="text-secondary mb-4 d-flex justify-content-center"></p>
            <div class="overflow-scroll container d-flex " id="list" style="overflow-y: hidden !important;">

              <?php

              include("./Admin_Tourism/pages/dbConfig.php");
              $sql = "Select * from `tour_packaes` WHERE unique_id = '3' ";

              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {

                $images = $row['Upload_image'];
                $title = $row['Tour_Title'];
                $sub = $row['sub_title'];
                $id = $row['id'];

              ?>
                <div class=" px-4 event_5esi1 mr-5"><a href="./packages/display_package.php?id=<?php echo $id; ?> " target="_blank"><img loading="lazy" src="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" srcset="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" class="rounded-3"></a></div>

              <?php
              }
              ?>
              </a>
            </div>

          </div>
        </div>
      </div>



      <!-- snow Events -->

      <section>
        <div class="container bg-light ">
          <div class="container">
            <div class="py-6">
              <h2 class="h3 text-primary mt-0 mb-3 d-flex justify-content-center ">Snow Events</h2>
              <p class="text-secondary mb-4 d-flex justify-content-center"></p>
              <div class="overflow-scroll container d-flex " id="list" style="overflow-y: hidden !important;">

                <?php

                include("./Admin_Tourism/pages/dbConfig.php");
                $sql = "Select * from `tour_packaes` WHERE unique_id = '4' ";

                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                  $images = $row['Upload_image'];
                  $title = $row['Tour_Title'];
                  $sub = $row['sub_title'];
                  $id = $row['id'];

                ?>
                  <div class=" px-4 event_5esi1 mr-5"><a href="./packages/display_package.php?id=<?php echo $id; ?>" target="_blank"><img loading="lazy" src="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" srcset="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" class="rounded-3"></a></div>

                <?php
                }
                ?>
                </a>
              </div>

            </div>
          </div>
        </div>
  </div>



  <!-- All Events -->

  <section>
    <div class="container bg-light ">
      <div class="container">
        <div class="py-6">
          <a href="./Packages/all_packages.php" target="_blank" type="button" class="btn btn-sm  bg-gradient-primary h5 text-whate mb-1">
            All Events
          </a>
          <p class="text-secondary mb-4"></p>
          <div class="overflow-scroll container d-flex " id="list" style="overflow-y: hidden !important;">

            <?php

            include("./Admin_Tourism/pages/dbConfig.php");
            $sql = "Select * from `tour_packaes`  ";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {

              $images = $row['Upload_image'];
              $title = $row['Tour_Title'];
              $sub = $row['sub_title'];
              $id = $row['id'];

            ?>
              <div class=" px-4 event_5esi1 mr-5"><a href="./packages/display_package.php?id=<?php echo $id; ?>" target="_blank"><img loading="lazy" src="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" srcset="./Admin_Tourism/pages/packages/images/<?php echo $images; ?>" class="rounded-3"></a></div>

            <?php
            }
            ?>
            </a>


          </div>
        </div>
      </div>


    </div>




















    <section class="py-7">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center">
            <h2 class="mb-0">Trusted by over</h2>
            <h2 class="text-gradient text-primary mb-3">1,679,477+ web developers</h2>
            <p class="lead">Many Fortune 500 companies, startups, universities and governmental institutions love
              Creative Tim's products. </p>
          </div>
        </div>
        <div class="row mt-6">
          <div class="col-lg-4 col-md-8">
            <div class="card card-plain">
              <div class="card-body">
                <div class="author">
                  <div class="name">
                    <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                    <div class="stats">
                      <i class="far fa-clock"></i> 1 day ago
                    </div>
                  </div>
                </div>
                <p class="mt-4">"This is an excellent product, the documentation is excellent and helped me get things
                  done more efficiently."</p>
                <div class="rating mt-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 ms-md-auto">
            <div class="card bg-gradient-primary">
              <div class="card-body">
                <div class="author align-items-center">
                  <div class="name">
                    <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                    <div class="stats text-white">
                      <i class="far fa-clock"></i> 1 week ago
                    </div>
                  </div>
                </div>
                <p class="mt-4 text-white">"I found solution to all my design needs from Creative Tim. I use them as a
                  freelancer in my hobby projects for fun! And its really affordable, very humble guys !!!"</p>
                <div class="rating mt-3">
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8">
            <div class="card card-plain">
              <div class="card-body">
                <div class="author">
                  <div class="name">
                    <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                    <div class="stats">
                      <i class="far fa-clock"></i> 3 weeks ago
                    </div>
                  </div>
                </div>
                <p class="mt-4">"Great product. Helped me cut the time to set up a site. I used the components within
                  instead of starting from scratch. I highly recommend for developers who want to spend more time on the
                  backend!."</p>
                <div class="rating mt-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>

        </div>
        <hr class="horizontal dark my-5">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-6 ms-auto">
            <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-apple.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-facebook.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-nasa.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
            <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-vodafone.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
            <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-digitalocean.svg" alt="Logo">
          </div>
        </div>
      </div>
    </section>


    <section class="py-sm-7" id="download-soft-ui">
      <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
        <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
        <div class="container py-7 postion-relative z-index-2 position-relative">
          <div class="row">
            <div class="col-md-7 mx-auto text-center">
              <h3 class="text-white mb-0">Do you love this awesome</h3>
              <h3 class="text-white">UI Kit for Bootstrap 5?</h3>
              <p class="text-white mb-5">Cause if you do, it can be yours for FREE. Hit the button below to navigate to
                Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap
                project a new look!</p>
              <a href="" class="btn btn-primary btn-lg mb-3 mb-sm-0">Download HTML</a>
            </div>
          </div>
        </div>
      </div>

    </section>
    </div>




    <footer class="footer pt-5 mt-5">
      <div class="container">
        <div class=" row">
          <div class="col-md-3 mb-4 ms-auto">
            <div>
              <a href="index.php">
                <img src="./assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
              </a>
              <h6 class="font-weight-bolder mb-4">Material Kit 2</h6>
            </div>
            <div>
              <ul class="d-flex flex-row ms-n3 nav">
                <li class="nav-item">
                  <a class="nav-link pe-1" href="" target="_blank">
                    <i class="fab fa-facebook text-lg opacity-8"></i>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link pe-1" href="" target="_blank">
                    <i class="fab fa-twitter text-lg opacity-8"></i>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link pe-1" href="" target="_blank">
                    <i class="fab fa-dribbble text-lg opacity-8"></i>
                  </a>
                </li>


                <li class="nav-item">
                  <a class="nav-link pe-1" href="" target="_blank">
                    <i class="fab fa-github text-lg opacity-8"></i>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link pe-1" href="" target="_blank">
                    <i class="fab fa-youtube text-lg opacity-8"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>



          <div class="col-md-2 col-sm-6 col-6 mb-4">
            <div>
              <h6 class="text-sm">Company</h6>
              <ul class="flex-column ms-n3 nav">
                <li class="nav-item">
                  <a class="nav-link" href="" target="_blank">
                    About Us
                  </a>
                </li>

               

                

                
              </ul>
            </div>
          </div>

          

          <div class="col-md-2 col-sm-6 col-6 mb-4">
            <div>
              <h6 class="text-sm">Help & Support</h6>
              <ul class="flex-column ms-n3 nav">
                <li class="nav-item">
                  <a class="nav-link" href="./Admin_Tourism/pages/Contect_us.php" target="_blank">
                    Contact Us
                  </a>
                </li>

                

                

                

              </ul>
            </div>
          </div>

          <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
            <div>
              <h6 class="text-sm">Legal</h6>
              <ul class="flex-column ms-n3 nav">
                <li class="nav-item">
                  <a class="nav-link" href="" target="_blank">
                    Terms & Conditions
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="" target="_blank">
                    Privacy Policy
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="" target="_blank">
                    Licenses (EULA)
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-12">
            <div class="text-center">
              <p class="text-dark my-4 text-sm font-weight-normal">
                All rights reserved. Copyright ??
                <script>
                  document.write(new Date().getFullYear())
                </script>Created by <a href="https://mehul-chapaneri-60605.web.app/" target="_blank">Mehul Chapaneri</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>





















    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>




    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="./assets/js/plugins/countup.min.js"></script>





    <script src="./assets/js/plugins/choices.min.js"></script>



    <script src="./assets/js/plugins/prism.min.js"></script>
    <script src="./assets/js/plugins/highlight.min.js"></script>



    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="./assets/js/plugins/rellax.min.js"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="./assets/js/plugins/tilt.min.js"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="./assets/js/plugins/choices.min.js"></script>


    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="./assets/js/plugins/parallax.min.js"></script>











    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="./assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


    <script type="text/javascript">
      if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
          countUp.start();
        } else {
          console.error(countUp.error);
        }
      }
      if (document.getElementById('state2')) {
        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
          countUp1.start();
        } else {
          console.error(countUp1.error);
        }
      }
      if (document.getElementById('state3')) {
        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
          countUp2.start();
        } else {
          console.error(countUp2.error);
        };
      }
    </script>

    <!-- typing latter in js -->

    <script src="animate typing latter.js"></script>
    </div>
</body>

</html>