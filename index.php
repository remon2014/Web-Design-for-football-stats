<?php
$servername = "localhost";
$username = "root";
$password = "Universal.Password";
$dbname = "CSV_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("SELECT * from stats where (HomeTeam = ?);");
$stmt->bind_param("s",$home_team);

$home_team = "Manchester United";

$stmt->execute();

echo "New records created successfully";
$stmt->close();
$conn->close();
?>
