<?php
require("dbConfig.php");
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
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


</head>


<body class="g-sidenav-show  bg-gray-100">

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="
                index.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="desc">Email</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>






    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="../index.php">
                <!-- <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
                <span class="ms-4 font-weight-bold fs-5 text text-white">AdventureoryX
                </span>
            </a>
        </div>


        <hr class="horizontal light mt-0 mb-2">

        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white Active " href="../index.php">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>

                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active  " href="Users.php">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <!-- <i class="material-icons opacity-10"></i> -->
                        </div>

                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white " href="./tables.html">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-duotone fa-map-location-dot"></i>
                        </div>

                        <span class="nav-link-text ms-1">Packages</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white " href="./billing.html">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        </div>

                        <span class="nav-link-text ms-1">Inquiry </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./notifications.html">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        </div>

                        <span class="nav-link-text ms-1">Rate & Reviews</span>
                    </a>
                </li>


                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="./profile.html">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>

                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/sign-up.php">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>

                        <span class="nav-link-text ms-1">Sign Up</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/logout.php">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>

                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="main-content border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar"></div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
            </div>
            </div>
        </nav>

        <!-- End Navbar -->

        <div class="container-fluid py-5 ">
            <div class="row">

                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sql = "Select * from  `contect_us` ";

                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['sno'];
                            $name = $row['fname'];
                            $email = $row['email'];
                            $desc = $row['description'];
                            $date = $row['dt'];


                            echo "<tr>
                            <td>$id</td>
                            <td>$name</td>
                            <td>$email </td>
                            <td>$desc </td>
                            <td>$date </td>   
                            <td><a type='button' name='delete'   <i class='fa-solid fa-pen-to-square delete' aria-hidden='true'></i></a>
                            <a type='button' name='snoEdit' style='margin-left:20px' <i class='fa-sharp fa-solid fa-trash edit' aria-hidden='true'></i></a></td>
                                                 
                                                     
                            </tr>";
                        }





                        ?>
                    </tbody>
                </table>

                <script>
                    edits = document.getElementsByClassName('edit');

                    Array.from(edits).forEach((element) => {
                        element.addEventListener("click", (e) => {
                            console.log("edit ");
                            tr = e.target.parentNode.parentNode;
                            title = tr.getElementsByTagName("td")[0].innerText;
                            description = tr.getElementsByTagName("td")[1].innerText;
                            console.log(title, description);
                            titleEdit.value = title;
                            descriptionEdit.value = description;
                            snoEdit.value = e.target.id;    
                            console.log(e.target.id)
                            $('#editModal').modal('toggle');
                        })
                    })

                    deletes = document.getElementsByClassName('delete');
                    Array.from(deletes).forEach((element) => {
                        element.addEventListener("click", (e) => {
                            console.log("edit ");
                            sno = e.target.id.substr(1);
                            if (confirm("Are you sure you want to delete this note!")) {
                                console.log("yes");
                                window.location = `index.php?delete=${sno}`;
                            } else {
                                console.log("no");
                            }
                        })
                    })
                </script>

            </div>
        </div>

</body>

</html>


<!-- delete qury -->

<?php

$insert = false;
$update = false;
$delete = false;

if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `contect_us` WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['snoEdit'])) {

        // Update the record
        $sno = $_POST["sno"];
        $name = $_POST["fname"];
        $email = $_POST["email"];
        $desc = $_POST["description"];
        $email = $_POST["dt"];

        // Sql query to be executed


        $sql = "UPDATE `contect_us` SET `fname` = '$name' , `email` = '$email' , `description` = ='$desc' WHERE `contect_us`.`sno` = $sno";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            $update = true;
        } else {
            echo "We could not update the record successfully";
        }
    } else {

        $name = $_POST["fname"];
        $email = $_POST["email"];
        $desc = $_POST["description"];

        // Sql query to be executed

        $sql = "INSERT INTO `contect_us` (`fname`, `email` , `description`) VALUES ('$name', '$email', $desc)";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            $insert = true;
        } else {
            echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
        }
    }
}

?>