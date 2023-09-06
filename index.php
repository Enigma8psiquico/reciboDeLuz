<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tarifario de Recibo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        .tarifario {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .tarifario table {
            width: 100%;
        }

        .tarifario th, .tarifario td {
            padding: 8px;
            text-align: left;
        }

        .tarifario th {
            background-color: #333;
            color: #fff;
        }

        .result {
            font-size: 20px;
            font-weight: bold;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Tarifario de Recibo</h1>
    <div class="tarifario">
        <table>
            <tr>
                <th>Rango</th>
                <th>Costo</th>
            </tr>
            <tr>
                <td>0 - 500</td>
                <td>0.70</td>
            </tr>
            <tr>
                <td>501-1000</td>
                <td>0.85</td>
            </tr>
            <tr>
                <td>1001-1500</td>
                <td>1.15</td>
            </tr>
            <tr>
                <td>1501-2000</td>
                <td>1.50</td>
            </tr>
            <tr>
                <td>2001-mas</td>
                <td>2.50</td>
            </tr>
        </table>
    </div>

    <?php
    $recibo;
    $lecturaActual = "1000";  // Debes establecer la lectura actual obtenida de las mediciones.

    try {
      if (is_numeric($lecturaActual)) {
          if ($lecturaActual > 0 && $lecturaActual <= 500) {
              $recibo = $lecturaActual * 0.70;
          } elseif ($lecturaActual > 500 && $lecturaActual <= 1000) {
              $recibo = $lecturaActual * 0.85;
          } elseif ($lecturaActual > 1000 && $lecturaActual <= 1500) {
              $recibo = $lecturaActual * 1.15;
          } elseif ($lecturaActual > 1500 && $lecturaActual <= 2000) {
              $recibo = $lecturaActual * 1.50;
          } elseif ($lecturaActual > 2000) {
              $recibo = $lecturaActual * 2.50;
          }

      } else {
          echo "<p class='error'>Lectura no válida. Ingresa un número válido.</p>";
      }

        echo "<p class='result'>El costo del recibo es: $" . number_format($recibo, 2) . "</p>";
    } catch (Exception $e) {
        //echo "<p class='error'>$e</p>";
    } finally {
        echo "<p>Cálculo hecho</p>";
    }
    ?>
</div>
</body>
</html>
