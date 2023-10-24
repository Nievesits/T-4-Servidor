<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="caso01.php" method="GET">
        Valor Mínimo: <input type="text" name="minimo"></br></br>    
        Valor Máximo: <input type="text" name="maximo"></br></br>
        <input type="submit" name="OK"/></br>
    </form>
<?php 

//tomamos un valor minimo y otro máximo y trabajamos con ellos

    $minimo = $_GET["minimo"];
    $maximo = $_GET["maximo"];
    minmax($minimo,$maximo);

    function minmax ($minimo,$maximo){
        while($minimo <= $maximo){
            echo $minimo."</br>";
            $minimo++;  
            }
        }
?>

</body>
</html>