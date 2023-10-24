<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="caso02.php" method="POST">
        Login: <input type="text" name="login"></br></br>
        Password: <input type="text" name="password"></br></br>
        <input type="submit" name="OK"/></br></br>
    </form>

    <?php

        //Usamos la función POST ya que se envían datos sensibles

        $usuario=$_POST["login"];
        $password=$_POST["password"];
        validar($usuario,$password);

        function validar($usuario,$password){
            if($usuario=="Nieves"){
                if ($password == "1234"){
                    echo "correcto, puedes pasar";
                }else{
                    echo "Contraseña incorrecta";
                }
                }else{
                    echo "Usuario incorrecto";
                
            }
        }

    ?>

    
</body>
</html>