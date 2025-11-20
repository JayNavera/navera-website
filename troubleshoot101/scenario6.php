<?php
$conn = mysqli_connect("localhost","root","","class_db");
//$sql = "DELETE FROM students WHERE id = " . $_GET['id'];
//mysqli_query($conn, $sql);
    /*Added prepared statement. "id" ay mali dapat ay "student_id".
    ? used as placeholder for student_id. bind integer to $id to replace "?".
    then execute. 
    then print Id of student deleted, kung wala then confirm na
    no student with that id exist.
    student id 2 ay na delete na.
    */
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM students WHERE student_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Student deleted successfully: ID $id";
} else {
    echo "No such student exists with ID $id.";
}
?>