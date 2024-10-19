<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Rockstar Games Clone</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/admin/dashboard.php">Rockstar Games Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/manage_games.php">Manage Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/manage_newswire.php">Manage Newswire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/manage_videos.php">Manage Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/manage_downloads.php">Manage Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/manage_store.php">Manage Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/manage_support.php">Manage Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
