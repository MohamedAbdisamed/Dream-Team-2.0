<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../scss/custom.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Top Nav -->
    
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a href="home.php"><img src="../scss/img/nav-icons/health_trackr_logo.png" width="90"/> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="material-symbols-rounded" style="color: white; padding: 5px;">
                <span class="navbar-toggler-icon"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">
                            <span class="material-symbols-rounded" style="color: white;padding: 5px;">
                                Profil
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kalender.php">
                            <span class="material-symbols-rounded" style="color: white;padding: 5px;">
                                Kalender
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="programcat.php">
                            <span class="material-symbols-rounded" style="color: white;padding: 5px;">
                                Trænings programmer
                            </span>
                        </a>
                    </li>
                    <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Info
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Info</a>
                        <a class="dropdown-item" href="#">Instillinger</a>
                    </div>
                    </div>
                    
                </ul>
            </div>
        </div>
    </nav> 
    <script type="module" src="./index.js"></script>
     
</body>

</html>