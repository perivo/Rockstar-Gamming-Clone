<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $url = $_POST['url'];

    $sql = "INSERT INTO videos (title, url) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $title, $url);
    $stmt->execute();

    header('Location: manage_videos.php');
    exit();
}

include('includes/header.php');
?>

<div class="container mt-5">
    <h2>Add New Video</h2>
    <form method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="url">Video URL</label>
            <input type="text" name="url" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add Video</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
