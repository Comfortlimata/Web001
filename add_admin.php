

<?php
$conn = new mysqli("localhost", "root", "", "restaurant");

$username = "admin";
$password = password_hash("1234", PASSWORD_DEFAULT); // Secure hash

$sql = "INSERT INTO admins (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "Admin added!";
} else {
    echo "Error: " . $conn->error;
}
?>
 

