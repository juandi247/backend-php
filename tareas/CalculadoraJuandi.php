<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Juandi</title>
</head>
<body>



<h1>Calculadora PHP</h1>
    <form method="POST" action="CalculadoraJuandi.php">
        <input type="number" name="numero1" required>
        <br> <br>
        <select name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <br> <br>
        <input type="number" name="numero2" required>
        <br> <br>

        <input type="submit" value="Calcular">
    </form>

   
</body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];
    $resultado = 0;

    switch ($operacion) {
        case "suma":
            $resultado = $numero1 + $numero2;
            break;
        case "resta":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicacion":
            $resultado = $numero1 * $numero2;
            break;
        case "division":
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                echo "Error: No se puede dividir por cero.";
                $resultado="indeterminacion xd";
            }
            break;
        default:
            echo "Operación no válida.";
            break;
    }

    echo "<h2>Resultado: $resultado</h2>";
}
?>


</html>