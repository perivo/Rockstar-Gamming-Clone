<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

include('includes/header.php');

// Fetch downloads
$sql = "SELECT * FROM downloads";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Manage Downloads</h2>
    <a href="add_download.php" class="btn btn-success mb-3">Add New Download</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($download = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $download['id']; ?></td>
                    <td><?php echo $download['name']; ?></td>
                    <td><?php echo $download['url']; ?></td>
                    <td>
                        <a href="edit_download.php?id=<?php echo $download['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_download.php?id=<?php echo $download['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('includes/footer.php'); ?>
