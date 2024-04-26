<?php
require 'C:\xampp\htdocs\CUPIDCODE\Usuarios\conect.php';
?>
<?php

require_once('Usuarios.php');

class UsuariosModel{
    private $conn;

    public function __CONSTRUCT(){
        try{
        $this->pdo = new PDO('mysql:host=localhost;dbname=cupidcode', 'root', '1906');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e){
            die($e->getMessage());
        }
}

public function buscarUsuario($id_us){
    try{
        $stm = $this->pdo
        ->prepare("SELECT * FROM datos_us  WHERE id_us = ? and correo = ?   and validado = true");
        $stm->execute(array($correo, $pass));
        $rs = $stm->fetch(PDO::FETCH_OBJ);
        if($rs != null){
            $result = new Usuarios();
            $result->__SET('id_us', $rs->id_us);
			$result->__SET('validado', $rs->validado);
        }
    } catch (Exception $e){
        die($e->getMessage());
    }
    return $result;
}


    public function actualizaCorreoVerificado($id_us){
    $result = false;
    try{
        $stm = $this->pdo->prepare("UPDATE datos_us SET validado = true WHERE id_us = ? ");;
        $stm->execute(array($id_us));
        
        $result = true;
    }catch(Exception $e){
        die($e->getMessage());
    }
    return $result;
    }
}
?>