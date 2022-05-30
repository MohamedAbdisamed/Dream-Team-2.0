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
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <h1>Trænings programmer</h1>
            </div>
            <div class="col-12 pt-2">
                <button class="pt-1 pb-1 pr-2 pl-2 borde border rounded">Knæ</button>
            </div>
            <div class="col-12 pt-2">
                <h1>Anbefalet</h1>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-4">
                <a href="programside-2.php">
                    <img class="img-fluid border rounded" src="../scss/img/træning-2.JPG" alt="">
                </a>
            </div>
            <div class="col-4">
                <a href="programside-3.php">
                    <img class="img-fluid border rounded" src="../scss/img/træning-3.JPG" alt="">
                </a>
            </div>
            <div class="col-4">
                <a href="programside-4.php">
                    <img class="img-fluid border rounded" src="../scss/img/træning-4.JPG" alt="">
                </a>
            </div>
            <hr class="pt-5 pb-5">
        </div>
        <div class="row pt-3">
            <div class="col-4">
                <a href="">
                    <img class="img-fluid border rounded" src="../scss/img/træning-5.JPG" alt="">
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img class="img-fluid border rounded" src="../scss/img/træning-6.JPG" alt="">
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <img class="img-fluid border rounded" src="../scss/img/træning-7.JPG" alt="">
                </a>
            </div>
        </div>
    </div>
    </div>
    <!-- Top Nav -->
    <?php include 'topnav.php'; ?>
    <script>
        let h1 = document.getElementById('titel');
        h1.innerHTML = "Træning";
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>