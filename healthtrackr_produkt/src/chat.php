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

<body>
    <?php include 'topnav.php'; ?>
    <div class="container d-flex justify-content-center">
        <div class="card mt-5">
            <div class="d-flex flex-row justify-content-between p-3 adiv text-white">
                <span class="material-symbols-rounded">
                    arrow_back_ios
                </span>
                <span class="pb-3">Live chat</span>
                <span class="material-symbols-rounded">
                    close
                </span>
            </div>
            <div class="d-flex flex-row p-3">
                <img src="../scss/img/profil.jpg" width="30" height="30">
                <div class="chat ml-2 p-3">Hej jeg har problemer med at udføre en af de øvelser jeg er blevet tildelt. Jeg laver
                    øvelsen men det gør rigtig ondt i skuldren. Har sendt en video af mig der laver øvelsen, måske kan du spotte hvad det er jeg gør forkert.</div>
            </div>

            <div class="d-flex flex-row p-3">
                <div class="bg-white mr-2 p-3"><span class="text-muted">Hej. Ud fra videoen ser det ud til du trækker armen for langt tilbage, hvilket kan forsage smerter i skuldre, nakke og arme. Prøv at lave mindre, langsomme bevægelser hvor du ikke trækker så langt tilbage. </span></div>
                <img src="../scss/img/fys.JPG" width="30" height="30">
            </div>

            <div class="d-flex flex-row p-3">
                <div class="myvideo ml-2"><video src="../scss/video/træning-2.mp4" width="200"></video></div>
                <img src="../scss/img/fys.JPG" width="30" height="30">
            </div>

            <div class="d-flex flex-row p-3">
                <img src="../scss/img/profil.jpg" width="30" height="30">
                <div class="chat ml-2 p-3"><span class="text-muted dot">. . .</span></div>
            </div>

            <div class="form-group px-3">
                <textarea class="form-control" rows="5" placeholder=""></textarea>
            </div>
        </div>
    </div>
    <script>
        let h1 = document.getElementById('titel');
        h1.innerHTML = "Chat 1";
    </script>
    <script type="module" src="./index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>