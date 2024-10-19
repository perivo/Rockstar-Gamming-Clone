<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

if (isset($_GET['id'])) {
    $news_id = $_GET['id'];

    // Fetch existing news item
    $sql = "SELECT * FROM newswire WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $news_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $news = $result->fetch_assoc();
    } else {
        echo "News item not found.";
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Update news item in database
    $update_sql = "UPDATE newswire SET title = ?, content = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("ssi", $title, $content, $news_id);
    $update_stmt->execute();

    // Redirect to manage news page
    header('Location: manage_newswire.php');
    exit();
}

include('includes/header.php');
?>

<div class="container mt-5">
    <h2>Edit News Item</h2>
    <form method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($news['title']); ?>" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required><?php echo htmlspecialchars($news['content']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Update News Item</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
