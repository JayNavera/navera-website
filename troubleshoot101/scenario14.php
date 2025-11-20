<?php
//$data = $_POST; expanded for multiple fields
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$sql = "INSERT INTO students (first_name, last_name, email)
VALUES ('$first', '$last', '$email')";
?>
