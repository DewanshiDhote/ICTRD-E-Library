<?php
define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"dashboard");

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn){
  die("Connection Failed: ". mysqli_connect_error());
}


$sql = "SELECT id, name FROM publisher";
$result = $conn->query($sql);

$publishers = [];
while ($row = $result->fetch_assoc()) {
    $publishers[] = $row;
}

echo json_encode($publishers);
?>
