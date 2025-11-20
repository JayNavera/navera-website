<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");
$newEmail = $_POST['email'];
$id = $_POST['id'];
//$sql = "UPDATE students SET email='$newEmail'";    added WHERE
$sql = "UPDATE students SET email='$newEmail' WHERE student_id=$id";
mysqli_query($conn, $sql);

//add condition for updating new email
if (mysqli_query($conn, $sql)) {
    echo "Record updated: ID $id, New Email: $newEmail, Date: " . date('Y-m-d H:i:s');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>

<!--Form: newEmailForm.php
    <form method="post" action="scenario13.php">
        ID: <input type="text" name="id">
        New Email: <input type="text" name="email">
        <input type="submit" value="Submit">
    </form>
