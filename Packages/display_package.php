<?php

include('../Admin_Tourism/pages/dbConfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $person = $_POST['personlist'];

    $sql = "INSERT INTO `booking`(`fname`, `email`, `person`) VALUES ('$name','$email','$person')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>alert("data uploaded successfully!")</script>';
    } else {

        echo '<script>alert("Failed to upload data!")</script>';
    }
}
?>



<?php
include("../Admin_Tourism/pages/dbConfig.php");

$id = $_REQUEST["id"];
$sql = "Select * from `tour_packaes` WHERE id = $id ";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    $title = $row["Tour_Title"];
    $sub = $row["sub_title"];
    $duration = $row["Duration"];
    $difficulty = $row["Difficulty"];
    $age = $row["Age_Group"];
    $alt = $row["Altitude"];
    $img = $row["Upload_image"];
    $bgimg = $row["bg_img"];
    $price = $row["price"];


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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/me.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"  />    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
    <linl id="pagestyle" href="../assets/css/me.css" rel="stylesheet"></linl>
    <style>
        .modal-backdrop {
            display: none;
        }

        .modal {
            z-index: 1;
        }
    </style>
</head>

<body>

    <!-- Navbar Transparent -->
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
        <div class="container">
            <a class="navbar-brand  text-white " href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
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
                        <a class="nav-link nav-link-icon me-2" href="" target="_blank">
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
        <div class="page-header min-vh-75 position-relative" style="background-image: url(../Admin_Tourism/pages/packages/images/<?php echo $bgimg; ?>);" loading="lazy">
            <span class="mask bg-gradient-dark opacity-2"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto mt-md-n7">
                        <h1 class="text-white fadeIn2 fadeInBottom"><?php echo $title; ?> </h1>
                        <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-8"><?php echo $sub; ?>
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
                            <i class="fa-regular fa-calendar-day"></i>
                                <!-- <i class="material-icons text-gradient text-primary text-5xl">room</i> -->
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

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-0 me-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Book ticket
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-login" role="document">
                                <div class="modal-content">
                                    <div class="card card-signup card-plain">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="post" class="text-start">
                                                <div class="input-group input-group-outline my-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label"> Full Name</label>
                                                    <input type="text" name="fname" class="form-control">
                                                </div>

                                                <label>Choose a Person:</label>
                                                <select id="person" name="personlist">
                                                    <option v>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>

                                                <label>Price per person</label>
                                                <span class='font-weight-bold'>
                                                    <?php echo $price; ?>

                                                </span>








                                                <div class="text-center">
                                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Book</button>
                                                </div>

                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>



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
                                <img class="w-100 h-100 border-radius-xl position-absolute d-xl-block d-none" src="../Admin_Tourism/pages/packages/images/<?php echo $img; ?>" loading="lazy" alt="image">
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
                                    <div class="col-xl-3 col-md-4 py-6">
                                        <div class="p-3 text-start">
                                            <i class="material-icons text-4xl text-gradient text-info">spa</i>
                                            <h5 class="mt-3">Guide</h5>

                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 py-6">
                                        <div class="p-3 text-start">
                                            <i class="material-icons text-4xl text-gradient text-info">school</i>
                                            <h5 class="mt-3">Accommodation</h5>

                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 py-6">
                                        <div class="p-3 text-start">
                                            <i class="material-icons text-4xl text-gradient text-info">emoji_people</i>
                                            <h5 class="mt-3">Activities</h5>

                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 py-6">
                                        <div class="p-3 text-start">
                                            <i class="material-icons text-4xl text-gradient text-info">emoji_people</i>
                                            <h5 class="mt-3">Food</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>












            <!-- <section class="pb-6">
                <div class="container">
                    <div class="row text-start">
                        <div class="col-lg-6">
                            <h3 class="text-dark mt-4 mb-0">Similar Packages </h3>
                            <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn. That’s what I do. That’s what I’m here for.</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 mb-lg-0 mb-4">

                            <a href="javascript:;">
                                <div class="card card-background">
                                    <?php
                                    include("../Admin_Tourism/pages/dbConfig.php");

                                    $sql = "Select * from `tour_packaes`";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        $images = $row['Upload_image'];
                                        $title = $row['Tour_Title'];
                                        $sub = $row['sub_title'];



                                    ?>
                                        <div class="full-background" style="background-image: url('../Admin_Tourism/pages/packages/images/<?php echo $images; ?>')" loading="lazy"></div>
                                        <div class="card-body pt-12">
                                            <h4 class="text-white"><?php echo $title; ?></h4>
                                            <p class="text-white"><?php echo $sub; ?></p>
                                        </div>
                                </div>
                            </a>
                        <?php
                                    }
                        ?>



                        

                    </div>
            </section> -->
        </div>
    </section>
</body>