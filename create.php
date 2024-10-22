<?php
session_start();
include 'html/navBar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>User Management</title>
    <style>
        .btn{
            padding: 10px;
            box-shadow: 0px 0px 10px 1px #888888;
        }
        .top{
            font-family: fantasy;
        }
        .my-alert {
            margin: 1% 3% 0 3%;
        }
        .container {
            max-width: 60%; /* adjust the width to your liking */
            margin: 40px auto; /* add some margin to center the container */
        }
    </style>
</head>
<body>
    <?php
        if (isset($_SESSION['errors'])) {
        foreach($_SESSION['errors'] as $error) {
            echo "<div class='alert alert-danger my-alert'>$error</div>";
        }
        unset($_SESSION['errors']);
    }
    ?>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1 class = "top">Add New User</h1>
            <div>
                <a href="index.php" class="btn btn-dark my-2" >Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
        <div class="form-element my-4">
                <label for=""><b>Student ID Number:</b></label>
                <input type="text" class="form-control" id="" name="sid" placeholder="AXX-XXXX" required>
            </div>
            <div class="form-element my-4">
                <label for=""><b>First Name:</b></label>
                <input type="text" class="form-control" id="" name="fname" placeholder="First Name" required>
            </div>
            <div class="form-element my-4">
                <label for=""><b>Last Name:</b></label>
                <input type="text" class="form-control" id="" name="lname" placeholder="Last Name" required>
            </div>
            <div class="form-element my-4">
                <label for=""><b>Email:</b></label>
                <input type="email" class="form-control" id="" name="email" placeholder="example@gmail.com" required>
            </div>
            <div class="form-element my-4">
                <label for=""><b>Password:</b></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="MM-DD-YYYY" required>
                <input type="checkbox" id="show-password" onclick="showPassword('password')"> Show Password
            </div>
            <div class="form-element">
                <input type="submit" class="btn btn-secondary" name="submit" value="Save">
            </div>
        </form>
    </div>
<script>
    function showPassword(id) {
    var passwordInput = document.getElementById(id);
    var showPasswordCheckbox = document.getElementById("show-" + id);
    if (showPasswordCheckbox.checked) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
</script>
</body>
</html>