<?php
$operando1= $_POST['operador1'];
$operando2= $_POST['operador2'];
echo 'el numero es 1'. $operando1;
echo '<br>'. 'el operador2 es '. $operando2;
echo 'el resultado es';
class Calculadora{
    
private int $operando1;
private int $operando2;
public function __construct(){
}

public function get_operando1(){
return $this->operando1;
}
public function set_operando1(int $operando1){
if(!empty($operando1) && is_numeric($operando1)){
$this->operando1 = $operando1;
}
}
public function get_operando2(){
return $this->operando2;
}
public function set_operando2(int $operando2){
if(!empty($operando2) && is_numeric($operando2)){
$this->operando2 = $operando2;
}
}
public function sumar(int $operando1 = 0, int $operando2 = 0){
return $operando1 + $operando2;
}
public function restar(int $operando1 = 0, int $operando2 = 0){
return $operando1 - $operando2;
}
public function multiplicar(int $operando1 = 0, int $operando2 = 0){
return $operando1 * $operando2;
}
public function dividir(int $operando1 = 0, int $operando2 = 0){
if ($operando2 != 0) {
return $operando1 / $operando2;
}
else {
echo 'No es posible dividir por cero';
return;
}
}
}
$calculo=new Calculadora($operando1,$operando2);
echo $calculo->sumar($operando1,$operando2);