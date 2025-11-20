<?php
$conn = mysqli_connect("localhost","root","","class_db");
$res = mysqli_query($conn,"SELECT * FROM students");
//$row = mysqli_fetch_assoc($res);
//echo $row['email'];
    /*Added while loop and add break for cleanliness. */
while ($row = mysqli_fetch_assoc($res)) {
    echo $row['email'] . "<br>";
}
?>



