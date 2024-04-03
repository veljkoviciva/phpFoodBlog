<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include('php/navbar.php'); ?> <br>
    <div class="container">
        <form action="php/loginConnection.php" method="post" id="loginForm">
            <h2 class="text-primary" style="width: fit-content; font-style: italic;">
                <strong>Login</strong>
            </h2>
            <div class="row">
                <div class="col">
                    <label for="username">Korisničko ime: </label>
                </div>
                <div class="col">
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
            </div> <br>

            <div class="row">
                <div class="col">
                    <label for="userPassword">Lozinka: </label>
                </div>
                <div class="col">
                    <input type="password" name="userPassword" id="userPassword" class="form-control" required>
                </div>
            </div> <br>

            <div align="center">
                <button class="btn btn-primary" type="submit">Prijava</button>
            </div>
        </form> <br>

        <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            echo "<p class='form-control' id='messageAlert'>$message</p>";
        } ?>

    </div>
    <div class="container" style="position: absolute; width: 100%; bottom: 0;   
    left: 50%; transform: translateX(-50%);">
        <?php include('php/footer.php'); ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>