<?php
include('../db/db.php');
include('../partials/public_header.php');

$sql = "SELECT * FROM downloads";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Downloads</h2>
    <ul class="list-group">
        <?php while ($download = $result->fetch_assoc()) { ?>
            <li class="list-group-item">
                <a href="<?php echo $download['url']; ?>" class="btn btn-primary btn-sm">Download <?php echo $download['name']; ?></a>
            </li>
        <?php } ?>
    </ul>
</div>

<?php include('../partials/public_footer.php'); ?>
