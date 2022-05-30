<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/custom.scss">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<!-- https://www.bootdey.com/snippets/view/chat-app#html -->

<body>

    <!-- Top Nav -->
    <?php include 'topnav.php'; ?>

    <section style="margin: 5vmin; margin-top: 16vmin; margin-bottom: 16vmin;">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card chat-app">
                        <div id="plist" class="people-list">
                            <ul class="list-unstyled chat-list mt-2 mb-0">
                                <li class="clearfix">
                                    <a href="chat.php">
                                        <img src="../scss/img/profil.JPG" alt="avatar">
                                        <div class="about">
                                            <div class="name">
                                                <p>Fysioterapeut Julie</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <img src="../scss/img/profil2.JPG" alt="avatar">
                                    <div class="about">
                                        <div class="name">
                                            <p> Fysioterapeut Mohamed</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="../scss/img/profil3.JPG" alt="avatar">
                                    <div class="about">
                                        <div class="name">
                                            <p> Fysioterapeut Sussi</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Bot Nav -->
        <?php include 'botnav.php'; ?>
        <script>
            let h1 = document.getElementById('titel');
            h1.innerHTML = "Chat";
        </script>
        <script type="module" src="./index.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>