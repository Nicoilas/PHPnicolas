<?php

class Computador{
    private string $fabricante;
    private string $capMemoria;
    private string $tipoMemoria;
    private string $tipoAlmacenamiento;
    private string $capacidadAlmacenamiento;
    private string $sistemaOperativo;
    private string $suiteOficina;
    private string $procesador;
    private string $numPuertosUSB;


    public function __construct(
        $fabricante,
        $capMemoria,
        $tipoMemoria,
        $tipoAlmacenamiento,
        $capacidadAlmacenamiento,
        $sistemaOperativo,
        $suiteOficina,
        $procesador,
        $numPuertosUSB)
    {
        $this->fabricante = $fabricante;
        $this->capMemoria = $capMemoria;
        $this->tipoMemoria = $tipoMemoria;
        $this->tipoAlmacenamiento = $tipoAlmacenamiento;
        $this->capacidadAlmacenamiento = $capacidadAlmacenamiento;
        $this->sistemaOperativo = $sistemaOperativo;
        $this->suiteOficina = $suiteOficina;
        $this->procesador = $procesador;
        $this->numPuertosUSB = $numPuertosUSB;
    }
    public function get_fabricante(){
        return $this->fabricante;
    }
    public function get_capMemoria(){
        return $this->capMemoria;
    }
    public function get_tipoMemoria(){
        return $this->tipoMemoria;
    }
    public function get_capacidadAlmacenamiento(){
        return $this->capacidadAlmacenamiento;
    }
    public function get_sistemaOperativo(){
        return $this->sistemaOperativo;
    }
    public function get_suiteOficina(){
        return $this->suiteOficina;
    }
    public function get_procesador(){
        return $this->procesador;
    }

    public function get_numPuertosUSB(){
        return $this->numPuertosUSB;
    }
    public function set_fabricante($fabricante){
        $this->fabricante = $fabricante;
    }
    public function set_capMemoria($capMemoria){
        $this->marca = $capMemoria;
    }
    public function set_tipoMemoria($tipoMemoria){
        $this->marca = $tipoMemoria;   
    
    }
}