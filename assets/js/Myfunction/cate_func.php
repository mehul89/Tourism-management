<?php




function get_packaes(){
    include("dbConfig.php");

    $sql = "Select * from `tour_packaes` ";
    $result = mysqli_query($conn, $sql);

    return $result;
}
function get_cetegory(){
    // $sql = "Select * from `tour_packaes` ";
    // $result = mysqli_query($conn, $sql);

    // return $result;
}
