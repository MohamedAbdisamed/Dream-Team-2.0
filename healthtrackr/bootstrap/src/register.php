
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../scss/register.scss">
    <link rel="stylesheet" href="../scss/custom.scss">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<!--  https://designmodo.com/bootstrap-5-form/  -->

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid align-items-center justify-content-center">
            <h1 id="titel">Opret Bruger</h1>
        </div>
    </nav>
    <br>
    <section class="w-100 mt-5 mb-5">
        <div class="container align-items-center justify-content-center w-100">
            <div class="progress mb-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated"></div>
            </div>
            <form action="./register.js" class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate="">
                <div class="question-container" id="quest-container">
                    <div class="side" id="side-container">
                        <h4 class="form-titel mb-3 mt-3">Kontakt Oplysninger</h4>
                        <div class="mtt-1 mt-2">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Fornavn">
                        </div>
                        <div class="mtt-1 mt-2">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Efternavn">
                        </div>
                        <div class="mtt-1 mt-2">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Adresse">
                        </div>
                        <div class="mtt-1 mt-2">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mtt-1 mt-2">
                            <input type="tel" class="form-control" id="telephone" Telefon name="telephone" placeholder="Telefon">
                        </div>
                    </div>
                    <div class="side" id="side-container">
                        <h4 class="form-titel mb-3 mt-3">Personlige oplysninger</h4>
                        <input type="number" class="form-control mt-2" id="height" name="height" placeholder="Højde (cm)">
                        <input type="number" class="form-control mt-2" id="weight" name="weight" placeholder="Vægt (kg)">
                        <input type="date" class="form-control mt-2" id="age" name="age" placeholder="Fødselsdag">
                        <div class="radio m-1" style="display: flex;">
                            <input type="radio" id="male" class="male m-2" name="male" value="Male">
                            <label for="male">Mand</label><br>
                            <input type="radio" id="female" class="female m-2" name="female" value="Female">
                            <label for="female">Kvinde</label><br>
                            <input type="radio" id="other" class="other m-2" name="other" value="Other">
                            <label for="other">Andet</label><br><br>
                        </div>
                    </div>
                    <div id="success">
                        <div class="mt-5">
                            <h4>Bruger Oprettet</h4>
                            <a class="back-link" href="home.php">Gå videre til appen➜</a>
                        </div>
                    </div>
                </div>
                <div id="question-container__buttons">
                    <button id="prev-btn" type="button">Forrige</button>
                    <button id="next-btn" type="button">Næste</button>
                    <button id="submit-btn" type="submit">Opret</button>
                </div>
            </form>
        </div>
        <div id="preloader-wrapper">
            <div id="preloader"></div>
            <div class="preloader-section section-left"></div>
            <div class="preloader-section section-right"></div>
        </div>

        <!-- Bot Nav -->
        <nav class="navbar navbar-expand-lg fixed-bottom">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php"></a>
            </div>
        </nav>
    </section>

    <script type="module" src="./register.js"></script>
    <script type="module" src="./index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>