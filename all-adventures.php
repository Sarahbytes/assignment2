<?php
// Database connection
$servername = "localhost";
$username = "hfxadmin";
$password = "hereW3go!";
$dbname = "halifaxcanoe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all adventures from the database
$sql = "SELECT * FROM adventures";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Heading: " . $row['heading'] . "<br>";
        echo "Trip Date: " . $row['tripDate'] . "<br>";
        echo "Duration: " . $row['duration'] . "<br>";
        echo "Summary: " . $row['summary'] . "<br><br>";
    }
} else {
    echo "No adventures found.";
}

$conn->close();
?>
