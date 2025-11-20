<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");
//$id = $_POST['id']; is wrong, it should be $_GET
    /* Error because walang POST form na tig gawa/submit 
    kung GET tingnan lang url and kung anong data ang hiningi*/
$id = $_GET['id'];
//$sql = "SELECT * FROM students WHERE id = $id";
    /* walang attribute na "id" na nakalagay sa students table, 
    should be "student_id" ... Then after everything, 
    the name "Liza" appears*/
$sql = "SELECT * FROM students WHERE student_id = $id";
$res = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($res);
echo $r['first_name'];
?>