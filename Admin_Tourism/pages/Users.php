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






    <?php
    include("sidebar.php"); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <?php
        include("navbar.php"); ?>





        <div class="container-fluid py-5 ">
            <div class="row">
                <h3 class="text-center">All Users</h3>

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
                            <a href='delete_users.php?deleteid=$id' type='button' name='snoEdit' style='margin-left:20px' <i class='fa-sharp fa-solid fa-trash edit' aria-hidden='true'></i></a></td>
                                                 
                                                     
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

</body>

</html>



