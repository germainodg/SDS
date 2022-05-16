<? php 
if(isset($_POST['encoyer'])){
    if(!empty($_POST['email'])) 
    AND !empty($_POST['password'])
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
    <title>acceuil</title>
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
    <form>
        <div class="container ">
            <div class="row">
                <div class="trois">

                    <div class="auth">
                        <h2>AUTHENTIFICATION</h2>
                    </div>

                    <div class="trai2"></div>

                    <div class="espace2">
                        <div class="mb-3 row">
                            <label for="inputtext" class="col-sm-2 col-form-label"> <strong> Email </strong></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"><strong> Password
                                </strong></label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-primary"><strong>Envoyer</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="logobas col-sm-10">
                        <img src="./image/index3.png" width="400px">
                    </div>
                    <div class="trai3"></div>
                </div>
            </div>
        </div>
    </form>

    <script src="./css/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>