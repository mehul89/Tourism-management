<?php
require "dbConfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];



    $sql = " INSERT INTO `contect_us` ( `fname`, `email`, `description`)
 VALUES ( '$fname', '$email', '$message');";

    $result = mysqli_query($conn, $sql);

    if (
        !$_POST['name'] || empty($_POST['name'])
        || !$_POST['email'] || empty($_POST['email'] || !$_POST['message'] || empty($_POST['message']))
    ) {
        echo "Please complete all form fields!";
    } else {
        echo "Succeas";
        header("location:../../index.php");
    }

    // if (!empty($_POST["submit"])) {

    //     $toemail = $_POST["chapanerimehul7@gmail.com"];
    //     $fname = $_POST["name"];
    //     $email = $_POST["email"];

    //     $mailheanders = "Name:" . $name .
    //         "\r\n Email:" . $email .
    //         "\r\n Message:" . $message . "\r\n";

    //     if (mail($toemail, $name, $mailheanders)) {

    //         $massges = " your information is Received Succesfully .";
    //     } else {

    //         echo "no";
    //     }
    // }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Contect -AdventureoryX

    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/material-kit.min.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/me.css" rel="stylesheet" />

</head>

<body class="contact-us">

    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signin.jpg'); background-size: cover;" loading="lazy"></div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class=" card-header p-0  mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class=" bg-gradient-primary shadow-primary border-radius-lg p-3">
                                    <h3 class="text-white text-right text-primary mb-0">Contact us</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="pb-3">
                                    For further questions, including partnership opportunities, please email hello@creative-tim.com
                                    or contact using our contact form.
                                </p>
                                <form id="contact-form" method="post" action="Contect_us.php" autocomplete="off">
                                    <div class="card-body p-0 my-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>Full Name</label>
                                                    <input type="name" name="name" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 ps-md-2">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control" placeholder="hello@creative-tim.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 mt-md-0 mt-4">
                                            <div class="input-group input-group-static mb-4">
                                                <label>How can we help you?</label>
                                                <textarea name="message" class="form-control" id="message" rows="6" placeholder="Describe your problem in at least 250 characters"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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