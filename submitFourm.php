<?php
$servername = "localhost";
$database = "u658727581_MLSDatabase";
$username = "u658727581_MLSUser";
$password = "Project1234";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$agent_name = $_REQUEST["agent_name"];
$licence_reference_number = $_REQUEST["licence_reference_number"];
$firm_name = $_REQUEST["firm_name"];

$sql = "INSERT INTO `agent` (`agent_name`,`licence_reference_number`,`firm_name`)
VALUES (`" . $agent_name   "`, `" . $licence_reference_number . "`, `" . $firm_name . "`)";
//$sql = "INSERT INTO `house` (`house_id`,`city`,`State`,`zip_code`,`street_address`,`bedroom_count`,`bathroom_count`,`square_feet`,`nearest_school`,`heating_type`,`cooling_type`,`pool`,`detached_house`,`street_parking`,`groundwater_access`,`solar_installed`,`garage_size`)
//VALUES ()";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
mysqli_close($conn);

?>
