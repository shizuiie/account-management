<?php
include 'html/navBar.php';
// include 'html/sidebar.html';
include 'includes/header.php';
?>

<body>
    <div id="no-results" style="display: none;"></div>
    <div class="container ">
        <header class = "d-flex justify-content-between my-4">
            <h1 class = "top" >Users</h1>
            <!-- *******FOR SEARCH************** -->
            <div class="search-box">
                <i class="material-icons">&#xE8B6;</i>
                <input type="text" id="search-input" class="form-control" placeholder="Search&hellip;">
            </div>

            <div>
                <a href="create.php" class = "btn btn-dark">Add New Users</a>
            </div>
        </header>
        <?php
        // session_start();
        if(isset($_SESSION["submit"])){
            ?>
            <div class="alert alert-success">
                <?php
                 echo $_SESSION["submit"];
                 unset($_SESSION["submit"]);
                ?>
            </div>
            <?php
        }
        ?>

        <?php
       
        if(isset($_SESSION["edit"])){
            ?>
            <div class="alert alert-success">
                <?php
                 echo $_SESSION["edit"];
                 unset($_SESSION["edit"]);
                ?>
            </div>
            <?php
        }
        ?>

        <?php
        if(isset($_SESSION["delete"])){
            ?>
            <div class="alert alert-success">
                <?php
                 echo $_SESSION["delete"];
                 unset($_SESSION["delete"]);
                ?>
            </div>
            <?php
        }
        ?>
        <?php

            if (isset($_SESSION['success'])) {
                echo "<div class='alert alert-success'>" . $_SESSION['success'] . "</div>";
                unset($_SESSION['success']);
            }

            if (isset($_SESSION['update'])) {
                echo "<div class='alert alert-success'>" . $_SESSION['update'] . "</div>";
                unset($_SESSION['update']);
            }
        ?>

        <table id="thesis-table" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>SID</th>
                    <th>First Name<i class="fa fa-sort"></i></th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("includes/connect.php");
                $sql =  "SELECT * FROM register";
                $result = mysqli_query($conn, $sql);
               
                while($row = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td><?php echo $row["key"];?></td>
                            <td><?php echo $row["sid"];?></td>
                            <td><?php echo $row["fname"];?></td>
                            <td><?php echo $row["lname"];?></td>
                            <td><?php echo $row["email"];?></td>
                            <td>
                                <a href="view.php?key=<?php echo $row["key"]; ?>" class="view" title="View More"><i class="material-icons">&#xE417;</i></a>

                                <a href="edit.php?key=<?php echo $row["key"]; ?>" class="edit" title="Edit"><i class="material-icons">&#xE254;</i></a>

                                <a href="delete.php?key=<?php echo $row["key"]; ?>" class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>


<!-- *********************************FOR MODAL************************************************* -->   
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
             Are you sure you want to delete this records?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, keep it.</button>
                <button type="button" class="btn btn-danger" id="delete-btn">Yes, delete!</button>
            </div>
             </div>
        </div>
    </div>
    <script src="./js/noResultFound.js"></script>
    <script src="./js/deleteConfirmModal.js"></script>
    <script src="./js/sort.js"></script>
</body>
</html>