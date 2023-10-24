<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="actividad-02.php" method="POST">
        Login: <input type="text" name="login"></br></br>
        Password: <input type="text" name="password"></br></br>
        <input type="submit" name="OK"/></br></br>
    </form>

    <?php

        //Usamos la función POST ya que se envían datos sensibles

        $usuario=$_POST["login"];
        $password=$_POST["password"];

        validar($usuario);
        

        function validar($usuario){
            $longitud = strlen($usuario);

            if($longitud >= 6 && $longitud <= 15){
                if(ctype_alnum($usuario)){
                    echo "Usuario correcto!!!";
                    }else{
                        echo "Sólo puedes usar letras y números";
                    }
                    }else{
                        echo "La longitud tiene que ser de entre 6 y 15 caracteres";
                    }
            }
            echo "</br>";
            echo "</br>";

            validarpassworsd ($password);
        function validarpassworsd($password){
            $longitud_01 = strlen($password);

            if($longitud_01 == 7){
                if(preg_match('/^[A-Za-z]+$/', $password)){
                    echo "Contraseña válida: sólo tiene 7 letras";
                }else{ 
                    echo "La contraseña debe contener solo letras";
                }
            }else{
                echo "La contraseña tiene que tener exactamente 7 letras";
            }
            }


    ?>
    
</body>
</html>