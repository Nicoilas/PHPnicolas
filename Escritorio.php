<?php
//de las clases que se asignen crear clases en php con 3 atributos,metodos set y get y una funcionalidad llamada devolver_fecha_hora
//crear 5 objetos de cada una e imprimir los datos en lineas separadas
//un archivo por cada clases, ejemplo:cliente.php
  

// escritorio y empleado

class Escritorio{
    public string $tipo_patas;
    public string $tipo_material;
    public string $medidas;
    public string $silla;
    
    public function __construct($tipo_patas,$tipo_material,$medidas,$silla)
    {
        $this->tipo_patas=$tipo_patas;
        $this->tipo_material=$tipo_material;
        $this->medidas=$medidas;
        $this->silla=$silla;
    }
    public function get_tipo_patas()
    {
        return $this->tipo_patas;
    }
    public function get_tipo_material(){
        return $this->tipo_material;
    }
    public function get_medidas(){
        return $this->medidas;
    }
    public function get_silla(){
        return $this->silla;
    }
    
    //metodo set
    public function set_tipo_patas($tipo_patas)
    {
        $this->tipo_patas=$tipo_patas;
    }
    public function set_tipo_material($tipo_material)
    {
        $this->get_tipo_material=$tipo_material;
    }
    public function set_medidas($tipo_medidas)
    {
        $this->tipo_medidas=$tipo_medidas;
    }
    public function set_silla($silla)
    {
        $this->silla=$sillas;
    }
}
$escritorio1 = new Escritorio('metal','madera','5m','silla de escritorio');
echo 'tipo_patas:'.$escritorio1->get_tipo_patas().' ';
echo 'tipo_material:'.$escritorio1->get_tipo_material().' ';
echo 'medidas:'.$escritorio1->get_medidas().' ';
echo 'silla:'.$escritorio1->get_silla().' ';

$escritorio2 = new Escritorio('madera','metal','4m','silla de escritorio');
echo '<br>'. 'tipo_patas:'.$escritorio2->get_tipo_patas().' ';
echo 'tipo_material:'.$escritorio2->get_tipo_material().' ';
echo 'medidas:'.$escritorio2->get_medidas().' ';
echo 'silla:'.$escritorio2->get_silla().' ';

$escritorio3 = new Escritorio('madera','metal','6m','silla de escritorio');
echo '<br>'.'tipo_patas:'.$escritorio3->get_tipo_patas().' ';
echo 'tipo_material:'.$escritorio3->get_tipo_material().' ';
echo 'medidas:'.$escritorio3->get_medidas().' ';
echo 'silla:'.$escritorio3->get_silla().' ';

$escritorio4 = new Escritorio('metal','bambu','11m','silla de escritorio');
echo '<br>'.'tipo_patas:'.$escritorio4->get_tipo_patas().' ';
echo 'tipo_material:'.$escritorio4->get_tipo_material().' ';
echo 'medidas:'.$escritorio4->get_medidas().' ';
echo 'silla:'.$escritorio4->get_silla().' ';

$escritorio5 = new Escritorio('bambu','metal','10m','silla de escritorio');
echo '<br>'.'tipo_patas:'.$escritorio5->get_tipo_patas().' ';
echo 'tipo_material:'.$escritorio5->get_tipo_material().' ';
echo 'medidas:'.$escritorio5->get_medidas().' ';
echo 'silla:'.$escritorio5->get_silla().' ';
