<?php
$age = $_POST['age'];
$sql = "SELECT * FROM students WHERE age = $age"; //corrected spelling from $aeg
echo "You entered age: $age"; //Added to make sense of the form. 

    /*Form: ageForm.php
    Code:
    <form method="post" action="scenario10.php">
        Age: <input type="text" name="age">
        <input type="submit" value="Submit">
    </form> */
?>