<?php



include 'dbConfig.php';


if (isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `booking` WHERE  `booking`.`id`= $id ";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        echo "Deleted Succesfully";
    } else {
        die(mysqli_error($conn));
    }

}


?>