<?php
define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"dashboard");

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn){
  die("Connection Failed: ". mysqli_connect_error());
}


$sql = "SELECT id, name FROM author";
$result = $conn->query($sql);

$authors = [];
while ($row = $result->fetch_assoc()) {
    $authors[] = $row;
}

echo json_encode($authors);
?>
