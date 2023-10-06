<?php
class Empleado{
    public string $nombre;
    public string $apellido;
    public string $correo;
    
    public function __construct($nombre,$apellido,$correo)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
    }
    public function get_nombre()
    {
        return $this->nombre;
    }
    public function get_apellido(){
        return $this->apellido;
    }
    public function get_correo(){
        return $this->correo;
    }
   
    //metodo set
    public function set_nombre($nombre)
    {
        $this->nombre=$nombre;
    }
    public function set_apellido($apellido)
    {
        $this->apellido=$apellido;
    }
    public function set_correo($correo)
    {
        $this->correo=$correo;
    }
    
}

function get_fecha_hora(){
    $fecha_actual=date("d m Y H:i:s");
    return $fecha_actual;
}
$empleado1 = new Empleado('Salome','Alfonzo','Salome@gmail.com',);
echo 'nombre:'.$empleado1->get_nombre().' ';
echo 'apellido:'.$empleado1->get_apellido().' ';
echo 'correo:'.$empleado1->get_correo().' ';

$empleado2 = new Empleado('Lina','Sanchez','lina@gmail.com',);
echo '<br>'. 'nombre:'.$empleado2->get_nombre().' ';
echo 'apellido:'.$empleado2->get_apellido().' ';
echo 'correo:'.$empleado2->get_correo().' ';

$empleado3 = new Empleado('Sofia','Avila','Sofia@gmail.com',);
echo '<br>'. 'nombre:'.$empleado3->get_nombre().' ';
echo 'apellido:'.$empleado3->get_apellido().' ';
echo 'correo:'.$empleado3->get_correo().' ';

$empleado4 = new Empleado('Karla','Martinez','Karla@gmail.com',);
echo '<br>'. 'nombre:'.$empleado4->get_nombre().' ';
echo 'apellido:'.$empleado4->get_apellido().' ';
echo 'correo:'.$empleado4->get_correo().' ';

$empleado5 = new Empleado('Sheynna','Alfonzo','Sheynna@gmail.com',);
echo '<br>'. 'nombre:'.$empleado5->get_nombre().' ';
echo 'apellido:'.$empleado5->get_apellido().' ';
echo 'correo:'.$empleado5->get_correo().' ';

echo '<br>'. get_fecha_hora();

