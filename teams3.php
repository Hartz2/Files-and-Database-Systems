<?php
$servername = "localhost";
$username = "prescott";
$password = "embryriddle";
$dbname = "hartz2_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully\n";
}
// Run a query
$sql = "CALL playerTeam('Cletis')";
$result = $conn->query($sql);
// Display the resulting table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Cletis is a member of the " . $row["Team"] . "\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
