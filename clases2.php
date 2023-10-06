<?php
class Docentes{
    private string $tipo_documento;
    private string $numero_documento;
    public function __construct($tipo_documento,$numero_documento)
    {
        $this->tipo_documento=$tipo_documento;
        $this->numero_documento=$numero_documento;
    }
    public function get_tipo_documento()
    {
        return $this->tipo_documento;
    }
    
    public function get_numero_documento(){
        return $this->numero_documento;
    }
    //metodo set
    public function set_tipo_documento($tipo_documento)
    {
        $this->tipo_documento=$tipo_documento;
    }



}

$documento1 = new Docentes('CC','59648');
$documento2 = new Docentes('CC','65978');
$documento3 = new Docentes('CC','32579');
$documento4 = new Docentes('CC','19854');
$documento5 = new Docentes('CC','23158');
echo '<br>'.$documento1->get_tipo_documento();
echo $documento1->get_numero_documento();
echo '<br>'.$documento2->get_tipo_documento();
echo $documento2->get_numero_documento();
echo '<br>'.$documento3->get_tipo_documento();
echo $documento3->get_numero_documento();
echo '<br>'.$documento4->get_tipo_documento();
echo $documento4->get_numero_documento();
echo '<br>'.$documento5->get_tipo_documento();
echo $documento5->get_numero_documento();

