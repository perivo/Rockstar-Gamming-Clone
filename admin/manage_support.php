<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

include('includes/header.php');

// Fetch support content
$sql = "SELECT * FROM support";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Manage Support Content</h2>
    <a href="add_support.php" class="btn btn-success mb-3">Add New Support Content</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($support = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $support['id']; ?></td>
                    <td><?php echo $support['title']; ?></td>
                    <td><?php echo $support['content']; ?></td>
                    <td>
                        <a href="edit_support.php?id=<?php echo $support['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_support.php?id=<?php echo $support['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('includes/footer.php'); ?>
