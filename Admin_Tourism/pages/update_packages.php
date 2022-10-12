<?php

include 'dbConfig.php';

$sql = "SELECT * FROM `tour_packaes` WHERE "


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <title>
        Dashboard-AdventureoryX
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/c1744d4fe5.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

    <!-- adding Jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- adding database cdn -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- adding css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- addin script table data -->
    <style>
        .form-control {
            border: 1px solid #b3a1a1 !important;
            padding: 8px 10px !important;
        }
    </style>

</head>

<body class="g-sidenav-show  bg-gray-200">

    <?php include('sidebar.php'); ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php include('navbar.php'); ?>




        <div class="container">
            <a type="button" href="packages.php" class="btn btn-primary  justify-content-end">Dispalyed Packages</a>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-heard">

                            <h4>Edit & Update Packages</h4>
                        </div>

                        <div class="card-boday">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                    <?php

                                    include("dbConfig.php");

                                    $id = $_GET['updateid'];

                                    $sql = "SELECT * FROM `tour_packaes` WHERE  `id` = '$id'  ";

                                    $result = mysqli_query($conn, $sql);

                                    $arrdata = mysqli_fetch_array($result);

                                    $title =  $arrdata['Tour_Title'];

                                    $Duration  =  $arrdata['Duration'];
                                    $Difficulty =  $arrdata['Difficulty'];
                                    $Age =  $arrdata['Age_Group'];
                                    $Altitude =  $arrdata['Altitude'];
                                    $about =  $arrdata['About'];
                                    $images =  $arrdata['Upload_image'];




                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                        $idupdate = $_GET['updateid'];





                                        $title = $_POST['Tour_Title'];
                                        $duration = $_POST['Duration'];
                                        $difficulty = $_POST['Difficulty'];
                                        $age = $_POST['Age_Group'];
                                        $altitude = $_POST['Altitude'];
                                        $aboute = $_POST['About'];

                                        $image = $_FILES['image']['name'];
                                        $tempname = $_FILES["image"]["tmp_name"];
                                        $folder = "./packages/images/" . $image;


                                        $update = "UPDATE `tour_packaes` SET `Tour_Title`='$title',`Duration`='$duration',`Difficulty`='$difficulty',`Age_Group`='$age',`Altitude`='$altitude',`About`='$aboute' ,`Upload_image`='$images' WHERE id = $idupdate;";



                                        $result = mysqli_query($conn, $update);

                                        if (move_uploaded_file($tempname, $folder)) {

                                            echo '<script>alert("Image uploaded successfully!")</script>';
                                        } else {
                                            echo '<script>alert("Failed to upload image!")</script>';
                                        }


                                        if ($result) {

                                            echo '<script>alert("data uploaded successfully!")</script>';
                                        } else {

                                            echo '<script>alert("Failed to upload image!")</script>';
                                        }
                                    }

                                    ?>



                                    <div class="col-md-6">

                                        <label for="">Tour Title</label>
                                        <input type="text" value="<?php echo $title; ?>" class="form-control" name="Tour_Title">

                                    </div>
                                    <div class="col-md-6">

                                        <label for="">Duration </label>
                                        <input type="text" class="form-control" value="<?php echo $Duration; ?>" name="Duration">

                                    </div>
                                    <div class="col-md-12">

                                        <label for="">Difficulty</label>
                                        <input type="text" class="form-control" value="<?php echo $Difficulty; ?>" name="Difficulty">

                                    </div>

                                    <div class="col-md-12">

                                        <label for="">Age Group</label>
                                        <input type="text" class="form-control" value="<?php echo $Age; ?>" name="Age_Group">

                                    </div>
                                    <div class="col-md-12">

                                        <label for="">Altitude</label>
                                        <input type="text" class="form-control" value="<?php echo $Altitude; ?>" name="Altitude">

                                    </div>
                                    <div class="col-md-12">

                                        <label for="">About</label>
                                        <input type="text" class="form-control" value="<?php echo $about; ?>" name="About">

                                    </div>

                                    <div class="col-md-12">

                                        <label for="">Upload image</label>
                                        <input type="file" class="form-control" value="<?php echo $tempname; ?>" name="image" id="">

                                    </div>


                                    <div class="cal-md-12 ms-1">
                                        <button class="btn btn-primary" name="add_category_btn">Save</button>
                                    </div>


                            </form>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>

</body>

</html>