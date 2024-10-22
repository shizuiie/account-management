<?php
include 'html/navBar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Users</title>
    <style>
        .top{
            font-family: fantasy;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class = "d-flex justify-content-between my-4">
            <h1 class = "top" >Edit Users</h1>
            <div>
                <a href="index.php" class = "btn btn-dark">Back</a>
            </div>
        </header>
        <?php
        if(isset($_GET["key"])){
            $key = $_GET["key"];
            include("includes/connect.php");
            $sql = "SELECT * FROM thesis WHERE `key` = $key";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>

            <form action="process.php" method="post">
            <div class="from-element my-4">
                <label for=""><b>First Name:</b></label>
                <input type="text" class = "form-control" name = "fname" value = "<?php echo $row["fname"];?>" placeholder = "First name" >
            </div>
            <div class="from-element my-4">
                <label for=""><b>Last Name:</b></label>
                <input type="text" class = "form-control" name = "lname" value = "<?php echo $row["lname"];?>" placeholder = "Last name" >
            </div>
            
            <input type="hidden" name = "key" value = '<?php echo $row['key'];?>'>
            <div class="form-element">
                <input type="submit" class="btn btn-secondary" name = "edit" value = "Edit Users">
            </div>
        </form>
        <?php
        }
        ?>
       
    </div>
</body>
</html>