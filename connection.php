<?php
    // Define the database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "digitalmarketplace_grp10";

    // Create the database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the database connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // // Close the database connection
    // $conn->close();
?>