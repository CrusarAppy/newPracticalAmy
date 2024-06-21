<?php
require_once 'database.php';
$db = new Database();
$conn = $db->dbConnection();

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id='$id'";
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
