<?php
include("../Admin_Tourism/pages/dbConfig.php");
?>
<?php


$id = $_REQUEST["id"];
$sql = "Select * from `tour_packaes` WHERE id = $id ";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    $title = $row["Tour_Title"];
    $duration = $row["Duration"];
    $difficulty = $row["Difficulty"];
    $age = $row["Age_Group"];
    $alt = $row["Altitude"];
    $img = $row["Upload_image"];

    $about = $row['About'];
}
?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>

        Home -AdventureoryX

    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/me.css">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
    <linl id="pagestyle" href="../assets/css/me.css" rel="stylesheet"></linl>
</head>

<body>

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



                    <li class="nav-item ms-lg-auto">
                        <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial/soft-ui-design-system" target="_blank">
                            <i class="fa fa-github me-1"></i>
                            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
                        </a>
                    </li>
                    <li class="nav-item my-auto ms-3 ms-lg-0">
                        <a href="../index.php" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Home-page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <header class="position-relative">
        <div class="page-header min-vh-75 position-relative" style="background-image: url('https://images.unsplash.com/photo-1460794418188-1bb7dba2720d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80');" loading="lazy">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto mt-md-n7">
                        <h4 class="text-dark fadeIn1 fadeInBottom">Book Now</h4>
                        <h1 class="text-white fadeIn2 fadeInBottom"><?php echo $title; ?> </h1>
                        <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-8">Feel the thrill of Beach Camping!
                        </p>
                        <button type="submit" class="btn bg-white me-2 fadeIn1 fadeInBottom">Book ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <section>


        <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

            <section class="pt-7 pb-5">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-5xl">room</i>
                                <h5 class="mt-3">Duration</h5>
                                <p class="font-weight-normal"><?php echo $duration; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-5xl">record_voice_over</i>
                                <h5 class="mt-3">Difficulty</h5>
                                <p class="font-weight-normal"><?php echo $difficulty; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-5xl">school</i>
                                <h5 class="mt-3">Age Group</h5>
                                <p class="font-weight-normal"><?php echo $age; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-5xl">savings</i>
                                <h5 class="mt-3">Max Altitude</h5>
                                <p class="font-weight-normal"><?php echo $alt; ?><spam class="ms-1 ">FT</spam>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!-- section booking -->
            <section>
                <div class="row text-center py-3 mt-3">
                    <div class="col-12 mx-auto">

                        <button type="button" class="btn btn-outline-primary mb-0 mx-5">Book ticket</button>
                        <button type="button" class="btn btn-outline-secondary mb-0">inquiry</button>

                    </div>
                </div>
            </section>


            <!-- package detaile -->




            <section class="py-5 ms-11">
                <div class="container">
                    <div class="row">
                        <div class="col-3 position-relative max-width-300 mx-auto">
                            <div class="blur-shadow-image">
                                <img class="w-100 h-100 border-radius-xl position-absolute d-xl-block d-none" src="../Admin_Tourism/pages/packages/images/<?php echo $img; ?>" alt="image">
                            </div>
                            <div class="colored-shadow" style="background-image: url(&quot;https:https://img.invinciblengo.org/iconscout/f:jpeg/w:200/h:0/rt:fit/plain/https://invinciblengo.org/_nuxt/img/4483d70.jpg);"></div>
                        </div>
                        <div class="col-lg-9 ms-auto ">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <div class="p-3 text-start border-radius-lg">
                                        <h2 class="mt-5"><?php echo $title; ?></h2>
                                        <p class="text-dark text-lg mt-3">
                                            <span class="font-weight-bold">The time</span>
                                            <?php echo $about; ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-3 col-md-4 py-3">
                                        <div class="p-3 text-start">
                                            <i class="material-icons text-4xl text-gradient text-info">spa</i>
                                            <h5 class="mt-3">Guide</h5>
                                            <p>When playing, surround yourself with people happier than you.</p>

                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 py-3">
                                        <div class="p-3 text-start">
                                            <i class="material-icons text-4xl text-gradient text-info">school</i>
                                            <h5 class="mt-3">Accommodation</h5>
                                            <p>When playing, surround yourself with people happier than you.</p>

                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 py-3">
                                        <div class="p-3 text-start">
                                            <i class="material-icons text-4xl text-gradient text-info">emoji_people</i>
                                            <h5 class="mt-3">Activities</h5>
                                            <p>When playing, surround yourself with people happier than you.</p>

                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 py-3">
                                        <div class="p-3 text-start">
                                            <i class="material-icons text-4xl text-gradient text-info">emoji_people</i>
                                            <h5 class="mt-3">Food</h5>
                                            <p>When playing, surround yourself with people happier than you.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>












            <section class="pb-6">
                <div class="container">
                    <div class="row text-start">
                        <div class="col-lg-6">
                            <h3 class="text-dark mt-4 mb-0">Our latest blogs</h3>
                            <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn. That’s what I do. That’s what I’m here for.</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 mb-lg-0 mb-4">

                            <a href="javascript:;">
                                <div class="card card-background">
                                    <div class="full-background" style="background-image: url('../assets/img/examples/blog1.jpg')" loading="lazy"></div>
                                    <div class="card-body pt-12">
                                        <h4 class="text-white">Search and Discovery</h4>
                                        <p class="text-white">Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards we tend to offer the best product on market.</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="col-lg-4 mb-lg-0 mb-4">

                            <a href="javascript:;">
                                <div class="card card-background">
                                    <div class="full-background" style="background-image: url('../assets/img/examples/blog2.jpg')" loading="lazy"></div>
                                    <div class="card-body pt-12">
                                        <h4 class="text-white">Last visits in US</h4>
                                        <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. Status is an old zero-sum game. Those attacking wealth creation are often just seeking status.</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="col-lg-4">

                            <a href="javascript:;">
                                <div class="card card-background">
                                    <div class="full-background" style="background-image: url('../assets/img/examples/blog3.jpg')" loading="lazy"></div>
                                    <div class="card-body pt-12">
                                        <h4 class="text-white">Grow in a beautiful area</h4>
                                        <p class="text-white">Free people make free choices. Free choices mean you get unequal outcomes. You can have freedom, or you can have equal outcomes. You can’t have both.</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</body>