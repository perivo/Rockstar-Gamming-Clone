<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockstar Games Clone</title>
    <link rel="stylesheet" href="/assets/css/style.css">
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
                    <a class="nav-link" href="../public/games.php">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/newswire.php">Newswire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/videos.php">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/downloads.php">Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/store.php">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/support.php">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/search.php">Search</a>
                </li>

                <!-- Login/Signup Links -->
                <?php session_start(); ?>
                <?php if (isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../public/logout.php">Logout</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../public/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public/signup.php">Signup</a>
                    </li>
                   
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
