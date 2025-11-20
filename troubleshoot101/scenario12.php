<?php
//$id = $_GET['id']; cast to int
$id = (int) $_GET['id']; 
$sql = "SELECT * FROM students WHERE id = $id"; 
?>
