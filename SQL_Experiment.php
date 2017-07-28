<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, password, bio, phone_or_email FROM info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " <b>Username:</b> " . $row["username"]. " <b>Password:</b> " . $row["password"] . " <b>Bio:</b> " . $row["bio"] . " <b>Phone number:</b> " . $row["phone_or_email"] . "<br>";
		?>
		<p>Id: <?php echo $row['id']; ?> <b>Username:</b> <?php echo $row['username']; ?></p>
		<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
