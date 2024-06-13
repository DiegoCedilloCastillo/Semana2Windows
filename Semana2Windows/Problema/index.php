<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body style="background-color: #f0f0f0;">
    <h2 style="color: #007bff;">Calculadora de Índice de Masa Corporal (IMC)</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="altura">Altura (cm):</label>
            <input type="number" id="altura" name="altura" required>
        </div>
        <div>
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" required>
        </div>
        <div>
            <button type="submit">Calcular IMC</button>
        </div>
    </form>

    <?php
    function calcularIMC($altura, $peso) {
        $altura_metros = $altura / 100;
        $imc = $peso / ($altura_metros * $altura_metros);
        return $imc;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];
        $imc = calcularIMC($altura, $peso);
        echo "<h3 style='color: green;'>Tu Índice de Masa Corporal (IMC) es: " . number_format($imc, 2) . "</h3>";
    }
    ?>
</body>
</html>
