<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Divisas</title>
</head>
<body>

<form method="POST" action="divisasjuandi.php">
    
        <h3>Valor en pesos colombianos $: <input type="number" name="CantidadPesos" required></h3>
        <br> 

        <h3>Escoge una divisa
        <select name="operacion" required>
            <option value="Dolares">Dolares Americanos</option>
            <option value="Euros">Euros</option>
            <option value="Rupias">Rupias Indias</option>
         
        </select> </h3>
        <br> 
       

        <input type="submit" value="Calcular">
    </form>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $CantidadPesos= $_POST["CantidadPesos"];
    $operacion = $_POST["operacion"];
    $resultado = 0;
    

    switch ($operacion) {
        case "Dolares":
            $resultado = $CantidadPesos*0.00024 . " $";
            break;
        case "Euros":
            $resultado = $CantidadPesos*0.00022. "€";
            break;
        case "Rupias":
            $resultado = $CantidadPesos* 0.020 . "₹";
            break;
        default:
            echo "Operación no válida.";
            break;
    }

    echo "<h2>Resultado: $resultado</h2>";
}
?>



</body>
</html>