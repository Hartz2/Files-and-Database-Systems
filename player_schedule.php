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

$player = readline("Enter the player: ");

// Run a query
$sql = "CALL get_schedule('$player')";
$result = $conn->query($sql);
// Display the resulting table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["Player"] . " plays at ";
        echo $row["be_there"];
        if($row["snack"]) {echo " bringing snacks" . " against the "; } else {echo " without snacks" . " against the ";}
        echo $row["against"] . " coached by ";
        echo $row["lead_by"] . "\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>



