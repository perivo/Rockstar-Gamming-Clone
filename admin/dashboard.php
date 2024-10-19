<?php
session_start();
include('../db/db.php');

if (!isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit();
}

include('includes/header.php');
?>

<div class="container mt-5">
    <h2>Welcome to the Admin Dashboard</h2>
    <div class="row mt-4">
        <div class="col-md-3">
            <a href="manage_games.php" class="btn btn-primary btn-block">Manage Games</a>
        </div>
        <div class="col-md-3">
            <a href="manage_newswire.php" class="btn btn-primary btn-block">Manage Newswire</a>
        </div>
        <div class="col-md-3">
            <a href="manage_videos.php" class="btn btn-primary btn-block">Manage Videos</a>
        </div>
        <div class="col-md-3">
            <a href="manage_downloads.php" class="btn btn-primary btn-block">Manage Downloads</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-3">
            <a href="manage_store.php" class="btn btn-primary btn-block">Manage Store</a>
        </div>
        <div class="col-md-3">
            <a href="manage_support.php" class="btn btn-primary btn-block">Manage Support</a>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
