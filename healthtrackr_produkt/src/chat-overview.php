<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Top Nav -->
    <?php include 'topnav.php'; ?>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
    <div class="container">
        <div class="content container-fluid bootstrap snippets bootdey">
            <div class="col-sm-3 col-xs-12">
                <div class="col-inside-lg decor-default chat" style="overflow: hidden; outline: none;" tabindex="5000">
                    <div class="chat-users">
                        <h6>Online</h6>
                        <div class="user"><a href="chat.php">
                            <div class="avatar">
                                <img src="../scss/img/fys.JPG" alt="User name">
                                <div class="status off"></div>
                            </div>
                            <div class="name">User name</div>
                            <div class="mood">User mood</div>
                        </a></div>
                        <div class="user">
                            <div class="avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                <div class="status online"></div>
                            </div>
                            <div class="name">User name</div>
                            <div class="mood">User mood</div>
                        </div>
                        <div class="user">
                            <div class="avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="User name">
                                <div class="status busy"></div>
                            </div>
                            <div class="name">User name</div>
                            <div class="mood">User mood</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bot Nav -->
    <?php include 'botnav.php'; ?>
</body>

</html>