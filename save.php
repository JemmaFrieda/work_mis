<?php

include'connection.php';
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $studid=$_POST['studid'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $department=$_POST['department'];
    // echo" my username is:".$username."<br>";
    // echo" my class is:".$class."<br>";
    // echo" my password is:".$password;
    $sql="insert into studentmgt(studid,username,password,firstname,lastname,department) values('$studid','$username','$password','$firstname','$lastname','$department')";
    if($con->query($sql)==TRUE){
        echo" saved new record successfull";


    }
    else{
        echo"error".$con->error;
    }
    $con->close();
}
?>

