<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos de formularios en PHP</title>
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/micss.css">
</head>
<body>
    <div class="container">
        <div class="principal">
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-10">
                    <h2>Ejemplos basicos con formularios en HTML</h2>
                    <form action="index.php" method="POST">
                        
                        <h5>***** Text Box *****</h5>
                        <div class="mb-3 mt-3">
                            <label class="form-label">Email Address</label>
                            <input class="form-control" type="email" name="mail" placeholder="email@dominio.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input class="form-control" type="password" name="pass" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>

                    <br>
                    <hr>
                    <h4>Datos del formulario</h4>
                    <?php
                        if(isset($_REQUEST['mail'])){
                            $email = $_REQUEST['mail'];
                            $password = $_REQUEST['pass'];
                            print("Email: <strong>$email</strong> <br>");
                            print("Password: <strong>$password</strong>");
                        }else{
                            print("No hay datos procesados en el formulario");
                        }
                        
                    ?>
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>