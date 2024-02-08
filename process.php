<?php
if (isset($_POST["login"])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $conn = mysqli_connect("localhost", "root", "", "project");
    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            // Successful login
            header("Location: data-entry.html");
            exit();
        } else {
            echo "Failed to login!";
     }
    } else {
        echo "Query failed: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
