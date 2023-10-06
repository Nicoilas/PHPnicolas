<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <form action="actividad_calculadora.php" method="POST">
        <input type="number" name="operador1" value="" placeholder="operador1">
        <input type="number" name="operador2" value="" placeholder="operador2">
        <select name="operacion" id="operacion">
            <option value="sumar">sumar</option>
            <option value="restar">restar</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>
        </select>
        <input type="submit" values="enviar" name="enviar">
    </form>
</body>
</html>