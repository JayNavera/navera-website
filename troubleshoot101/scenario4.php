<?php
$conn = mysqli_connect("localhost","root","","class_db");
$first = $_POST['fname'];
$last = $_POST['lname'];
//$sql = "INSERT INTO students (first_name,last_name) VALUES ('$first','$last')";
//mysqli_query($conn, $sql); 
    /*Add a if else statement for validation if may na fill up sa form.
    form used = addForm.php
    code: 
    <form method="post" action="scenario4.php">
    First Name: <input type="text" name="fname">
    Last Name: <input type="text" name="lname">
    <input type="submit" value="Submit">
    </form> 
    then just write again the sql query.
    */
if (empty($first) || empty($last)) {
    echo "Error: Both fields are required.";
} else {
    $sql = "INSERT INTO students (first_name,last_name) VALUES ('$first', '$last')";
    mysqli_query($conn, $sql);
    //echo "Inserted!";
        /*Rewrite echo na mas sure yung confirmation */
    echo "Student added successfully: $first $last";
}
?>
