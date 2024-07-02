<?php
define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"dashboard");

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn){
  die("Connection Failed: ". mysqli_connect_error());
}



$data = json_decode(file_get_contents('php://input'), true);
$name = $conn->real_escape_string($data['name']);

$sql = "INSERT INTO author (name) VALUES ('$name')";
if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true, 'id' => $conn->insert_id]);
} else {
    echo json_encode(['success' => false]);
}

$conn->close();
?>

