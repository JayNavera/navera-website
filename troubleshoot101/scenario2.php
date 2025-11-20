<?php
$conn = mysqli_connect("localhost","root","","class_db");
$fname = $_POST['fname'];
//$sql = "SELECT * FROM students WHERE first_name = $fname";
    /* after accomplishing the form and inputting Ana. Since Ana is a string, 
    $fname should have apostrophe so '$fname'

    This is the form.php i used,
    <form method="post" action="scenario2.php">
    Name: <input type="text" name="fname">
    <input type="submit" value="Submit">
    </form>
    */
$sql = "SELECT * FROM students WHERE first_name = '$fname'";
$res = mysqli_query($conn, $sql);
    /* To make sure that Ana is actually searched and found,
    using mysqli_fetch_assoc tig kuha yung naka store sa $res
    then if Ana or whatever name is in the table, will echo that
    they are found or else shows they are not found.
    */
$search = mysqli_fetch_assoc($res);
if ($search) {
    echo "Name FOUND in Database ";
} else {
    echo "Name not found in database.";
}
?>



