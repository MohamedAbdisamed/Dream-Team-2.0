<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body style="background-image: url('../scss/img/bg-ly.png'); background-size: cover;">
    <div class="container-fluid pl-0 pr-0">
        <img src="../scss/img/træning-2.JPG" class="img-fluid pl-0 pr-0" alt="Responsive image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Træningsprogram 2</h1>
            </div>
            <div class="col-12 pt-1">
                <p>Skuldre</p>
            </div>
            <div class="col-12">
                <p>Denne øvelse hjælper til at styrke skuldre, bryst og arm musklerne, og er en god øvelse til folk der bruger lang tid i siddende stillinger. Øvelsen kan hjælpe med at lindre smerter i skuldre og nakke, samt forbedre din kropsholdning.</p>
            </div>
            <div class="col-12 pt-4">
                <a href="#" class="border rounded pt-3 pb-2 pl-2 pr-2 ">
                    <video id="video" src="../scss/video/træning2.mp4" style="display: none;"></video>
                    <span class="material-icons material-symbols-outlined" onclick="play()">
                        play_arrow
                    </span>
                </a>
            </div>
            <div class="col-12 pt-4">
                <span class="material-icons material-symbols-outlined">
                    alarm
                </span>
                <p>Varighed: 8 Minutter</p>
            </div>
            <div class="col-12 pt-4">
                <span class="material-icons material-symbols-outlined">
                    fitness_center
                </span>
                <p>Udstyr: Elastik bånd</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12">
                <h5>Lignende programmmer</h5>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-3">
                <a href="">
                    <img class="img-fluid border rounded" src="../scss/img/træning-1.JPG" alt="">
                </a>
            </div>
            <div class="col-3">
                <a href="">
                    <img class="img-fluid border rounded" src="../scss/img/træning-4.JPG" alt="">
                </a>
            </div>
            <div class="col-3">
                <a href="">
                    <img class="img-fluid border rounded" src="../scss/img/træning-3.JPG" alt="">
                </a>
            </div>
            <div class="col-3">
                <a href="">
                    <img class="img-fluid border rounded" src="../scss/img/træning-5.JPG" alt="">
                </a>
            </div>
        </div>
    </div>
    <!-- Top Nav -->
    <?php include 'botnav.php'; ?>
    <script>
        let h1 = document.getElementById('titel');
        h1.innerHTML = "Trænings program 2";
    </script>
    <script>
        function play() {
            var video = document.getElementById("video");
            if(video.style.display === "none") {
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