<?php
$id = $_GET['id']; //Changed from $_POST

    /*To make the href work, nagawa view.php
    Code: <?php
    $conn = mysqli_connect("localhost", "root", "", "class_db");
    $id = $_GET['id'];
    $res = mysqli_query($conn, "SELECT * FROM students WHERE student_id=$id");
    $row = mysqli_fetch_assoc($res);
    if ($row) {
        echo "Name: " . $row['first_name'] . " " . $row['last_name'] . "<br>";
        echo "Email: " . $row['email'];
    } else {
        echo "No student found.";
    }
    ?>
    */

?>
<a href="view.php?id=3">View Student</a>

