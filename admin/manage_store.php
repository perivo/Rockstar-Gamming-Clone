<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

include('includes/header.php');

// Fetch store items
$sql = "SELECT * FROM store";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Manage Store</h2>
    <a href="add_store_item.php" class="btn btn-success mb-3">Add New Store Item</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($item = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td>$<?php echo $item['price']; ?></td>
                    <td><img src="<?php echo $item['image']; ?>" width="100"></td>
                    <td>
                        <a href="edit_store_item.php?id=<?php echo $item['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_store_item.php?id=<?php echo $item['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('includes/footer.php'); ?>
