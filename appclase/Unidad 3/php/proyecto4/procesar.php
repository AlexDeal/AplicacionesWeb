<?php
    $email = $_REQUEST['mail'];
    $password = $_REQUEST['pass'];
    $oculto = $_REQUEST['oculto'];
    $genero = $_REQUEST['genero'];
   
    print("El correo electronico introducido en el formulario es: $email<br>");
    print("La contraseña introducida en el formulario es: $password<br>");
    print("El genero seleccionado es: $genero<br>");
    print("El valor oculto es: $oculto<br>");
    
    print("Los valores seleccionados en el Formulario son:<br>");
    $contadorL = 0;
    if(isset($_REQUEST['lp'])){
        $contadorL = count($_REQUEST['lp']);
        $listaL = $_REQUEST['lp'];
        for($i=0; $i<$contadorL; $i++){
            print("<span style=margin-left:30px;>[<strong>" . $listaL[$i] . "]</strong></span> <br>");
        }
    }else{
        print("No hay lenguajes seleccionados");
    }

    print("Las opciones seleccionadas en el Formulario son:<br>");
    $contadorO = 0;
    if(isset($_REQUEST['lp'])){
        $contadorO = count($_REQUEST['op']);
        $listaO = $_REQUEST['op'];
        for($i=0; $i<$contadorO; $i++){
            print("<span style=margin-left:30px;>[<strong>" . $listaO[$i] . "]</strong></span> <br>");
        }
    }else{
        print("No hay opciones seleccionadas");
    }
    
    printf("<a href=index.php>Regresar</a>");
?>