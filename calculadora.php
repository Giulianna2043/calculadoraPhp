<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../main.css">
</head>

<body>
    <div class="contenedor">
        <h1>Calculadora</h1>
        <form action="resultado.php" method="get">
            <select name="operador">
                <option value="+">Suma</option>
                <option value="-">Resta</option>
                <option value="*">Multiplicacin</option>
                <option value="/">Divisin</option>
            </select>
            <br /> Ingresa tu primer numero:
            <br />
            <input type="text" name="operando1">
            <br /> Ingresa tu segundo numero:
            <br />
            <input type="text" name="operando2">
            <br>
            
            <input type="submit" value="Enviar">
        </form>
    </div>
    <footer>
        <center> by Lizbeth Giulianna Huamani Mercado</center>
    </footer>

</body>

</html>