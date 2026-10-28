<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda binaria</title>
</head>
<body>
    <h1>Algoritmo de busqueda binaria</h1>
    <form action="busqueda_binaria.php" method="post">
        <label>Número a buscar</label>
        <input type="text" name="numero">
        <br>

        <button type="submit">Buscar numero</button>
    </form>
    <br>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numeros = [10, 20, 30, 40, 50];
            $numero_a_buscar = $_POST["numero"];
            $encontrado = false;

            $inicio = 0;
            $fin = count($numeros) - 1;
            $medio = 0;

            while ($inicio <= $fin) {
                $medio = intdiv($inicio + $fin, 2);

                if ($numero_a_buscar == $numeros[$medio]) {
                    $encontrado = true;
                    $posicion = $medio;
                    break;
                }
                elseif ($numero_a_buscar < $numeros[$medio]) {
                    $fin = $medio - 1;
                }
                else {
                    $inicio = $medio + 1;
                }
            }

            if ($encontrado) {
                echo "Número encontrado en la " . ($posicion + 1) . "° posición";
            }
            else {
                echo "Número no encontrado";
            }
        }
    ?> 
</body>
</html>
    