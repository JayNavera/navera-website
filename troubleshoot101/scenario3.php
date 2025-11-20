<?php
$conn = mysqli_connect("localhost","root","","class_db");
$age = $_GET['age'];
//$sql = "SELECT * FROM students WHERE age = $age";
//$res = mysqli_query($conn, $sql);
    /*Added prepared statements to show yung age typed sa url.
    Then use ? pansamantala for age, then tig bind yung $age as integer
    dun sa ?. After that execute na yung stmt, then nakuha result then store sa $res.
    using if statement if may match sa age, print first name and age. othwerwise
    no match.
    */
$stmt = $conn->prepare("SELECT * FROM students WHERE age = ?");
$stmt->bind_param("i", $age);
$stmt->execute();
$res = $stmt->get_result();

if ($row = $res->fetch_assoc()) {
    echo $row['first_name'] . " - " . $row['age'] . "<br>";
} else
    echo "No student matching age.";
?>