<?php
define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"dashboard");

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn){
  die("Connection Failed: ". mysqli_connect_error());
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $sql = "INSERT INTO author (name) VALUES ('$name')";
    if (mysqli_query($conn, $sql)) {
        $id = mysqli_insert_id($conn);
        echo json_encode(['id' => $id, 'name' => $name]);
    } else {
        echo json_encode(['error' => 'Error adding author']);
    }
}
?>