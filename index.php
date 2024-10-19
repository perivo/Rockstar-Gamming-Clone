<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockstar Games Clone</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/public/index.php">Rockstar Games</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="public/games.php">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/newswire.php">Newswire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/videos.php">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/downloads.php">Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/store.php">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/support.php">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/search.php">Search</a>
                </li>

                <!-- Login/Signup Links -->
                <?php session_start(); ?>
                <?php if (isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="public/logout.php">Logout</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="public/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="public/signup.php">Signup</a>
                    </li>
                   
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>

<!-- Hero Banner Section -->
<div class="hero-banner">
    <h1>Welcome to Rockstar Games</h1>
</div>

<!-- Introduction Section -->
<section class="container mt-5">
    <h2 class="section-title">Explore the World of Rockstar Games</h2>
    <p class="lead">
        Dive into the latest and greatest games, watch exciting videos, and stay updated with the latest news in the world of Rockstar Games.
        Our platform is a tribute to Rockstar's most popular games, bringing together enthusiasts from all over the world.
    </p>
</section>

<!-- Quick Links Section -->
<section class="container mt-5">
    <div class="row">
        <!-- Games Link -->
        <div class="col-md-3 mb-4">
            <div class="card bg-dark text-white">
                <img src="https://via.placeholder.com/300x200" class="card-img" alt="Games">
                <div class="card-img-overlay">
                    <h5 class="card-title">Games</h5>
                    <p class="card-text">Explore our vast collection of Rockstar-inspired games and dive into immersive worlds.</p>
                    <a href="games.php" class="btn btn-primary">Browse Games</a>
                </div>
            </div>
        </div>

        <!-- Videos Link -->
        <div class="col-md-3 mb-4">
            <div class="card bg-dark text-white">
                <img src="https://via.placeholder.com/300x200" class="card-img" alt="Videos">
                <div class="card-img-overlay">
                    <h5 class="card-title">Videos</h5>
                    <p class="card-text">Watch the latest trailers, gameplay, and reviews from the Rockstar universe.</p>
                    <a href="videos.php" class="btn btn-primary">Watch Videos</a>
                </div>
            </div>
        </div>

        <!-- News Link -->
        <div class="col-md-3 mb-4">
            <div class="card bg-dark text-white">
                <img src="https://via.placeholder.com/300x200" class="card-img" alt="News">
                <div class="card-img-overlay">
                    <h5 class="card-title">News</h5>
                    <p class="card-text">Stay updated with the latest news and announcements in the Rockstar gaming world.</p>
                    <a href="newswire.php" class="btn btn-primary">Read News</a>
                </div>
            </div>
        </div>

        <!-- Search Link -->
        <div class="col-md-3 mb-4">
            <div class="card bg-dark text-white">
                <img src="https://via.placeholder.com/300x200" class="card-img" alt="Search">
                <div class="card-img-overlay">
                    <h5 class="card-title">Search</h5>
                    <p class="card-text">Looking for something specific? Use our search feature to find your favorite games or videos.</p>
                    <a href="search.php" class="btn btn-primary">Search</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<?php include('partials/public_footer.php'); ?>
