<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $url = $_POST['url'];

    $sql = "INSERT INTO downloads (name, url) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $url);
    $stmt->execute();

    header('Location: manage_downloads.php');
    exit();
}

include('includes/header.php');
?>

<div class="container mt-5">
    <h2>Add New Download</h2>
    <form method="POST">
        <div class="form-group">
            <label for="name">Download Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="url">Download URL</label>
            <input type="text" name="url" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add Download</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
