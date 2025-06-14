<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Replace these with your actual DB credentials and user check
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Example: hard-coded user for demonstration
    if ($username === 'admin' && $password === 'yourpassword') {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>
<form method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
</form>
