<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

include('includes/header.php');

// Fetch newswire items
$sql = "SELECT * FROM newswire";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Manage Newswire</h2>
    <a href="add_news.php" class="btn btn-success mb-3">Add New News</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($news = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $news['id']; ?></td>
                    <td><?php echo $news['title']; ?></td>
                    <td>
                        <a href="edit_news.php?id=<?php echo $news['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_news.php?id=<?php echo $news['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('includes/footer.php'); ?>
