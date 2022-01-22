<?php
$conn = new mysqli("mysql", "tutoring", "garnichts");

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
echo "connected successfully";

mysqli_select_db($conn, "tutoring");

if ($result = $conn->query("SHOW TABLES")) {
    echo "Returned rows: " . $result->num_rows;
    $result->free_result();
}
