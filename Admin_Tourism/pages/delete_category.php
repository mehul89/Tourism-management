<?php

include 'dbConfig.php';


if (isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `category` WHERE `category`.`sno`= $id ";

    $result =mysqli_query($conn , $sql);

    if($result){

        echo "Deleted Succesfully";

    }else{
        die(mysqli_error($conn));
    }

header('location:manage_category.php');

}


?>