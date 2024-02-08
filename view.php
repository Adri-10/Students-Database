<?php
require('db.php');
$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="data-list">
    <h2>Student Data List</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>ID</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
<?php
  if($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['phoneNo'] . "</td>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo '<td><a href="remove-data.php?id=' . $row['id'] . '">Remove</a></td>';
        echo "</tr>";
    }
}
else {
    echo "Query failed: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</div>
</body>
</html>
