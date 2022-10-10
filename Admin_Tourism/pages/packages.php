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
            width: 200px;
        }
    </style>

</head>


<?php include('sidebar.php'); ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include('navbar.php'); ?>

    <div class="container-fluid py-5 ">

        <a type="button" href="action_packages.php" class="btn btn-primary">Add Packages</a>
        <div class="row">

            <h3 class="text-center">Add Packages</h3>





            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">title</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Difficulty</th>
                        <th scope="col">Age</th>
                        <th scope="col">Altitude</th>
                        <th scope="col">About</th>
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

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $title = $row['Tour_Title'];
                        $Duration  = $row['Duration'];
                        $Difficulty = $row['Difficulty'];
                        $Age = $row['Age_Group'];
                        $Altitude = $row['Altitude'];
                        $about = $row['About'];
                        $images = $row['Upload_image'];

                        // $date = $row['dt'];


                        echo "<tr>
                            <td>$id</td>
                            <td>$title</td>
                            <td>$Duration </td>
                            <td>$Difficulty </td>
                            <td>$Age </td>
                            <td>$Altitude </td>
                            <td>$about </td>
                            <td ><img src='./packages/images/$images'><td>
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
</main>