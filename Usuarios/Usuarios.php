<?php

class Usuarios{

    private $id_us;
    private $validado;

    public function __GET($k){
        return $this->$k;
    }

    public function __SET($k, $v){
        return $this->$k = $v;
    }
}

?>