<?php
require_once('automovil.php');
$mi_automovil = new automovil('Chevrolet','2014',3000000,'SEDAN','Azul');
echo 'Marca automovil:'. $mi_automovil->get_marca().'<br>';
echo 'Marca automovil:'. $mi_automovil->get_modelo().'<br>';
echo 'Marca automovil:'. $mi_automovil->get_precio().'<br>';

echo 'Tipo:'.$mi_automovil->get_tipo().'<br>';
echo 'Color:'.$mi_automovil->get_color().'<br>';
$mi_automovil->saludar();

require_once('Camion.php');
$mi_camion = new Camion('Renault Trucks','2021',10000000000,6,35);

echo 'Marca camion;'.$mi_camion->get_marca().'<br>';
echo 'Modelo camion;'.$mi_camion->get_modelo().'<br>';
echo 'Precio camion;'.$mi_camion->get_precio().'<br>';
$mi_camion->saludar();


