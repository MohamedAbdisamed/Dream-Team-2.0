<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../scss/custom.scss">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- Top Nav -->
    <?php include 'topnav.php'; ?>

    <section>
        <!-- Indhold, Opstillet som 6 individuelle Card -->
        <div class="row row-cols-1 row-cols-md-3 g-6" style="margin-bottom: 20vmin; margin-top: 10vmin;">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/profil-icon.svg" alt="">
                        <h5 class="card-title">Oplysninger</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Data-icon.svg" alt="">
                        <h5 class="card-title">Data</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Document-icon.svg" alt="">
                        <h5 class="card-title">Journal</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Settings-icon.svg" alt="">
                        <h5 class="card-title">Instillinger</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/Chat-icon.svg" alt="">
                        <h5 class="card-title">Beskeder</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="img/mini-Calender-icon.svg" alt="">
                        <h5 class="card-title">Kalender</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bot Nav -->
        <?php include 'botnav.php'; ?>

        <!--  Insætter side titel  -->
        <script>
            let h1 = document.getElementById('titel');
            h1.innerHTML = "Profil";
        </script>

        <script type="module" src="./index.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>