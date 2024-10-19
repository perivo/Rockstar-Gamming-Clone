<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

include('includes/header.php');

// Fetch videos
$sql = "SELECT * FROM videos";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Manage Videos</h2>
    <a href="add_video.php" class="btn btn-success mb-3">Add New Video</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Video URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($video = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $video['id']; ?></td>
                    <td><?php echo $video['title']; ?></td>
                    <td><?php echo $video['url']; ?></td>
                    <td>
                        <a href="edit_video.php?id=<?php echo $video['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_video.php?id=<?php echo $video['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('includes/footer.php'); ?>
