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

<body>

    <?php include('sidebar.php'); ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php include('navbar.php'); ?>

        <div class="container-fluid py-5 ">

            <a type="button" href="add_category.php" class="btn btn-primary">Add Categorys</a>
            <div class="row">

                <h3 class="text-center">Manage Category</h3>


                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"> Sno</th>
                            <th scope="col">category id</th>
                            <th scope="col">Categorys Name</th>
                            <th scope="col">Categorys Description</th>
                            <th scope="col">Created</th>
                            <th scope="col"></th>

                            <th scope="col">Action</th>




                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        include("dbConfig.php");

                        $sql = "Select * from `category` ";

                        $result = mysqli_query($conn, $sql);

                        $myid = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $myid++;
                            $Sno = $row['sno'];

                            $cid = $row['category_id'];
                            $cname = $row['cname'];
                            $cdescription  = $row['cdescription'];
                            $created = $row['created'];

                            echo "<tr>
                            <td>$myid</td>
                            <td>$cid</td>
                            <td>$cname</td>
                            <td>$cdescription</td>
                            <td>$created</td>
                            <td>
                            <a href='edit_category.php?editid=$Sno' type='button' name='snoEdit'   <i class='fa-solid fa-pen-to-square ' aria-hidden='true'></i>  </a>
                            <a href='delete_category.php?deleteid=$Sno' name='delete'  <i class='fa-sharp fa-solid fa-trash ' aria-hidden='true'></i></a>
                            </td>
                            <td>
                            
                        </tr>";
                        }
                        ?>

                    </tbody>
                </table>

    </main>
</body>

</html>