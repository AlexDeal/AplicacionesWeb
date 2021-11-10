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
                    <form action="procesar.php" method="POST">
                        
                        <h5>***** Text Box *****</h5>
                        <div>
                            <div class="mb-3 mt-3">
                                <label class="form-label">Email Address</label>
                                <input class="form-control" type="email" name="mail" placeholder="email@dominio.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control" type="password" name="pass" placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control" type="hidden" name="oculto" value="Dato Oculto">
                            </div>
                        </div>

                        <h5>***** CheckBox´s *****</h5>
                        <div>
                            <!-- <div>
                                <input type="checkbox" name="genero" value="Hombre"> Hombre </input>
                                <input type="checkbox" name="genero" value="Mujer"> Mujer </input>
                            </div> -->

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="genero" value="Hombre" checked> 
                                <label class="form-check-label">Hombre</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="genero" value="Hombre" disabled> 
                                <label class="form-check-label">Mujer</label>
                            </div>
                            <hr>
                            <p class="text-danger"><strong> Seleccione sus lenguajes de programacion favoritos</strong></p>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lp[]" value="C++"> 
                                <label class="form-check-label">C++</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lp[]" value="C#"> 
                                <label class="form-check-label">C#</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lp[]" value="Java"> 
                                <label class="form-check-label">Java</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lp[]" value="Html"> 
                                <label class="form-check-label">Html</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lp[]" value="JavaScript"> 
                                <label class="form-check-label">JavaScript</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lp[]" value="Python"> 
                                <label class="form-check-label">Python</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lp[]" value="Visual.Net"> 
                                <label class="form-check-label">Visual.Net</label>
                            </div>
                            <hr>
                            <p class="text-primary"><strong>Construccion Dinamica de CheckBoxes</strong></p>
                            <?php
                                $vector = array("Opcion 1","Opcion 2","Opcion 3","Opcion 4");
                                for($i=0; $i<count($vector); $i++){
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="op[]" value="<?php print("$vector[$i]");?>"> 
                                    <label class="form-check-label"><?php print("$vector[$i]");?></label>
                                </div>

                            <?php
                                }
                            ?>



                        </div>
                        <br><br><br>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>