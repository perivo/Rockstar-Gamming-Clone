<?php
include('../db/db.php');
include('../partials/public_header.php');

$sql = "SELECT * FROM support";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Support</h2>
    <?php while ($support = $result->fetch_assoc()) { ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $support['title']; ?></h5>
                <p class="card-text"><?php echo $support['content']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>

<?php include('../partials/public_footer.php'); ?>
