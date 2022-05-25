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
            <form action="create.php" method="post">
                <!--<div id="s1" class="side1">
                    <fieldset> -->
                            <div class="col-lg-6 m-2">
                                <input type="text" placeholder="Fornavn" name="first_name" id="first_name" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="col-lg-6 m-2">
                                <input type="text" placeholder="Efternavn" name="last_name" id="last_name" class="form-control" autocomplete="off" required>
                            </div>

                            <div class="col-lg-6 m-2">
                                <input type="text" placeholder="Email" name="email" id="email" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="col-lg-6 m-2">
                                <input type="password" placeholder="Adgangskode" name="password" id="password" class="form-control" autocomplete="off" required>
                            </div>

                            <div class="col-lg-6 m-2">
                                <input type="text" placeholder="Telefon" name="telephone" id="telephone" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="col-lg-6 m-2">
                                <input type="text" placeholder="Addresse" name="address" id="address" class="form-control" autocomplete="off" required>
                            </div>
                    <!--</fieldset>
                </div>
                <div id="s2" class="side2" style="display: none;">
                    <fieldset> -->

                            <div class="col-lg-2 m-2">
                                <input type="number" placeholder="Højde (cm)" name="height" id="height" class="form-control" required>
                            </div>
                            <div class="col-lg-2 m-2">
                                <input type="number" placeholder="Vægt (kg)" name="weight" id="weight" class="form-control" required>
                            </div>
                            <div class="col-lg-2 m-2">
                                <input type="number" placeholder="Alder" name="age" id="age" class="form-control" required>
                            </div>

                            <div class="col-lg-6 m-2" id="radio" style="display: flex;">
                                <select name="level" id="levevl">
                                    <option value="basalt">Basalt</option>
                                    <option value="avanceret">Avanceret</option>
                                    <option value="specialiseret">Specialiseret</option>
                                    <option value="rehabilitering">Rehabilitering</option>
                                    <option value="unknown">Ved ikke</option>
                                </select>
                            </div>
                            <div class="col-lg-6 m-2" style="display: flex;">
                                <select name="gender" id="gender">
                                    <option value="female">Kvinde</option>
                                    <option value="male">Mand</option>
                                    <option value="other">Andet</option>
                                </select>
                            </div>

                            <div class="col-lg-10 cool-lg-offset-2 m-2">
                                <input type="submit" name="submit" id="submit" value="Submit">
                            </div>

                   <!-- </fieldset>
                </div> -->
            </form>

            <!-- Bot Nav -->
            <nav class="navbar navbar-expand-lg fixed-bottom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php"></a>
                </div>
            </nav>
    </section>
    <script>
    </script>
    <script src="./register.js"></script>
    <script type="module" src="./index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>