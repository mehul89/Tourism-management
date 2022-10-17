<?php

include("dbConfig.php");
?>


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
        bookings -AdventureoryX
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

<body>
    <?php include("sidebar.php"); ?>
    <?php include("navbar.php"); ?>

    <div class="container-fluid py-5 ">
        <div class="row">
            <h3 class="text-center">All bookings</h3>

            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Person</th>
                        <th scope="col"></th>


                        <th scope="col">Date & Time</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $sql = "Select * from  `booking` ";

                    $result = mysqli_query($conn, $sql);

                    $d = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $myid = $d++;

                        $id = $row['id']; 

                        $name = $row['fname'];
                        $email = $row['email'];
                        $person = $row['person'];
                        $date = $row['curent_dt'];


                        echo "<tr>
                            <td>$myid</td>
                            <td>$name</td>
                            <td>$email </td>
                            <td>$person </td>
                            <td>$date </td>   
                            <td>                            
                            <a href='delete_booking.php?deleteid=$id' type='button' name='snoEdit' style='margin-left:20px' <i class='fa-sharp fa-solid fa-trash edit' aria-hidden='true'></i></a></td>
                                                 
                                                     
                            </tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>