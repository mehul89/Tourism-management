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

    <style>
        img {
            width: 150px;
            height: 150px;
        }
    </style>

</head>


<?php include('sidebar.php'); ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include('navbar.php'); ?>

    <!-- Data modal -->


    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="" method="POST" enctype="multipart/form-data" method="POST" id="ModalForm">
                        {{csrf_field()}}
                        <input type="hidden" id="editId" value="">
                        <div class="form-group">
                            <label for="editName">First Name</label>
                            <input type="text" name="name" class="form-control" id="editName" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="editSurname">Surname</label>
                            <input type="text" name="surname" class="form-control" id="editSurname" placeholder="Surname" required>
                        </div>
                        <div class="form-group">
                            <label for="editEmail">E-mail address</label>
                            <input type="email" name="email" class="form-control" id="editEmail" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="editPhone">Mobile Phone</label>
                            <input type="tel" name="mobilePhone" class="form-control" id="editPhone" placeholder="+44" required>
                        </div>
                        <div class="form-group">
                            <label for="editLevel">Level</label>
                            <select class="form-control" id="editLevel" name="level">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-secondary" data-dismiss="modal">Close</a>
                            <button type="button" id="saveModalButton" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 ">

        <a type="button" href="add_packages.php" class="btn btn-primary">Add Packages</a>
        <div class="row">

            <h3 class="text-center">All Packages</h3>





            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">title</th>
                        <th scope="col">Subtitle</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Difficulty</th>
                        <th scope="col">Age</th>
                        <th scope="col">Altitude</th>
                        <th scope="col">About</th>
                        <th scope="col">Category</th>
                        <th scope="col">images</th>


                        <th scope="col"></th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    include("dbConfig.php");

                    $sql = "Select * from `tour_packaes` ";

                    $result = mysqli_query($conn, $sql);

                    $myid = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $myid++;
                        $id = $row['id'];
                        $title = $row['Tour_Title'];
                        $sub = $row['sub_title'];
                        $Duration  = $row['Duration'];
                        $Difficulty = $row['Difficulty'];
                        $Age = $row['Age_Group'];
                        $Altitude = $row['Altitude'];
                        $about = $row['About'];
                        $images = $row['Upload_image'];
                        // $ukey = get_cetegory( $row['unique_id'] );
                        $ukey = $row['unique_id'];

                        // $date = $row['dt'];


                        echo "<tr>
                            <td>$myid</td>
                            <td>$title</td>
                            <td>$sub</td>
                            <td>$Duration </td>
                            <td>$Difficulty </td>
                            <td>$Age </td>
                            <td>$Altitude </td>
                            <td>$about </td>
                            <td>$ukey </td>
                            <td ><img src='./packages/images/$images'><td>
                            <td>
                            <a href='update_packages.php?updateid=$id' type='button' name='snoEdit'   <i class='fa-solid fa-pen-to-square ' aria-hidden='true'></i>  </a>
                            <a href='delete_packages.php?deleteid=$id' type='button' name='delete' style='margin-left:20px' <i class='fa-sharp fa-solid fa-trash ' aria-hidden='true'></i></a>
                            </td>
                            
           
                             </tr>";
                    }
                    ?>
                </tbody>
            </table>


        </div>
    </div>
</main>


</html>