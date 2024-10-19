<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO newswire (title, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();

    header('Location: manage_newswire.php');
    exit();
}

include('includes/header.php');
?>

<div class="container mt-5">
    <h2>Add New Newswire Item</h2>
    <form method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add News</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
