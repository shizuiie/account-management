<?php
if(isset($_GET['key'])){
    $key = $_GET['key'];
    include("includes/connect.php");
    // $sql = "DELETE FROM register WHERE key = '$key'";
    $sql = "DELETE FROM register WHERE `register`.`key` = $key";

    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["delete"] = "User Deleted Successfully";
        header("location: index.php");
    }
}
?>