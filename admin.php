<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body>
  <h2>Welcome, Admin!</h2>
  <a href="logout.php">Logout</a>

  <h3>Upload a Picture</h3>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button type="submit">Upload</button>
  </form>
</body>
</html>
