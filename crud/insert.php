<?php
require_once '.\Database.php';

$db = new Database();
$conn = $db->dbConnection();
//$databaseCreate = $db->createDatabase();
//$tableCreate = $db->createTable();

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ( '$name' ,'$email')";
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
