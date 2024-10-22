<?php
session_start();
include("includes/connect.php");
include 'includes/header.php';

if (isset($_POST["submit"])) {
    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $sid = $_POST["sid"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $errors = array();

    if(!preg_match('/^[A-Z][0-9]{2}-[0-9]{4}$/', $sid)){
        array_push($errors, "Student ID must be in the format AXX-XXXX");
    }
    if(!preg_match('/^(0[1-9]|1[0-2])-(0[1-9]|1[0-9]|2[0-9]|3[0-1])-(19|20)\d\d$/', $password)){
        array_push($errors, "Password must be in the format MM-DD-YYYY");
    }

    // Check if email already exists
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if($rowCount>0){
        array_push($errors, "Email address is already in use.");
    }

    // Check if student ID already exists
    $sql = "SELECT * FROM register WHERE sid = '$sid'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if($rowCount>0){
        array_push($errors, "Student ID is already in use.");
    }

    if (count($errors)>0){
        $_SESSION['errors'] = $errors;
        header("location: create.php");
        exit;
    }else{
        $sql = "INSERT INTO register(sid, lname, fname, email, password) VALUES ( ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if($prepareStmt){
            mysqli_stmt_bind_param($stmt,"sssss",$sid, $lname, $fname, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            $_SESSION['success'] = "You registered successfully!";
            header("location: index.php");
            exit;
        }else{
            die("Something went wrong.");
        }
    }
}

if  (isset($_POST["edit"])){
    $fname = mysqli_real_escape_string($conn, $_POST ["fname"]); 
    $lname = mysqli_real_escape_string($conn, $_POST ["lname"]); 
    $key = mysqli_real_escape_string($conn, $_POST ["key"]);
    $sql = "UPDATE register SET fname = '$fname', lname = '$lname' WHERE key ='$key'";
    if(mysqli_query($conn, $sql)){
        $_SESSION["update"] = "Thesis updated Successfully";
        header("location: index.php");
    }else{
        die("Something went wrong");
    };
}
?>