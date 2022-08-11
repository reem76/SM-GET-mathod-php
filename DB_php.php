<?php
// handle_form.php
$data = $_GET['sensor'];
echo $data;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartmathod_sensordata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sensor_data (sensor_value)
VALUES ('$data')";

if ($conn->query($sql) === TRUE) {
  echo "	New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>