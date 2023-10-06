<?php
class Aprendiz{
    public string $tipo_doc;
    public string $numero_documento;
    public string $nombre;
    public string $apellido;
    public string $correo;
    public int $edad;
    public float $peso;
    public bool $activo;

public function __construct($tipo_doc,$numero_documento,$nombre,$apellido,$correo,$edad, $peso, $activo)
    {

    $this->tipo_doc=$tipo_doc;
    $this->numero_documento=$numero_documento;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->correo=$correo;
    $this->edad=$edad;
    $this->peso=$peso;
    $this->activo=$activo;
    }
}
$aprendiz1 = new Aprendiz ('CC', '1234567', 'Luisa', 'Cortes','luisacortes@gmail.com',25,90,1);
echo 'El numero del documento es' . $aprendiz1->numero_documento;
