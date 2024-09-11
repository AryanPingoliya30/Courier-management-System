<?php
// Establishing a connection to the database
$dbcon = mysqli_connect('localhost', 'root', '', 'courierdb');

// Check if the connection was successful
if (!$dbcon) {
    // If connection fails, display an error message
    die("Connection failed: " . mysqli_connect_error());
} else {
    // If connection is successful, you can optionally display a success message
    // echo "Connected successfully";
}

// Note: It's a good practice to handle database connection errors gracefully to provide better feedback to users or developers.
?>
