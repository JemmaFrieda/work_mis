<?php
include 'connection.php';
$studid = $_POST['studid'];
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$department = $_POST['department'];
$sql = "UPDATE studentmgt SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', department='$department' WHERE studid='$studid'";
if($con->query($sql) === TRUE) {
    echo " update successfully";
} else {
    echo "Do not update therecord";
}
$con->close();
?>