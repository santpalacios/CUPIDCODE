<?php

class Usuarios{

    private $id_usuario;
    private $correo;
    private $pass;
    private $validado;
    private $nombre;
    private $apellido;
    private $fecha_nac;
    private $sexo;
    private $intereses;
    private $foto;
    private $descripcion;
    private $semestre;
    private $carrera;
    private $signo_zodiacal;
    

    public function__GET($k){
        return $this->$k;
    }

    public function__SET($k, $v){
        return $this->$k = $v;
    }
}
?>