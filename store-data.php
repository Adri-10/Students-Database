<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data entry</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST["submit"]))
{
    require('db.php');
    $name = $_POST["name"];
    $phone = $_POST["phoneNo"];
    $id = $_POST["id"];
    $course = $_POST["course"];
    $gender = $_POST["gender"];
    // Insert data into the database
    $query = "INSERT INTO student (name, phoneNo, id, course, gender) VALUES ('$name', '$phone', '$id', '$course', '$gender')";
    $insert_result = mysqli_query($conn, $query);
    if ($insert_result) {
        echo "<center><font color=green size=6pt>Data Inserted Successfully</font></center>";
// Add a button to access the view.html page
echo '<div style="text-align: center; margin-top: 20px;">';
echo '<a href="view.php" class="view-button">View Data</a>';
echo '</div>';
} else {
    echo "Failed to insert data: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
}
?>
</body>
</html>
