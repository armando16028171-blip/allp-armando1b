<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#1</title>
</head>
<body>
   <?php
$h = 1.60;
$kg = 76;
$imc = $kg/$h**2;
echo $imc . "<br>";
if($imc<18.5){echo"Abaixo do peso normal";}
elseif($imc >= 18.5 && $imc <24.9){echo "Peso Normal";}
elseif($imc >=25 && $imc < 29.9){echo "Excesso de peso";}
elseif($imc >=30 && $imc < 34.9){echo "Obesidade classe 1";}
elseif($imc >=35 && $imc <39.9){echo "obesidade clase 2";}
else echo"Obesidade classe 3"
?>
</body>
</html>