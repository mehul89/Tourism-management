<?php

include("dbconfig.php");

// adding New visitore 

$visitore_ip = $_SERVER['REMOTE_ADDR'];

// cheking if visitore is unique

$qury = "SELECT * FROM  visitor WHERE ip_address = '$visitore_ip'";
$result = mysqli_query($conn, $qury);

// cheking query error

if (!$result) {
    die("Retriving Qury erro <br> " . $query);
}
$totle_visitors =  mysqli_num_rows($result);


if ($totle_visitors < 1) {

    $qury = "INSERT INTO visitor (ip_address) VALUE ('$visitore_ip')";
   $result = $mysqli_query($conn, $qury);
}




// retriving existing visitor

$qury = "SELECT * FROM  visitor";
$mysqli_query($conn, $qury);

// cheking query error

if (!$result) {
    die("Retriving Qury erro <br> " . $query);
}
$totle_visitors =  mysqli_num_rows($result);





?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php
    echo "<h3> Totle :" . $totle_visitors . "</h3>";
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>