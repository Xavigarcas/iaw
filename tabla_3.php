<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Divisores</title>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 2px; 
            margin: 20px auto;
            border: 2px solid black; 
            background-color: white; 
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            width: 30px;
            height: 30px;
            font-size: 18px;
        }
        th {
            background-color: #b19cd9; 
            color: black;
        }
        tr:nth-child(odd) td {
            background-color: #ffffcc; 
        }
        tr:nth-child(even) td {
            background-color: #ffe6b3; 
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tabla de Divisores de 50 a 60</h1>

    <?php
    include 'recupera.php'; 

    list($num1, $num2) = recupera();

    if ($num1 !== null && $num2 !== null) {
        echo "<table>";
        echo "<tr><th></th>";
        for ($col = 50; $col <= 60; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";
        
        for ($row = $num1; $row <= $num2; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 50; $col <= 60; $col++) {
                echo "<td>" . (($col % $row === 0) ? '*' : '-') . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='text-align: center; color: red;'>Por favor, ingrese valores válidos (num1 entre 1 y 10, num2 entre 10 y 20, y num1 menor que num2).</p>";
    }
    ?>
</body>
</html>
