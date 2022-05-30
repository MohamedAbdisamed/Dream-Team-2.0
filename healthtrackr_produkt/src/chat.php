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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a href="chat-overview.php">
                <span class="material-symbols-rounded">
                    arrow_back_ios
                </span>
            </a>
        </div>
    </nav>
    <div class="chat">
        <div class="chat-history">
            <ul class="m-b-0">
                <li class="clearfix">
                    <div class="message-data text-right">
                        <span class="message-data-time">10:10 AM, Idag</span>
                        <img src="../scss/img/profil.jpg" alt="avatar">
                    </div>
                    <div class="message other-message float-right"> Hej jeg har problemer med at udføre en af de øvelser jeg er blevet tildelt. Jeg laver
                        øvelsen men det gør rigtig ondt i skuldren.</div>
                </li>
                <li class="clearfix">
                    <div class="message-data">
                        <img src="../scss/img/profil.jpg" alt="avatar">
                        <span class="message-data-time">10:12 AM, Idag</span>
                    </div>
                    <div class="message my-message">Hej. Ud fra videoen ser det ud til du trækker armen for langt tilbage, hvilket kan forsage smerter i skuldre, nakke og arme. Prøv at lave mindre, langsomme bevægelser hvor du ikke trækker så langt tilbage. </div>
                </li>
                <li class="clearfix">
                    <div class="message-data">
                        <img src="../scss/img/profil.jpg" alt="avatar">
                        <span class="message-data-time">10:15 AM, Idag</span>
                    </div>
                    <div class="message my-message"><video controls>
                            <source src="../scss/video/træning-2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video></div>
                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-bottom">
        <div class="input-group mb-0">
            <input type="text" class="form-control" placeholder="Skriv din besked her">
            <div class="input-group-prepend">
                <div class="input-group-text"><span class="material-symbols-rounded" style="color: #013c2b;">
                        send
                    </span></div>
            </div>
        </div>
    </nav>
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