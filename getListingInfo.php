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

// Get house_id variable from JS
$house_id = $_GET["house_id"];

// Get the listing information from the house_id
$query = "SELECT current_listings.house_id, asking_price, street_address, city, State FROM current_listings INNER JOIN house ON current_listings.house_id = " + $house_id;
$result = $conn->query($query);

// Process the result
while ($row = $result->fetch_array()) {
  $data[] = $row;
}
echo json_encode($data);

// Close the connection
mysqli_close($conn);

?>
