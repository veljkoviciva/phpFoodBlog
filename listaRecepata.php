<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food blog - Recepti</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <?php include('php/navbar.php'); ?> <br>
    <div class="container">
        <?php include("php/sectionRecipes.php"); ?>
        <?php include("php/footer.php"); ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize the toast
        var myToast = document.getElementById('myToast');
        var toast = new bootstrap.Toast(myToast);

        // Show the toast immediately
        toast.show();
    </script>
</body>
</html>