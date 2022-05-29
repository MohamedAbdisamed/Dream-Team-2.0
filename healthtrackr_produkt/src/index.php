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
<!--  https://www.kodingmadesimple.com/2016/11/simple-bootstrap-login-form-with-validation-example.html  -->
<!-- admin@mydomain.com -->

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div id="login" class="card text-white" style="border-radius: 1rem;">
                    <video class="position-fixed w-100"autoplay loop src="../scss/video/forside.mp4" style="border-radius: 1rem;"></video>
                        <form id="login-form" method="post" action="login.php" role="form">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <img id="logo" src="../scss/img/health_trackr_logo.png" class="img-thumbnail" alt="">
                                    <br><br>
                                    <h2 class=" fw-bold mb-2 text-uppercase">Login</h2>
                                    <?php if (isset($_GET['err'])) { ?>
                                        <div class="alert alert-danger text-center"><?php echo "Kunne ikke logge ind. Forkert email eller password."; ?></div>
                                    <?php } ?>
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" required class="form-control form-control-lg" placeholder="Email" name="email" />
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" required class="form-control form-control-lg" placeholder="Password" name="password" />
                                    </div>
                                    <p id="glemt" class="small mb-5 pb-lg-2"><a class="text-white" href="#!">Glemt Kodeord</a></p>
                                    <button id="loginBtn" class="btn btn-outline-light btn-lg px-5" type="submit" name="submit" name="submit">Login</button>
                                </div>
                                <div>
                                    <p class="mb-0">Ny Bruger?<a href="register.php" class="text-white-50 fw-bold">Opret Bruger</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="module" src="./index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>