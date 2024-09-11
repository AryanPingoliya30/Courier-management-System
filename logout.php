<?php
// Start the session
session_start();
// Destroy the session
session_destroy();
// Redirect to the login page
header("location: index.php");
// Ensure that no further code is executed
exit();
?>
