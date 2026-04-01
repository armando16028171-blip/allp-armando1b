<p> imposto de renda </p>
<form action="atividadesalario.php" method="POST">

<label for="salario">digite seu salario:</label>
<input type="text" name="salario" id="salario">

<input type="submit" value="imposto de renda">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
$salario = $_POST['salario'];

if ($salario <=2259.20) { //valor minimo do imposto
echo "zero";
} 
elseif ($salario >= 2259.21 && $salario <= 2826.65) {
    echo " aliquata = 7.5% <br><br> deduzir R$ 169.44"; 
}

elseif ($salario >= 2826.66 && $salario <= 3751.05) {
    echo " aliquata = 15% <br><br> deduzir R$ 381,44";
}
     elseif ($salario >= 3751.06 && $salario <= 4664.68) {
    echo " aliquata = 22.5% <br><br> deduzir R$ 662.77";
}
     else {
    echo " aliquata = 27.5% <br><br> deduzir R$ 896";   
}

}
?>