<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["option"])) {
    // Get the option value from the POST request
    $newOption = $_POST["option"];

    // Database connection
    define('DB_SERVER',"localhost");
  define('DB_USERNAME',"root");
  define('DB_PASSWORD',"");
  define('DB_DATABASE',"dashboard");

  $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

  if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
  }

    // Insert new option into database
    $stmt = $conn->prepare("INSERT INTO publisher (name) VALUES (?)");
    $stmt->bind_param("s", $newOption);
    $stmt->execute();
    $stmt->close();

    // Close connection
    $conn->close();

    echo "Option saved successfully.";
} else {
    // Invalid request
    echo "Invalid request.";
}
?>