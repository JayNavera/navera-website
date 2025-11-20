<?php
$conn = mysqli_connect("localhost","root","","class_db");
//$email = $_POST['emial'];
    /*Fixed spelling emial. Still error though coz no 
    form required from task*/
$email = $_POST['email'];
$sql = "SELECT * FROM students WHERE email='$email'";
$res = mysqli_query($conn, $sql);
?>
