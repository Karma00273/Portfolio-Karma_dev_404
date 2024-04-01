<?php 
$input_1 = 0;
$input_2 = 0;
if ($input_2 === null || $input_1 === null) {
    $input_2 = 0; $input_1 = 0;
}
$addition = $input_1 + $input_2;
$multiplication = $input_1 * $input_2;
$division = 0; // Initialiser la division à zéro

if ($input_2 != 0) {
    $division = $input_1 / $input_2;
}
$soustraction = $input_1 - $input_2;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>karma calculatrice</title>
</head>
<body class="body">
    <input type="text" class="input-1" value="<?= $input_1 ?>" oninput="calculate()">
    <input type="text" class="input-2" value="<?= $input_2 ?>" oninput="calculate()">
<div class="background"></div>
    <h1 class="back" id="result"><?= "addition: " . $addition . " " . "multiplication: " . $multiplication . " " . "division: " . $division . " " . "soustraction: " . $soustraction ?></h1>

    <script>
        function calculate() {
            var input1 = parseFloat(document.querySelector(".input-1").value);
            var input2 = parseFloat(document.querySelector(".input-2").value);
            var addition = input1 + input2;
            var multiplication = input1 * input2;
            var soustraction = input1 - input2;
            var division = 0; // Initialiser la division à zéro

            if (input2 !== 0) {
                division = input1 / input2;
            }
            if (input2 === 0 || input1 === 0) {
                input1 = 0; input2 = 0; 
            }

            document.getElementById("result").textContent = "addition: " + addition + " " + "multiplication: " + multiplication + " " + "division: " + division+ " " + "soustraction: " + soustraction;
        }
    </script>
    <style>
        .background{
            background: linear-gradient(90deg, pink, yellow);
    background-size: cover;
    background-repeat: no-repeat;
    z-index: -1;
    height: 1000px;
    width: 2000px;
    position: relative;
    top: -100px;
    right: 10px;
        }

    </style>
</body>
</html>
