<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../scss/custom.scss">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Hello, world!</title>
</head>

<body style="background-image: url('../scss/img/bg-ly.png'); background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a href="programcat.php">
                <span class="material-symbols-rounded">
                    arrow_back_ios
                </span>
            </a>
        </div>
    </nav>
    <div class="container-fluid pl-0 pr-0">
        <img src="../scss/img/træning-1.JPG" class="img-fluid w-100 pl-0 pr-0" alt="Responsive image">
    </div>
    <div style="background-color: #79c5b2;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Træningsprogram 1</h1>
                </div>
                <div class="col-12">
                    <p>Ryg</p>
                </div>
                <div class="col-12">
                    <p>Denne øvelse hjælper til at styrke ryg og mave musklerne, og er en god øvelse til folk der bruger lang tid i siddende stillinger. Øvelsen kan hjælpe med at lindre rygsmerter, og forbedre din kropsholdning.</p>
                </div>
                <div class="col-12">
                    <video id="video" style="display: none;" controls>
                        <source src=" ../scss/video/træning1.mp4" type="video/mp4">
                        Din browser understøtter ikke video tag.
                    </video>
                    <span class="material-icons material-symbols-outlined" onclick="play()">
                        play_arrow
                    </span>
                </div>
                <div class="col-12 pt-4" style="display: flex;">
                    <span class="material-icons material-symbols-outlined">
                        alarm
                    </span>
                    <p class="train-text pl-3 pt-2">Varighed: 5 Minutter</p>
                </div>
                <div class="col-12 pt-4" style="display: flex;">
                    <span class="material-icons material-symbols-outlined">
                        fitness_center
                    </span>
                    <p class="train-text pl-3 pt-2">Udstyr: Træningsbold, Yogamåtte</p>
                </div>
                <div class="row pt-5">
                    <div class="col-12">
                        <h5>Lignende programmmer</h5>
                    </div>
                    <div class="row pt-2">
                        <div class="col-3">
                            <a href="programside-2.php">
                                <img class="img-fluid border rounded" src="../scss/img/træning-2.JPG" alt="">
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="programside-4.php">
                                <img class="img-fluid border rounded" src="../scss/img/træning-4.JPG" alt="">
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="programside-3.php">
                                <img class="img-fluid border rounded" src="../scss/img/træning-3.JPG" alt="">
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="programside.php">
                                <img class="img-fluid border rounded" src="../scss/img/træning-5.JPG" alt="">
                            </a>
                        </div>
                    </div>
                </div><br><br><br><br><br>
            </div>
        </div>

        <!-- Top Nav -->
        <?php include 'botnav.php'; ?>
        <script>
            let h1 = document.getElementById('titel');
            h1.innerHTML = "Trænings program 1";
        </script>
        <script>
            function play() {
                var video = document.getElementById("video");
                if (video.style.display === "none") {
                    video.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>