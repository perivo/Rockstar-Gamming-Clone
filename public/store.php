<?php
include('../db/db.php');
include('../partials/public_header.php');

$sql = "SELECT * FROM store";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2>Store</h2>
    <div class="row">
        <?php while ($product = $result->fetch_assoc()) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <a href="buy_product.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('../partials/public_footer.php'); ?>
