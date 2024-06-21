<?php
include "Database.php";
		$db = new Database();
		$conn = $db->dbConnection();
   
      

	if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id='$stu_id'";
	
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
        }
	}
	
?>
		<html>
		<body>
        <h2>Student details Update Form</h2>
        <form action="update.php" method="post">
          <fieldset>
            <legend>Personal information:</legend>
            Name:<br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br><br>
            <input type="submit" value="Update" name="update">
          </fieldset>
        </form>
        </body>
        </html>
		<?php
	}
	?>