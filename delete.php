<?php
include 'connection.php';
$studid = $_POST['studid'];
$sql = "DELETE FROM studentmgt WHERE studid='$studid'";
if($con->query($sql) === TRUE){
    echo"Record deleted successfully";
} else {
    echo"No Delete " . $con->error;
}
$con->close();
?>