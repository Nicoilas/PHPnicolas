<?php
$num1= $_POST['operador1'];
$num2= $_POST['operador2'];
echo 'el numero es 1'. $num1;
echo '<br>'. 'el operador2 es '. $num2;
echo '<br>'. "la operacion  es".$operacion;

$operacion=$_POST['operacion'];

if ($operacion= 'sumar'){
    $resultado= $num1 + $num2;
    echo '<br>'. 'la suma es'. $resultado;
}

if ($operacion= 'restar'){
    $resultado= $num1 + $num2;
    echo '<br>'. 'la resta es'. $resultado;
}

if ($operacion= 'multiplicar'){
    $resultado= $num1 + $num2;
    echo '<br>'. 'la multiplicacion es'. $resultado;
}

if ($operacion= 'dividir'){
    $resultado= $num1 + $num2;
    echo '<br>'. 'la division es'. $resultado;
}