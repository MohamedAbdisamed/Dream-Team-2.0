<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../scss/custom.scss">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hjem</title>
</head>

<body style="background-image: url('../scss/img/bg-ly.png'); background-size: cover;">
    <!-- Top Nav -->
    <?php include 'topnav.php'; ?>
    <!-- 
        Header 
        https://startbootstrap.com/snippets/video-header 
    -->
    <header>
        <div class="overlay"></div>
        <img src="../scss/img/profil.jpg" style="object-position:80% 100%;" alt="Bruger profil billed">
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-4">Hej <b class="text-capitalize"><?php include('display_username.php') ?></b> </h1>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="text-center m-5">
                <h2> Title </h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet quidem quibusdam earum vero natus, eveniet ratione in delectus! Magnam suscipit itaque illo iusto quo! Blanditiis rem amet nihil repudiandae sint.</p>
            </div>
            <!-- Indhold, Opstillet som 4 individuelle Card -->
            <div class="row row-cols-1 row-cols-md-2 g-3 mb-5">
                <div class="col">
                    <div class="card h-100 ">
                        <div class="text-center pt-2">
                            <a href="programcat.php">
                                <h5 class="card-title">Min Fysioterapeut</h5>
                            </a>
                        </div>
                        <img src="../scss/img/fys.JPG" class="card-img-top" alt="Billed af fysioterapeut med borger.">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="text-center pt-2">
                            <a href="programcat.php">
                                <h5 class="card-title">Min Træning</h5>
                            </a>
                        </div>
                        <img src="../scss/img/træning-5.jpg" class="card-img-top" alt="Billed af træning fra træningsprogram.">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="text-center pt-2">
                            <a href="kalender.php">
                                <h5>Min Kalender</h5>
                            </a>
                        </div>
                        <img src="../scss/img/calender.png" class="card-img-top" alt="Billed af en kalender">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-3" style="margin-bottom: 15vmin;">
                <div class="col">
                    <div class="card h-100">
                        <div class="text-center pt-2">
                            <a href="user.php">
                                <h5 class="card-title">Min Profil</h5>
                            </a>
                        </div>
                        <img src="../scss/img/profil.jpg" class="card-img-top" alt="Profil billed">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col"> </div>
                <div class="col"> </div>
            </div>
        </div>
        <!-- Bot Nav -->
        <?php include 'botnav.php'; ?>

    </section>
    <script>
        let h1 = document.getElementById('titel');
        h1.innerHTML = "";
    </script>
    <script type="module" src="./index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>