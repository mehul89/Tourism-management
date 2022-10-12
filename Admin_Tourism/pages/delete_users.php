
<?php



include 'dbConfig.php';


if (isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `contect_us` WHERE `contect_us`.`sno`= $id ";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        echo "Deleted Succesfully";
    } else {
        die(mysqli_error($conn));
    }

    header('location:users.php');
}


?>
