<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda secuencial</title>
</head>
<body>
    <h1>Algoritmo de busqueda secuencial</h1>
    <form action="busqueda_secuencial.php" method="post">
        <label>Número a buscar</label>
        <input type="text" name="numero">
        <br>

        <button type="submit">Buscar numero</button>
    </form>
    <br>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numeros = [9, 4, 7, 2];
            $numero_a_buscar = $_POST["numero"];
            $encontrado = false;
            $posicion = 0;

            foreach ($numeros as $numero) {
                if ($numero == $numero_a_buscar) {
                    $encontrado = true;
                    break;
                }
                else {
                    $posicion += 1;
                }
            }

            if ($encontrado) {
                echo "Número encontrado en la " . $posicion + 1 . "° posición";
            }
            else {
                echo "Número no encontrado";
            }
        }
    ?> 
</body>
</html>
    