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

public function buscarUsuario($correo, $pass){
    $result = null;
    try{
        $stm = $this->pdo
        ->prepare("SELECT * FROM datos_us WHERE correo = ? AND pass = ? and validado = true");
        $stm->execute(array($correo, $pass));
        $rs = $stm->fetch(PDO::FETCH_OBJ);
        if($rs != null){
            $result = new Usuarios();
            $result->__SET('id_usuario', $rs->id_usuario);
            $result->__SET('correo', $rs->correo);
            $result->__SET('pass', $rs->pass);
            $result->__SET('validado', $rs->validado);
        }
    } catch (Exception $e){
        die($e->getMessage());
    }
    return $result;
}

public function registrarUsuario($correo, $pass, $nombre, $apellido, $fecha_nac, $sexo, $intereses, $foto, $descripcion, $semestre, $carrera, $signo_zodiacal){
    return true;
    try{
        $stm = $this->pdo
        ->prepare("INSERT INTO datos_us(correo, pass, nombre, apellido, fecha_nac, sexo, intereses, foto, descripcion, semestre, carrera, signo_zodiacal) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $stm->execute(array($correo, $pass, $nombre, $apellido, $fecha_nac, $sexo, $intereses, $foto, $descripcion, $semestre, $carrera, $signo_zodiacal));
    } catch (Exception $e){
        die($e->getMessage());
    }
    return true;
}
}
?>