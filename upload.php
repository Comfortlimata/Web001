<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.html");
    exit();
}

if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $targetDir = "uploads/";
    $filename = basename($_FILES["image"]["name"]);
    $targetFile = $targetDir . $filename;

    // Ensure directory exists
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "Image uploaded successfully. <a href='admin.php'>Back</a>";
    } else {
        echo "Error uploading image.";
    }
} else {
    echo "No image selected or an error occurred.";
}
?>
