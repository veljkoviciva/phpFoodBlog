<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nov recept</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include('php/navbar.php'); ?> <br>
    <div class="container">
        <fieldset style="background-color: thistle; border: 1px solid royalblue;">
            <div class="row">
                <div class="col">
                    <form action="php/createRecipe.php" method="post">
                        <p style="width: fit-content; margin: auto; color: royalblue;
                        font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: italic;">
                            <span style="font-size: xx-large;">Mesto za recept</span>
                        </p>
                        <table class="table table-bordered border-primary table-primary">
                            <tr>
                                <td style="width: 25%;" class="align-middle"><label for="title" class="form-label">Naziv recepta</label></td>
                                <td><input type="text" class="form-control" id="title"></td>
                            </tr>
                            <tr>
                                <td class="align-middle"><label for="shortDescription" class="form-label">Kratak opis</label></td>
                                <td><input type="text" class="form-control" id="shortDescription"></td>
                            </tr>
                            <tr>
                                <td class="align-middle"><label for="ingredients" class="form-label">Sastojci</label></td>
                                <td><input type="text" class="form-control" id="ingredients"></td>
                            </tr>
                            <tr>
                                <td class="align-middle"><label for="preparation" class="form-label">Priprema</label></td>
                                <td> <textarea class="form-control" id="preparation" rows="3"></textarea></td>
                            </tr>
                            <tr>
                                <td class="align-middle"><label for="category" class="form-label">Kategorija</label></td>
                                <td><select class="form-select" id="category">
                                        <option selected>Izaberite kategoriju recepta</option>
                                        <option value="1">Slatko</option>
                                        <option value="2">Slano</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle"><label for="subcategory" class="form-label">Podkategorija</label></td>
                                <td><select class="form-select" id="subcategory">
                                        <option selected>Izaberite podkategoriju recepta</option>
                                        <option value="1">Domaća kuhinja</option>
                                        <option value="2">Strana kuhinja</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle"><label for="numberOfPeople" class="form-label">Broj osoba</label></td>
                                <td><input type="number" class="form-control" min="1" max="10" id="numberOfPeople" style="width: 5rem;"></td>
                            </tr>
                            <!-- <tr>
                                <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td><label class="form-check-label" for="exampleCheck1">Check me out</label></td>
                            </tr> -->
                        </table>
                        <div align="center">
                            <button type="submit" class="btn btn-primary">Sačuvati
                                <i class="bi bi-check2-all" style="font-size: medium; color: white;"></i>
                            </button> 
                        </div>
                    </form> <br>
                </div>
                <div class="col-4">
                    <p style="width: fit-content; margin: auto;
                        font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: italic;">
                        <span style="font-size: xx-large; color: royalblue;">Mesto za sliku recepta</span>
                    </p>
                    <form action="php/imageRecipe.php" method="post" id="formUploadImage" name="formUploadImage">
                        <div id="displayImageRecipe" align="center" style="margin: auto;"></div> <br>
                        <div class="input-group">
                            <input type="file" class="form-control" name="imageRecipe" id="imageRecipe">
                            <button class="btn btn-outline-primary" type="submit" onclick="displayImage()" id="inputGroupFileAddon04">Prikaz slike</button>
                        </div> <br>
                    </form>

                </div>
            </div>

        </fieldset> <br>


        <?php include("php/footer.php"); ?>
    </div>

    <script src="js/uploadImage.js"></script>
    <!-- <script src="js/elementsDisplay.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/elementsDisplay.js"></script> -->

</body>

</html>