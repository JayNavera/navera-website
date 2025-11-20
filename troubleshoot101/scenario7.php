<?php
$conn = mysqli_connect("localhost","root","","class_db");
$id = $_POST['id'];
$email = $_POST['email']; //fixed missing apostrophe
    /*Form used: updateEmail.php
    code:
    <form method="post" action="scenario7.php">
    ID: <input type="text" name="id">
    Update Email: <input type="text" name="email">
    <input type="submit" value="Submit">
    </form> */  

//Added condition where if 1/no field is filled = error message.

if (empty($id) || empty($email)) {
    echo "Error: Both ID and Email are required.";

//$sql = "UPDATE students SET email=$email WHERE id=$id";
//$res = mysqli_query($conn, $sql);
    
    /*moved $sql and $res to if else statement and "id" renamed as "student_id" */
} else {
    $sql = "UPDATE students SET email='$email' WHERE student_id=$id";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "$id ID Updated!   Email: $email"; //added condition to verify updated id
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
//echo "Updated!"; removed. replaced above
?>
