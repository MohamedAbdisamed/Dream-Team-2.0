<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../scss/custom.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <!-- Top Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a href="home.php"><img src="../scss/img/nav-icons/health_trackr_logo.png" width="90" /> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="material-symbols-rounded">
                    menu
                </span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">
                            <span class="material-symbols-rounded">
                                person
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kalender.php">
                            <span class="material-symbols-rounded">
                                calendar_month
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="programcat.php">
                            <span class="material-symbols-rounded">
                                fitness_center
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><span class="material-symbols-rounded">
                                logout
                            </span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script type="module" src="index.js"></script>

</body>

</html>