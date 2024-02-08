<?php
require('db.php');
if (isset($_POST["remove"])) {
    $id = $_POST['id'];
    // Perform the deletion query
    $delete_query = "DELETE FROM student WHERE id = '$id'";
    $delete_result = mysqli_query($conn, $delete_query);
    if ($delete_result) {
        // Check if any rows were affected
        if (mysqli_affected_rows($conn) > 0) {
            echo "Data removed successfully.";
        } else {
            echo "No matching ID found to remove.";
        }
    } else {
        echo "Failed to remove data: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Remove Student Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div style="text-align: center; margin-top: 20px;">
        <a href="view.php" class="view-button">View Data</a>
        </div>';
    <div class="remove-form">
    <h2>Remove Student Data</h2>
        <form action="remove-data.php" method="post">
            <label for="id">Enter ID to Remove:</label>
            <input type="number" id="id" name="id" required>
            <button type="submit" name="remove">Remove Data</button>
        </form>
</div>
</body>
</html>
