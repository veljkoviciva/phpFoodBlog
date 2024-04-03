<?php session_start(); //DOPUNITI ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moji recepti</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include('php/navbar.php'); ?> <br>
    <div class="container">
        <p style="width: fit-content; color: royalblue;
                        font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: italic;">
            <span style="font-size: x-large;">Moji recepti</span>
        </p> <hr>

        <?php include("php/footer.php"); ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>