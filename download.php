<?php
// include "includes/navBar.php";
include 'includes/connect.php';
?>
<?php
$sql = "SELECT * FROM file_upload";
$result = $conn->query($sql);
?>