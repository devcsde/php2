<?php
    include("connection.php");
    $emp_id = $_GET["delete"];
    $query = "DELETE FROM emp_record WHERE id = '$emp_id'";
    $execute = $pdo->query($query);
    if($execute){
        echo "<script>window.open('read.php?deleted=Record deleted successfully', '_self')</script>";
    } else {
        echo "Problem deleting the file";
    }
?>