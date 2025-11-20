<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");
//$page = $_GET['page'];
//$limit = 5;
//$offset = $page * $limit;
//$sql = "SELECT * FROM students LIMIT $offset, $limit";
$page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
$maxPage = 100;
if ($page < 0) $page = 0;
if ($page > $maxPage) $page = $maxPage;
$limit = 5;
$offset = $page * $limit;
$sql = "SELECT * FROM students LIMIT $offset, $limit";
$res = mysqli_query($conn, $sql);
if ($res && mysqli_num_rows($res) > 0) {
    echo "Page $page Preview (as of 2025-11-21 06:00:00):<br>";
    while ($row = mysqli_fetch_assoc($res)) {
        echo "ID: {$row['id']}, Name: {$row['first_name']} {$row['last_name']}, Email: {$row['email']}<br>";
    }
    echo "Query completed successfully.";
} else {
    echo "No students found on page $page.";
}
mysqli_close($conn);
?>
