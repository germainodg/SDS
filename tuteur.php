<? php 
if(isset($_POST['encoyer'])){
    if(!empty($_POST['Nom'])) AND !empty($_POST['prenom'])
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/acceuil.css">
    <title>Tuteur</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-sm-10">
                    <img src="./image/index3.png" width="400px">
                </div>
                <div class="trai col-sm-10"></div>
            </div>
        </div>
    </header>

    <form action="">
        <div class="container">
            <div class="row">
                <div class="ajouttuteur">
                    <h2><strong> FORMULAIRE D'ENREGISTREMENT TUTEUR</strong></h2>
                </div>

                <div class="ruban"> <img src="./image/Yellow-Ribbon-PNG-Transparent-Image1.png" alt="">
                </div>

                <div class="espace1 ">
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"> <strong> Nom: </strong></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"><strong> Prénom:
                            </strong></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="inputText" class="col-sm-2 col-form-label"><strong> Numéro de télephone :</strong></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <a href="#" class="btn btn-primary"><strong>Valider</strong></a>
                    </div>

                    <div class="armorie">
                        <img src="./image/Armoiries nationales _Burkina Faso_10.jpg" width="300px" height="300px">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <footer>
        <div class="container ">
            <div class="row">
                <div class="fin">
                    <img src="./image/arton112289.jpg" width="250px" height="130px">
                </div>
            </div>
        </div>
    </footer>

    <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>