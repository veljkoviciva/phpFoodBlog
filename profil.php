<?php
    session_start();
    if(isset($_SESSION) && $_SESSION['role']!="") {
        include('php/dbConnection.php'); 
            $userID = $_SESSION['userID'];
        
        $stmt = $conn->prepare("select * from users where userID=$userID"); 
    
        if(!$stmt->execute()){
            die ("Greska: " . $conn->error);
        }
    
        $res = $stmt->get_result();
    
        if(!$userData = $res->fetch_assoc()){
            die ("Nema podataka o korisniku!");
        }
        else {
            $userID = $userData['userID'];
            $name = $userData['name'];
            $surname = $userData['surname'];
            $email = $userData['email'];
            $username = $userData['username'];
            $role = $userData['role'];
        } 
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil korisnika</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include('php/navbar.php'); ?> <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <p style="width: fit-content; color: royalblue;
                        font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: italic;">
                        <span style="font-size: x-large;">Podaci o korisniku</span>
                    </p>
                    <table class="table table-bordered border-primary table-primary">
                        <tr>
                            <td style="width: 25%;" class="align-middle"><label for="user" class="form-label">Ime i prezime</label></td>
                            <td><input type="text" class="form-control" id="user" value="<?php echo $name . '' . $surname; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><label for="emailAddress" class="form-label">Email</label></td>
                            <td><input type="email" class="form-control" id="emailAddress" value="<?php echo $email; ?>" readonly></td>
                        </tr>
                    </table>
                </form> <br>
            </div>

            <div class="col-4">
                <p style="width: fit-content; color: royalblue;
                        font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: italic;">
                    <span style="font-size: x-large;">Podaci o postavljenim receptima</span>
                </p>

                <div id="fakeCallout" style="background-color: thistle;">
                    Ukupno objavljenih recepata: <strong> Ukupan broj</strong>
                </div> <br>

                <table class="table table-hover table-primary">
                    <thead style="font-weight: bold;" class="align-middle">
                        <tr align="center">
                            <td>Slatko</td>
                            <td>Slano</td>
                            <td>Domaća kuhinja</td>
                            <td>Strana kuhinja</td>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr align="center">
                            <td>Broj slatkih</td>
                            <td>Broj slanih</td>
                            <td>Broj domaće kuhinje</td>
                            <td>Broj strane kuhinje</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br> <p style="background-color: orange;"> Dodati mogucnost izmene sifre </p>
        <hr>
        <div align="center">
            <a class="btn btn-primary" href="home.php" role="button">Moji recepti</a>
        </div> <br>

        <?php include("php/footer.php"); ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php } 
else 
    header("Location: index.php");
?>
