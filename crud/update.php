<?php
require_once 'database.php';
$db = new Database();
$conn = $db->dbConnection();

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE users SET name='$name', email='$email' WHERE id= '$id' ";
echo $sql;

if ($conn->query($sql) === true) {
    echo "\n Record updated successfully";
} else {
    echo "Error updating record: ". $conn->error;
}
$conn->close();
?>

